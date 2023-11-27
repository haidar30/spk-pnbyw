<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DataPegawai;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $jumlahPegawai = DataPegawai::count();
        $jumlahKriteria = Kriteria::count();
        return view('admin.index',  compact('jumlahPegawai', 'jumlahKriteria'));
    }

    public function profile()
    {
        return view('admin.profile');
    }
}
