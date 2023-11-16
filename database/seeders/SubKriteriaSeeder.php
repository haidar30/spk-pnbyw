<?php

namespace Database\Seeders;

use App\Models\SubKriteria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubKriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        SubKriteria::truncate();

        // Data dummy
        DB::table('subkriteria')->insert([
            [
                'id_kriteria' => '1',
                'subkriteria' => 'Sangat Baik',
                'bobot' => '5',
            ],
            [
                'id_kriteria' => '1',
                'subkriteria' => 'Baik',
                'bobot' => '3',
            ],
            [
                'id_kriteria' => '1',
                'subkriteria' => 'Tidak Baik',
                'bobot' => '1',
            ],
            [
                'id_kriteria' => '2',
                'subkriteria' => 'Sangat Baik',
                'bobot' => '5',
            ],
            [
                'id_kriteria' => '2',
                'subkriteria' => 'Baik',
                'bobot' => '3',
            ],
            [
                'id_kriteria' => '2',
                'subkriteria' => 'Tidak Baik',
                'bobot' => '1',
            ],
            [
                'id_kriteria' => '3',
                'subkriteria' => 'Sangat Baik',
                'bobot' => '5',
            ],
            [
                'id_kriteria' => '3',
                'subkriteria' => 'Baik',
                'bobot' => '3',
            ],
            [
                'id_kriteria' => '3',
                'subkriteria' => 'Tidak Baik',
                'bobot' => '1',
            ],
            [
                'id_kriteria' => '4',
                'subkriteria' => 'Sangat Baik',
                'bobot' => '5',
            ],
            [
                'id_kriteria' => '4',
                'subkriteria' => 'Baik',
                'bobot' => '3',
            ],
            [
                'id_kriteria' => '4',
                'subkriteria' => 'Tidak Baik',
                'bobot' => '1',
            ],
            [
                'id_kriteria' => '5',
                'subkriteria' => 'Sangat Baik',
                'bobot' => '5',
            ],
            [
                'id_kriteria' => '5',
                'subkriteria' => 'Baik',
                'bobot' => '3',
            ],
            [
                'id_kriteria' => '5',
                'subkriteria' => 'Tidak Baik',
                'bobot' => '1',
            ],
            [
                'id_kriteria' => '6',
                'subkriteria' => 'Selalu Hadir',
                'bobot' => '5',
            ],
            [
                'id_kriteria' => '6',
                'subkriteria' => 'Jarang Tidak Hadir',
                'bobot' => '3',
            ],
            [
                'id_kriteria' => '6',
                'subkriteria' => 'Tidak Pernah Hadir',
                'bobot' => '1',
            ]
        ]);
    }
}
