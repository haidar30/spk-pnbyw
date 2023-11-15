<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    protected $table = 'penilaian';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_pegawai', 'bulan', 'tahun', 'id_kriteria', 'nilai',
    ];

    public function pegawai()
    {
        return $this->hasMany(DataPegawai::class, 'id_pegawai', 'id');
    }

    public function kriteria()
    {
        return $this->hasMany(Kriteria::class, 'id_kriteria', 'id');
    }
}