<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    $products = [
        ['name' => 'Laptop', 'price' => 800],
        ['name' => 'Smartphone', 'price' => 500],
        ['name' => 'Headphones', 'price' => 120],
        ['name' => 'Smart Watch', 'price' => 200],
    ];

    return view('products', compact('products'));
});