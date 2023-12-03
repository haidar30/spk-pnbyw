<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DataPegawai;
use App\Models\Kriteria;
use App\Models\Penilaian;
use App\Models\SubKriteria;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    public function index()
    {
        $datapegawai = DataPegawai::all();
        $datakriteria = Kriteria::all();
        $datasubkriteria = SubKriteria::all();

        // dd($data_pegawai, $data_kriteria);
        return view('admin.penilaian.create', compact('datapegawai', 'datakriteria', 'datasubkriteria'));
    }

    public function store(Request $request)
    {
        $getKriteria = Kriteria::all();

        $insert = [];

        foreach ($getKriteria as $kriteria) {
            $id_kriteria = 'id_kriteria_' . $kriteria->id;
            $nilai_kriteria = 'nilai_' . $kriteria->id;

            $insert[] = [
                'bulan' => $request->bulan,
                'id_pegawai' => $request->id_pegawai,
                'id_kriteria' => $request->$id_kriteria,
                'nilai' => $request->$nilai_kriteria,
            ];
        }

        Penilaian::insert($insert);

        return redirect()->route('penilaian.index')
            ->with('success', 'Data Penilaian Baru Berhasil Disimpan');
    }

}
