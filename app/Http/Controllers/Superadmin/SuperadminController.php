<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use App\Models\Penilaian;
use App\Models\SubKriteria;
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

    public function subkriteria()
    {
        $kriteria = Kriteria::all();
        $subkriteria = SubKriteria::all();
        return view('superadmin.sub_kriteria.index', compact('subkriteria', 'kriteria'));
    }

    public function klasifikasi()
    {
        $kriteria = Kriteria::all();
        $eval_pegawai = Penilaian::join('data_pegawai', 'penilaian.id_pegawai', '=', 'data_pegawai.id')->join('kriteria', 'kriteria.id', '=', 'penilaian.id_kriteria')->get();
        // dd($eval_pegawai);
        return view('superadmin.penilaian.klasifikasi', compact(['kriteria', 'eval_pegawai']));
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
