<!DOCTYPE html>
<html>
<head>
    <title>Order Success</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            padding: 40px;
        }

        .success-box {
            width: 60%;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 3px 10px #ccc;
            text-align: center;
        }

        h1 {
            color: #16a34a;
        }

        .total {
            color: green;
            font-size: 22px;
            font-weight: bold;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            background: #2563eb;
            color: white;
            padding: 10px 18px;
            text-decoration: none;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="success-box">
    <h1>Order Placed Successfully!</h1>

    <p>Thank you, {{ $order['customer_name'] }}.</p>
    <p>Your order status is: <strong>{{ $order['status'] }}</strong></p>

    <h3>Ordered Items</h3>

    @foreach($order['items'] as $item)
        <p>{{ $item['name'] }} × {{ $item['quantity'] }}</p>
    @endforeach

    <p class="total">Total Paid: ${{ $order['total'] }}</p>

    <a href="/products">Continue Shopping</a>
</div>

</body>
</html>