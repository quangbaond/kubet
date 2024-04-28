<?php

use App\Http\Controllers\HomeController;
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
    return view('index');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
// recharge-pc
Route::get('/recharge-pc', [App\Http\Controllers\HomeController::class, 'recharge'])->middleware('auth');
Route::get('/payment', [App\Http\Controllers\HomeController::class, 'payment'])->name('payment')->middleware('auth');
Route::post('create-qr', [App\Http\Controllers\HomeController::class, 'createQr'])->name('createQr')->middleware('auth');
Route::get('create-qr-payment', [App\Http\Controllers\HomeController::class, 'createQrPayment'])->name('createQrPayment')->middleware('auth');

Route::get('/mobile', function () {
    if (auth()->check()) {
        return view('home-mobile');
    }
    return view('mobile');
});
Route::get('/home-mobile', [App\Http\Controllers\HomeController::class, 'homeMobile'])->name('homeMobile')->middleware('auth');
// recharge-mobile
Route::get('recharge-mobile', [App\Http\Controllers\HomeController::class, 'rechargeMobile'])->name('rechargeMobile')->middleware('auth');
Route::get('payment-mobile', [App\Http\Controllers\HomeController::class, 'paymentMobile'])->name('paymentMobile')->middleware('auth');
Route::post('create-qr-mobile', [App\Http\Controllers\HomeController::class, 'createQrMobile'])->name('createQrMobile')->middleware('auth');
// download
Route::get('download', [App\Http\Controllers\HomeController::class, 'download'])->name('download')->middleware('auth');
// logout
Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout')->middleware('auth');


Route::get('select-bank-mobile', [App\Http\Controllers\HomeController::class, 'selectBankMobile'])->name('selectBankMobile')->middleware('auth');
Route::post('select-bank-mobile', [App\Http\Controllers\HomeController::class, 'selectBankMobilePost'])->name('selectBankMobilePost')->middleware('auth');
