<style>
 :root {
   --primary-color: #ffe08a;
   --secondary-color: #ff9e80;
   --accent-color: #90caf9;
   --soft-bg: #fff7df;
   --card-bg: #ffffff;
   --border-color: #ffd78c;
   --text-main: #4b3b2f;
   --text-muted: #7a6e60;
 }

 body {
   background: linear-gradient(135deg, #fff7e6, #ffeccb, #ffe0a6);
   font-family: "Poppins", sans-serif;
   color: var(--text-main);
 }

 .custom-card {
   background: var(--card-bg);
   padding: 30px;
   border-radius: 20px;
   border: 2px solid var(--primary-color);
   box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
 }

 .title {
   font-size: 26px;
   font-weight: 700;
   color: var(--secondary-color);
   margin-bottom: 20px;
 }

 /* 🔥 OPSI A – Atur lebar tabel & center */
 .table-wrapper {
   width: 900px;          /* ubah ukuran yang kamu mau */
   margin: 0 auto;        /* agar berada di tengah */
   background: #ffffff;
   padding: 15px;
   border-radius: 15px;
   border: 1px solid var(--border-color);
 }

 .table thead {
   background: var(--accent-color);
   color: white;
   font-weight: 600;
   border-radius: 20px;
 }

 .table td, .table th {
   padding: 10px;
   vertical-align: middle;
   text-align: center !important;
 }

 .table img {
   display: block;
   margin: 0 auto;
 }

 .table-striped > tbody > tr:nth-of-type(odd) {
   background-color: rgba(255, 240, 200, 0.5);
 }

 tbody tr:hover {
   background-color: rgba(255, 217, 160, 0.5) !important;
 }
</style>

<div class="container py-5">
    <div class="custom-card">

        <h3 class="title">📦 Data Barang</h3>

        <a href="{{ route('crud.create') }}" class="btn btn-success mb-3">+ Tambah Data</a>

        <div class="table-wrapper">
            <div class="table-responsive">
                <table class="table table-striped table-bordered align-middle">
                    <thead>
                        <tr>
                            <th width="60">No</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th width="120">Foto</th>
                            <th width="170">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item['nama'] ?? '-' }}</td>
                            <td>Rp {{ number_format($item['harga'] ?? 0, 0, ',', '.') }}</td>

                            <td>
                                @if(!empty($item['foto']))
                                    <img src="{{ asset('uploads/'.$item['foto']) }}" 
                                         width="70" class="rounded-3"
                                         alt="foto {{ $item['nama'] ?? '' }}">
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>

                            <td>
                                <a href="{{ route('crud.edit', $item['id']) }}" class="btn btn-warning btn-sm">Edit</a>

                                <form action="{{ route('crud.destroy', $item['id']) }}"
                                      method="POST" class="d-inline" onsubmit="return confirm('Yakin?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted py-3">
                                Belum ada data tersedia.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>
        </div>

    </div>
</div>
