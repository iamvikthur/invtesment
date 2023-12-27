<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function () {

    Route::get('/', [AppController::class, 'index'])->name('dashboard');

    Route::get('invest', [AppController::class, 'investIndex']);
    Route::post('invest', [AppController::class, 'investStore'])->name('invest');
    Route::get('investment_proceed/{id}/{name}', [AppController::class, 'investmentProceed'])->name('investment_proceed');

    Route::get('history', [AppController::class, 'transactions'])->name('transactions');

    Route::get('reinvest', [AppController::class, 'reinvestIndex']);
    Route::get('reinvestment_proceed/{id}/{name}', [AppController::class, 'reinvestmentProceed'])->name('reinvestment_proceed');

    Route::get('deposit', [AppController::class, 'depositIndex'])->name('depositIndex');
    Route::post('deposit', [AppController::class, 'depositStore'])->name('deposit');

    Route::get('pay/{key}', [AppController::class, 'pay'])->name('pay');
    Route::post('pay', [AppController::class, 'verifyTx'])->name('verifyTx');
    Route::get('pay', [AppController::class, 'depositIndex']);

    Route::get('transactions', [AppController::class, 'transactions'])->name('transactions');

    Route::get('withdraw', [AppController::class, 'withdrawIndex'])->name('withdraw');
    Route::post('withdraw', [AppController::class, 'withdrawStore'])->name('withdraw.store');

    Route::get('team', function () {
        return view('team');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

ROute::get('reload-captcha', [RegisteredUserController::class, 'reloadCaptcha']);

require __DIR__ . '/auth.php';
