<!DOCTYPE html>
<html>
<head>
    <title>Security and Performance</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            padding: 40px;
        }

        .box {
            width: 75%;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 3px 10px #ccc;
        }

        h1 {
            text-align: center;
            color: #111827;
        }

        h2 {
            color: #2563eb;
        }

        li {
            margin-bottom: 10px;
            font-size: 17px;
        }

        a {
            color: #2563eb;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="box">
    <h1>Security and Performance Notes</h1>

    <h2>Security Features</h2>
    <ul>
        <li>CSRF protection is used in all POST forms with <strong>@@csrf</strong>.</li>
        <li>Admin pages are protected using custom <strong>AdminMiddleware</strong>.</li>
        <li>Session-based authentication is used for login and logout.</li>
        <li>Only admin users can access the admin dashboard and product management panel.</li>
        <li>Eloquent ORM helps protect against SQL injection by using Laravel query methods.</li>
        <li>The API route uses throttle middleware to limit requests.</li>
    </ul>

    <h2>Performance Features</h2>
    <ul>
        <li>Products are loaded from the database using Eloquent models.</li>
        <li>Product-category relationship is loaded using <strong>with('category')</strong>.</li>
        <li>Simple and clean Blade views are used for faster rendering.</li>
        <li>Cart data is stored in session to reduce unnecessary database queries.</li>
    </ul>

    <h2>API Endpoint</h2>
    <p>
        Product API:
        <a href="/api/products">/api/products</a>
    </p>

    <p>
        <a href="/">Back to Home</a>
    </p>
</div>

</body>
</html>