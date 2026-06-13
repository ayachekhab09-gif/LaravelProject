<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class AdminProductController extends Controller
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

        $products = Product::with('category')->orderBy('id')->get();

        return view('admin.products', compact('products'));
    }

    public function store(Request $request)
    {
        $category = Category::firstOrCreate(
            ['name' => $request->category],
            ['description' => 'Created from admin panel']
        );

        Product::create([
            'category_id' => $category->id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return redirect('/admin/products')->with('success', 'Product created successfully');
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $category = Category::firstOrCreate(
            ['name' => $request->category],
            ['description' => 'Updated from admin panel']
        );

        $product->update([
            'category_id' => $category->id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return redirect('/admin/products')->with('success', 'Product updated successfully');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('/admin/products')->with('success', 'Product deleted successfully');
    }
}