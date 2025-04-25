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
            <h2>Petugas Gizi</h2>
            <div class="card">
                <div class="card-header">Puskesmas Samarinda</div>
                <div class="card-body"><!-- Content Section - Ini hanya bagian konten form saja -->
                    <div class="container-fluid py-4">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                @if (session('success'))
                                    <script>
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Berhasil!',
                                            text: '{{ session('success') }}',
                                            confirmButtonColor: '#3085d6',
                                        });
                                    </script>
                                @endif

                                @if (session('error'))
                                    <script>
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Oops...',
                                            text: '{{ session('error') }}',
                                            confirmButtonColor: '#d33',
                                        });
                                    </script>
                                @endif
                                <form method="POST" action="{{ route('gizi.store') }}">
                                    @csrf
                                    <form>

                                        <!-- Timestamp -->
                                        <div class="mb-4">
                                            <label for="timestamp" class="form-label">Timestamp</label>
                                            <input type="datetime-local" class="form-control" id="timestamp"
                                                name="timestamp">
                                        </div>

                                        <!-- Nama Lengkap -->
                                        <div class="mb-4">
                                            <label for="namaLengkap" class="form-label">Nama Lengkap<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="namaLengkap" name="namaLengkap"
                                                required>
                                        </div>

                                        <!-- Nama Sekolah -->
                                        <div class="mb-4">
                                            <label for="namaSekolah" class="form-label">Nama Sekolah</label>
                                            <select class="form-select" id="namaSekolah" name="namaSekolah">
                                                <option selected></option>
                                                <option value="Sekolah Racing abis">Sekolah Racing abis</option>
                                                <option value="Sekolah Tura Turu FC">Sekolah Tura Turu FC</option>
                                                <option value="Sekolah Berangkat jam 7 pulang jam 8">Sekolah Berangkat jam 7
                                                    pulang jam 8</option>
                                            </select>
                                        </div>

                                        <!-- Nama Kelas -->
                                        <div class="mb-4">
                                            <label for="NamaKelas" class="form-label">Kelas<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="NamaKelas" name="NamaKelas"
                                                required>
                                        </div>

                                        <!-- Berat Badan -->
                                        <div class="mb-4">
                                            <label for="BeratBadan" class="form-label">Berat Badan<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="BeratBadan" name="BeratBadan"
                                                required>
                                        </div>

                                        <!-- Tinggi Badan -->
                                        <div class="mb-4">
                                            <label for="TinggiBadan" class="form-label">Tinggi Badan<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="TinggiBadan" name="TinggiBadan"
                                                required>
                                        </div>

                                        <!-- IMT -->
                                        <div class="mb-4">
                                            <label for="IMT" class="form-label">IMT<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="IMT" name="IMT"
                                                required>
                                        </div>

                                        <!-- Deskripsi IMT -->
                                        <div class="mb-4">
                                            <label for="deskripsiIMTmurid" class="form-label">Deskripsi IMT<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="deskripsiIMTmurid"
                                                name="deskripsiIMTmurid" required>
                                        </div>

                                        <!-- TB/U -->
                                        <div class="mb-4">
                                            <label for="TB/U" class="form-label">TB/U<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="TB/U" name="TBU"
                                                required>
                                        </div>

                                        <!-- Tanda Anemia -->
                                        <div class="mb-4">
                                            <label for="tandaAnemia" class="form-label">Tanda Klinis Anemia<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="tandaAnemia" name="tandaAnemia"
                                                required>
                                        </div>



                                        <!--Dirujuk Fasyankes -->
                                        <div class="mb-4">
                                            <label class="form-label">Apakah Siswa dirujuk ke Fasyankes?</label>
                                            <div class="row">
                                                <div class="col-6">
                                                    <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                        data-value="N" data-target="DirujukGizi">N</button>
                                                </div>
                                                <div class="col-6">
                                                    <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                        data-value="Y" data-target="DirujukGizi">Y</button>
                                                </div>
                                                <input type="hidden" id="DirujukGizi" name="DirujukGizi" value=""
                                                    required>
                                            </div>
                                        </div>

                                        <!-- Keterangan Rujukan -->
                                        <div class="mb-4">
                                            <label for="RujukanGizi" class="form-label">Keterangan Rujukan<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="RujukanGizi"
                                                name="RujukanGizi" required>
                                        </div>

                                        <!-- Tombol Submit -->
                                        <div class="mb-4">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>


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
                                const targetId = this.getAttribute('data-target');
                                const hiddenInput = document.getElementById(targetId);

                                // Reset semua tombol dalam baris
                                buttons.forEach(btn => {
                                    btn.classList.remove('btn-primary');
                                    btn.classList.add('btn-outline-secondary');
                                });

                                // Set tombol yang diklik
                                this.classList.remove('btn-outline-secondary');
                                this.classList.add('btn-primary');

                                // Update nilai input tersembunyi
                                hiddenInput.value = this.getAttribute('data-value');
                            });
                        });
                    </script>
                </div>
                <div class="card-footer">copyright 2k25</div>
            </div>
        </div>

    </body>

    </html>
@endsection
