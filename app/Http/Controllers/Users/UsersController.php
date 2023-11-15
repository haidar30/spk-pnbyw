<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('users.index');
    }

    public function klasifikasi()
    {
        $kriteria = Kriteria::all();
        return view('users.penilaian.klasifikasi', compact('kriteria'));
    }

    public function hasil()
    {
        return view('users.penilaian.hasil');
    }
}
