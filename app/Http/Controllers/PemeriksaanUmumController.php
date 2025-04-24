<?php

namespace App\Http\Controllers;

use App\Models\PemeriksaanUmum;
use App\Models\Sekolah;
use Illuminate\Http\Request;

class PemeriksaanUmumController extends Controller
{
    // Tampilkan halaman pemeriksaan umum
    public function index()
    {
        $sekolah = Sekolah::all(); // Ambil semua data sekolah
        return view('pemeriksaanumum.index', compact('sekolah'));
    }

    // Simpan data pemeriksaan umum
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'sekolah_id' => 'required|exists:sekolah,id', // fix: tambah kolom "id" dan nama tabel jamak
            'kelas' => 'required|string|max:50',
            'tekanan_darah' => 'required|string|max:50',
            'denyut_nadi' => 'required|string|max:50',
            'frekuensi_pernapasan' => 'required|string|max:50',
            'suhu' => 'required|string|max:50',
            'bising_jantung' => 'required|string|max:50',
            'bising_paru' => 'required|string|max:50',
            'keadaan_rambut' => 'required|string|max:50',
            'bercak_keputihan' => 'required|in:Y,N',
            'bercak_putih_mati_rasa' => 'nullable|string|max:255',
            'kulit_bersisik' => 'required|in:Y,N',
            'kulit_ada_memar' => 'required|in:Y,N',
            'kulit_ada_luka_sayatan' => 'required|in:Y,N',
            'kulit_ada_luka_koreng' => 'required|in:Y,N',
            'luka_koreng_sukar_sembuh' => 'required|in:Y,N',
            'bekas_suntikan' => 'required|in:Y,N',
            'resiko_merokok' => 'required|string|max:50',
            'telinga_luar' => 'required|string|max:50',
            'sarapan' => 'required|string|max:50',
            'kondisi_kuku' => 'required|string|max:50',
            'dirujuk_ke_fasyankes' => 'required|in:Y,N',
            'keterangan_rujukan' => 'nullable|string|max:255',
        ]);

        PemeriksaanUmum::create($validated);

        return redirect()->back()->with('success', 'Data pemeriksaan umum berhasil disimpan!');
    }
}
