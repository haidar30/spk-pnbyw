<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DataPegawai;
use App\Models\Kriteria;
use App\Models\Penilaian;
use App\Models\Preferensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class KlasifikasiController extends Controller
{
    public function index(Request $request)
    {
        $kriteria = Kriteria::all();
        // dd($kriteria);

        // cek request kosong
        if ($request != "") {
            //get data
            $eval_pegawai = Penilaian::join('data_pegawai', 'penilaian.id_pegawai', '=', 'data_pegawai.id')
                            ->join('kriteria', 'kriteria.id', '=', 'penilaian.id_kriteria')
                            ->where('bulan', $request->bulan)
                            ->get();
            // dd($eval_pegawai);

            // buat apa?
            $data = $request->all();
            // validator
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
                // ini adalah cara untuk menggunakan fungsi dari normalisasi (biarkan dia private karena hanya untuk di file ini)
                $hasil_normalisasi = $this->normalisasi($request->bulan);
                // untuk pengecekan hasilnya
                // dd($hasil_normalisasi);
                $tampil_normalisasi = $hasil_normalisasi->values()->toArray();
                // dd($tampil_normalisasi);

                // ini cara untuk menggunakan fungsi dari perhitungan nilai preferensi berdasarkan id_pegawai
                $hasil_preferensi = $this->nilaiPreferensi($hasil_normalisasi);
                // untuk pengecekan hasilnya
                // dd($hasil_preferensi);

                // cara menggunakan perangkingan.
                // (jika akan menggunakan foreach perhatikan cara pemanggilan variable pada butir preferensi di bawah/ fungsi nilaiPre)
                $perangkingan = collect($hasil_preferensi)->sortByDesc('nilai_preferensi')->values()->toArray();
                // untuk pengecekan hasilnya
                // dd($perangkingan);
            }
            if(isset($hasil_normalisasi)){
                return view('admin.penilaian.klasifikasi', compact(['kriteria', 'eval_pegawai', 'tampil_normalisasi', 'perangkingan']));
            }else{
                return view('admin.penilaian.klasifikasi', compact(['kriteria', 'eval_pegawai']));
            }
        }else{
            return view('admin.penilaian.klasifikasi', compact(['kriteria']));
        }
    }

    // kasih inputan tanggal
    private function normalisasi($tanggal) {
        // get data
        $getKriteria = Kriteria::all();
        $daftar_penilaian = Penilaian::where('bulan', $tanggal)
                                    ->join('kriteria', 'kriteria.id', '=', 'penilaian.id_kriteria')
                                    ->join('data_pegawai', 'data_pegawai.id', '=', 'penilaian.id_pegawai')
                                    ->orderby('penilaian.id_pegawai')
                                    ->get();
        // dd($daftar_penilaian);
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
                $result[$key] = [
                    'kriteria' => $butir_penilaian->kriteria,
                    'normalisasi' => $butir_penilaian->nilai / $max[$butir_penilaian->kriteria],
                    'id_pegawai' => $butir_penilaian->id_pegawai,
                    'nama' => $butir_penilaian->nama,
                    'bulan' => $butir_penilaian->bulan,
                    'bobot' => $butir_penilaian->bobot / 100
                ];

                // versi ceck isi
                // $result[$key]  = $butir_penilaian->nilai / $max[$butir_penilaian->kriteria];
            }else if ($butir_penilaian->jenis == 'Cost'){
                // hasil
                $result[$key] = [
                    'kriteria' => $butir_penilaian->kriteria,
                    'normalisasi' => $butir_penilaian->nilai / $min[$butir_penilaian->kriteria],
                    'id_pegawai' => $butir_penilaian->id_pegawai,
                    'nama' => $butir_penilaian->nama,
                    'bulan' => $butir_penilaian->bulan,
                    'bobot' => $butir_penilaian->bobot / 100
                ];
                // versi ceck isi
                // $result[$key] = $butir_penilaian->nilai / $min;
            }
        }
        // mengembalikan hasil perhitungan normalisasi
        return collect($result)->groupBy('id_pegawai');
    }

    private function nilaiPreferensi($data_normalisasi) {
        // mengalikan bobot dengan hasil normalisasi untuk mendapatkan nilai preferensi
        foreach ($data_normalisasi as $key => $value) {
            foreach ($value as $k => $butir_nilai) {
                // cara menggunakan forech yg tepat untuk method collect() karena dgn tanda panah tidak dapat dijalankan
                $butir_preferensi [$k] = $butir_nilai['bobot'] * $butir_nilai['normalisasi'];
                $id_pegawai = $butir_nilai['id_pegawai'];
                $nama = $butir_nilai['nama'];
                $bulan = $butir_nilai['bulan'];
                $tahun = substr($butir_nilai['bulan'], 0, 4);
            }
            // data hasil preferensi
            $preferensi_pegawai[$key] = [
                'nilai_preferensi' => array_sum($butir_preferensi),
                'id_pegawai' => $id_pegawai,
                'nama' => $nama,
            ];

            $masuk_database = [
                'nilai_preferensi' => array_sum($butir_preferensi),
                'id_pegawai' => $id_pegawai,
                'bulan' => $bulan,
                'tahun' => $tahun,
            ];
            DB::table('preferensi')
                ->updateOrInsert(
                    ['id_pegawai' => $id_pegawai, 'bulan' => $bulan, 'tahun' => $tahun],
                    $masuk_database
                );
            //ini tidak bisa dipake karna harus nambah kolom create_at sama update_at di DB note: MALAS wkwk
            // Preferensi::updateOrCreate(['id_pegawai' => $id_pegawai, 'bulan' => $bulan, 'tahun' => $tahun], $masuk_database);
        }
        // dd($id_pegawai);

        // $data_preferensi = Preferensi::where('bulan', $bulan)->get();

        // // dd($data_preferensi);

        // // jika ada harusnya update dulu baru return
        // if ($data_preferensi->value('id') == null) {
        //         Preferensi::Insert($masuk_database);
        // }else{
        //     // harusnya insert kalau ga ada datanya. trus update waktu ada datanya
        //     foreach ($data_preferensi as $key => $pre) {
        //         $data = collect($preferensi_pegawai)->where('id_pegawai', $pre->id_pegawai)->toArray();
        //         // Preferensi::find($pre->id)->update($data);
        //         Preferensi::updateOrCreate(['id' => $pre->id],$data);
        //         // dd(Preferensi::find($pre->id));
        //     }
        // }
        return $preferensi_pegawai;
    }
}
