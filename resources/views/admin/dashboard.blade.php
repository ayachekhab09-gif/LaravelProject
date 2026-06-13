<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            padding: 40px;
        }

        .dashboard {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 3px 10px #ccc;
            text-align: center;
        }

        h1 {
            color: #111827;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            background: #dc2626;
            color: white;
            padding: 10px 18px;
            text-decoration: none;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="dashboard">
    <h1>Welcome to Admin Dashboard</h1>
    <p>Hello, {{ session('name') }}</p>
    <p>Your role is: {{ session('role') }}</p>

    <a href="/logout">Logout</a>
</div>

</body>
</html>