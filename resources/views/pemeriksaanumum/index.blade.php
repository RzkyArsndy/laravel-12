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
            <h2>Pemeriksaan Umum</h2>
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
                                <form method="POST" action="{{ route('pemeriksaan-umum.store') }}">
                                    @csrf
                                    <!-- Nama Lengkap -->
                                    <div class="mb-4">
                                        <label for="namaLengkap" class="form-label">Nama Lengkap<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="namaLengkap" name="nama_lengkap"
                                            required>
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


                                    <!-- Nama Kelas -->
                                    <div class="mb-4">
                                        <label for="kelas" class="form-label">Kelas<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="kelas" name="kelas" required>
                                    </div>

                                    <!-- Tekanan Darah-->
                                    <div class="mb-4">
                                        <label for="tekananDarah" class="form-label">Tekanan Darah<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="tekananDarah" name="tekanan_darah"
                                            required>
                                    </div>

                                    <!-- Denyut Nadi -->
                                    <div class="mb-4">
                                        <label for="denyutNadi" class="form-label">Denyut Nadi<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="denyutNadi" name="denyut_nadi"
                                            required>
                                    </div>

                                    <!-- Frekuensi Pernapasan -->
                                    <div class="mb-4">
                                        <label for="frekuensiPernapasan" class="form-label">Frekuensi Pernapasan<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="frekuensiPernapasan"
                                            name="frekuensi_pernapasan" required>
                                    </div>

                                    <!-- Suhu -->
                                    <div class="mb-4">
                                        <label for="suhu" class="form-label">Suhu<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="suhu" name="suhu" required>
                                    </div>

                                    <!-- Bising Jantung -->
                                    <div class="mb-4">
                                        <label for="bisingJantung" class="form-label">Bising Jantung<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="bisingJantung" name="bising_jantung"
                                            required>
                                    </div>

                                    <!-- Bising Paru -->
                                    <div class="mb-4">
                                        <label for="bisingParu" class="form-label">Bising Paru<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="bisingParu" name="bising_paru"
                                            required>
                                    </div>

                                    <!-- Bising Keadaan Rambut -->
                                    <div class="mb-4">
                                        <label for="keadaanRambut" class="form-label">Keadaan Rambut<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="keadaanRambut" name="keadaan_rambut"
                                            required>
                                    </div>

                                    <!-- Kulit Bercak Keputihan,Kemerahan/kehitaman? -->
                                    <div class="mb-4">
                                        <label class="form-label">Kulit Bercak Keputihan,Kemerahan/kehitaman?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="bercakKeputihan"
                                                    value="N">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="bercakKeputihan"
                                                    value="Y">Y</button>
                                            </div>
                                            <input type="hidden" id="bercakKeputihan" name="bercak_keputihan"
                                                value="" required>
                                        </div>
                                    </div>

                                    <!-- Jika Ya, Apakah bercak Putih Mati Rasa? -->
                                    <div class="mb-4">
                                        <label for="bercakPutihMatiRasa" class="form-label">Jika Ya, Apakah bercak Putih
                                            Mati Rasa?</label>
                                        <input type="text" class="form-control" id="bercakPutihMatiRasa"
                                            name="bercak_putih_mati_rasa">
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
                                            <input type="hidden" id="kulitBersisik" name="kulit_bersisik"
                                                value="" required>
                                        </div>
                                    </div>

                                    <!-- Kulit Ada Memar? -->
                                    <div class="mb-4">
                                        <label class="form-label">Kulit Ada Memar?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="kulitAdaMemar" value="N">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="kulitAdaMemar" value="Y">Y</button>
                                            </div>
                                            <input type="hidden" id="kulitAdaMemar" name="kulit_ada_memar"
                                                value="" required>
                                        </div>
                                    </div>

                                    <!-- Kulit Ada Luka Sayatan? -->
                                    <div class="mb-4">
                                        <label class="form-label">Kulit Ada Luka Sayatan?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="kulitAdaLukaSayatan"
                                                    value="N">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="kulitAdaLukaSayatan"
                                                    value="Y">Y</button>
                                            </div>
                                            <input type="hidden" id="kulitAdaLukaSayatan" name="kulit_ada_luka_sayatan"
                                                value="" required>
                                        </div>
                                    </div>

                                    <!-- Kulit Ada Luka koreng -->
                                    <div class="mb-4">
                                        <label class="form-label">Kulit Ada Luka Koreng</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="kulitAdaLukaKoreng"
                                                    value="N">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="kulitAdaLukaKoreng"
                                                    value="Y">Y</button>
                                            </div>
                                            <input type="hidden" id="kulitAdaLukaKoreng" name="kulit_ada_luka_koreng"
                                                value="" required>
                                        </div>
                                    </div>

                                    <!-- Kulit Ada Luka Koreng sukar Sembuh-->
                                    <div class="mb-4">
                                        <label class="form-label">Kulit Ada Luka Koreng Sukar Sembuh</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="lukaKorengSukarSembuh"
                                                    value="N">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="lukaKorengSukarSembuh"
                                                    value="Y">Y</button>
                                            </div>
                                            <input type="hidden" id="lukaKorengSukarSembuh"
                                                name="luka_koreng_sukar_sembuh" value="" required>
                                        </div>
                                    </div>

                                    <!-- Kulit Ada Bekas Suntikan-->
                                    <div class="mb-4">
                                        <label class="form-label">Kulit Ada Bekas Suntikan</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="bekasSuntikan" value="N">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="bekasSuntikan" value="Y">Y</button>
                                            </div>
                                            <input type="hidden" id="bekasSuntikan" name="bekas_suntikan"
                                                value="" required>
                                        </div>
                                    </div>

                                    <!-- Resiko Merokok -->
                                    <div class="mb-4">
                                        <label for="resikoMerokok" class="form-label">Resiko Merokok<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="resikoMerokok"
                                            name="resiko_merokok" required>
                                    </div>

                                    <!-- Apakah Telinga Luar Sehat,Infeksi,Serumen -->
                                    <div class="mb-4">
                                        <label for="telingaLuar" class="form-label">Apakah Telinga Luar
                                            Sehat,Infeksi,Serumen<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="telingaLuar" name="telinga_luar"
                                            required>
                                    </div>

                                    <!-- sarapan -->
                                    <div class="mb-4">
                                        <label for="sarapan" class="form-label">Sarapan<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="sarapan" name="sarapan"
                                            required>
                                    </div>

                                    <!-- Kondisi Kuku -->
                                    <div class="mb-4">
                                        <label for="kondisiKuku" class="form-label">Kondisi Kuku<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="kondisiKuku" name="kondisi_kuku"
                                            required>
                                    </div>

                                    <!-- Apakah Siswa Dirujuk Ke Fasyankes-->
                                    <div class="mb-4">
                                        <label class="form-label">Apakah Siswa Dirujuk Ke Fasyankes</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="dirujukKeFasyankes"
                                                    value="N">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="dirujukKeFasyankes"
                                                    value="Y">Y</button>
                                            </div>
                                            <input type="hidden" id="dirujukKeFasyankes" name="dirujuk_ke_fasyankes"
                                                value="" required>
                                        </div>
                                    </div>

                                    <!-- jika iya tuliskan keterangan rujukan untuk fasyankes -->
                                    <div class="mb-4">
                                        <label for="keteranganRujukan" class="form-label">Jika Iya Tuliskan Keterangan
                                            Rujukan Untuk Fasyankes</label>
                                        <input type="text" class="form-control" id="keteranganRujukan"
                                            name="keterangan_rujukan">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
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
