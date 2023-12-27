<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\InvestmentPlan;
use App\Models\Transaction;
use BitWasp\Bitcoin\Address\PayToPubKeyHashAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use BitWasp\Bitcoin\Bitcoin;
use BitWasp\Bitcoin\Crypto\Random\Random;
use BitWasp\Bitcoin\Key\Deterministic\ElectrumKey;
use BitWasp\Bitcoin\Key\Deterministic\HierarchicalKeyFactory;
use BitWasp\Bitcoin\Mnemonic\Bip39\Bip39SeedGenerator;
use Mdanter\Ecc\EccFactory;
use Web3p\EthereumUtil\Util;
use Illuminate\Support\Str;

class AppController extends Controller
{
    public $seedPhrase = "gloom ranch they orchard book hold trigger sun sunny image member spoil";

    public function withdrawIndex()
    {
        $currencies = Currency::all();

        return view('withdraw', compact('currencies'));
    }

    public function withdrawStore(Request $request)
    {
        $this->validate($request, [
            'amount' => 'required|integer',
            'currency' => 'required',
            'walletAddress' => 'required'
        ]);

        $requestAmount = $request->amount;
        $currency = Currency::find($request->currency);
        $address = $request->walletAddress;

        $withdrawableBalance = auth()->user()->profitBalance();

        if ($requestAmount > $withdrawableBalance) {
            $request->session()->flash('INSUFFICIENT_FUNDS', "Withdrawal amount exceeds available withdrawable balance");
            return back();
        }

        $token_id = $currency->token_id;
        $tokenAmount = $this->getPrice($token_id, $requestAmount);

        auth()->user()->transactions()->create([
            'type' => 'withdrawal',
            'status' => 'processing',
            'currency' => strtolower($currency->symbol),
            'amountUsd' => $requestAmount,
            'amountCurrency' => $tokenAmount,
            'tx_hash' => (string) Str::uuid(),
            'address' => $address,
        ]);

        // TODO: Send Mail

        $request->session()->flash('WITHDRAW_SUCCESS', "Your withdrawal request have been received");
        return back();
    }

    public function transactions()
    {
        $depositTransactions = Transaction::where('type', 'deposit')->get();
        $investmentTransactions = Transaction::whereIn('type', ['investment', 'reinvestment'])->with('plan')->get();
        $withdrawalTransactions = Transaction::where('type', 'withdrawal')->get();

        return view('history', compact('depositTransactions', 'investmentTransactions', 'withdrawalTransactions'));
    }

    public function investIndex()
    {
        $plans = InvestmentPlan::all();

        return view('invest', compact('plans'));
    }

    public function reinvestIndex()
    {
        $plans = InvestmentPlan::all();

        return view('reinvest', compact('plans'));
    }

    public function investmentProceed($id, $name)
    {
        $plan = InvestmentPlan::find($id);

        return view("complete_investment", compact('plan'));
    }

    public function reinvestmentProceed($id, $name)
    {
        $plan = InvestmentPlan::find($id);

        return view("complete_reinvestment", compact('plan'));
    }

    public function investStore(Request $request)
    {
        $this->validate($request, [
            'amount' => 'required'
        ]);

        $amount = $request->amount;

        [$accountBalance] = auth()->user()->userAccountFunds();

        if ($accountBalance < $amount) {
            request()->session()->flash("INSUFFICIENT_FUNDS", "Deposit to continue your investment");
            return redirect()->route('depositIndex');
        }

        auth()->user()->transactions()->create([
            'type' => 'investment',
            'status' => 'success',
            'currency' => 'usd',
            'amountCurrency' => $amount,
            'amountUsd' => $amount,
            'tx_hash' => (string) Str::uuid(),
            "investment_plan_id" => $request->planId
        ]);

        // TODO: email user

        request()->session()->flash("INVESTMENT_SUCCESS", "Your investment of $amount was successful");

        return redirect()->route('transactions');
    }

    public function index()
    {
        [$accountBalance, $totalInvestment, $totalEarnings] = auth()->user()->userAccountFunds();
        return view('dashboard', compact('totalInvestment', 'accountBalance', 'totalEarnings'));
    }

    public function depositIndex()
    {
        $currencies = Currency::all();

        return view('deposit', compact('currencies'));
    }

    public function verifyTx(Request $request)
    {
        $this->validate($request, [
            'old_hash' => 'required|string',
            'new_hash' => 'required|string'
        ]);

        $tx = auth()->user()->transactions()->where('tx_hash', $request->old_hash)->first();

        $tx->tx_hash = $request->new_hash;
        $tx->status = 'processing';

        $tx->save();

        return redirect()->route('pay', ['key' => $request->new_hash]);
    }

    public function pay($tx_hash)
    {
        $tx = auth()->user()->transactions()->where('tx_hash', $tx_hash)->first();

        return view('pay', compact('tx'));
    }

    public function depositStore(Request $request)
    {
        $this->validate($request, [
            'amount' => 'required|integer',
            'currency' => 'required|integer'
        ]);

        $amount = (float) str_replace(",", "", $request->amount);
        $currencyId = $request->currency;

        $currency = Currency::find($currencyId);
        $token_id = $currency->token_id;
        // GET AMOUNT IN CURRENCY
        $tokenAmount = $this->getPrice($token_id, $amount);
        // GENERATE ADDRESS
        $paymentAddress = $this->getNewPaymentAddress($token_id, $currency->gen_index);
        $currency->increment('gen_index');

        $transaction = auth()->user()->transactions()->create([
            'type' => 'deposit',
            'status' => 'pending',
            'currency' => strtolower($currency->symbol),
            'amountCurrency' => $tokenAmount,
            'amountUsd' => $request->amount,
            'tx_hash' => (string) Str::uuid(),
            'address' => $paymentAddress
        ]);

        return redirect()->route('pay', ['key' => $transaction->tx_hash]);
    }

    public function getNewPaymentAddress($token_id, $index)
    {
        try {
            $seedGen = new Bip39SeedGenerator(new Random());
            $seed = $seedGen->getSeed($this->seedPhrase);
            $master = HierarchicalKeyFactory::fromEntropy($seed);

            if ($token_id === 'bitcoin') {
                $path = "m/44'/0'/0'/0/$index"; // BIP-44 derivation path for Bitcoin
                $key = $master->derivePath($path);
                $publicKey = $key->getPublicKey();

                $pubKeyHash = $publicKey->getPubKeyHash();
                $address = new PayToPubKeyHashAddress($pubKeyHash);
                $address = $address->getAddress();
                return $address;
            }

            if ($token_id === 'ethereum' || $token_id === 'binancecoin' || $token_id === 'tether') {

                return "0x6466C14C017b7504574e9fa702Fc65a6a3729697";

                $path = "m/44'/60'/0'/$index"; // Ethereum BIP-44 derivation path
                $child = $master->derivePath($path);
                $privateKey = $child->getPrivateKey();
                $publicKey = $privateKey->getPublicKey();

                // Get the Ethereum address
                $address = '0x' . $publicKey->getPubKeyHash()->getHex();

                dd($address);
                return $address;
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getPrice($token_id, $amount)
    {
        try {
            $url = "https://api.coingecko.com/api/v3/simple/price?ids=" . $token_id . "&vs_currencies=usd";
            $response = Http::get($url);
            if ($response->ok()) {
                $data = $response->json();
                $price = $data[$token_id]['usd'];
                $tokenAmount = $amount / $price;

                return $tokenAmount;
            } else {
                request()->session()->flash('API_ERROR', "Too much queue, Please try after a minute");
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
