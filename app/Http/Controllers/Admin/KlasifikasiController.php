<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KlasifikasiController extends Controller
{
    public function index()
    {
        $kriteria = Kriteria::all();
        return view('admin.penilaian.klasifikasi', compact('kriteria'));
    }
}

