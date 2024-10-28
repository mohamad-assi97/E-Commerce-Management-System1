<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - E-Commerce System</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Welcome to the E-Commerce System</h1>
        <nav>
            <ul>
                <li><a href="{{ route('products.index') }}">Products</a></li>
                <li><a href="{{ route('categories.index') }}">Categories</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h2>Explore our Products and Categories</h2>
            <p>Click on products or categories to start exploring!</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 E-Commerce System</p>
    </footer>
</body>
</html>
