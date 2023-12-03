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

        // ini adalah cara untuk menggunakan fungsi dari normalisasi (biarkan dia private karena hanya untuk di file ini)
        $hasil_normalisasi = $this->Normalisasi();
        // untuk pengecekan hasilnya
        dd($hasil_normalisasi);


        // dd($data_pegawai, $data_kriteria);
        return view('admin.penilaian.create', compact('datapegawai', 'datakriteria', 'datasubkriteria'));
    }

    // kasih inputan tanggal
    private function Normalisasi() {
        // get data
        $getKriteria = Kriteria::all();
        $daftar_penilaian = Penilaian::where('bulan', '2023-11')
                                    ->join('kriteria', 'kriteria.id', '=', 'penilaian.id_kriteria')
                                    ->join('data_pegawai', 'data_pegawai.id', '=', 'penilaian.id_pegawai')
                                    ->orderby('penilaian.id_pegawai')
                                    ->get();

        // Looping setiap kriteria
        foreach ($getKriteria as $kriteria) {
            // mencari nilai maximum tiap kriteria
            $max[$kriteria->kriteria] = $daftar_penilaian->where('kriteria', $kriteria->kriteria)->max('nilai');
            // mencari nilai minimum tiap kriteria
            $min[$kriteria->kriteria] = $daftar_penilaian->where('kriteria', $kriteria->kriteria)->min('nilai');
        }

        // mencari nilai normalisasi
        foreach ($daftar_penilaian as $key => $butir_penilaian) {
            // cek benefit atau cost
            if ($butir_penilaian->jenis == 'Benefit') {
                // hasil
                // $result[$key] = [
                //     'kriteria' => $butir_penilaian->kriteria,
                //     'normalisasi' => $butir_penilaian->nilai / $max[$butir_penilaian->kriteria],
                //     'id_pegawai' => $butir_penilaian->id_pegawai
                // ];

                // versi ceck isi
                $result[$key] = $butir_penilaian->nilai / $max[$butir_penilaian->kriteria];
            }else if ($butir_penilaian->jenis == 'Cost'){
                // hasil
                // $result[$key] = [
                //     'kriteria' => $butir_penilaian->kriteria,
                //     'normalisasi' => $butir_penilaian->nilai / min[$butir_penilaian->kriteria],
                //     'id_pegawai' => $butir_penilaian->id_pegawai
                // ];

                // versi ceck isi
                $result[$key] = $butir_penilaian->nilai / $min;
            }
        }
        // mengembalikan hasil perhitungan normalisasi
        return $result;
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
