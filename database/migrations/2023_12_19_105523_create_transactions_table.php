<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->enum('type', ['deposit', 'withdrawal', 'investment', 'reinvestment']);
            $table->enum('status', ['pending', 'success', 'failed', 'processing'])->default('pending');
            $table->enum('currency', ['usd', 'usdt', 'btc', 'eth', 'bnb']);
            $table->integer('amountUsd');
            $table->string('amountCurrency');
            $table->text('tx_hash');
            $table->string('address')->nullable();
            $table->integer('investment_plan_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
