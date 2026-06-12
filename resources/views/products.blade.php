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

        table {
            width: 70%;
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

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #2563eb;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h1>Products From Laravel Route</h1>

<table>
    <tr>
        <th>Product Name</th>
        <th>Price</th>
    </tr>

    @foreach($products as $product)
        <tr>
            <td>{{ $product['name'] }}</td>
            <td>${{ $product['price'] }}</td>
        </tr>
    @endforeach
</table>

<a href="/">Back to Home</a>

</body>
</html>