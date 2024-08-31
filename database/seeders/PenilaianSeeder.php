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

        DB::table('penilaian')->insert([
        // Penilaian Bulan Januari 2023
            // Id Pegawai 1
            [ 'id_pegawai' => '1', 'bulan' => '2023-01', 'id_kriteria' => '1', 'nilai' => '4' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-01', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-01', 'id_kriteria' => '3', 'nilai' => '4' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-01', 'id_kriteria' => '4', 'nilai' => '4' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-01', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-01', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 2
            [ 'id_pegawai' => '2', 'bulan' => '2023-01', 'id_kriteria' => '1', 'nilai' => '4' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-01', 'id_kriteria' => '2', 'nilai' => '4' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-01', 'id_kriteria' => '3', 'nilai' => '4' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-01', 'id_kriteria' => '4', 'nilai' => '4' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-01', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-01', 'id_kriteria' => '6', 'nilai' => '4' ],
            // ID Pegawai 3
            [ 'id_pegawai' => '3', 'bulan' => '2023-01', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-01', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-01', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-01', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-01', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-01', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 4
            [ 'id_pegawai' => '4', 'bulan' => '2023-01', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-01', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-01', 'id_kriteria' => '3', 'nilai' => '4' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-01', 'id_kriteria' => '4', 'nilai' => '4' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-01', 'id_kriteria' => '5', 'nilai' => '4' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-01', 'id_kriteria' => '6', 'nilai' => '3' ],
            // ID Pegawai 5
            [ 'id_pegawai' => '5', 'bulan' => '2023-01', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-01', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-01', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-01', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-01', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-01', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 6
            [ 'id_pegawai' => '6', 'bulan' => '2023-01', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-01', 'id_kriteria' => '2', 'nilai' => '4' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-01', 'id_kriteria' => '3', 'nilai' => '4' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-01', 'id_kriteria' => '4', 'nilai' => '4' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-01', 'id_kriteria' => '5', 'nilai' => '4' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-01', 'id_kriteria' => '6', 'nilai' => '4' ],
            // ID Pegawai 7
            [ 'id_pegawai' => '7', 'bulan' => '2023-01', 'id_kriteria' => '1', 'nilai' => '4' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-01', 'id_kriteria' => '2', 'nilai' => '4' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-01', 'id_kriteria' => '3', 'nilai' => '4' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-01', 'id_kriteria' => '4', 'nilai' => '4' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-01', 'id_kriteria' => '5', 'nilai' => '4' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-01', 'id_kriteria' => '6', 'nilai' => '2' ],
            // ID Pegawai 8
            [ 'id_pegawai' => '8', 'bulan' => '2023-01', 'id_kriteria' => '1', 'nilai' => '4' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-01', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-01', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-01', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-01', 'id_kriteria' => '5', 'nilai' => '4' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-01', 'id_kriteria' => '6', 'nilai' => '5' ],
        // End Penilaian Bulan Januari 2023
        
        // Penilaian Bulan Februari 2023
            // Id Pegawai 1
            [ 'id_pegawai' => '1', 'bulan' => '2023-02', 'id_kriteria' => '1', 'nilai' => '4' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-02', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-02', 'id_kriteria' => '3', 'nilai' => '4' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-02', 'id_kriteria' => '4', 'nilai' => '4' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-02', 'id_kriteria' => '5', 'nilai' => '4' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-02', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 2
            [ 'id_pegawai' => '2', 'bulan' => '2023-02', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-02', 'id_kriteria' => '2', 'nilai' => '4' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-02', 'id_kriteria' => '3', 'nilai' => '4' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-02', 'id_kriteria' => '4', 'nilai' => '4' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-02', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-02', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 3
            [ 'id_pegawai' => '3', 'bulan' => '2023-02', 'id_kriteria' => '1', 'nilai' => '4' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-02', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-02', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-02', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-02', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-02', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 4
            [ 'id_pegawai' => '4', 'bulan' => '2023-02', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-02', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-02', 'id_kriteria' => '3', 'nilai' => '4' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-02', 'id_kriteria' => '4', 'nilai' => '4' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-02', 'id_kriteria' => '5', 'nilai' => '4' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-02', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 5
            [ 'id_pegawai' => '5', 'bulan' => '2023-02', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-02', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-02', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-02', 'id_kriteria' => '4', 'nilai' => '4' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-02', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-02', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 6
            [ 'id_pegawai' => '6', 'bulan' => '2023-02', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-02', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-02', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-02', 'id_kriteria' => '4', 'nilai' => '4' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-02', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-02', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 7
            [ 'id_pegawai' => '7', 'bulan' => '2023-02', 'id_kriteria' => '1', 'nilai' => '4' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-02', 'id_kriteria' => '2', 'nilai' => '4' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-02', 'id_kriteria' => '3', 'nilai' => '4' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-02', 'id_kriteria' => '4', 'nilai' => '4' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-02', 'id_kriteria' => '5', 'nilai' => '4' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-02', 'id_kriteria' => '6', 'nilai' => '4' ],
            // ID Pegawai 8
            [ 'id_pegawai' => '8', 'bulan' => '2023-02', 'id_kriteria' => '1', 'nilai' => '4' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-02', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-02', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-02', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-02', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-02', 'id_kriteria' => '6', 'nilai' => '5' ],
        // End Penilaian Bulan Februari 2023

        // Penilaian Bulan Maret 2023
            // Id Pegawai 1
            [ 'id_pegawai' => '1', 'bulan' => '2023-03', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-03', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-03', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-03', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-03', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-03', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 2
            [ 'id_pegawai' => '2', 'bulan' => '2023-03', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-03', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-03', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-03', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-03', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-03', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 3
            [ 'id_pegawai' => '3', 'bulan' => '2023-03', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-03', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-03', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-03', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-03', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-03', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 4
            [ 'id_pegawai' => '4', 'bulan' => '2023-03', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-03', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-03', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-03', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-03', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-03', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 5
            [ 'id_pegawai' => '5', 'bulan' => '2023-03', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-03', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-03', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-03', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-03', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-03', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 6
            [ 'id_pegawai' => '6', 'bulan' => '2023-03', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-03', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-03', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-03', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-03', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-03', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 7
            [ 'id_pegawai' => '7', 'bulan' => '2023-03', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-03', 'id_kriteria' => '2', 'nilai' => '4' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-03', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-03', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-03', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-03', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 8
            [ 'id_pegawai' => '8', 'bulan' => '2023-03', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-03', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-03', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-03', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-03', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-03', 'id_kriteria' => '6', 'nilai' => '5' ],
        // End Penilaian Bulan Maret 2023

        // Penilaian Bulan April 2023
            // Id Pegawai 1
            [ 'id_pegawai' => '1', 'bulan' => '2023-04', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-04', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-04', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-04', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-04', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-04', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 2
            [ 'id_pegawai' => '2', 'bulan' => '2023-04', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-04', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-04', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-04', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-04', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-04', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 3
            [ 'id_pegawai' => '3', 'bulan' => '2023-04', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-04', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-04', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-04', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-04', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-04', 'id_kriteria' => '6', 'nilai' => '4' ],
            // ID Pegawai 4
            [ 'id_pegawai' => '4', 'bulan' => '2023-04', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-04', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-04', 'id_kriteria' => '3', 'nilai' => '4' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-04', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-04', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-04', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 5
            [ 'id_pegawai' => '5', 'bulan' => '2023-04', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-04', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-04', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-04', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-04', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-04', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 6
            [ 'id_pegawai' => '6', 'bulan' => '2023-04', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-04', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-04', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-04', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-04', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-04', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 7
            [ 'id_pegawai' => '7', 'bulan' => '2023-04', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-04', 'id_kriteria' => '2', 'nilai' => '4' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-04', 'id_kriteria' => '3', 'nilai' => '4' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-04', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-04', 'id_kriteria' => '5', 'nilai' => '4' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-04', 'id_kriteria' => '6', 'nilai' => '4' ],
            // ID Pegawai 8
            [ 'id_pegawai' => '8', 'bulan' => '2023-04', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-04', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-04', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-04', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-04', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-04', 'id_kriteria' => '6', 'nilai' => '5' ],
        // End Penilaian Bulan April 2023

        // Penilaian Bulan Mei 2023
            // Id Pegawai 1
            [ 'id_pegawai' => '1', 'bulan' => '2023-05', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-05', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-05', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-05', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-05', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-05', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 2
            [ 'id_pegawai' => '2', 'bulan' => '2023-05', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-05', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-05', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-05', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-05', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-05', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 3
            [ 'id_pegawai' => '3', 'bulan' => '2023-05', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-05', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-05', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-05', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-05', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-05', 'id_kriteria' => '6', 'nilai' => '4' ],
            // ID Pegawai 4
            [ 'id_pegawai' => '4', 'bulan' => '2023-05', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-05', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-05', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-05', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-05', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-05', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 5
            [ 'id_pegawai' => '5', 'bulan' => '2023-05', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-05', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-05', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-05', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-05', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-05', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 6
            [ 'id_pegawai' => '6', 'bulan' => '2023-05', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-05', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-05', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-05', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-05', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-05', 'id_kriteria' => '6', 'nilai' => '4' ],
            // ID Pegawai 7
            [ 'id_pegawai' => '7', 'bulan' => '2023-05', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-05', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-05', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-05', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-05', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-05', 'id_kriteria' => '6', 'nilai' => '4' ],
            // ID Pegawai 8
            [ 'id_pegawai' => '8', 'bulan' => '2023-05', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-05', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-05', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-05', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-05', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-05', 'id_kriteria' => '6', 'nilai' => '4' ],
        // End Penilaian Bulan Mei 2023

        // Penilaian Bulan Juni 2023
            // Id Pegawai 1
            [ 'id_pegawai' => '1', 'bulan' => '2023-06', 'id_kriteria' => '1', 'nilai' => '4' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-06', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-06', 'id_kriteria' => '3', 'nilai' => '4' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-06', 'id_kriteria' => '4', 'nilai' => '4' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-06', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-06', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 2
            [ 'id_pegawai' => '2', 'bulan' => '2023-06', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-06', 'id_kriteria' => '2', 'nilai' => '4' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-06', 'id_kriteria' => '3', 'nilai' => '4' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-06', 'id_kriteria' => '4', 'nilai' => '4' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-06', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-06', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 3
            [ 'id_pegawai' => '3', 'bulan' => '2023-06', 'id_kriteria' => '1', 'nilai' => '4' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-06', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-06', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-06', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-06', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-06', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 4
            [ 'id_pegawai' => '4', 'bulan' => '2023-06', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-06', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-06', 'id_kriteria' => '3', 'nilai' => '4' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-06', 'id_kriteria' => '4', 'nilai' => '4' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-06', 'id_kriteria' => '5', 'nilai' => '4' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-06', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 5
            [ 'id_pegawai' => '5', 'bulan' => '2023-06', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-06', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-06', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-06', 'id_kriteria' => '4', 'nilai' => '4' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-06', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-06', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 6
            [ 'id_pegawai' => '6', 'bulan' => '2023-06', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-06', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-06', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-06', 'id_kriteria' => '4', 'nilai' => '4' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-06', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-06', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 7
            [ 'id_pegawai' => '7', 'bulan' => '2023-06', 'id_kriteria' => '1', 'nilai' => '4' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-06', 'id_kriteria' => '2', 'nilai' => '4' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-06', 'id_kriteria' => '3', 'nilai' => '4' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-06', 'id_kriteria' => '4', 'nilai' => '4' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-06', 'id_kriteria' => '5', 'nilai' => '4' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-06', 'id_kriteria' => '6', 'nilai' => '4' ],
            // ID Pegawai 8
            [ 'id_pegawai' => '8', 'bulan' => '2023-06', 'id_kriteria' => '1', 'nilai' => '4' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-06', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-06', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-06', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-06', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-06', 'id_kriteria' => '6', 'nilai' => '5' ],
        // End Penilaian Bulan Juni 2023

        // Penilaian Bulan Juli 2023
            // Id Pegawai 1
            [ 'id_pegawai' => '1', 'bulan' => '2023-07', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-07', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-07', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-07', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-07', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-07', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 2
            [ 'id_pegawai' => '2', 'bulan' => '2023-07', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-07', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-07', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-07', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-07', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-07', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 3
            [ 'id_pegawai' => '3', 'bulan' => '2023-07', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-07', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-07', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-07', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-07', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-07', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 4
            [ 'id_pegawai' => '4', 'bulan' => '2023-07', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-07', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-07', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-07', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-07', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-07', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 5
            [ 'id_pegawai' => '5', 'bulan' => '2023-07', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-07', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-07', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-07', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-07', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-07', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 6
            [ 'id_pegawai' => '6', 'bulan' => '2023-07', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-07', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-07', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-07', 'id_kriteria' => '4', 'nilai' => '4' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-07', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-07', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 7
            [ 'id_pegawai' => '7', 'bulan' => '2023-07', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-07', 'id_kriteria' => '2', 'nilai' => '4' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-07', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-07', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-07', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-07', 'id_kriteria' => '6', 'nilai' => '4' ],
            // ID Pegawai 8
            [ 'id_pegawai' => '8', 'bulan' => '2023-07', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-07', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-07', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-07', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-07', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-07', 'id_kriteria' => '6', 'nilai' => '5' ],
        // End Penilaian Bulan Juli 2023

        // Penilaian Bulan Agustus 2023
            // Id Pegawai 1
            [ 'id_pegawai' => '1', 'bulan' => '2023-08', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-08', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-08', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-08', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-08', 'id_kriteria' => '5', 'nilai' => '4' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-08', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 2
            [ 'id_pegawai' => '2', 'bulan' => '2023-08', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-08', 'id_kriteria' => '2', 'nilai' => '4' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-08', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-08', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-08', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-08', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 3
            [ 'id_pegawai' => '3', 'bulan' => '2023-08', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-08', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-08', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-08', 'id_kriteria' => '4', 'nilai' => '4' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-08', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-08', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 4
            [ 'id_pegawai' => '4', 'bulan' => '2023-08', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-08', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-08', 'id_kriteria' => '3', 'nilai' => '4' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-08', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-08', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-08', 'id_kriteria' => '6', 'nilai' => '4' ],
            // ID Pegawai 5
            [ 'id_pegawai' => '5', 'bulan' => '2023-08', 'id_kriteria' => '1', 'nilai' => '4' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-08', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-08', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-08', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-08', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-08', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 6
            [ 'id_pegawai' => '6', 'bulan' => '2023-08', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-08', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-08', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-08', 'id_kriteria' => '4', 'nilai' => '4' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-08', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-08', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 7
            [ 'id_pegawai' => '7', 'bulan' => '2023-08', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-08', 'id_kriteria' => '2', 'nilai' => '4' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-08', 'id_kriteria' => '3', 'nilai' => '4' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-08', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-08', 'id_kriteria' => '5', 'nilai' => '4' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-08', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 8
            [ 'id_pegawai' => '8', 'bulan' => '2023-08', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-08', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-08', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-08', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-08', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-08', 'id_kriteria' => '6', 'nilai' => '4' ],
        // End Penilaian Bulan Agustus 2023

        // Penilaian Bulan September 2023
            // Id Pegawai 1
            [ 'id_pegawai' => '1', 'bulan' => '2023-09', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-09', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-09', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-09', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-09', 'id_kriteria' => '5', 'nilai' => '4' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-09', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 2
            [ 'id_pegawai' => '2', 'bulan' => '2023-09', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-09', 'id_kriteria' => '2', 'nilai' => '4' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-09', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-09', 'id_kriteria' => '4', 'nilai' => '4' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-09', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-09', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 3
            [ 'id_pegawai' => '3', 'bulan' => '2023-09', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-09', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-09', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-09', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-09', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-09', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 4
            [ 'id_pegawai' => '4', 'bulan' => '2023-09', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-09', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-09', 'id_kriteria' => '3', 'nilai' => '4' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-09', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-09', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-09', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 5
            [ 'id_pegawai' => '5', 'bulan' => '2023-09', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-09', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-09', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-09', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-09', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-09', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 6
            [ 'id_pegawai' => '6', 'bulan' => '2023-09', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-09', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-09', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-09', 'id_kriteria' => '4', 'nilai' => '4' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-09', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-09', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 7
            [ 'id_pegawai' => '7', 'bulan' => '2023-09', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-09', 'id_kriteria' => '2', 'nilai' => '4' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-09', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-09', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-09', 'id_kriteria' => '5', 'nilai' => '4' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-09', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 8
            [ 'id_pegawai' => '8', 'bulan' => '2023-09', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-09', 'id_kriteria' => '2', 'nilai' => '4' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-09', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-09', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-09', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-09', 'id_kriteria' => '6', 'nilai' => '5' ],
        // End Penilaian Bulan September 2023

        // Penilaian Bulan Oktober 2023
            // Id Pegawai 1
            [ 'id_pegawai' => '1', 'bulan' => '2023-10', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-10', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-10', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-10', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-10', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-10', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 2
            [ 'id_pegawai' => '2', 'bulan' => '2023-10', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-10', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-10', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-10', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-10', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-10', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 3
            [ 'id_pegawai' => '3', 'bulan' => '2023-10', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-10', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-10', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-10', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-10', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-10', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 4
            [ 'id_pegawai' => '4', 'bulan' => '2023-10', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-10', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-10', 'id_kriteria' => '3', 'nilai' => '4' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-10', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-10', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-10', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 5
            [ 'id_pegawai' => '5', 'bulan' => '2023-10', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-10', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-10', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-10', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-10', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-10', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 6
            [ 'id_pegawai' => '6', 'bulan' => '2023-10', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-10', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-10', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-10', 'id_kriteria' => '4', 'nilai' => '4' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-10', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-10', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 7
            [ 'id_pegawai' => '7', 'bulan' => '2023-10', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-10', 'id_kriteria' => '2', 'nilai' => '4' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-10', 'id_kriteria' => '3', 'nilai' => '4' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-10', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-10', 'id_kriteria' => '5', 'nilai' => '4' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-10', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 8
            [ 'id_pegawai' => '8', 'bulan' => '2023-10', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-10', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-10', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-10', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-10', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-10', 'id_kriteria' => '6', 'nilai' => '5' ],
        // End Penilaian Bulan Oktober 2023
        
        // Penilaian Bulan November 2023
            // Id Pegawai 1
            [ 'id_pegawai' => '1', 'bulan' => '2023-11', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-11', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-11', 'id_kriteria' => '3', 'nilai' => '4' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-11', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-11', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-11', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 2
            [ 'id_pegawai' => '2', 'bulan' => '2023-11', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-11', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-11', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-11', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-11', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-11', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 3
            [ 'id_pegawai' => '3', 'bulan' => '2023-11', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-11', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-11', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-11', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-11', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-11', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 4
            [ 'id_pegawai' => '4', 'bulan' => '2023-11', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-11', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-11', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-11', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-11', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-11', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 5
            [ 'id_pegawai' => '5', 'bulan' => '2023-11', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-11', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-11', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-11', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-11', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-11', 'id_kriteria' => '6', 'nilai' => '4' ],
            // ID Pegawai 6
            [ 'id_pegawai' => '6', 'bulan' => '2023-11', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-11', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-11', 'id_kriteria' => '3', 'nilai' => '4' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-11', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-11', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-11', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 7
            [ 'id_pegawai' => '7', 'bulan' => '2023-11', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-11', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-11', 'id_kriteria' => '3', 'nilai' => '4' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-11', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-11', 'id_kriteria' => '5', 'nilai' => '4' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-11', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 8
            [ 'id_pegawai' => '8', 'bulan' => '2023-11', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-11', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-11', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-11', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-11', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-11', 'id_kriteria' => '6', 'nilai' => '5' ],
        // End Penilaian Bulan November 2023

        // Penilaian Bulan Desember 2023
            // Id Pegawai 1
            [ 'id_pegawai' => '1', 'bulan' => '2023-12', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-12', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-12', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-12', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-12', 'id_kriteria' => '5', 'nilai' => '4' ],
            [ 'id_pegawai' => '1', 'bulan' => '2023-12', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 2
            [ 'id_pegawai' => '2', 'bulan' => '2023-12', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-12', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-12', 'id_kriteria' => '3', 'nilai' => '4' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-12', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-12', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '2', 'bulan' => '2023-12', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 3
            [ 'id_pegawai' => '3', 'bulan' => '2023-12', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-12', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-12', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-12', 'id_kriteria' => '4', 'nilai' => '4' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-12', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '3', 'bulan' => '2023-12', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 4
            [ 'id_pegawai' => '4', 'bulan' => '2023-12', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-12', 'id_kriteria' => '2', 'nilai' => '4' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-12', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-12', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-12', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '4', 'bulan' => '2023-12', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 5
            [ 'id_pegawai' => '5', 'bulan' => '2023-12', 'id_kriteria' => '1', 'nilai' => '4' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-12', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-12', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-12', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-12', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '5', 'bulan' => '2023-12', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 6
            [ 'id_pegawai' => '6', 'bulan' => '2023-12', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-12', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-12', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-12', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-12', 'id_kriteria' => '5', 'nilai' => '4' ],
            [ 'id_pegawai' => '6', 'bulan' => '2023-12', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 7
            [ 'id_pegawai' => '7', 'bulan' => '2023-12', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-12', 'id_kriteria' => '2', 'nilai' => '5' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-12', 'id_kriteria' => '3', 'nilai' => '4' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-12', 'id_kriteria' => '4', 'nilai' => '4' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-12', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '7', 'bulan' => '2023-12', 'id_kriteria' => '6', 'nilai' => '5' ],
            // ID Pegawai 8
            [ 'id_pegawai' => '8', 'bulan' => '2023-12', 'id_kriteria' => '1', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-12', 'id_kriteria' => '2', 'nilai' => '4' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-12', 'id_kriteria' => '3', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-12', 'id_kriteria' => '4', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-12', 'id_kriteria' => '5', 'nilai' => '5' ],
            [ 'id_pegawai' => '8', 'bulan' => '2023-12', 'id_kriteria' => '6', 'nilai' => '5' ],
        // End Penilaian Bulan Desember 2023
        ]);
    }
}
