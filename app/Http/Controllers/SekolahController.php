<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function index()
{
    $sekolah = Sekolah::all(); // Ambil semua data sekolah
    return view('identitasdiri.index', compact('sekolah'));
}
}
