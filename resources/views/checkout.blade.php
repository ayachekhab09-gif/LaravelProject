<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
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

        .checkout-box {
            width: 60%;
            margin: 30px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 3px 10px #ccc;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #16a34a;
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
        }

        .summary {
            background: #f9fafb;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        .total {
            color: green;
            font-size: 22px;
            font-weight: bold;
        }

        a {
            color: #2563eb;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h1>Checkout</h1>

<div class="checkout-box">
    <div class="summary">
        <h3>Order Summary</h3>

        @foreach($cart as $item)
            <p>{{ $item['name'] }} × {{ $item['quantity'] }} = ${{ $item['price'] * $item['quantity'] }}</p>
        @endforeach

        <p class="total">Total: ${{ $total }}</p>
    </div>

    <form method="POST" action="/place-order">
        @csrf

        <input type="text" name="customer_name" placeholder="Customer Name" required>
        <input type="email" name="email" placeholder="Email Address" required>
        <textarea name="address" placeholder="Delivery Address" required></textarea>

        <button type="submit">Place Order</button>
    </form>

    <p><a href="/cart">Back to Cart</a></p>
</div>

</body>
</html>