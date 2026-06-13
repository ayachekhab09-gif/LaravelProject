<!DOCTYPE html>
<html>
<head>
    <title>Admin Product Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            padding: 40px;
        }

        h1, h2 {
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

        .box {
            background: white;
            width: 80%;
            margin: 25px auto;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 3px 10px #ccc;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 7px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        button {
            padding: 10px 16px;
            border: none;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        .create {
            background: #16a34a;
            width: 100%;
        }

        .update {
            background: #2563eb;
        }

        .delete {
            background: #dc2626;
            margin-top: 10px;
        }

        .success {
            color: green;
            text-align: center;
            font-weight: bold;
        }

        .product-card {
            border: 1px solid #ddd;
            padding: 18px;
            border-radius: 10px;
            margin-bottom: 20px;
            background: #f9fafb;
        }
    </style>
</head>
<body>

<h1>Admin Product Management</h1>

<div class="nav">
    <a href="/admin/dashboard">Dashboard</a>
    <a href="/products">Public Products</a>
    <a href="/cart">Cart</a>
    <a href="/logout">Logout</a>
</div>

@if(session('success'))
    <p class="success">{{ session('success') }}</p>
@endif

<div class="box">
    <h2>Create New Product</h2>

    <form method="POST" action="/admin/products">
        @csrf

        <input type="text" name="name" placeholder="Product Name" required>
        <textarea name="description" placeholder="Product Description" required></textarea>
        <input type="number" name="price" placeholder="Price" required>
        <input type="number" name="stock" placeholder="Stock" required>
        <input type="text" name="category" placeholder="Category" value="Electronics" required>

        <button class="create" type="submit">Create Product</button>
    </form>
</div>

<div class="box">
    <h2>Product List / Update / Delete</h2>

    @foreach($products as $product)
        <div class="product-card">
            <form method="POST" action="/admin/products/{{ $product->id }}/update">
                @csrf

                <label>Product Name</label>
                <input type="text" name="name" value="{{ $product->name }}" required>

                <label>Description</label>
                <textarea name="description" required>{{ $product->description }}</textarea>

                <label>Price</label>
                <input type="number" name="price" value="{{ $product->price }}" required>

                <label>Stock</label>
                <input type="number" name="stock" value="{{ $product->stock }}" required>

                <label>Category</label>
                <input type="text" name="category" value="{{ $product->category->name ?? 'Electronics' }}" required>

                <button class="update" type="submit">Update Product</button>
            </form>

            <form method="POST" action="/admin/products/{{ $product->id }}/delete">
                @csrf
                <button class="delete" type="submit">Delete Product</button>
            </form>
        </div>
    @endforeach
</div>

</body>
</html>