<!DOCTYPE html>
<html>
<head>
    <title>Book Store</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #667eea, #764ba2);
            color: white;
            text-align: center;
            height: 100vh;
        }

        .container-box {
            margin-top: 100px;
        }

        .btn-custom {
            width: 200px;
            margin: 10px;
            border-radius: 25px;
        }
    </style>
</head>

<body>

<div class="container container-box">

    <h1 class="mb-4">📚 MGS Online Book Store</h1>

    <p class="mb-4">Welcome! Explore books, manage inventory, and discover new reads.</p>

    <a href="/books" class="btn btn-light btn-custom">View Books</a><br>

    <a href="/api-books" class="btn btn-warning btn-custom">API Books</a><br>

    <a href="/dashboard" class="btn btn-dark btn-custom">Admin Dashboard</a>

</div>

</body>
</html>