<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            padding: 40px;
        }

        h1 {
            text-align: center;
            color: #111827;
        }

        .nav {
            text-align: center;
            margin-bottom: 25px;
        }

        .nav a {
            margin: 0 10px;
            color: #2563eb;
            font-weight: bold;
        }

        table {
            width: 85%;
            margin: 30px auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 3px 10px #ccc;
        }

        th, td {
            padding: 15px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background: #111827;
            color: white;
        }

        .total {
            text-align: center;
            font-size: 22px;
            font-weight: bold;
            color: green;
        }

        .btn {
            display: inline-block;
            padding: 9px 14px;
            border-radius: 8px;
            text-decoration: none;
            color: white;
            background: #dc2626;
        }

        .empty {
            text-align: center;
            font-size: 20px;
            color: #555;
        }
    </style>
</head>
<body>

<h1>Shopping Cart</h1>

<div class="nav">
    <a href="/">Home</a>
    <a href="/products">Products</a>
    <a href="/cart">Cart</a>
</div>

@if(count($cart) > 0)

    @php $total = 0; @endphp

    <table>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th>Action</th>
        </tr>

        @foreach($cart as $item)
            @php
                $subtotal = $item['price'] * $item['quantity'];
                $total += $subtotal;
            @endphp

            <tr>
                <td>{{ $item['name'] }}</td>
                <td>${{ $item['price'] }}</td>
                <td>{{ $item['quantity'] }}</td>
                <td>${{ $subtotal }}</td>
                <td>
                    <a class="btn" href="/cart/remove/{{ $item['id'] }}">Remove</a>
                </td>
            </tr>
        @endforeach
    </table>

    <p class="total">Total: ${{ $total }}</p>

    <div style="text-align:center;">
        <a class="btn" href="/cart/clear">Clear Cart</a>
        <a class="btn" style="background:#16a34a;" href="/checkout">Checkout</a>
    </div>

@else
    <p class="empty">Your cart is empty.</p>
@endif

</body>
</html>