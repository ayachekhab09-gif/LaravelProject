<!DOCTYPE html>
<html>
<head>
    <title>Products Page</title>
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

        button {
            background: #2563eb;
            color: white;
            border: none;
            padding: 9px 14px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h1>Product Catalog</h1>

<div class="nav">
    <a href="/">Home</a>
    <a href="/products">Products</a>
    <a href="/cart">Cart</a>
    <a href="/login">Admin Login</a>
</div>

<table>
    <tr>
        <th>Product Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Action</th>
    </tr>

    @foreach($products as $product)
        <tr>
            <td>{{ $product['name'] }}</td>
            <td>{{ $product['description'] }}</td>
            <td>${{ $product['price'] }}</td>
            <td>
                <form method="POST" action="/cart/add/{{ $product['id'] }}">
                    @csrf
                    <button type="submit">Add to Cart</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

</body>
</html>