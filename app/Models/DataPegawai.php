<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPegawai extends Model
{
    protected $table = 'data_pegawai';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama', 'jabatan', 'status', 'tahun_masuk', 'alamat',
    ];
}
