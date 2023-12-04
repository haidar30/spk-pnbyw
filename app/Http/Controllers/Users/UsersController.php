<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\DataPegawai;
use App\Models\Kriteria;
use App\Models\Penilaian;
use App\Models\Preferensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $jumlahPegawai = DataPegawai::count();
        $jumlahKriteria = Kriteria::count();
        return view('users.index',  compact('jumlahPegawai', 'jumlahKriteria'));
    }

    public function klasifikasi(Request $request)
    {
        $kriteria = Kriteria::all();
        if ($request != "") {
            $eval_pegawai = Penilaian::join('data_pegawai', 'penilaian.id_pegawai', '=', 'data_pegawai.id')
                            ->join('kriteria', 'kriteria.id', '=', 'penilaian.id_kriteria')
                            ->where('bulan', $request->bulan)
                            ->get();
            $data = $request->all();
            $validator = Validator::make($data, [
                'bulan' => 'string'
            ],[
                'bulan.string' => 'Bulan harus dipilih.'
            ]);

            if ($validator->fails()) {
                $errors = $validator->errors();
                return redirect()->back()->withErrors($errors);
            }

            $check = Penilaian::where('bulan', $request->bulan)->count('bulan');
            if ($request->bulan != "" && $check == 0) {
                $errors = 'Form penilaian pegawai tidak ditemukan.';
                return redirect()->back()->withErrors($errors);

            }else if($request->bulan != "" && $check != 0){
            $hasil_normalisasi = $this->normalisasi($request->bulan);
            $tampil_normalisasi = $hasil_normalisasi->values()->toArray();
            $hasil_preferensi = $this->nilaiPreferensi($hasil_normalisasi);
            $perangkingan = collect($hasil_preferensi)->sortByDesc('nilai_preferensi')->values()->toArray();
            }
            if(isset($hasil_normalisasi)){
                return view('users.penilaian.klasifikasi', compact(['kriteria', 'eval_pegawai', 'tampil_normalisasi', 'perangkingan']));
            }else{
                return view('users.penilaian.klasifikasi', compact(['kriteria', 'eval_pegawai']));
            }
        }else{
            return view('users.penilaian.klasifikasi', compact(['kriteria']));
        }
    }

    private function normalisasi($tanggal) {
        $getKriteria = Kriteria::all();
        $daftar_penilaian = Penilaian::where('bulan', $tanggal)
                                    ->join('kriteria', 'kriteria.id', '=', 'penilaian.id_kriteria')
                                    ->join('data_pegawai', 'data_pegawai.id', '=', 'penilaian.id_pegawai')
                                    ->orderby('penilaian.id_pegawai')
                                    ->get();
        foreach ($getKriteria as $kriteria) {
            $max[$kriteria->kriteria] = $daftar_penilaian->where('kriteria', $kriteria->kriteria)->max('nilai');
            $min[$kriteria->kriteria] = $daftar_penilaian->where('kriteria', $kriteria->kriteria)->min('nilai');
        }

        foreach ($daftar_penilaian as $key => $butir_penilaian) {
            if ($butir_penilaian->jenis == 'Benefit') {
                $result[$key] = [
                    'kriteria' => $butir_penilaian->kriteria,
                    'normalisasi' => $butir_penilaian->nilai / $max[$butir_penilaian->kriteria],
                    'id_pegawai' => $butir_penilaian->id_pegawai,
                    'nama' => $butir_penilaian->nama,
                    'bulan' => $butir_penilaian->bulan,
                    'bobot' => $butir_penilaian->bobot / 100
                ];
            }else if ($butir_penilaian->jenis == 'Cost'){
                $result[$key] = [
                    'kriteria' => $butir_penilaian->kriteria,
                    'normalisasi' => $butir_penilaian->nilai / $min[$butir_penilaian->kriteria],
                    'id_pegawai' => $butir_penilaian->id_pegawai,
                    'nama' => $butir_penilaian->nama,
                    'bulan' => $butir_penilaian->bulan,
                    'bobot' => $butir_penilaian->bobot / 100
                ];
            }
        }
        return collect($result)->groupBy('id_pegawai');
    }

    private function nilaiPreferensi($data_normalisasi) {
        foreach ($data_normalisasi as $key => $value) {
            foreach ($value as $k => $butir_nilai) {
                $butir_preferensi [$k] = $butir_nilai['bobot'] * $butir_nilai['normalisasi'];
                $id_pegawai = $butir_nilai['id_pegawai'];
                $nama = $butir_nilai['nama'];
                $bulan = $butir_nilai['bulan'];
                $tahun = substr($butir_nilai['bulan'], 0, 4);
            }
            $preferensi_pegawai[$key] = [
                'nilai_preferensi' => array_sum($butir_preferensi),
                'id_pegawai' => $id_pegawai,
                'nama' => $nama,
            ];

            $masuk_database[$key] =[
                'nilai_preferensi' => array_sum($butir_preferensi),
                'id_pegawai' => $id_pegawai,
                'bulan' => $bulan,
                'tahun' => $tahun,
            ];
        }

        $data_preferensi = Preferensi::where('bulan', $bulan)->get();

        if ($data_preferensi->value('id') == null) {
                Preferensi::Insert($masuk_database);
                return $preferensi_pegawai;
        }else{
            foreach ($data_preferensi as $key => $pre) {
                $data = collect($preferensi_pegawai)->where('id_pegawai', $pre->id_pegawai)->toArray();
                Preferensi::find($pre->id)->update($data);
            }
            return $preferensi_pegawai;
        }
    }

    public function hasil(Request $request)
    {
        $kriteria = Kriteria::all();

        if ($request != "") {
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
                $data_preferensi = Preferensi::where('tahun', $request->tahun)
                                            ->join('data_pegawai', 'data_pegawai.id', '=', 'preferensi.id_pegawai')
                                            ->get()->groupBy('id_pegawai');
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
            }
        }

        return view('users.penilaian.hasil', compact('eval_pegawai', 'kriteria', 'tampil_preferensi'));
    }

    public function profile()
    {
        return view('users.profile');
    }
}
