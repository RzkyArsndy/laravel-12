<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PemeriksaanMata extends Model
{
    protected $table = 'pemeriksaanmata'; // Sesuaikan dengan nama tabel kamu

    protected $fillable = [
        'namaLengkap',
        'namaSekolah',
        'kelas',
        'kondisiMataLuar',
        'tajamPengelihatan',
        'Berkacamata',
        'ButaWarna',
        'RujukFasyankesMata',
        'keteranganRujukanMata',
    ];
}
