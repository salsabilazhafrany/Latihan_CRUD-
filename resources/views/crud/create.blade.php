<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --primary-color: #ffe08a;    /* Kuning pastel */
            --secondary-color: #ff9e80;  /* Salmon pastel */
            --accent-color: #90caf9;     /* Biru pastel */
            --soft-bg: #fff7df;          /* Background creamy */
            --card-bg: #ffffff;          /* Putih */
            --border-color: #ffd78c;     /* Border pastel */
            --text-main: #4b3b2f;
            --text-muted: #7a6e60;
        }

        body {
            background: linear-gradient(135deg, #fff7e6, #ffeccb, #ffe0a6);
            font-family: "Poppins", sans-serif;
            color: var(--text-main);
        }

        .card {
            background: var(--card-bg);
            border: 2px solid var(--primary-color);
            border-radius: 16px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        }

        h4 {
            font-weight: 700;
            color: var(--secondary-color);
        }

        .form-label {
            font-weight: 600;
            color: var(--text-main);
        }

        .form-control {
            border-radius: 10px;
            border: 1px solid var(--border-color);
        }

        .btn-success {
            background-color: var(--accent-color);
            border: none;
            font-weight: 600;
        }
        .btn-success:hover {
            background-color: #64b5f6;
        }

        .btn-secondary {
            background-color: var(--primary-color);
            border: none;
            font-weight: 600;
            color: #4b3b2f;
        }
        .btn-secondary:hover {
            background-color: #ffd78c;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="card shadow border-0 rounded-4 p-4 mx-auto" style="max-width: 550px;">
            <h4 class="mb-4 text-center">Tambah Data Baru</h4>

            <form action="{{ route('crud.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="text" name="harga" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto</label>
                    <input type="file" name="foto" class="form-control">
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('crud.index') }}" class="btn btn-secondary px-4">Kembali</a>
                    <button type="submit" class="btn btn-success px-4">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
