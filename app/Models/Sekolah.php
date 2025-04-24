<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    use HasFactory;

    // Karena nama tabel bukan jamak
    protected $table = 'sekolah';

    // Kolom yang bisa diisi
    protected $fillable = [
        'nama_sekolah',
        'alamat',
        'telepon',
    ];

    /**
     * Relasi ke model Siswa
     * Satu sekolah memiliki banyak siswa
     */
    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'sekolah_id');
    }
}
