<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataPegawaiController extends Controller
{
    public function index() {
        $data_pegawai = DB::table('data_pegawai')->get();
        return view('admin.data_pegawai.index', compact('data_pegawai'));
    }

    public function create() {
        $data_pegawai = null;
        return view('admin.data_pegawai.create',compact('data_pegawai'));
    }

    public function store(Request $request) {
        DB::table('data_pegawai')->insert([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'status' => $request->status,
            'tahun_masuk' => $request->tahun_masuk,
            'alamat' => $request->alamat
        ]);

        return redirect()->route('pegawai.index')
                        ->with('success', 'Data Pegawai baru telah berhasil disimpan.');
    }

    public function edit($id) {
        $data_pegawai = DB::table('data_pegawai')->where('id', $id)->first();
        return view('admin.data_pegawai.edit', compact('data_pegawai'));
    }

    public function update(Request $request) {
        DB::table('data_pegawai')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'status' => $request->status,
            'tahun_masuk' => $request->tahun_masuk,
            'alamat' => $request->alamat
        ]);

        return redirect()->route('pegawai.index')
        ->with('success', 'Data Pegawai Berhasil Diperbarui.');
    }

    public function destroy($id) {
        DB::table('data_pegawai')->where('id',$id)->delete();
        return redirect()->route('pegawai.index')
                        ->with('success', 'Data Pegawai Berhasil Dihapus.');
    }

}
