<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\DataPegawai;
use App\Models\Kriteria;
use App\Models\Penilaian;
use App\Models\SubKriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SuperadminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $jumlahPegawai = DataPegawai::count();
        $jumlahKriteria = Kriteria::count();
        return view('superadmin.index', compact('jumlahPegawai', 'jumlahKriteria'));
    }

    public function pegawai()
    {
        $data_pegawai = DB::table('data_pegawai')->get();
        return view('superadmin.data_pegawai.index', compact('data_pegawai'));
    }

    public function kriteria()
    {
        $kriteria = DB::table('kriteria')->get();
        return view('superadmin.kriteria.index', compact('kriteria'));
    }

    public function subkriteria()
    {
        $kriteria = Kriteria::all();
        $subkriteria = SubKriteria::all();
        return view('superadmin.sub_kriteria.index', compact('subkriteria', 'kriteria'));
    }

    public function klasifikasi(Request $request)
    {
        $kriteria = Kriteria::all();
        $eval_pegawai = Penilaian::join('data_pegawai', 'penilaian.id_pegawai', '=', 'data_pegawai.id')
                        ->join('kriteria', 'kriteria.id', '=', 'penilaian.id_kriteria')
                        ->where('bulan', $request->bulan)
                        ->get();

        
        if ($request != "") {

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
            }
        }

        return view('superadmin.penilaian.klasifikasi', compact(['kriteria', 'eval_pegawai']));
    }

    public function hasil()
    {
        return view('superadmin.penilaian.hasil');
    }

    public function laporan()
    {
        return view('superadmin.laporan.index');
    }
}
