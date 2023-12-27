<?php

namespace App\Console\Commands;

use App\Models\Currency;
use App\Models\InvestmentPlan;
use Illuminate\Console\Command;

class CuurencyTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'currency:table';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset and Reinitialize Currency Table';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $plans = [
            [
                'name' => 'BEGINNER PLAN',
                'duration' => '3 Days',
                'percentage' => '5',
                'min' => '100',
                'max' => '2999'
            ],
            [
                'name' => 'ADVANCED PLAN',
                'duration' => '5 Days',
                'percentage' => '7',
                'min' => '3000',
                'max' => '10000'
            ],
            [
                'name' => 'EXECUTIVE PLAN',
                'duration' => '3 Days',
                'percentage' => '10',
                'min' => '10000',
                'max' => 'Unlimited'
            ],
            [
                'name' => 'MONTHLY PLAN',
                'duration' => '35 Days',
                'percentage' => '35',
                'min' => '50000',
                'max' => 'Unlimited'
            ],
        ];

        foreach ($plans as $key => $plan) {
            InvestmentPlan::create($plan);
        }

        $currencies = [
            [
                'name' => 'Bitcoin',
                'symbol' => 'BTC',
                'engine' => 'btc',
                'token_id' => 'bitcoin'
            ],
            [
                'name' => 'Ethereum',
                'symbol' => 'ETH',
                'engine' => 'evm',
                'token_id' => 'ethereum'
            ],
            [
                'name' => 'Tether USD',
                'symbol' => 'USDT',
                'engine' => 'evm',
                'token_id' => 'tether'
            ],
            [
                'name' => 'Binance Coin',
                'symbol' => 'BNB',
                'engine' => 'evm',
                'token_id' => 'binancecoin'
            ]
        ];

        foreach ($currencies as $key => $currency) {
            Currency::create($currency);
        }
        return Command::SUCCESS;
    }
}
