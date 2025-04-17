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
            <h2>Data Kuesioner</h2>
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



                                    <!-- Memiliki Alergi? -->
                                    <div class="mb-4">
                                        <label class="form-label">Memiliki Alergi?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="Alergi">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="Alergi">Y</button>
                                            </div>
                                            <input type="hidden" id="Alergi" name="Alergi" value="" required>
                                        </div>
                                    </div>

                                    <!-- Sebutkan Alergi Jika Ada -->
                                    <div class="mb-4">
                                        <label for="detailAlergi" class="form-label">Sebutkan Alergi Jika Ada</label>
                                        <input type="text" class="form-control" id="detailAlergi" name="detailAlergi">
                                    </div>


                                    <!-- Pernah Mengalami Cidera? -->
                                    <div class="mb-4">
                                        <label class="form-label">Pernah Mengalami Cidera?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="Cidera">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="Cidera">Y</button>
                                            </div>
                                            <input type="hidden" id="Cidera" name="Cidera" value="" required>
                                        </div>
                                    </div>

                                    <!-- Sebutkan Cidera yang Pernah Dialami -->
                                    <div class="mb-4">
                                        <label for="detailCidera" class="form-label">Sebutkan Cidera yang Pernah
                                            Dialami</label>
                                        <input type="text" class="form-control" id="detailCidera" name="detailCidera">
                                    </div>

                                    <!-- Memiliki Riwayat Kejang Berulang? -->
                                    <div class="mb-4">
                                        <label class="form-label">Memiliki Riwayat Kejang Berulang?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="Kejang">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="Kejang">Y</button>
                                            </div>
                                            <input type="hidden" id="Kejang" name="Kejang" value="" required>
                                        </div>
                                    </div>

                                    <!-- Memiliki Riwayat Pingsan? -->
                                    <div class="mb-4">
                                        <label class="form-label">Memiliki Riwayat Pingsan?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="Pingsan">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="Pingsan">Y</button>
                                            </div>
                                            <input type="hidden" id="Pingsan" name="Pingsan" value="" required>
                                        </div>
                                    </div>

                                    <!-- Memiliki Riwayat Transfusi Darah Berulang? -->
                                    <div class="mb-4">
                                        <label class="form-label">Memiliki Riwayat Transfusi Darah Berulang?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="Transfusi">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="Transfusi">Y</button>
                                            </div>
                                            <input type="hidden" id="Transfusi" name="Transfusi" value=""
                                                required>
                                        </div>
                                    </div>

                                    <!-- Memiliki Riwayat Kelainan Bawaan? -->
                                    <div class="mb-4">
                                        <label class="form-label">Memiliki Riwayat Kelainan Bawaan?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="KelainanBawaan">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="KelainanBawaan">Y</button>
                                            </div>
                                            <input type="hidden" id="KelainanBawaan" name="KelainanBawaan"
                                                value="" required>
                                        </div>
                                    </div>

                                    <!-- Sebutkan Jika Ada riwayat Kelainan Bawaan -->
                                    <div class="mb-4">
                                        <label for="detailKelainan" class="form-label">Sebutkan Jika Ada Riwayat Kelainan
                                            Bawaan</label>
                                        <input type="text" class="form-control" id="detailKelainan"
                                            name="detailKelainan">
                                    </div>

                                    <!-- Memiliki Riwayat Penyakit Lainnya? -->
                                    <div class="mb-4">
                                        <label class="form-label">Memiliki Riwayat Penyakit Lainnya?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="PenyakitLain">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="PenyakitLain">Y</button>
                                            </div>
                                            <input type="hidden" id="PenyakitLain" name="PenyakitLain" value=""
                                                required>
                                        </div>
                                    </div>

                                    <!-- Sebutkan Jika Ada Riwayat Penyakit Lainnya -->
                                    <div class="mb-4">
                                        <label for="detailPenyakitLainnya" class="form-label">Sebutkan Jika Ada Riwayat
                                            Penyakit Lainnya</label>
                                        <input type="text" class="form-control" id="detailPenyakitLainnya"
                                            name="detailPenyakitLainnya">
                                    </div>

                                    <!-- Apakah Status Imunisasi Dasar Lengkap? -->
                                    <div class="mb-4">
                                        <label class="form-label">Apakah Status Imunisasi Dasar Lengkap?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="ImunisasiDasar">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="ImunisasiDasar">Y</button>
                                            </div>
                                            <input type="hidden" id="ImunisasiDasar" name="ImunisasiDasar"
                                                value="" required>
                                        </div>
                                    </div>

                                    <!-- Sebutkan Jika Pernah Imunisasi Dasar -->
                                    <div class="mb-4">
                                        <label for="detailImunisasiDasar" class="form-label">Sebutkan Jika Pernah
                                            Imunisasi Dasar</label>
                                        <input type="text" class="form-control" id="detailImunisasiDasar"
                                            name="detailImunisasiDasar">
                                    </div>

                                    <!-- Hepatitis B -->
                                    <div class="mb-4">
                                        <label class="form-label">0-24 Hepatitis B *</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="HepatitisB">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="HepatitisB">Y</button>
                                            </div>
                                            <input type="hidden" id="HepatitisB" name="HepatitisB" value=""
                                                required>
                                        </div>
                                    </div>

                                    <!-- Usia 1 Bulan BCG -->
                                    <div class="mb-4">
                                        <label class="form-label">Usia 1 bulan BCG *</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="BCG">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="BCG">Y</button>
                                            </div>
                                            <input type="hidden" id="BCG" name="BCG" value="" required>
                                        </div>
                                    </div>

                                    <!-- Usia 1 Bulan polio 1 -->
                                    <div class="mb-4">
                                        <label class="form-label">Usia 1 bulan Polio 1 *</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="Polio1">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="Polio1">Y</button>
                                            </div>
                                            <input type="hidden" id="Polio1" name="Polio1" value="" required>
                                        </div>
                                    </div>

                                    <!-- Usia 2 Bulan DPT-HB-Hib 1 -->
                                    <div class="mb-4">
                                        <label class="form-label">Usia 2 bulan DPT-HB-Hib 1 *</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="DPTHBHib1">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="DPTHBHib1">Y</button>
                                            </div>
                                            <input type="hidden" id="DPTHBHib1" name="DPTHBHib1" value=""
                                                required>
                                        </div>
                                    </div>

                                    <!-- Usia 2 Bulan polio 2 -->
                                    <div class="mb-4">
                                        <label class="form-label">Usia 2 bulan Polio 2 *</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="Polio2">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="Polio2">Y</button>
                                            </div>
                                            <input type="hidden" id="Polio2" name="Polio2" value="" required>
                                        </div>
                                    </div>

                                    <!-- Usia 3 Bulan polio 3 -->
                                    <div class="mb-4">
                                        <label class="form-label">Usia 3 bulan Polio 3 *</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="Polio3">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="Polio3">Y</button>
                                            </div>
                                            <input type="hidden" id="Polio3" name="Polio3" value="" required>
                                        </div>
                                    </div>

                                    <!-- Usia 4 Bulan DPT-HB-Hib 3 -->
                                    <div class="mb-4">
                                        <label class="form-label">Usia 4 bulan DPT-HB-Hib 3 *</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="DPTHBHib3">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="DPTHBHib3">Y</button>
                                            </div>
                                            <input type="hidden" id="DPTHBHib3" name="DPTHBHib3" value=""
                                                required>
                                        </div>
                                    </div>

                                    <!-- Usia 4 Bulan polio 4 -->
                                    <div class="mb-4">
                                        <label class="form-label">Usia 4 bulan Polio 4 *</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="Polio4">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="Polio4">Y</button>
                                            </div>
                                            <input type="hidden" id="Polio4" name="Polio4" value="" required>
                                        </div>
                                    </div>

                                    <!-- Usia 4 Bulan IPV -->
                                    <div class="mb-4">
                                        <label class="form-label">Usia 4 bulan IPV *</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="IPV">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="IPV">Y</button>
                                            </div>
                                            <input type="hidden" id="IPV" name="IPV" value="" required>
                                        </div>
                                    </div>
                                    <!-- Usia 9 bulan Campak/MR -->
                                    <div class="mb-4">
                                        <label class="form-label">Usia 9 bulan Campak/MR *</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="CampakMR9Bulan">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="CampakMR9Bulan">Y</button>
                                            </div>
                                            <input type="hidden" id="CampakMR9Bulan" name="CampakMR9Bulan"
                                                value="" required>
                                        </div>
                                    </div>

                                    <!-- Usia 18-24 bulan DPT-HB-Hib -->
                                    <div class="mb-4">
                                        <label class="form-label">Usia 18-24 bulan DPT-HB-Hib *</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="DPTHBHib18Bulan">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="DPTHBHib18Bulan">Y</button>
                                            </div>
                                            <input type="hidden" id="DPTHBHib18Bulan" name="DPTHBHib18Bulan"
                                                value="" required>
                                        </div>
                                    </div>

                                    <!-- Usia 18-24 bulan Campak -->
                                    <div class="mb-4">
                                        <label class="form-label">Usia 18-24 bulan Campak *</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="Campak18Bulan">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="Campak18Bulan">Y</button>
                                            </div>
                                            <input type="hidden" id="Campak18Bulan" name="Campak18Bulan" value=""
                                                required>
                                        </div>
                                    </div>

                                    <!-- Kelas 1 SD Campak -->
                                    <div class="mb-4">
                                        <label class="form-label">Kelas 1 SD Campak *</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="CampakKelas1">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="CampakKelas1">Y</button>
                                            </div>
                                            <input type="hidden" id="CampakKelas1" name="CampakKelas1" value=""
                                                required>
                                        </div>
                                    </div>

                                    <!-- Kelas 1 SD DT -->
                                    <div class="mb-4">
                                        <label class="form-label">Kelas 1 SD DT *</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="DTKelas1">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="DTKelas1">Y</button>
                                            </div>
                                            <input type="hidden" id="DTKelas1" name="DTKelas1" value=""
                                                required>
                                        </div>
                                    </div>

                                    <!-- Kelas 5 SD Td -->
                                    <div class="mb-4">
                                        <label class="form-label">Kelas 5 SD Td *</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="TdKelas5">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="TdKelas5">Y</button>
                                            </div>
                                            <input type="hidden" id="TdKelas5" name="TdKelas5" value=""
                                                required>
                                        </div>
                                    </div>

                                    <!-- Apakah Orang Tua / Keluarga Menderita Penyakit -->
                                    <div class="mb-4">
                                        <label for="keluargaTBC" class="form-label">Apakah Orang Tuamu / Keluarga lain
                                            Menderita TBC *</label>
                                        <input type="text" class="form-control" id="keluargaTBC" name="keluargaTBC">
                                    </div>

                                    <!-- Apakah Orang Tua / Keluarga Menderita Penyakit diabetes -->
                                    <div class="mb-4">
                                        <label for="keluargaDiabetes" class="form-label">Apakah Orang Tuamu / Keluarga
                                            lain Menderita Diabetes Melitus *</label>
                                        <input type="text" class="form-control" id="keluargaDiabetes"
                                            name="keluargaDiabetes">
                                    </div>

                                    <!-- Apakah Orang Tua / Keluarga Menderita Penyakit hepatitis -->
                                    <div class="mb-4">
                                        <label for="keluargaHepatitis" class="form-label">Apakah Orang Tuamu / Keluarga
                                            lain Menderita Hepatitis (Sakit Kuning) *</label>
                                        <input type="text" class="form-control" id="keluargaHepatitis"
                                            name="keluargaHepatitis">
                                    </div>
                                    <!-- Apakah Orang Tua / Keluarga Menderita Penyakit asma -->
                                    <div class="mb-4">
                                        <label for="keluargaAsma" class="form-label">Apakah Orang Tuamu / Keluarga lain
                                            Menderita Asma (Bengek) *</label>
                                        <input type="text" class="form-control" id="keluargaAsma"
                                            name="keluargaAsma">
                                    </div>

                                    <!-- Apakah Orang Tua / Keluarga Menderita Penyakit lainnya -->
                                    <div class="mb-4">
                                        <label for="keluargaPenyakitLain" class="form-label">Apakah Orang Tuamu / Keluarga
                                            lain Menderita Penyakit Lainnya *</label>
                                        <input type="text" class="form-control" id="keluargaPenyakitLain"
                                            name="keluargaPenyakitLain">
                                    </div>

                                    <!-- Apakah sarapan? -->
                                    <div class="mb-4">
                                        <label class="form-label">Apakah Sarapan sebelum ke sekolah? *</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="Sarapan">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="Sarapan">Y</button>
                                            </div>
                                            <input type="hidden" id="Sarapan" name="Sarapan" value="" required>
                                        </div>
                                    </div>

                                    <!-- Apakah jajan di sekolah? -->
                                    <div class="mb-4">
                                        <label class="form-label">Apakah Jajan di sekolah? *</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="JajanSekolah">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="JajanSekolah">Y</button>
                                            </div>
                                            <input type="hidden" id="JajanSekolah" name="JajanSekolah" value=""
                                                required>
                                        </div>
                                    </div>

                                    <!-- resiko merokok -->
                                    <div class="mb-4">
                                        <label for="ResikoMerokok" class="form-label">Resiko merokok *</label>
                                        <input type="text" class="form-control" id="ResikoMerokok"
                                            name="ResikoMerokok">
                                    </div>

                                    <!-- Apakah minum beralkohol dan napza? -->
                                    <div class="mb-4">
                                        <label class="form-label">Apakah minum minuman beralkohol dan Napza? *</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="AlkoholNapza">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="AlkoholNapza">Y</button>
                                            </div>
                                            <input type="hidden" id="AlkoholNapza" name="AlkoholNapza" value=""
                                                required>
                                        </div>
                                    </div>

                                    <!-- Memiliki Masalah Pubertas -->
                                    <div class="mb-4">
                                        <label for="masalahPubertas" class="form-label">Memiliki Masalah Pubertas</label>
                                        <input type="text" class="form-control" id="masalahPubertas"
                                            name="masalahPubertas">
                                    </div>

                                    <!-- Memiliki Risiko IMS -->
                                    <div class="mb-4">
                                        <label for="risikoIMS" class="form-label">Memiliki Risiko IMS</label>
                                        <input type="text" class="form-control" id="risikoIMS" name="risikoIMS">
                                    </div>

                                    <!-- Memiliki Risiko Kekerasan Seksual -->
                                    <div class="mb-4">
                                        <label for="risikoKekerasanSeksual" class="form-label">Memiliki Risiko Kekerasan
                                            Seksual</label>
                                        <input type="text" class="form-control" id="risikoKekerasanSeksual"
                                            name="risikoKekerasanSeksual">
                                    </div>

                                    <!-- Memiliki Gangguan Menstruasi (Khusus Siswa Perempuan) -->
                                    <div class="mb-4">
                                        <label for="gangguanMenstruasi" class="form-label">Memiliki Gangguan Menstruasi
                                            (Khusus Siswa Perempuan)</label>
                                        <input type="text" class="form-control" id="gangguanMenstruasi"
                                            name="gangguanMenstruasi">
                                    </div>

                                    <!-- Gejala Emosional (E) -->
                                    <div class="mb-4">
                                        <label for="gejalaEmosional" class="form-label">Gejala Emosional (E)</label>
                                        <input type="text" class="form-control" id="gejalaEmosional"
                                            name="gejalaEmosional">
                                    </div>

                                    <!-- Masalah Perilaku (C) -->
                                    <div class="mb-4">
                                        <label for="masalahPerilaku" class="form-label">Masalah Perilaku (C)</label>
                                        <input type="text" class="form-control" id="masalahPerilaku"
                                            name="masalahPerilaku">
                                    </div>

                                    <!-- Hiperaktifitas (H) -->
                                    <div class="mb-4">
                                        <label for="hiperaktifitas" class="form-label">Hiperaktifitas (H)</label>
                                        <input type="text" class="form-control" id="hiperaktifitas"
                                            name="hiperaktifitas">
                                    </div>

                                    <!-- Masalah Teman Sebaya (P) -->
                                    <div class="mb-4">
                                        <label for="masalahTemanSebaya" class="form-label">Masalah Teman Sebaya
                                            (P)</label>
                                        <input type="text" class="form-control" id="masalahTemanSebaya"
                                            name="masalahTemanSebaya">
                                    </div>

                                    <!-- Perilaku Prososial (Pr) -->
                                    <div class="mb-4">
                                        <label for="perilakuPrososial" class="form-label">Perilaku Prososial (Pr)</label>
                                        <input type="text" class="form-control" id="perilakuPrososial"
                                            name="perilakuPrososial">
                                    </div>

                                    <!-- Visual -->
                                    <div class="mb-4">
                                        <label for="visual" class="form-label">Visual</label>
                                        <input type="text" class="form-control" id="visual" name="visual">
                                    </div>

                                    <!-- Audio -->
                                    <div class="mb-4">
                                        <label for="audio" class="form-label">Audio</label>
                                        <input type="text" class="form-control" id="audio" name="audio">
                                    </div>

                                    <!-- Kinestetik -->
                                    <div class="mb-4">
                                        <label for="kinestetik" class="form-label">Kinestetik</label>
                                        <input type="text" class="form-control" id="kinestetik" name="kinestetik">
                                    </div>

                                    <!-- Dominasi Otak -->
                                    <div class="mb-4">
                                        <label for="dominasiOtak" class="form-label">Dominasi Otak</label>
                                        <input type="text" class="form-control" id="dominasiOtak"
                                            name="dominasiOtak">
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
