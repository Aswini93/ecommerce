<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{uuid}', [ProductController::class, 'show'])->name('products.show');

Route::middleware('auth')->group(function () {
    Route::post('/products/{uuid}/charge', [ProductController::class, 'charge'])->name('products.charge');
    Route::get('/payment-success', [ProductController::class, 'paymentSuccess'])->name('payment.success');
});
