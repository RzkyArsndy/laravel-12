@extends('layout.main')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>

    <body>

        <div class="container mt-3">
            <h2>Identitas Diri</h2>
            <div class="card">
                <div class="card-header">Puskesmas Samarinda</div>
                <div class="card-body"><!-- Content Section - Ini hanya bagian konten form saja -->
                    <div class="container-fluid py-4">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                @if(session('success'))
                                <script>
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Berhasil!',
                                        text: '{{ session('success') }}',
                                        confirmButtonColor: '#3085d6',
                                    });
                                </script>
                            @endif

                            @if(session('error'))
                                <script>
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Oops...',
                                        text: '{{ session('error') }}',
                                        confirmButtonColor: '#d33',
                                    });
                                </script>
                            @endif
                                <form action="{{ route('siswa.store') }}" method="POST">
                                    @csrf

                                    <!-- Nama Lengkap -->
                                    <div class="mb-4">
                                        <label for="namaLengkap" class="form-label">Nama Lengkap<span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="nama_lengkap" class="form-control" id="namaLengkap"
                                            required>
                                    </div>

                                    <!-- NISN -->
                                    <div class="mb-4">
                                        <label for="nisn" class="form-label">NISN<span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="nisn" class="form-control" id="nisn" required>
                                    </div>


                                    <!-- Tanggal lahir-->
                                    <div class="mb-4">
                                        <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" class="form-control" id="tanggallahir">
                                    </div>

                                    <!-- Pilih Sekolah -->
                                    <div class="mb-4">
                                        <label for="sekolah">Pilih Sekolah</label>
                                        <select name="sekolah_id" id="sekolah" class="form-control">
                                            <option value="">-- Pilih Sekolah --</option>
                                            @foreach ($sekolah as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama_sekolah }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Tempat Lahir -->
                                    <div class="mb-4">
                                        <label for="tempatlahir" class="form-label">Tempat Lahir<span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="tempat_lahir" class="form-control" id="tempatlahir"
                                            required>
                                    </div>

                                    <!-- Nama Kelas -->
                                    <div class="mb-4">
                                        <label for="kelas" class="form-label">Kelas<span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="kelas" class="form-control" id="kelas" required>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>

                            </div>
                        </div>
                    </div>

                    <script>
                        // Script untuk toggle pilihan Y/N
                        document.querySelectorAll('.btn[data-value]').forEach(button => {
                            button.addEventListener('click', function() {
                                // Dapatkan tombol dalam satu baris yang sama
                                const row = this.closest('.row');
                                const buttons = row.querySelectorAll('.btn[data-value]');

                                // Reset semua tombol
                                buttons.forEach(btn => {
                                    btn.classList.remove('btn-primary');
                                    btn.classList.add('btn-outline-secondary');
                                });

                                // Set tombol yang diklik
                                this.classList.remove('btn-outline-secondary');
                                this.classList.add('btn-primary');
                            });
                        }); <
                        /scrip> <
                        /div> <
                        div class="card-footer" > copyright 2 k25 < /div> <
                            /div> <
                            /div>

                            <
                            /body>

                            <
                            /html>
                    @endsection
