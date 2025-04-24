<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    // Nama tabel eksplisit (karena tidak menggunakan bentuk jamak)
    protected $table = 'siswa';

    // Kolom yang bisa diisi (fillable)
    protected $fillable = [
        'nama_lengkap',
        'nisn',
        'tanggal_lahir',
        'sekolah_id',
        'tempat_lahir',
        'kelas',
    ];

    /**
     * Relasi: Siswa belongs to Sekolah
     * Setiap siswa terhubung ke satu sekolah.
     */
    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class, 'sekolah_id');
    }
}
