<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KriteriaController extends Controller
{
    public function index()
    {
        $kriteria = DB::table('kriteria')->get();
        return view('admin.kriteria.index', compact('kriteria'));
    }

    public function create()
    {
        $kriteria = null;
        return view('admin.kriteria.create', compact('kriteria'));
    }

    public function store(Request $request)
    {
        DB::table('kriteria')->insert([
            'kriteria' => $request->kriteria,
            'bobot' => $request->bobot,
            'jenis' => $request->jenis
        ]);

        return redirect()->route('kriteria.index')
        ->with('success', 'Data Kriteria Baru Berhasil Disimpan');
    }

    public function edit($id) {
        $kriteria = DB::table('kriteria')->where('id', $id)->first();

        return view('admin.kriteria.create', compact('kriteria'));
    }

    public function update(Request $request) {
        DB::table('kriteria')->where('id', $request->id)->update([
            'kriteria' => $request->kriteria,
            'bobot' => $request->bobot,
            'jenis' => $request->jenis
        ]);

        return redirect()->route('kriteria.index')
        ->with('success', 'Data Kriteria Berhasil Diperbarui.');

    }

    public function destroy($id) {
        DB::table('kriteria')->where('id',$id)->delete();
        return redirect()->route('kriteria.index')->with('success', 'Data Kriteria berhasil dihapus');
    }
}
