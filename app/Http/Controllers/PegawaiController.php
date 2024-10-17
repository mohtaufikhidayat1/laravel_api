<?php

namespace App\Http\Controllers;

use App\Models\Pegawai; // Pastikan ini ada
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawais = Pegawai::all();
        return response()->json($pegawais);
    }
}
