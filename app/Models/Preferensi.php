<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preferensi extends Model
{
    use HasFactory;

    protected $table = 'preferensi';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_pegawai', 'bulan', 'tahun', 'nilai_preferensi',
    ];

    public function pegawai()
    {
        return $this->hasMany(DataPegawai::class, 'id_pegawai', 'id');
    }
}
