<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Sekolah;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    // Menampilkan semua siswa
    public function index()
    {
        $siswa = Siswa::all();
        return view('datasiswa.index', compact('siswa'));
    }

    // Menyimpan data siswa baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nisn' => 'required|string|max:20|unique:siswa,nisn', // Unique constraint here
            'tanggal_lahir' => 'nullable|date',
            'sekolah_id' => 'required|exists:sekolah,id',
            'tempat_lahir' => 'required|string|max:100',
            'kelas' => 'required|string|max:50',
        ]);

        $sekolah = Sekolah::find($request->sekolah_id);
        $validated['nama_sekolah'] = $sekolah ? $sekolah->nama_sekolah : null;


        try {
            Siswa::create($validated);
            return back()->with('success', 'Data berhasil disimpan!');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menyimpan data: ' . $e->getMessage());
        }
    }

    // Menampilkan form edit siswa
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        $sekolah = Sekolah::all(); // Jika ingin dropdown sekolah
        return view('datasiswa.edit', compact('siswa', 'sekolah'));
    }

    // Memperbarui data siswa
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nisn' => 'required|string|max:20|unique:siswa,nisn', // Unique constraint here
            'tanggal_lahir' => 'nullable|date',
            'sekolah_id' => 'required|exists:sekolah,id',
            'tempat_lahir' => 'required|string|max:100',
            'kelas' => 'required|string|max:50',
        ]);

        $sekolah = Sekolah::find($request->sekolah_id);
    $validated['nama_sekolah'] = $sekolah ? $sekolah->nama_sekolah : null;

        try {
            $siswa = Siswa::findOrFail($id);
            $siswa->update($validated);
            return redirect()->route('siswa.index')->with('success', 'Data berhasil diperbarui!');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal memperbarui data: ' . $e->getMessage());
        }
    }
}
