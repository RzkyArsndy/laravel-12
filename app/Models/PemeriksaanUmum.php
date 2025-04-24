<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PemeriksaanUmum extends Model
{
    protected $table = 'pemeriksaan_umum';

    protected $fillable = [
        'nama_lengkap',
        'sekolah_id',
        'kelas',
        'tekanan_darah',
        'denyut_nadi',
        'frekuensi_pernapasan',
        'suhu',
        'bising_jantung',
        'bising_paru',
        'keadaan_rambut',
        'bercak_keputihan',
        'bercak_putih_mati_rasa',
        'kulit_bersisik',
        'kulit_ada_memar',
        'kulit_ada_luka_sayatan',
        'kulit_ada_luka_koreng',
        'luka_koreng_sukar_sembuh',
        'bekas_suntikan',
        'resiko_merokok',
        'telinga_luar',
        'sarapan',
        'kondisi_kuku',
        'dirujuk_ke_fasyankes',
        'keterangan_rujukan',
    ];
    public function sekolah()
{
    return $this->belongsTo(Sekolah::class);
}
}
