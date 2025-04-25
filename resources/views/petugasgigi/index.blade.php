@extends('layout.main')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Form Pemeriksaan Gigi</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        <div class="container mt-3">
            <h2>Petugas Gigi Dan Mulut</h2>
            <div class="card">
                <div class="card-header">Puskesmas Samarinda</div>
                <div class="card-body">
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

                                <form action="{{ route('pemeriksaan-gigi.store') }}" method="POST">
                                    @csrf

                                    <!-- Nama Lengkap -->
                                    <div class="mb-4">
                                        <label for="nama_lengkap" class="form-label">Nama Lengkap<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                                    </div>

                                    <!-- Nama Sekolah -->
                                    <div class="mb-4">
                                        <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
                                        <select class="form-select" id="nama_sekolah" name="nama_sekolah">
                                            <option value="" selected></option>
                                            <option value="Sekolah Racing abis">Sekolah Racing abis</option>
                                            <option value="Sekolah Tura Turu FC">Sekolah Tura Turu FC</option>
                                            <option value="Sekolah Berangkat jam 7 pulang jam 8">Sekolah Berangkat jam 7 pulang jam 8</option>
                                        </select>
                                    </div>

                                    <!-- Nama Kelas -->
                                    <div class="mb-4">
                                        <label for="kelas" class="form-label">Kelas<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="kelas" name="kelas" required>
                                    </div>

                                    <!-- Celah Bibir / Langit - Langit -->
                                    <div class="mb-4">
                                        <label class="form-label">Celah Bibir / Langit - Langit</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="celah_bibir">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="celah_bibir">Y</button>
                                            </div>
                                            <input type="hidden" id="celah_bibir" name="celah_bibir" value="" required>
                                        </div>
                                    </div>

                                    <!-- Luka Pada Sudut Mulut? -->
                                    <div class="mb-4">
                                        <label class="form-label">Luka Pada Sudut Mulut?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="sudut_mulut">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="sudut_mulut">Y</button>
                                            </div>
                                            <input type="hidden" id="sudut_mulut" name="sudut_mulut" value="" required>
                                        </div>
                                    </div>

                                    <!-- Sariawan -->
                                    <div class="mb-4">
                                        <label class="form-label">Sariawan?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="sariawan">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="sariawan">Y</button>
                                            </div>
                                            <input type="hidden" id="sariawan" name="sariawan" value="" required>
                                        </div>
                                    </div>

                                    <!-- Lidah Kotor -->
                                    <div class="mb-4">
                                        <label class="form-label">Lidah Kotor?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="lidah_kotor">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="lidah_kotor">Y</button>
                                            </div>
                                            <input type="hidden" id="lidah_kotor" name="lidah_kotor" value="" required>
                                        </div>
                                    </div>

                                    <!-- Luka Lainnya -->
                                    <div class="mb-4">
                                        <label class="form-label">Luka lainnya di mulut?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="luka_lainnya">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="luka_lainnya">Y</button>
                                            </div>
                                            <input type="hidden" id="luka_lainnya" name="luka_lainnya" value="" required>
                                        </div>
                                    </div>

                                    <!-- Gigi Berlubang -->
                                    <div class="mb-4">
                                        <label class="form-label">Gigi Berlubang?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="gigi_berlubang">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="gigi_berlubang">Y</button>
                                            </div>
                                            <input type="hidden" id="gigi_berlubang" name="gigi_berlubang" value="" required>
                                        </div>
                                    </div>

                                    <!-- Gusi Mudah Berdarah -->
                                    <div class="mb-4">
                                        <label class="form-label">Gusi mudah berdarah?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="gusi_berdarah">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="gusi_berdarah">Y</button>
                                            </div>
                                            <input type="hidden" id="gusi_berdarah" name="gusi_berdarah" value="" required>
                                        </div>
                                    </div>

                                    <!-- Gusi Bengkak -->
                                    <div class="mb-4">
                                        <label class="form-label">Gusi bengkak?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="gusi_bengkak">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="gusi_bengkak">Y</button>
                                            </div>
                                            <input type="hidden" id="gusi_bengkak" name="gusi_bengkak" value="" required>
                                        </div>
                                    </div>

                                    <!-- Gigi Kotor -->
                                    <div class="mb-4">
                                        <label class="form-label">Gigi kotor (ada plak & sisa makanan)?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="gigi_kotor">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="gigi_kotor">Y</button>
                                            </div>
                                            <input type="hidden" id="gigi_kotor" name="gigi_kotor" value="" required>
                                        </div>
                                    </div>

                                    <!-- Karang Gigi -->
                                    <div class="mb-4">
                                        <label class="form-label">Apakah ada karang gigi?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="karang_gigi">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="karang_gigi">Y</button>
                                            </div>
                                            <input type="hidden" id="karang_gigi" name="karang_gigi" value="" required>
                                        </div>
                                    </div>

                                    <!-- Susunan Gigi -->
                                    <div class="mb-4">
                                        <label class="form-label">Susunan gigi tidak teratur?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="susunan_gigi">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="susunan_gigi">Y</button>
                                            </div>
                                            <input type="hidden" id="susunan_gigi" name="susunan_gigi" value="" required>
                                        </div>
                                    </div>

                                    <!-- Penglihatan -->
                                    <div class="mb-4">
                                        <label class="form-label">Penglihatan (Loupe)?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="penglihatan">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="penglihatan">Y</button>
                                            </div>
                                            <input type="hidden" id="penglihatan" name="penglihatan" value="" required>
                                        </div>
                                    </div>

                                    <!-- Pendengaran -->
                                    <div class="mb-4">
                                        <label class="form-label">Pendengaran?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="pendengaran">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="pendengaran">Y</button>
                                            </div>
                                            <input type="hidden" id="pendengaran" name="pendengaran" value="" required>
                                        </div>
                                    </div>

                                    <!-- Kursi Roda -->
                                    <div class="mb-4">
                                        <label class="form-label">Kursi roda?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="kursi_roda">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="kursi_roda">Y</button>
                                            </div>
                                            <input type="hidden" id="kursi_roda" name="kursi_roda" value="" required>
                                        </div>
                                    </div>

                                    <!-- Tongkat (Kruk) -->
                                    <div class="mb-4">
                                        <label class="form-label">Tongkat (kruk)?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="tongkat">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="tongkat">Y</button>
                                            </div>
                                            <input type="hidden" id="tongkat" name="tongkat" value="" required>
                                        </div>
                                    </div>

                                    <!-- Kaki/Tangan (Mata Protese) -->
                                    <div class="mb-4">
                                        <label class="form-label">Kaki/Tangan (Mata Protese)?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="prostese">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="prostese">Y</button>
                                            </div>
                                            <input type="hidden" id="prostese" name="prostese" value="" required>
                                        </div>
                                    </div>

                                    <!-- Dirujuk ke Fasyankes -->
                                    <div class="mb-4">
                                        <label class="form-label">Apakah siswa dirujuk ke Fasyankes?</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="N" data-target="dirujuk_fasyankes">N</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-secondary w-100 py-2"
                                                    data-value="Y" data-target="dirujuk_fasyankes">Y</button>
                                            </div>
                                            <input type="hidden" id="dirujuk_fasyankes" name="dirujuk_fasyankes" value="" required>
                                        </div>
                                    </div>

                                    <!-- Jika Iya Tuliskan Keterangan Rujukan Untuk Fasyankes -->
                                    <div class="mb-4">
                                        <label for="rujukan_gizi" class="form-label">Jika Iya Tuliskan Keterangan Rujukan Untuk Fasyankes</label>
                                        <input type="text" class="form-control" id="rujukan_gizi" name="rujukan_gizi">
                                    </div>

                                    <!-- Tombol Submit -->
                                    <div class="mb-4">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            // Select all toggle buttons
                            const toggleButtons = document.querySelectorAll('.btn[data-value]');

                            // Add click event to each button
                            toggleButtons.forEach(button => {
                                button.addEventListener('click', function() {
                                    // Get the parent row
                                    const row = this.closest('.row');

                                    // Get all buttons in this row group
                                    const buttons = row.querySelectorAll('.btn[data-value]');

                                    // Get the target input field
                                    const targetId = this.getAttribute('data-target');
                                    const hiddenInput = document.getElementById(targetId);

                                    // Reset all buttons in this group
                                    buttons.forEach(btn => {
                                        btn.classList.remove('btn-primary');
                                        btn.classList.add('btn-outline-secondary');
                                    });

                                    // Set active state for clicked button
                                    this.classList.remove('btn-outline-secondary');
                                    this.classList.add('btn-primary');

                                    // Update the hidden input value
                                    hiddenInput.value = this.getAttribute('data-value');

                                    // Optional: Validate the field
                                    if (hiddenInput.value) {
                                        hiddenInput.setCustomValidity('');
                                    } else {
                                        hiddenInput.setCustomValidity('Please select an option');
                                    }
                                });
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
