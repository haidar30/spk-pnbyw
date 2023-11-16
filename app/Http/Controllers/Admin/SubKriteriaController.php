<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use App\Models\SubKriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubKriteriaController extends Controller
{
    public function index()
    {
        $kriteria = Kriteria::all();
        $subkriteria = SubKriteria::all();
        return view('admin.sub_kriteria.index', compact('kriteria', 'subkriteria'));
    }

    public function create()
    {
        $kriteria = Kriteria::all();
        $subkriteria = SubKriteria::all();
        return view('admin.sub_kriteria.create', compact('kriteria', 'subkriteria'));
    }

    public function store(Request $request)
    {
        SubKriteria::create($request->all());
        return redirect()->route('subkriteria.index')
        ->with('success', 'Data Sub-Kriteria Baru Berhasil Disimpan');
    }

    public function edit($id) 
    {
        $kriteria = Kriteria::all();
        $subkriteria = SubKriteria::find($id);
        return view('admin.sub_kriteria.edit', compact('kriteria', 'subkriteria'));
    }

    public function update(Request $request, $id) 
    {
        $subkriteria = SubKriteria::findOrFail($id); 
        $subkriteria->update($request->all());

        return redirect()->route('subkriteria.index')
        ->with('success', 'Data Sub-Kriteria Berhasil Diperbarui.');

    }

    public function destroy($id) 
    {
        DB::table('subkriteria')->where('id',$id)->delete();
        return redirect()->route('subkriteria.index')->with('success', 'Data Sub-Kriteria berhasil dihapus');
    }
}
