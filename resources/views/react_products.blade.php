<!DOCTYPE html>
<html>
<head>
    <title>React Products</title>
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

        .search {
            display: block;
            width: 50%;
            margin: 20px auto;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        .products {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .card {
            background: white;
            width: 260px;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 3px 10px #ccc;
            text-align: center;
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
            font-weight: bold;
        }

        .cart-box {
            width: 60%;
            margin: 30px auto;
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 3px 10px #ccc;
            text-align: center;
        }
    </style>
</head>
<body>

<h1>React Product Catalog</h1>

<div class="nav">
    <a href="/">Home</a>
    <a href="/products">Laravel Products</a>
    <a href="/cart">Cart</a>
    <a href="/react-products">React Page</a>
</div>

<div id="app"></div>

<script src="https://unpkg.com/react@18/umd/react.development.js"></script>
<script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>
<script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

<script type="text/babel">
    function ProductApp() {
        const products = [
            {
                id: 1,
                name: "Laptop",
                price: 800,
                description: "Powerful laptop for programming and study."
            },
            {
                id: 2,
                name: "Smartphone",
                price: 500,
                description: "Modern phone with excellent camera."
            },
            {
                id: 3,
                name: "Headphones",
                price: 120,
                description: "Wireless headphones with noise cancellation."
            },
            {
                id: 4,
                name: "Smart Watch",
                price: 200,
                description: "Track your health and daily activities."
            }
        ];

        const [search, setSearch] = React.useState("");
        const [cart, setCart] = React.useState([]);

        const filteredProducts = products.filter(product =>
            product.name.toLowerCase().includes(search.toLowerCase())
        );

        function addToCart(product) {
            setCart([...cart, product]);
        }

        return (
            <div>
                <input
                    className="search"
                    type="text"
                    placeholder="Search products with React..."
                    value={search}
                    onChange={(e) => setSearch(e.target.value)}
                />

                <div className="products">
                    {filteredProducts.map(product => (
                        <div className="card" key={product.id}>
                            <h3>{product.name}</h3>
                            <p>{product.description}</p>
                            <p className="price">${product.price}</p>
                            <button onClick={() => addToCart(product)}>
                                Add to React Cart
                            </button>
                        </div>
                    ))}
                </div>

                <div className="cart-box">
                    <h2>React Cart Preview</h2>
                    <p>Total items: {cart.length}</p>

                    {cart.map((item, index) => (
                        <p key={index}>{item.name} - ${item.price}</p>
                    ))}
                </div>
            </div>
        );
    }

    const root = ReactDOM.createRoot(document.getElementById("app"));
    root.render(<ProductApp />);
</script>

</body>
</html>