<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Laptop',
                'price' => 800,
                'description' => 'Powerful laptop for programming and study.'
            ],
            [
                'id' => 2,
                'name' => 'Smartphone',
                'price' => 500,
                'description' => 'Modern phone with excellent camera.'
            ],
            [
                'id' => 3,
                'name' => 'Headphones',
                'price' => 120,
                'description' => 'Wireless headphones with noise cancellation.'
            ],
            [
                'id' => 4,
                'name' => 'Smart Watch',
                'price' => 200,
                'description' => 'Track your health and daily activities.'
            ],
        ];

        return view('products', compact('products'));
    }
}