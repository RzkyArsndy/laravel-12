<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PetugasGizi extends Model
{
    protected $table = 'petugasgizi'; // nama tabel di database

    protected $fillable = [
        'timestamp',
        'namaLengkap',
        'namaSekolah',
        'NamaKelas',
        'BeratBadan',
        'TinggiBadan',
        'IMT',
        'deskripsiIMTmurid',
        'TBU',
        'tandaAnemia',
        'DirujukGizi',
        'RujukanGizi',
    ];
}
