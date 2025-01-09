<?php

use App\Http\Controllers\PaymentPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing', ['challenge' => hash('sha512', env('APP_KEY') . ':' . now()->format('YmdH'))]);
})->name('home');
Route::post('payment-page', [PaymentPageController::class, 'index'])->name('paymentpage');
