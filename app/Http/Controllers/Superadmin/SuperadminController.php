<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuperadminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('superadmin.index');
    }

    public function pegawai()
    {
        $data_pegawai = DB::table('data_pegawai')->get();
        return view('superadmin.data_pegawai.index', compact('data_pegawai'));
    }

    public function kriteria()
    {
        $kriteria = DB::table('kriteria')->get();
        return view('superadmin.kriteria.index', compact('kriteria'));
    }

    public function klasifikasi()
    {
        $kriteria = Kriteria::all();
        return view('superadmin.penilaian.klasifikasi', compact('kriteria'));
    }

    public function hasil()
    {
        return view('superadmin.penilaian.hasil');
    }

    public function laporan()
    {
        return view('superadmin.laporan.index');
    }
}
