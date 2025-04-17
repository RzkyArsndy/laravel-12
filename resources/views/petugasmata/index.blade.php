@extends('layout.main')

@section('content')
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
    </head>

    <body>

        <div class="container mt-3">
            <h2>Petugas Mata</h2>
            <div class="card">
                <div class="card-header">Puskesmas Samarinda</div>
                <div class="card-body"><!-- Content Section - Ini hanya bagian konten form saja -->
                    <div class="container-fluid py-4">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <form>
                                    <!-- Nama Lengkap -->
                                    <div class="mb-4">
                                        <label for="namaLengkap" class="form-label">Nama Lengkap<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="namaLengkap" required>
                                    </div>

                                    <!-- Nama Sekolah -->
                                    <div class="mb-4">
                                        <label for="namaSekolah" class="form-label">Nama Sekolah</label>
                                        <select class="form-select" id="namaSekolah">
                                            <option selected></option>
                                            <option value="1">Sekolah Racing abis</option>
                                            <option value="2">Sekolah Tura Turu FC</option>
                                            <option value="3">Sekolah Berangkat jam 7 pulang jam 8</option>
                                        </select>
                                    </div>

                                    <!-- Nama Kelas -->
                                    <div class="mb-4">
                                        <label for="kelas" class="form-label">Kelas<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="kelas" required>
                                    </div>

                                    <!-- Kondisi Mata Luar -->
                                    <div class="mb-4">
                                        <label for="kondisiMataLuar" class="form-label">Kondisi Mata Luar<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="kondisiMataLuar"
                                            name="kondisiMataLuar" required>
                                    </div>

                                    <!-- Tajam Pengelihatan -->
                                    <div class="mb-4">
                                        <label for="tajamPengelihatan" class="form-label">Tajam Pengelihatan<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="tajamPengelihatan"
                                            name="tajamPengelihatan" required>
                                    </div>

                                    <!-- Apakah Berkacamata? -->
                                    <div class="mb-4">
                                        <label class="form-label">Apakah Berkacamata?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="Berkacamata">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="Berkacamata">Y</button>
                                            </div>
                                            <input type="hidden" id="Berkacamata" name="Berkacamata" value=""
                                                required>
                                        </div>
                                    </div>

                                    <!-- Buta Warna? -->
                                    <div class="mb-4">
                                        <label class="form-label">Buta Warna?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="ButaWarna">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="ButaWarna">Y</button>
                                            </div>
                                            <input type="hidden" id="ButaWarna" name="ButaWarna" value="" required>
                                        </div>
                                    </div>

                                    <!-- Apakah Siswa Dirujuk Ke Fasyankes? -->
                                    <div class="mb-4">
                                        <label class="form-label">Apakah Siswa Dirujuk Ke Fasyankes?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="RujukFasyankesMata">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="RujukFasyankesMata">Y</button>
                                            </div>
                                            <input type="hidden" id="RujukFasyankesMata" name="RujukFasyankesMata" value=""
                                                required>
                                        </div>
                                    </div>


                                    <!-- jika iya tuliskan keterangan rujukan untuk fasyankes -->
                                    <div class="mb-4">
                                        <label for="keteranganRujukanMata" class="form-label">Jika Iya Tuliskan Keterangan
                                            Rujukan
                                            Untuk Fasyankes<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="keteranganRujukanMata" required>
                                    </div>
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

@endsection
