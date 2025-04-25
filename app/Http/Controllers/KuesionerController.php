<?php

namespace App\Http\Controllers;

use App\Models\Kuesioner;
use Illuminate\Http\Request;

class KuesionerController extends Controller
{
    public function create()
    {
        return view('Datakuisioner.index');
    }

    public function store(Request $request)
    {
        try {
            // Validasi input yang wajib - hanya validasi field yang wajib
            $validated = $request->validate([
                'nama_lengkap' => 'required|string|max:255',
                'kelas' => 'required|string|max:255',
                // Tambahkan validasi lain jika diperlukan
            ]);

            // Data yang akan disimpan - pastikan nama field sama dengan yang ada di form
            $data = [
                'nama_lengkap' => $request->nama_lengkap,
                'nama_sekolah' => $request->namaSekolah ?? '',
                'kelas' => $request->kelas,
                'alergi' => $request->alergi ?? 'N',
                'detail_alergi' => $request->detail_alergi ?? '',
                'cidera' => $request->cidera ?? 'N',
                'detail_cidera' => $request->detail_cidera ?? '',
                'kejang' => $request->kejang ?? 'N',
                'pingsan' => $request->pingsan ?? 'N',
                'transfusi' => $request->transfusi ?? 'N',
                'kelainan_bawaan' => $request->kelainan_bawaan ?? 'N',
                'detail_kelainan' => $request->detail_kelainan ?? '',
                'penyakit_lain' => $request->penyakit_lain ?? 'N',
                'detail_penyakit_lainnya' => $request->detail_penyakit_lainnya ?? '',
                'imunisasi_dasar' => $request->imunisasi_dasar ?? 'N',
                'detail_imunisasi_dasar' => $request->detail_imunisasi_dasar ?? '',
                'hepatitis_b' => $request->hepatitis_b ?? 'N',
                'bcg' => $request->bcg ?? 'N',
                'polio1' => $request->polio1 ?? 'N',
                'dpt_hb_hib1' => $request->dpt_hb_hib1 ?? 'N',
                'polio2' => $request->polio2 ?? 'N',
                'polio3' => $request->polio3 ?? 'N',
                'dpt_hb_hib3' => $request->dpt_hb_hib3 ?? 'N',
                'polio4' => $request->polio4 ?? 'N',
                'ipv' => $request->ipv ?? 'N',
                'campak_mr_9bulan' => $request->campak_mr_9bulan ?? 'N',
                'dpt_hb_hib_18bulan' => $request->dpt_hb_hib_18bulan ?? 'N',
                'campak_18bulan' => $request->campak_18bulan ?? 'N',
                'campak_kelas1' => $request->campak_kelas1 ?? 'N',
                'dt_kelas1' => $request->dt_kelas1 ?? 'N',
                'td_kelas5' => $request->td_kelas5 ?? 'N',
                'keluarga_tbc' => $request->keluarga_tbc ?? '',
                'keluarga_diabetes' => $request->keluarga_diabetes ?? '',
                'keluarga_hepatitis' => $request->keluarga_hepatitis ?? '',
                'keluarga_asma' => $request->keluarga_asma ?? '',
                'keluarga_penyakit_lain' => $request->keluarga_penyakit_lain ?? '',
                'sarapan' => $request->sarapan ?? 'N',
                'jajan_sekolah' => $request->jajan_sekolah ?? 'N',
                'resiko_merokok' => $request->resiko_merokok ?? '',
                'alkohol_napza' => $request->alkohol_napza ?? 'N',
                'masalah_pubertas' => $request->masalah_pubertas ?? '',
                'resiko_ims' => $request->resiko_ims ?? '',
                'resiko_kekerasan_seksual' => $request->resiko_kekerasan_seksual ?? '',
                'gangguan_menstruasi' => $request->gangguan_menstruasi ?? '',
                'gejala_emosional' => $request->gejala_emosional ?? '',
                'masalah_perilaku' => $request->masalah_perilaku ?? '',
                'hiperaktifitas' => $request->hiperaktifitas ?? '',
                'masalah_teman_sebaya' => $request->masalah_teman_sebaya ?? '',
                'perilaku_prososial' => $request->perilaku_prososial ?? '',
                'visual' => $request->visual ?? '',
                'audio' => $request->audio ?? '',
                'kinestetik' => $request->kinestetik ?? '',
                'dominasi_otak' => $request->dominasi_otak ?? '',
            ];

            // Simpan data ke database
            Kuesioner::create($data);

            return redirect()->back()->with('success', 'Data kuesioner berhasil disimpan!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Tangkap khusus error validasi untuk pesan yang lebih jelas
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput();
        } catch (\Exception $e) {
            // Tangkap error umum
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage())
                ->withInput();
        }
    }
}
