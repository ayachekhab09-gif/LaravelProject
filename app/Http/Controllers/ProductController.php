<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    private function seedDefaultProducts()
    {
        $category = Category::firstOrCreate(
            ['name' => 'Electronics'],
            ['description' => 'Electronic products category']
        );

        if (Product::count() === 0) {
            $products = [
                ['name' => 'Laptop', 'description' => 'Powerful laptop for programming and study.', 'price' => 800, 'stock' => 10],
                ['name' => 'Smartphone', 'description' => 'Modern phone with excellent camera.', 'price' => 500, 'stock' => 15],
                ['name' => 'Headphones', 'description' => 'Wireless headphones with noise cancellation.', 'price' => 120, 'stock' => 25],
                ['name' => 'Smart Watch', 'description' => 'Track your health and daily activities.', 'price' => 200, 'stock' => 12],
            ];

            foreach ($products as $product) {
                Product::create([
                    'category_id' => $category->id,
                    'name' => $product['name'],
                    'description' => $product['description'],
                    'price' => $product['price'],
                    'stock' => $product['stock'],
                ]);
            }
        }
    }

    public function index()
    {
        $this->seedDefaultProducts();

        $products = Product::all();

        return view('products', compact('products'));
    }
}