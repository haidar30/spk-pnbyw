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
            $tampil_preferensi_perbulan = [];

            $check = Preferensi::where('tahun', $request->tahun)->count('tahun');
            if ($request->tahun != "" && $check == 0) {
                $errors = 'Nilai Preferensi pegawai tidak ditemukan. harap memunculkan hasil Klasifikasi terlebih dahulu';
                return redirect()->back()->withErrors($errors);
            } else if ($request->tahun != "" && $check != 0) {
                $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

                $data_preferensi = Preferensi::where('tahun', $request->tahun)
                                            ->join('data_pegawai', 'data_pegawai.id', '=', 'preferensi.id_pegawai')
                                            ->get()->groupBy('id_pegawai');

                foreach ($data_preferensi as $key => $value) {
                    $bulan_data = array_fill_keys($months, '-');
                    // Transform data untuk mengubah format bulan dan isi data
                    foreach ($value as $item) {
                        $bulan = date('M', strtotime($item->bulan));
                        $bulan_data[$bulan] = $item->nilai_preferensi;
                    }
                    // menghitung rata-rata per bulan
                    $avg = $value->avg('nilai_preferensi');
                    $avg >= 0.7 ? $kontrak = 'diperpanjang' : $kontrak = 'tidak diperpanjang';

                    $preferensi[$key] = [
                        'nilai_preferensi' => $avg,
                        'nama' => $value->value('nama'),
                        'kontrak' => $kontrak
                    ];
                    $preferensi_perbulan[$value->value('nama')] = $bulan_data;
                }
                $tampil_preferensi = collect($preferensi)->sortByDesc('nilai_preferensi');
            }
        }

        return view('admin.penilaian.hasil', compact('eval_pegawai', 'kriteria', 'tampil_preferensi', 'preferensi_perbulan'));
    }
}
