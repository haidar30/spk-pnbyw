<?php

namespace Database\Seeders;

use App\Models\Penilaian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenilaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Penilaian::truncate();

        // Data dummy
        DB::table('penilaian')->insert([
            [
                'id_pegawai' => '1',
                'bulan' => '2023-11',
                'id_kriteria' => '1',
                'nilai' => '5'
            ],
            [
                'id_pegawai' => '1',
                'bulan' => '2023-11',
                'id_kriteria' => '2',
                'nilai' => '5'
            ],
            [
                'id_pegawai' => '1',
                'bulan' => '2023-11',
                'id_kriteria' => '3',
                'nilai' => '5'
            ],
            [
                'id_pegawai' => '1',
                'bulan' => '2023-11',
                'id_kriteria' => '4',
                'nilai' => '5'
            ],
            [
                'id_pegawai' => '1',
                'bulan' => '2023-11',
                'id_kriteria' => '5',
                'nilai' => '5'
            ],
            [
                'id_pegawai' => '1',
                'bulan' => '2023-11',
                'id_kriteria' => '6',
                'nilai' => '5'
            ],
            [
                'id_pegawai' => '2',
                'bulan' => '2023-11',
                'id_kriteria' => '1',
                'nilai' => '5'
            ],
            [
                'id_pegawai' => '2',
                'bulan' => '2023-11',
                'id_kriteria' => '2',
                'nilai' => '5'
            ],
            [
                'id_pegawai' => '2',
                'bulan' => '2023-11',
                'id_kriteria' => '3',
                'nilai' => '5'
            ],
            [
                'id_pegawai' => '2',
                'bulan' => '2023-11',
                'id_kriteria' => '4',
                'nilai' => '5'
            ],
            [
                'id_pegawai' => '2',
                'bulan' => '2023-11',
                'id_kriteria' => '5',
                'nilai' => '5'
            ],
            [
                'id_pegawai' => '2',
                'bulan' => '2023-11',
                'id_kriteria' => '6',
                'nilai' => '5'
            ],
            [
                'id_pegawai' => '3',
                'bulan' => '2023-11',
                'id_kriteria' => '1',
                'nilai' => '5'
            ],
            [
                'id_pegawai' => '3',
                'bulan' => '2023-11',
                'id_kriteria' => '2',
                'nilai' => '5'
            ],
            [
                'id_pegawai' => '3',
                'bulan' => '2023-11',
                'id_kriteria' => '3',
                'nilai' => '5'
            ],
            [
                'id_pegawai' => '3',
                'bulan' => '2023-11',
                'id_kriteria' => '4',
                'nilai' => '5'
            ],
            [
                'id_pegawai' => '3',
                'bulan' => '2023-11',
                'id_kriteria' => '5',
                'nilai' => '5'
            ],
            [
                'id_pegawai' => '3',
                'bulan' => '2023-11',
                'id_kriteria' => '6',
                'nilai' => '5'
            ],
            [
                'id_pegawai' => '4',
                'bulan' => '2023-11',
                'id_kriteria' => '1',
                'nilai' => '5'
            ],
            [
                'id_pegawai' => '4',
                'bulan' => '2023-11',
                'id_kriteria' => '2',
                'nilai' => '5'
            ],
            [
                'id_pegawai' => '4',
                'bulan' => '2023-11',
                'id_kriteria' => '3',
                'nilai' => '5'
            ],
            [
                'id_pegawai' => '4',
                'bulan' => '2023-11',
                'id_kriteria' => '4',
                'nilai' => '5'
            ],
            [
                'id_pegawai' => '4',
                'bulan' => '2023-11',
                'id_kriteria' => '5',
                'nilai' => '5'
            ],
            [
                'id_pegawai' => '4',
                'bulan' => '2023-11',
                'id_kriteria' => '6',
                'nilai' => '5'
            ],
            [
                'id_pegawai' => '5',
                'bulan' => '2023-11',
                'id_kriteria' => '1',
                'nilai' => '5'
            ],
            [
                'id_pegawai' => '5',
                'bulan' => '2023-11',
                'id_kriteria' => '2',
                'nilai' => '5'
            ],
            [
                'id_pegawai' => '5',
                'bulan' => '2023-11',
                'id_kriteria' => '3',
                'nilai' => '5'
            ],
            [
                'id_pegawai' => '5',
                'bulan' => '2023-11',
                'id_kriteria' => '4',
                'nilai' => '5'
            ],
            [
                'id_pegawai' => '5',
                'bulan' => '2023-11',
                'id_kriteria' => '5',
                'nilai' => '5'
            ],
            [
                'id_pegawai' => '5',
                'bulan' => '2023-11',
                'id_kriteria' => '6',
                'nilai' => '5'
            ],
        ]);
    }
}
