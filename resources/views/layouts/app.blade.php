<!DOCTYPE html>
<html>
<head>
    <title>Book Store</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <div class="container">

        <a class="navbar-brand" href="/">📚 Book Store</a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a href="/books" class="nav-link text-white">Books</a>
                </li>

                <li class="nav-item">
                    <a href="/api-books" class="nav-link text-white">API Books</a>
                </li>

                <li class="nav-item">
                    <a href="/dashboard" class="nav-link text-white">Dashboard</a>
                </li>

                <!-- 🔥 Logout -->
                @auth
                <li class="nav-item ms-2">
                    <form method="POST" action="/logout">
                        @csrf
                        <button class="btn btn-danger btn-sm">
                            Logout
                        </button>
                    </form>
                </li>
                @endauth

                <!-- Login/Register (optional) -->
                @guest
                <li class="nav-item ms-2">
                    <a href="/login" class="btn btn-success btn-sm">Login</a>
                </li>
                <li class="nav-item ms-2">
                    <a href="/register" class="btn btn-primary btn-sm">Register</a>
                </li>
                @endguest

            </ul>

        </div>

    </div>
</nav>

<!-- CONTENT -->
<div class="container mt-4">
    @yield('content')
</div>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>