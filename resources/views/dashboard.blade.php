<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | Sistem CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --primary: #ffcc80;      /* pastel orange */
            --primary-soft: #ffe7c5; /* creamy pastel */
            --secondary: #ff9e80;    /* pastel salmon */
            --green-pastel: #a5d6a7; /* soft green */
            --text-dark: #5a4634;
        }

        body {
            background: linear-gradient(135deg, #fff7e6, #ffeacc, #ffddaa);
            font-family: 'Poppins', sans-serif;
        }

        /* NAVBAR */
        .navbar {
            background-color: #ffffffcc !important;
            border-bottom: 2px solid var(--primary);
            box-shadow: 0 3px 12px rgba(0,0,0,0.08);
        }

        .navbar-brand {
            color: var(--secondary) !important;
            font-weight: 700;
        }
        .nav-link {
            color: var(--text-dark) !important;
            font-weight: 500;
        }
        .nav-link:hover {
            background-color: var(--primary);
            color: #000 !important;
            border-radius: 6px;
            transition: 0.25s;
        }

        /* LOGOUT */
        .nav-link.text-warning {
            color: #d84315 !important;
            font-weight: 700;
        }
        .nav-link.text-warning:hover {
            background-color: #ffab91 !important;
            color: #000 !important;
        }

        /* CARD */
        .card {
            background: #ffffff;
            border-radius: 18px;
            border: 2px solid var(--primary);
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        }

        .card h2 {
            color: var(--text-dark);
            font-weight: 700;
        }

        .text-muted {
            color: #6d6d6d !important;
        }

        /* BUTTON CRUD */
        .btn-success {
            background-color: var(--green-pastel);
            border: none;
            font-weight: 600;
            padding: 10px;
            border-radius: 10px;
            color: #2e593f;
        }
        .btn-success:hover {
            background-color: #c8e6c9;
            color: #1b3c2a;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">Toserba Barokah</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('crud.index') }}">Data Toko</a></li>
                <li class="nav-item"><a class="nav-link text-warning fw-bold" href="{{ route('logout') }}">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container py-5 text-center">
    <div class="card rounded-4 p-4">
        <h2 class="mb-3">Selamat Datang Admin</h2>
        <p class="text-muted">Anda sekarang masuk di pusat informasi data toko</p>
        <a href="{{ route('crud.index') }}" class="btn btn-success mt-3">Masuk ke Halaman Data Toko</a>
    </div>
</div>

</body>
</html>
