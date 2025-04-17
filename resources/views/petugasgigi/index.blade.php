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
            <h2>Petugas Gigi Dan Mulut</h2>
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
                                        <label for="NamaKelas" class="form-label">Kelas<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="Kelas" required>
                                    </div>

                                    <!-- Celah Bibir / Langit - Langit -->
                                    <div class="mb-4">
                                        <label class="form-label">Celah Bibir / Langit - Langit</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="CelahBibir" value="N">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="CelahBibir" value="Y">Y</button>
                                            </div>
                                            <input type="hidden" id="CelahBibir" name="CelahBibir" value="" required>
                                        </div>
                                    </div>


                                    <!-- Luka Pada Sudut Mulut? -->
                                    <div class="mb-4">
                                        <label class="form-label">Luka Pada Sudut Mulut?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="SudutMulut" value="N">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="SudutMulut" value="Y">Y</button>
                                            </div>
                                            <input type="hidden" id="SudutMulut" name="SudutMulut" value="" required>
                                        </div>
                                    </div>

                                    <!-- Sariawan -->
                                    <div class="mb-4">
                                        <label class="form-label">Sariawan?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="Sariawan">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="Sariawan">Y</button>
                                            </div>
                                            <input type="hidden" id="Sariawan" name="Sariawan" value="" required>
                                        </div>
                                    </div>

                                    <!-- Lidah Kotor -->
                                    <div class="mb-4">
                                        <label class="form-label">Lidah Kotor?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="LidahKotor">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="LidahKotor">Y</button>
                                            </div>
                                            <input type="hidden" id="LidahKotor" name="LidahKotor" value=""
                                                required>
                                        </div>
                                    </div>

                                    <!-- Luka Lainnya -->
                                    <div class="mb-4">
                                        <label class="form-label">Luka lainnya di mulut?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="LukaLainnya">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="LukaLainnya">Y</button>
                                            </div>
                                            <input type="hidden" id="LukaLainnya" name="LukaLainnya" value=""
                                                required>
                                        </div>
                                    </div>

                                    <!-- Gigi Berlubang -->
                                    <div class="mb-4">
                                        <label class="form-label">Gigi Berlubang?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="GigiBerlubang">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="GigiBerlubang">Y</button>
                                            </div>
                                            <input type="hidden" id="GigiBerlubang" name="GigiBerlubang" value=""
                                                required>
                                        </div>
                                    </div>

                                    <!-- Gusi Mudah Berdarah -->
<div class="mb-4">
    <label class="form-label">Gusi mudah berdarah?</label>
    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-outline-secondary w-100 py-2" data-value="N" data-target="GusiBerdarah">N</button>
        </div>
        <div class="col-6">
            <button type="button" class="btn btn-outline-secondary w-100 py-2" data-value="Y" data-target="GusiBerdarah">Y</button>
        </div>
        <input type="hidden" id="GusiBerdarah" name="GusiBerdarah" value="" required>
    </div>
</div>

<!-- Gusi Bengkak -->
<div class="mb-4">
    <label class="form-label">Gusi bengkak?</label>
    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-outline-secondary w-100 py-2" data-value="N" data-target="GusiBengkak">N</button>
        </div>
        <div class="col-6">
            <button type="button" class="btn btn-outline-secondary w-100 py-2" data-value="Y" data-target="GusiBengkak">Y</button>
        </div>
        <input type="hidden" id="GusiBengkak" name="GusiBengkak" value="" required>
    </div>
</div>

<!-- Gigi Kotor -->
<div class="mb-4">
    <label class="form-label">Gigi kotor (ada plak & sisa makanan)?</label>
    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-outline-secondary w-100 py-2" data-value="N" data-target="GigiKotor">N</button>
        </div>
        <div class="col-6">
            <button type="button" class="btn btn-outline-secondary w-100 py-2" data-value="Y" data-target="GigiKotor">Y</button>
        </div>
        <input type="hidden" id="GigiKotor" name="GigiKotor" value="" required>
    </div>
</div>

<!-- Karang Gigi -->
<div class="mb-4">
    <label class="form-label">Apakah ada karang gigi?</label>
    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-outline-secondary w-100 py-2" data-value="N" data-target="KarangGigi">N</button>
        </div>
        <div class="col-6">
            <button type="button" class="btn btn-outline-secondary w-100 py-2" data-value="Y" data-target="KarangGigi">Y</button>
        </div>
        <input type="hidden" id="KarangGigi" name="KarangGigi" value="" required>
    </div>
</div>

<!-- Susunan Gigi -->
<div class="mb-4">
    <label class="form-label">Susunan gigi tidak teratur?</label>
    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-outline-secondary w-100 py-2" data-value="N" data-target="SusunanGigi">N</button>
        </div>
        <div class="col-6">
            <button type="button" class="btn btn-outline-secondary w-100 py-2" data-value="Y" data-target="SusunanGigi">Y</button>
        </div>
        <input type="hidden" id="SusunanGigi" name="SusunanGigi" value="" required>
    </div>
</div>

<!-- Penglihatan -->
<div class="mb-4">
    <label class="form-label">Penglihatan (Loupe)?</label>
    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-outline-secondary w-100 py-2" data-value="N" data-target="Penglihatan">N</button>
        </div>
        <div class="col-6">
            <button type="button" class="btn btn-outline-secondary w-100 py-2" data-value="Y" data-target="Penglihatan">Y</button>
        </div>
        <input type="hidden" id="Penglihatan" name="Penglihatan" value="" required>
    </div>
</div>

<!-- Pendengaran -->
<div class="mb-4">
    <label class="form-label">Pendengaran?</label>
    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-outline-secondary w-100 py-2" data-value="N" data-target="Pendengaran">N</button>
        </div>
        <div class="col-6">
            <button type="button" class="btn btn-outline-secondary w-100 py-2" data-value="Y" data-target="Pendengaran">Y</button>
        </div>
        <input type="hidden" id="Pendengaran" name="Pendengaran" value="" required>
    </div>
</div>

<!-- Kursi Roda -->
<div class="mb-4">
    <label class="form-label">Kursi roda?</label>
    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-outline-secondary w-100 py-2" data-value="N" data-target="KursiRoda">N</button>
        </div>
        <div class="col-6">
            <button type="button" class="btn btn-outline-secondary w-100 py-2" data-value="Y" data-target="KursiRoda">Y</button>
        </div>
        <input type="hidden" id="KursiRoda" name="KursiRoda" value="" required>
    </div>
</div>

<!-- Tongkat (Kruk) -->
<div class="mb-4">
    <label class="form-label">Tongkat (kruk)?</label>
    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-outline-secondary w-100 py-2" data-value="N" data-target="Tongkat">N</button>
        </div>
        <div class="col-6">
            <button type="button" class="btn btn-outline-secondary w-100 py-2" data-value="Y" data-target="Tongkat">Y</button>
        </div>
        <input type="hidden" id="Tongkat" name="Tongkat" value="" required>
    </div>
</div>

<!-- Kaki/Tangan (Mata Protese) -->
<div class="mb-4">
    <label class="form-label">Kaki/Tangan (Mata Protese)?</label>
    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-outline-secondary w-100 py-2" data-value="N" data-target="Prostese">N</button>
        </div>
        <div class="col-6">
            <button type="button" class="btn btn-outline-secondary w-100 py-2" data-value="Y" data-target="Prostese">Y</button>
        </div>
        <input type="hidden" id="Prostese" name="Prostese" value="" required>
    </div>
</div>

<!-- Dirujuk ke Fasyankes -->
<div class="mb-4">
    <label class="form-label">Apakah siswa dirujuk ke Fasyankes?</label>
    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-outline-secondary w-100 py-2" data-value="N" data-target="DirujukFasyankes">N</button>
        </div>
        <div class="col-6">
            <button type="button" class="btn btn-outline-secondary w-100 py-2" data-value="Y" data-target="DirujukFasyankes">Y</button>
        </div>
        <input type="hidden" id="DirujukFasyankes" name="DirujukFasyankes" value="" required>
    </div>
</div>


                                    <!-- Jika Iya Tuliskan Keterangan Rujukan Untuk Fasyankes -->
                                    <div class="mb-4">
                                        <label for="RujukanGizi" class="form-label"> Jika Iya Tuliskan Keterangan Rujukan
                                            Untuk Fasyankes
                                            <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="RujukanGizi" required>
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
