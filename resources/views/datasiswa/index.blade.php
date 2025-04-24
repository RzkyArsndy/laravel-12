@extends('layout.main')

@section('content')
<div class="container py-5">
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Data Siswa</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-striped align-middle" id="tabelSiswa">
                    <thead class="table-light">
                        <tr>
                            <th>NISN</th>
                            <th>Nama Lengkap</th>
                            <th>Tanggal Lahir</th>
                            <th>Tempat Lahir</th>
                            <th>Kelas</th>
                            <th>ID Sekolah</th>
                            <th>Nama Sekolah</th>
                            <th>Aksi</th> <!-- Kolom aksi -->
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($siswa as $item)
                            <tr>
                                <td>{{ $item->nisn }}</td>
                                <td class="fw-bold">{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->tanggal_lahir }}</td>
                                <td>{{ $item->tempat_lahir }}</td>
                                <td><span class="badge bg-info text-dark">{{ $item->kelas }}</span></td>
                                <td>{{ $item->sekolah_id }}</td>
                                <td>{{ $item->nama_sekolah }}</td>
                                <td>
                                    <a href="{{ route('siswa.edit', $item->id) }}" class="btn btn-sm btn-warning">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-4">
                                    <div class="alert alert-info mb-0">
                                        <i class="bi bi-info-circle me-2"></i> Belum ada data siswa yang tersedia.
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if(isset($siswa) && method_exists($siswa, 'hasPages') && $siswa->hasPages())
                <div class="d-flex justify-content-center mt-4">
                    {{ $siswa->links() }}
                </div>
            @endif
        </div>
        <div class="card-footer bg-white border-0">
            <div class="text-muted small">
                Total data: {{ $siswa->count() }} siswa
            </div>
        </div>
    </div>
</div>

<!-- Sisipkan link Bootstrap Icons jika diperlukan -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
@endsection
