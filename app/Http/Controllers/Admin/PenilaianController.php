<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DataPegawai;
use App\Models\Kriteria;
use App\Models\Penilaian;
use App\Models\SubKriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenilaianController extends Controller
{
    public function index() {
        $datapegawai = DataPegawai::all();
        $datakriteria = Kriteria::all();
        $datasubkriteria = SubKriteria::all();
        $penilaian = DB::table('penilaian')->get();


        // dd($data_pegawai, $data_kriteria);
        return view('admin.penilaian.index', compact('penilaian', 'datapegawai', 'datakriteria', 'datasubkriteria'));
        // return view('admin.penilaian.create', compact('datapegawai', 'datakriteria', 'datasubkriteria'));
    }

    public function create() {
        $datapegawai = DataPegawai::all();
        $datakriteria = Kriteria::all();
        $datasubkriteria = SubKriteria::all();
        $penilaian = null;

        return view('admin.penilaian.create',compact('penilaian', 'datapegawai', 'datakriteria', 'datasubkriteria'));
    }

    public function store(Request $request) {
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

    public function destroy($id) {
        DB::table('penilaian')->where('id',$id)->delete();
        return redirect()->route('penilaian.index')->with('success', 'Data Penilaian berhasil dihapus');
    }

}
