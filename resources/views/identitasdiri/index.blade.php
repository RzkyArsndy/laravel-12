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
  <h2>Identitas Diri</h2>
  <div class="card">
    <div class="card-header">Puskesmas Samarinda</div>
    <div class="card-body"><!-- Content Section - Ini hanya bagian konten form saja -->
        <div class="container-fluid py-4">
            <div class="row justify-content-center">
              <div class="col-md-8">
                <form>
                  <!-- Nama Lengkap -->
                  <div class="mb-4">
                    <label for="namaLengkap" class="form-label">Nama Lengkap<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="namaLengkap" required>
                  </div>

                <!-- Tanggal lahir-->
                <div class="mb-4">
                    <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
                    <input type="datetime-local" class="form-control" id="tanggallahir" name="tanggallahir">
                </div>

                <!-- Tempat Lahir -->
                <div class="mb-4">
                    <label for="tempatlahir" class="form-label">Tempat Lahir<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="tempatlahir" required>
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
                    <label for="kelas" class="form-label">Kelas<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="kelas" required>
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

                // Reset semua tombol
                buttons.forEach(btn => {
                  btn.classList.remove('btn-primary');
                  btn.classList.add('btn-outline-secondary');
                });

                // Set tombol yang diklik
                this.classList.remove('btn-outline-secondary');
                this.classList.add('btn-primary');
              });
            });
          </script></div>
    <div class="card-footer">copyright 2k25</div>
  </div>
</div>

</body>
</html>

@endsection
