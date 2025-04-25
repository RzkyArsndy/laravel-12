<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemeriksaanGigi extends Model
{
    protected $table = 'pemeriksaan_gigi';

    protected $fillable = [
        'nama_lengkap',
        'nama_sekolah',
        'kelas',
        'celah_bibir',
        'sudut_mulut',
        'sariawan',
        'lidah_kotor',
        'luka_lainnya',
        'gigi_berlubang',
        'gusi_berdarah',
        'gusi_bengkak',
        'gigi_kotor',
        'karang_gigi',
        'susunan_gigi',
        'penglihatan',
        'pendengaran',
        'kursi_roda',
        'tongkat',
        'prostese',
        'dirujuk_fasyankes',
        'rujukan_gizi'
    ];
}
