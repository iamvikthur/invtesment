<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use DateInterval;
use DateTime;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    const USER_ROLE = 'USER';
    const ADMIN_ROLE = 'ADMIN';

    public function isUser()
    {
        return $this->role === self::USER_ROLE;
    }

    public function isAdmin(): bool
    {
        return $this->role === self::ADMIN_ROLE;
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }

    public function accountBalance()
    {
        [$bal] = $this->userAccountFunds();

        return $bal;
    }

    public function profitBalance()
    {
        [,, $earning] = $this->userAccountFunds();

        return $earning;
    }

    public function userAccountFunds()
    {
        $depositSum = $this->transactions()
            ->where('type', 'deposit')
            ->where('status', 'success')
            ->get()
            ->sum('amountUsd');
        $investmentSum = $this->transactions()
            ->where('type', 'investment')
            ->where('status', 'success')
            ->get()
            ->sum('amountUsd');
        $reinvestmentSum = $this->transactions()
            ->where('type', 'reinvestment')
            ->where('status', 'success')
            ->get()
            ->sum('amountUsd');

        $withdrawalSum = $this->transactions()
            ->where('type', 'withdrawal')
            ->where('status', 'success')
            ->get()
            ->sum('amountUsd');

        $earningTx = $this->transactions()->whereIn('type', ['investment', 'reinvestment']);

        $totalEarnings = 0;

        foreach ($earningTx as $key => $tx) {
            $amountUsd = $tx->amountUsd;
            $plan = $tx->plan();
            $startDate = new DateTime($tx->updated_at);
            $maxDays = str_replace(" Days", "", $plan->duration);
            $daysFormat = "P" . $maxDays . "D";
            $finalDate = $startDate->add(new DateInterval($daysFormat));
            $interval = $finalDate->diff($startDate);
            $daysDifference = $interval->days;

            $interest = $plan->percentage;
            $dailyInterest =  $amountUsd * ($interest / 100);
            $totalInterest = $dailyInterest * $daysDifference;

            if ($daysDifference > $maxDays) {
                // investment has passed validity
                $totalInterest = $dailyInterest * $maxDays;
            }

            $totalEarnings += $totalInterest;
        }

        $totalInvestment = $investmentSum + $reinvestmentSum;
        $accountBalance = ($depositSum - $withdrawalSum) + $totalEarnings;

        return [$accountBalance, $totalInvestment, $totalEarnings];
    }
}
