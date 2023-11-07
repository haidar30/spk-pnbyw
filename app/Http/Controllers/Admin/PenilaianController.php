<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DataPegawai;
use App\Models\Kriteria;
use App\Models\Penilaian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenilaianController extends Controller
{
    public function index()
    {
        $datapegawai = DataPegawai::all();
        $datakriteria = Kriteria::all();

        // dd($data_pegawai, $data_kriteria);
        return view('admin.penilaian.create', compact('datapegawai', 'datakriteria'));
    }

    public function store(Request $request)
    {
        DB::table('penilaian')->insert([
            'bulan' => $request->bulan,
            'tahun' => $request->tahun, 
            
            'id_pegawai' => $request->id_pegawai,
            'id_kriteria' => $request->id_kriteria, 
            'nilai' => $request->nilai 
        ]);

        return redirect()->route('penilaian.create')
        ->with('success', 'Data Kriteria Baru Berhasil Disimpan');
    }
}
