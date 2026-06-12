<!DOCTYPE html>
<html>
<head>
    <title>Aya Store</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f3f4f6;
        }

        header {
            background: #111827;
            color: white;
            padding: 30px;
            text-align: center;
        }

        nav {
            background: white;
            padding: 15px;
            text-align: center;
            box-shadow: 0 2px 5px #ddd;
        }

        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #111827;
            font-weight: bold;
        }

        .container {
            width: 90%;
            margin: 30px auto;
        }

        .search-box {
            text-align: center;
            margin-bottom: 30px;
        }

        .search-box input {
            width: 60%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        .products {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .card {
            background: white;
            width: 250px;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 3px 10px #ccc;
            text-align: center;
        }

        .card h3 {
            color: #111827;
        }

        .price {
            color: green;
            font-size: 20px;
            font-weight: bold;
        }

        button {
            background: #2563eb;
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 8px;
            cursor: pointer;
        }

        footer {
            margin-top: 40px;
            background: #111827;
            color: white;
            text-align: center;
            padding: 20px;
        }

        @media (max-width: 600px) {
            .card {
                width: 90%;
            }

            .search-box input {
                width: 90%;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>Aya E-Commerce Store</h1>
    <p>Best products for students and tech lovers</p>
</header>

<nav>
    <a href="#">Home</a>
    <a href="#">Products</a>
    <a href="#">Cart</a>
    <a href="#">Contact</a>
</nav>

<div class="container">
    <h2>Our Products</h2>

    <div class="search-box">
        <input type="text" id="searchInput" placeholder="Search for a product...">
    </div>

    <div class="products">
        <div class="card">
            <h3>Laptop</h3>
            <p>Powerful laptop for programming and study.</p>
            <p class="price">$800</p>
            <button>Add to Cart</button>
        </div>

        <div class="card">
            <h3>Smartphone</h3>
            <p>Modern phone with excellent camera.</p>
            <p class="price">$500</p>
            <button>Add to Cart</button>
        </div>

        <div class="card">
            <h3>Headphones</h3>
            <p>Wireless headphones with noise cancellation.</p>
            <p class="price">$120</p>
            <button>Add to Cart</button>
        </div>

        <div class="card">
            <h3>Smart Watch</h3>
            <p>Track your health and daily activities.</p>
            <p class="price">$200</p>
            <button>Add to Cart</button>
        </div>
    </div>
</div>

<footer>
    <p>© 2026 Aya Store - Laravel Project</p>
</footer>

<script>
    const searchInput = document.getElementById("searchInput");
    const productCards = document.querySelectorAll(".card");

    searchInput.addEventListener("keyup", function () {
        let searchValue = searchInput.value.toLowerCase();

        productCards.forEach(function (card) {
            let productName = card.querySelector("h3").textContent.toLowerCase();

            if (productName.includes(searchValue)) {
                card.style.display = "block";
            } else {
                card.style.display = "none";
            }
        });
    });
</script>

</body>
</html>