<?php

namespace App\Http\Controllers;

use App\Models\PemeriksaanGigi;
use Illuminate\Http\Request;

class PemeriksaanGigiController extends Controller
{
    public function create()
    {
        return view('petugasgigi.index'); // Sesuaikan dengan nama view Anda
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nama_sekolah' => 'nullable|string|max:255',
            'kelas' => 'required|string|max:255',
            'celah_bibir' => 'required|in:Y,N',
            'sudut_mulut' => 'required|in:Y,N',
            'sariawan' => 'required|in:Y,N',
            'lidah_kotor' => 'required|in:Y,N',
            'luka_lainnya' => 'required|in:Y,N',
            'gigi_berlubang' => 'required|in:Y,N',
            'gusi_berdarah' => 'required|in:Y,N',
            'gusi_bengkak' => 'required|in:Y,N',
            'gigi_kotor' => 'required|in:Y,N',
            'karang_gigi' => 'required|in:Y,N',
            'susunan_gigi' => 'required|in:Y,N',
            'penglihatan' => 'required|in:Y,N',
            'pendengaran' => 'required|in:Y,N',
            'kursi_roda' => 'required|in:Y,N',
            'tongkat' => 'required|in:Y,N',
            'prostese' => 'required|in:Y,N',
            'dirujuk_fasyankes' => 'required|in:Y,N',
            'rujukan_gizi' => 'nullable|string|max:255',
        ]);

        PemeriksaanGigi::create($validated);

        return redirect()->back()->with('success', 'Data pemeriksaan gigi berhasil disimpan!');
    }
}
