<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DataPegawai;
use App\Models\Kriteria;
use App\Models\Penilaian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KlasifikasiController extends Controller
{
    public function index()
    {
        $kriteria = Kriteria::all();
        $eval_pegawai = Penilaian::join('data_pegawai', 'penilaian.id_pegawai', '=', 'data_pegawai.id')->join('kriteria', 'kriteria.id', '=', 'penilaian.id_kriteria')->get();
        // dd($eval_pegawai);
        return view('admin.penilaian.klasifikasi', compact(['kriteria', 'eval_pegawai']));
    }
}

