<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    private function products()
    {
        return [
            1 => ['id' => 1, 'name' => 'Laptop', 'price' => 800],
            2 => ['id' => 2, 'name' => 'Smartphone', 'price' => 500],
            3 => ['id' => 3, 'name' => 'Headphones', 'price' => 120],
            4 => ['id' => 4, 'name' => 'Smart Watch', 'price' => 200],
        ];
    }

    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    public function add($id)
    {
        $products = $this->products();

        if (!isset($products[$id])) {
            return redirect('/products');
        }

        $cart = session()->get('cart', []);
        $product = $products[$id];

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'id' => $product['id'],
                'name' => $product['name'],
                'price' => $product['price'],
                'quantity' => 1
            ];
        }

        session()->put('cart', $cart);

        return redirect('/cart');
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
        }

        session()->put('cart', $cart);

        return redirect('/cart');
    }

    public function clear()
    {
        session()->forget('cart');
        return redirect('/cart');
    }
}