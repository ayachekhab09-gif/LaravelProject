<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout()
    {
        $cart = session()->get('cart', []);

        if (count($cart) === 0) {
            return redirect('/cart');
        }

        $total = 0;

        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return view('checkout', compact('cart', 'total'));
    }

    public function placeOrder(Request $request)
    {
        $cart = session()->get('cart', []);

        if (count($cart) === 0) {
            return redirect('/cart');
        }

        $total = 0;

        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        $order = [
            'customer_name' => $request->customer_name,
            'email' => $request->email,
            'address' => $request->address,
            'items' => $cart,
            'total' => $total,
            'status' => 'pending'
        ];

        session()->put('last_order', $order);
        session()->forget('cart');

        return redirect('/order-success');
    }

    public function success()
    {
        $order = session()->get('last_order');

        if (!$order) {
            return redirect('/products');
        }

        return view('order_success', compact('order'));
    }
}