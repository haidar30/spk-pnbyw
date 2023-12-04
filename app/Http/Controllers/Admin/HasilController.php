<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use App\Models\Penilaian;
use App\Models\Preferensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HasilController extends Controller
{
    public function index(Request $request)
    {
        $kriteria = Kriteria::all();

        if ($request != "") {
            // get data
            $eval_pegawai = Penilaian::join('data_pegawai', 'penilaian.id_pegawai', '=', 'data_pegawai.id')
                            ->join('kriteria', 'kriteria.id', '=', 'penilaian.id_kriteria')
                            ->where('bulan', $request->bulan)
                            ->get();

            $data = $request->all();
            $validator = Validator::make($data, [
                'tahun' => 'string'
            ],[
                'tahun.string' => 'Tahun harus dipilih.'
            ]);

            if ($validator->fails()) {
                $errors = $validator->errors();
                return redirect()->back()->withErrors($errors);
            }
            $tampil_preferensi = [];

            $check = Preferensi::where('tahun', $request->tahun)->count('tahun');
            if ($request->tahun != "" && $check == 0) {
                $errors = 'Nilai Preferensi pegawai tidak ditemukan. harap memunculkan hasil Klasifikasi terlebih dahulu';
                return redirect()->back()->withErrors($errors);
            } else if ($request->tahun != "" && $check != 0) {
                // hapus ini jika sudah bisa memilih tahun
                // $tahun = substr($request->bulan, 0, 4);
                // dd($request->bulan);

                $data_preferensi = Preferensi::where('tahun', $request->tahun)
                                            ->join('data_pegawai', 'data_pegawai.id', '=', 'preferensi.id_pegawai')
                                            ->get()->groupBy('id_pegawai');
                // dd($data_preferensi);
                foreach ($data_preferensi as $key => $value) {
                    $avg = $value->avg('nilai_preferensi');
                    if ($avg >= 0.7 ) {
                        $kontrak = 'diperpanjang';
                    }else{
                        $kontrak = 'tidak diperpanjang';
                    }
                    $preferensi[$key] = [
                        'nilai_preferensi' => $avg,
                        'nama' => $value->value('nama'),
                        'kontrak' => $kontrak
                    ];
                }
                $tampil_preferensi = collect($preferensi)->sortByDesc('nilai_preferensi');
                // dd($tampil_preferensi);

                // if(isset($hasil_normalisasi)){
                //     return view('admin.penilaian.hasil', compact(['kriteria', 'eval_pegawai', 'tampil_normalisasi', 'perangkingan']));
                // }else{
                //     return view('admin.penilaian.hasil', compact(['kriteria', 'eval_pegawai']));
                // }
                // return view('admin.penilaian.hasil', compact(['kriteria', 'eval_pegawai', 'tampil_preferensi']));
            }
        }

        return view('admin.penilaian.hasil', compact('eval_pegawai', 'kriteria', 'tampil_preferensi'));
    }
}
