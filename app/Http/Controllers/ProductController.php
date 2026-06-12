<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'name' => 'Laptop',
                'price' => 800,
                'description' => 'Powerful laptop for programming and study.'
            ],
            [
                'name' => 'Smartphone',
                'price' => 500,
                'description' => 'Modern phone with excellent camera.'
            ],
            [
                'name' => 'Headphones',
                'price' => 120,
                'description' => 'Wireless headphones with noise cancellation.'
            ],
            [
                'name' => 'Smart Watch',
                'price' => 200,
                'description' => 'Track your health and daily activities.'
            ],
        ];

        return view('products', compact('products'));
    }
}