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
            <h2>Pemeriksaan Umum</h2>
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

                                    <!-- Tekanan Darah-->
                                    <div class="mb-4">
                                        <label for="tekananDarah" class="form-label">Tekanan Darah<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="tekananDarah" required>
                                    </div>

                                    <!-- Denyut Nadi -->
                                    <div class="mb-4">
                                        <label for="denyutNadi" class="form-label">Denyut Nadi<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="denyutNadi" required>
                                    </div>

                                    <!-- Frekuensi Pernapasan -->
                                    <div class="mb-4">
                                        <label for="frekuensiPernapasan" class="form-label">Frekuensi Pernapasan<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="frekuensiPernapasan" required>
                                    </div>

                                    <!-- Suhu -->
                                    <div class="mb-4">
                                        <label for="suhu" class="form-label">Suhu<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="suhu" required>
                                    </div>


                                    <!-- Bising Jantung -->
                                    <div class="mb-4">
                                        <label for="bisingJantung" class="form-label">Bising Jantung<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="bisingJantung" required>
                                    </div>

                                    <!-- Bising Paru -->
                                    <div class="mb-4">
                                        <label for="bisingParu" class="form-label">Bising Paru<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="bisingParu" required>
                                    </div>

                                    <!-- Bising Keadaan Rambut -->
                                    <div class="mb-4">
                                        <label for="keadaanRambut" class="form-label">Keadaan Rambut<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="keadaanRambut" required>
                                    </div>

                                    <!-- Kulit Bercak Keputihan,Kemerahan/kehitaman? -->
                                    <div class="mb-4">
                                        <label class="form-label">Kulit Bercak Keputihan,Kemerahan/kehitaman?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="bercakKeputihan" value="N">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="bercakKeputihan" value="Y">Y</button>
                                            </div>
                                            <input type="hidden" id="bercakKeputihan" name="bercakKeputihan" value="" required>
                                        </div>
                                    </div>

                                    <!-- Jika Ya, Apakah bercak Putih Mati Rasa? -->
                                    <div class="mb-4">
                                        <label for="bercakPutihMatiRasa" class="form-label">Jika Ya, Apakah bercak Putih Mati
                                            Rasa?<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="bercakPutihMatiRasa" required>
                                    </div>

                                    <!-- Kulit Bersisik? -->
                                    <div class="mb-4">
                                        <label class="form-label">Kulit Bersisik?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="kulitBersisik" value="N">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="kulitBersisik" value="Y">Y</button>
                                            </div>
                                            <input type="hidden" id="kulitBersisik" name="kulitBersisik" value="" required>
                                        </div>
                                    </div>

                                    <!-- Kulit Ada Memar? -->
                                    <div class="mb-4">
                                        <label class="form-label">Kulit Ada Memar? </label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="kulitAdaMemar" value="N">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="kulitAdaMemar" value="Y">Y</button>
                                            </div>
                                            <input type="hidden" id="kulitAdaMemar" name="kulitAdaMemar" value="" required>
                                        </div>
                                    </div>

                                    <!-- Kulit Ada Luka Sayatan? -->
                                    <div class="mb-4">
                                        <label class="form-label">Kulit Ada Luka Sayatan?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="kulitAdaLukaSayatan" value="N">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="kulitAdaLukaSayatan" value="Y">Y</button>
                                            </div>
                                            <input type="hidden" id="kulitAdaLukaSayatan" name="kulitAdaLukaSayatan" value="" required>
                                        </div>
                                    </div>

                                    <!-- Kulit Ada Luka koreng -->
                                    <div class="mb-4">
                                        <label class="form-label">Kulit Ada Luka Koreng </label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="kulitAdaLukaKoreng" value="N">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="kulitAdaLukaKoreng" value="Y">Y</button>
                                            </div>
                                            <input type="hidden" id="kulitAdaLukaKoreng" name="kulitAdaLukaKoreng" value="" required>
                                        </div>
                                    </div>

                                    <!-- Kulit Ada Luka Koreng sukar Sembuh-->
                                    <div class="mb-4">
                                        <label class="form-label">Kulit Ada Luka Koreng Sukar Sembuh </label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="lukaKorengSukarSembuh" value="N">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="lukaKorengSukarSembuh" value="Y">Y</button>
                                            </div>
                                            <input type="hidden" id="lukaKorengSukarSembuh" name="lukaKorengSukarSembuh" value="" required>
                                        </div>
                                    </div>

                                    <!-- Kulit Ada Bekas Suntikan-->
                                    <div class="mb-4">
                                        <label class="form-label">Kulit Ada Bekas Suntikan </label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="bekasSuntikan" value="N">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="bekasSuntikan" value="Y">Y</button>
                                            </div>
                                            <input type="hidden" id="bekasSuntikan" name="bekasSuntikan" value="" required>
                                        </div>
                                    </div>

                                    <!-- Resiko Merokok -->
                                    <div class="mb-4">
                                        <label for="resikoMerokok" class="form-label">Resiko Merokok<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="resikoMerokok" required>
                                    </div>

                                    <!-- Apakah Telinga Luar Sehat,Infeksi,Serumen -->
                                    <div class="mb-4">
                                        <label for="telingaLuar" class="form-label">Apakah Telinga Luar
                                            Sehat,Infeksi,Serumen<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="telingaLuar" required>
                                    </div>

                                    <!-- sarapan -->
                                    <div class="mb-4">
                                        <label for="sarapan" class="form-label">Sarapan<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="sarapan" required>
                                    </div>

                                    <!-- Kondisi Kuku -->
                                    <div class="mb-4">
                                        <label for="kondisiKuku" class="form-label">Kondisi Kuku<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="kondisiKuku" required>
                                    </div>

                                    <!-- Apakah Siswa Dirujuk Ke Fasyankes-->
                                    <div class="mb-4">
                                        <label class="form-label">Apakah Siswa Dirujuk Ke Fasyankes</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="dirujukKeFasyankes" value="N">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="dirujukKeFasyankes" value="Y">Y</button>
                                            </div>
                                            <input type="hidden" id="dirujukKeFasyankes" name="dirujukKeFasyankes" value="" required>
                                        </div>
                                    </div>

                                    <!-- jika iya tuliskan keterangan rujukan untuk fasyankes -->
                                    <div class="mb-4">
                                        <label for="keteranganRujukan" class="form-label">Jika Iya Tuliskan Keterangan Rujukan
                                            Untuk Fasyankes<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="keteranganRujukan" required>
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
