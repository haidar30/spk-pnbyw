<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\DataPegawai;
use App\Models\Kriteria;
use App\Models\Penilaian;
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
        
        return view('users.penilaian.klasifikasi', compact('kriteria', 'eval_pegawai'));
    }

    public function hasil(Request $request)
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

        return view('users.penilaian.hasil', compact('eval_pegawai', 'kriteria'));
    }

    public function profile()
    {
        return view('users.profile');
    }
}
