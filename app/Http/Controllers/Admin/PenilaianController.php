<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DataPegawai;
use App\Models\Kriteria;
use App\Models\Penilaian;
use Illuminate\Http\Request;

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
        $getKriteria = Kriteria::all();

        foreach ($getKriteria as $kriteria) {
            $nilai[] = [
                'nilai' => 'nilai_' . $kriteria->id,
                'id' =>  'id_kriteria_' . $kriteria->id
            ];
        }
        foreach ($nilai as $penilaian) {
            $isi_nilai = $penilaian['nilai'];
            $id_kriteria = $penilaian['id'];
            $insert[] = [
                'bulan' => $request->bulan,
                'tahun' => $request->tahun,
                'id_pegawai' => $request->id_pegawai,
                'id_kriteria' => $request->$id_kriteria,
                'nilai' => $request->$isi_nilai
            ];
        }
        Penilaian::insert($insert);

        return redirect()->route('penilaian.index')
        ->with('success', 'Data Penilaian Baru Berhasil Disimpan');
    }
}
