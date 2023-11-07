<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DataPegawaiController;
use App\Http\Controllers\Admin\KriteriaController;
use App\Http\Controllers\Admin\PenilaianController;
use App\Http\Controllers\Admin\KlasifikasiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.master');
});


Auth::routes();

// // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.index');
// Route::get('/data_pegawai', [App\Http\Controllers\Admin\DataPegawaiController::class, 'index'])->name('admin.data_pegawai');
// Route::get('/data_pegawai/create', [App\Http\Controllers\Admin\DataPegawaiController::class, 'create'])->name('admin.data_pegawai.create');
// Route::get('/kriteria', [App\Http\Controllers\Admin\KriteriaController::class, 'index'])->name('admin.kriteria');
// Route::get('/kriteria/create', [App\Http\Controllers\Admin\KriteriaController::class, 'create'])->name('admin.kriteria.create');
// Route::get('/create', [App\Http\Controllers\DataPegawaiController::class, 'create'])->name('admin.data_pegawai.create');

// Route::group(['namespace' => 'Admin'], function(){
    Route::resource('dashboard', DashboardController::class);
    Route::resource('data_pegawai', DataPegawaiController::class);
    Route::resource('kriteria', KriteriaController::class);
    Route::resource('penilaian', PenilaianController::class);
    Route::resource('klasifikasi', KlasifikasiController::class);
// });


Route::get('home', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/cobalogin', function () {
    return view('admin.cobalogin');
})->middleware(['auth', 'verified'])->name('cobalogin');

Route::get('/hasil_penilaian', function () {
    return view('admin.penilaian.hasil');
})->middleware(['auth', 'verified'])->name('cobalogin');

Route::get('/laporan', function () {
    return view('admin.laporan.index');
})->middleware(['auth', 'verified'])->name('laporan');