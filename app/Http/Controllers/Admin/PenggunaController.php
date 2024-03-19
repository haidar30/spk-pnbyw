<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    public function index() {
        $users = DB::table('users')->get();
        return view('admin.pengguna.index', compact('users'));
    }
    
    public function create() {
        $users = null;
        return view('admin.pengguna.create',compact('users'));
    }

    public function store(Request $request) {
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'type' => $request->type,
            'jabatan' => $request->jabatan,
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('pengguna.index')
                        ->with('success', 'Data Pengguna baru telah berhasil disimpan.');
    }

    public function edit($id) {
        $users = DB::table('users')->where('id', $id)->first();
        return view('admin.pengguna.edit', compact('users'));
    }

    public function update(Request $request) {
        DB::table('users')->where('id',$request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'type' => $request->type,
            'jabatan' => $request->jabatan,
            // 'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('pengguna.index')
        ->with('success', 'Data Pengguna Berhasil Diperbarui.');
    }

    public function destroy($id) {
        DB::table('users')->where('id',$id)->delete();
        return redirect()->route('pengguna.index')
                        ->with('success', 'Data Pengguna Berhasil Dihapus.');
    }
}
