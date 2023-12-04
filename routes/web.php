<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DataPegawaiController;
use App\Http\Controllers\Admin\HasilController;
use App\Http\Controllers\Admin\KriteriaController;
use App\Http\Controllers\Admin\PenilaianController;
use App\Http\Controllers\Admin\KlasifikasiController;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\Admin\SubKriteriaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Superadmin\SuperadminController;
use App\Http\Controllers\Users\UsersController;
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

//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/user/dashboard', [UsersController::class, 'index'])->name('users.index');
    Route::get('/user/klasifikasi', [UsersController::class, 'klasifikasi'])->name('users.klasifikasi.index');
    Route::get('/user/hasil', [UsersController::class, 'hasil'])->name('users.hasil.index');
    Route::get('/user/profile', [UsersController::class, 'profile'])->name('users.profile.index');
});

//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.index');
    Route::get('admin/profile', [AdminController::class, 'profile'])->name('admin.profile.index');
    Route::resource('admin/pegawai', DataPegawaiController::class);
    Route::resource('admin/kriteria', KriteriaController::class);
    Route::resource('admin/subkriteria', SubKriteriaController::class);
    Route::resource('admin/penilaian', PenilaianController::class);
    Route::resource('admin/klasifikasi', KlasifikasiController::class);
    Route::resource('admin/hasil', HasilController::class);
    Route::resource('admin/laporan', LaporanController::class);
});

//Admin Routes List
Route::middleware(['auth', 'user-access:superadmin'])->group(function () {

    Route::get('/superadmin/dashboard', [SuperadminController::class, 'index'])->name('superadmin.index');
    Route::get('/superadmin/pegawai', [SuperadminController::class, 'pegawai'])->name('superadmin.pegawai.index');
    Route::get('/superadmin/kriteria', [SuperadminController::class, 'kriteria'])->name('superadmin.kriteria.index');
    Route::get('/superadmin/subkriteria', [SuperadminController::class, 'subkriteria'])->name('superadmin.subkriteria.index');
    Route::get('/superadmin/klasifikasi', [SuperadminController::class, 'klasifikasi'])->name('superadmin.klasifikasi.index');
    Route::get('/superadmin/hasil', [SuperadminController::class, 'hasil'])->name('superadmin.hasil.index');
    Route::get('/superadmin/laporan', [SuperadminController::class, 'laporan'])->name('superadmin.laporan.index');
    Route::get('/superadmin/profile', [SuperadminController::class, 'profile'])->name('superadmin.profile.index');
});

Route::get('/comingsoon', function () {
    return view('frontend.comingsoon');
});
