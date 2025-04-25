<?php

namespace App\Http\Controllers;

use App\Models\PetugasGizi;
use Illuminate\Http\Request;

class GiziController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'timestamp' => 'nullable|date',
            'namaLengkap' => 'required|string|max:255',
            'namaSekolah' => 'nullable|string',
            'NamaKelas' => 'required|string',
            'BeratBadan' => 'required|numeric',
            'TinggiBadan' => 'required|numeric',
            'IMT' => 'required|numeric',
            'deskripsiIMTmurid' => 'required|string',
            'TBU' => 'required|string',
            'tandaAnemia' => 'required|string',
            'DirujukGizi' => 'required|in:Y,N',
            'RujukanGizi' => 'required|string',
        ]);
        PetugasGizi::create($request->all());

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
}
}
