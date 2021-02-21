<?php

use App\Http\Controllers\AccountsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ WelcomeController::class, 'render' ])->name('welcome');

Route::get('/dashboard', [ HomeController::class, 'render' ])->name('dashboard');

Route::get('/cuentas', [ AccountsController::class, 'render' ])->name('accounts');
Route::post('/accounts', [ AccountsController::class, 'store' ])->name('accounts.store');

Route::get('/movimientos', [ TransactionsController::class, 'render' ])->name('transactions');
Route::post('/transactions', [ TransactionsController::class, 'store' ])->name('transactions.store');