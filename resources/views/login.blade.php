<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login | Sistem CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --tos-primary: #ffd966;     /* Kuning pastel */
            --tos-secondary: #ff9e9e;   /* Pink pastel */
            --tos-accent: #8ecaff;      /* Biru pastel */
            --tos-bg: #fff8e6;          /* Cream soft */
            --tos-card: #ffffff;        /* Putih bersih */
            --tos-text: #444;           
        }

        body {
            background: linear-gradient(135deg, #fff7dd, #ffe9b3, #ffd966);
            font-family: 'Poppins', sans-serif;
        }

        /* CARD LOGIN */
        .card {
            background: var(--tos-card);
            border-radius: 16px;
            border: 2px solid var(--tos-primary);
            box-shadow: 0 6px 18px rgba(0,0,0,0.10);
        }

        /* TITLE */
        .card-body h4 {
            color: var(--tos-secondary);
            font-weight: 700;
        }

        /* LABEL */
        .form-label {
            font-weight: 600;
            color: #555;
        }

        /* INPUT */
        .form-control {
            border: 1.8px solid #ddd;
            background: #fff;
            color: #444;
            border-radius: 10px;
        }
        .form-control:focus {
            border-color: var(--tos-accent);
            box-shadow: 0 0 6px rgba(142,202,255,0.6);
        }

        /* BUTTON LOGIN */
        .btn-primary {
            background: var(--tos-secondary);
            border: none;
            font-weight: 600;
            padding: 10px;
            border-radius: 10px;
            transition: 0.25s;
        }
        .btn-primary:hover {
            background: #ff7a7a;
            box-shadow: 0 3px 10px rgba(255,120,120,0.4);
        }

        /* ALERT ERROR */
        .alert-danger {
            background: rgba(255,120,120,0.2);
            color: #cc0000;
            border: 1px solid #ffaaaa;
            font-weight: 600;
        }

        /* FOOTER */
        footer {
            color: #555;
            font-weight: 500;
            font-size: 14px;
        }
    </style>
</head>

<body class="d-flex align-items-center" style="height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">

                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body p-4">
                        <h4 class="text-center mb-3">Login Admin</h4>

                        @if(session('error'))
                        <div class="alert alert-danger text-center py-2">{{ session('error') }}</div>
                        @endif

                        <form action="{{ route('login.post') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </form>
                    </div>
                </div>

                <footer class="text-center mt-3">
                    © {{ date('Y') }} CRUD_Salsabila_Zhafrany Laravel
                </footer>

            </div>
        </div>
    </div>
</body>
</html>
