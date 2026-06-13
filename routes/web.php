<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\CheckoutController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index']);

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/admin/dashboard', [AuthController::class, 'dashboard'])
    ->middleware(AdminMiddleware::class);

Route::get('/cart', [CartController::class, 'index']);
Route::post('/cart/add/{id}', [CartController::class, 'add']);
Route::get('/cart/remove/{id}', [CartController::class, 'remove']);
Route::get('/cart/clear', [CartController::class, 'clear']);
Route::get('/checkout', [CheckoutController::class, 'checkout']);
Route::post('/place-order', [CheckoutController::class, 'placeOrder']);
Route::get('/order-success', [CheckoutController::class, 'success']);