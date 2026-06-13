<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AdminProductController;
use App\Models\Product;

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
Route::get('/react-products', function () {
    return view('react_products');
});
Route::get('/admin/products', [AdminProductController::class, 'index'])
    ->middleware(AdminMiddleware::class);

Route::post('/admin/products', [AdminProductController::class, 'store'])
    ->middleware(AdminMiddleware::class);

Route::post('/admin/products/{id}/update', [AdminProductController::class, 'update'])
    ->middleware(AdminMiddleware::class);

Route::post('/admin/products/{id}/delete', [AdminProductController::class, 'destroy'])
    ->middleware(AdminMiddleware::class);
    Route::get('/api/products', function () {
    $products = Product::with('category')->get();

    return response()->json([
        'success' => true,
        'message' => 'Products retrieved successfully',
        'data' => $products
    ]);
})->middleware('throttle:60,1');

Route::get('/security', function () {
    return view('security');
});