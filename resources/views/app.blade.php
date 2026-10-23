<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Perpustakaan App</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/books">Daftar Buku</a></li>
                    <li class="nav-item"><a class="nav-link" href="/authors">Penulis</a></li>
                    <li class="nav-item"><a class="nav-link" href="/categories">Kategori</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>