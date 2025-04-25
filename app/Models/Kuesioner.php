<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuesioner extends Model
{


    protected $table = 'kuesioner';

    protected $fillable = [
        'nama_lengkap',
        'nama_sekolah',
        'kelas',
        'alergi',
        'detail_alergi',
        'cidera',
        'detail_cidera',
        'kejang',
        'pingsan',
        'transfusi',
        'kelainan_bawaan',
        'detail_kelainan',
        'penyakit_lain',
        'detail_penyakit_lainnya',
        'imunisasi_dasar',
        'detail_imunisasi_dasar',
        'hepatitis_b',
        'bcg',
        'polio1',
        'dpt_hb_hib1',
        'polio2',
        'polio3',
        'dpt_hb_hib3',
        'polio4',
        'ipv',
        'campak_mr_9bulan',
        'dpt_hb_hib_18bulan',
        'campak_18bulan',
        'campak_kelas1',
        'dt_kelas1',
        'td_kelas5',
        'keluarga_tbc',
        'keluarga_diabetes',
        'keluarga_hepatitis',
        'keluarga_asma',
        'keluarga_penyakit_lain',
        'sarapan',
        'jajan_sekolah',
        'resiko_merokok',
        'alkohol_napza',
        'masalah_pubertas',
        'resiko_ims',
        'resiko_kekerasan_seksual',
        'gangguan_menstruasi',
        'gejala_emosional',
        'masalah_perilaku',
        'hiperaktifitas',
        'masalah_teman_sebaya',
        'perilaku_prososial',
        'visual',
        'audio',
        'kinestetik',
        'dominasi_otak',
    ];
}
