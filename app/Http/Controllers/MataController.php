<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PemeriksaanMata;

class MataController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'namaLengkap' => 'required|string|max:255',
            'namaSekolah' => 'nullable|string',
            'kelas' => 'required|string|max:100',
            'kondisiMataLuar' => 'required|string',
            'tajamPengelihatan' => 'required|string',
            'Berkacamata' => 'required|in:Y,N',
            'ButaWarna' => 'required|in:Y,N',
            'RujukFasyankesMata' => 'required|in:Y,N',
            'keteranganRujukanMata' => 'required|string',
        ]);

        PemeriksaanMata::create($request->all());

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
}
