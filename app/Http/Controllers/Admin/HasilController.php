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
            $preferensi_perbulan = [];
            $tahun = $request->tahun;

            $check = Preferensi::where('tahun', $request->tahun)->count('tahun');
            if ($request->tahun != "" && $check == 0) {
                $errors = 'Nilai Preferensi pegawai tidak ditemukan. harap memunculkan hasil Klasifikasi terlebih dahulu';
                return redirect()->back()->withErrors($errors);
            } else if ($request->tahun != "" && $check != 0) {
                $data_preferensi = Preferensi::where('tahun', $request->tahun)
                                            ->join('data_pegawai', 'data_pegawai.id', '=', 'preferensi.id_pegawai')
                                            ->get()->groupBy('id_pegawai');

                $data_preferensi = $this->generateTablePreferensi($data_preferensi);
                $tampil_preferensi = $data_preferensi['tampil_preferensi'];
                $preferensi_perbulan = $data_preferensi['preferensi_perbulan'];
            }
        }

        return view('admin.penilaian.hasil', compact('eval_pegawai', 'tahun', 'tampil_preferensi', 'preferensi_perbulan'));
    }

    public function cetak($id_pegawai, $bulan){
        $data_preferensi = Preferensi::where(['id_pegawai' => $id_pegawai, 'bulan' => $bulan])
            // ->where('bulan', $bulan)
            ->join('data_pegawai', 'data_pegawai.id', '=', 'preferensi.id_pegawai')
            ->get()->first();
        $eval_pegawai = Penilaian::join('data_pegawai', 'penilaian.id_pegawai', '=', 'data_pegawai.id')
            ->join('kriteria', 'kriteria.id', '=', 'penilaian.id_kriteria')
            ->where(['bulan' => $bulan, 'id_pegawai' => $id_pegawai])
            ->get();
            // dd($data_preferensi);

        $nama_bulan = [
            '1' => 'Januari',
            '2' => 'Februari',
            '3' => 'Maret',
            '4' => 'April',
            '5' => 'Mei',
            '6' => 'Juni',
            '7' => 'Juli',
            '8' => 'Agustus',
            '9' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember',
        ];
        $bulan_surat = $nama_bulan[date('m', strtotime($bulan)) + 0];
        $tahun_surat = empty($nama_bulan[date('m', strtotime($bulan)) + 1]) ? $nama_bulan[1] . ' ' . date('Y', strtotime($bulan)) + 1 : $nama_bulan[date('m', strtotime($bulan)) + 1] . ' ' . date('Y', strtotime($bulan));
        $tanggal = [
            'bulan' => $bulan_surat,
            'tahun' => date('Y', strtotime($bulan)),
            'tgl_surat' => $tahun_surat,
        ];
        // dd($tanggal);
        // foreach($eval_pegawai as $key => $value){
        //     $tampil_eval[$value->kriteria] = $value->nilai;
        // }
        // dd($tampil_eval);
        
        // $data_preferensi = $this->generateTablePreferensi($data_preferensi);
        // $tampil_preferensi = $data_preferensi['tampil_preferensi'];
        // $preferensi_perbulan = $data_preferensi['preferensi_perbulan'];

        return view('admin.penilaian.cetak', compact('eval_pegawai', 'data_preferensi', 'tanggal'));
    }
    public function cetak_pertahun($tahun){
        $data_preferensi = Preferensi::where('tahun', $tahun)
                        ->join('data_pegawai', 'data_pegawai.id', '=', 'preferensi.id_pegawai')
                        ->get()->groupBy('id_pegawai');
                        // dd($data_preferensi);

        $data_preferensi = $this->generateTablePreferensi($data_preferensi);
        $tampil_preferensi = $data_preferensi['tampil_preferensi'];
        $preferensi_perbulan = $data_preferensi['preferensi_perbulan'];
        // foreach($preferensi_perbulan as $key => $value){
        //     $preferensi_perbulan[$key]['avg'] = ;
        // }

        return view('admin.penilaian.cetak-pertahun', compact('tampil_preferensi', 'tahun', 'preferensi_perbulan'));
    }

    private function generateTablePreferensi($data_preferensi) {
        $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

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
                'id_pegawai' => $value->value('id'),
                'nilai_preferensi' => $avg,
                'nama' => $value->value('nama'),
                'jabatan' => $value->value('jabatan'),
                'kontrak' => $kontrak
            ];
            $preferensi_perbulan[$value->value('id')] = $bulan_data;
        }
        $tampil_preferensi = collect($preferensi)->sortByDesc('nilai_preferensi');

        $data = [
            'tampil_preferensi' => $tampil_preferensi,
            'preferensi_perbulan' => $preferensi_perbulan
        ];

        return $data;
    }
}
