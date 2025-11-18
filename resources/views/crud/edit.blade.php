<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap -->
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

        .card-header {
            background: var(--primary-color);
            border-top-left-radius: 14px;
            border-top-right-radius: 14px;
            font-weight: 700;
            color: #4b3b2f;
            padding: 14px 20px;
        }

        h4 {
            font-weight: 700;
            color: var(--secondary-color);
            margin: 0 0 8px 0;
        }

        .form-label {
            font-weight: 600;
            color: var(--text-main);
        }

        .form-control {
            border-radius: 10px;
            border: 1px solid var(--border-color);
        }

        .btn-save {
            background-color: var(--accent-color);
            border: none;
            font-weight: 600;
            color: #fff;
        }
        .btn-save:hover { background-color: #64b5f6; }

        .btn-back {
            background-color: var(--primary-color);
            border: none;
            font-weight: 600;
            color: #4b3b2f;
        }
        .btn-back:hover { background-color: #ffd78c; }

        .img-preview {
            width: 160px;
            height: auto;
            border-radius: 8px;
            border: 1px solid #eee;
            box-shadow: 0 4px 12px rgba(0,0,0,0.06);
        }

        .form-text { color: var(--text-muted); }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="card shadow border-0 rounded-4 p-4 mx-auto" style="max-width: 550px;">
            <div class="card-header">
                <h4 class="text-center">Edit Data Barang</h4>
            </div>

            <div class="card-body">
                {{-- Pastikan $data ada dan berbentuk array --}}
                @if(empty($data) || !is_array($data))
                    <div class="alert alert-warning">Data tidak ditemukan atau sudah dihapus.</div>
                    <div class="d-flex justify-content-start">
                        <a href="{{ route('crud.index') }}" class="btn btn-back px-4">Kembali</a>
                    </div>
                @else
                    <form action="{{ route('crud.update', $data['id'] ?? '') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" 
                                   value="{{ old('nama', $data['nama'] ?? '') }}" required>
                            @error('nama') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <input type="text" name="harga" class="form-control" 
                                   value="{{ old('harga', $data['harga'] ?? '') }}" required>
                            @error('harga') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Foto Lama</label><br>
                            @if(!empty($data['foto']))
                                {{-- FOTO DISIMPAN DI SESSION + FOLDER /public/uploads --}}
                                <img src="{{ asset('uploads/' . $data['foto']) }}" 
                                     alt="Foto Barang" class="img-preview mb-2">
                            @else
                                <div class="text-muted mb-2">Belum ada foto.</div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Upload Foto Baru (Opsional)</label>
                            <input type="file" name="foto" class="form-control">
                            <div class="form-text">Tipe: jpg, jpeg, png. Maks 2MB.</div>
                            @error('foto') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <a href="{{ route('crud.index') }}" class="btn btn-back px-4">Kembali</a>
                            <button type="submit" class="btn btn-save px-4">Update</button>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
