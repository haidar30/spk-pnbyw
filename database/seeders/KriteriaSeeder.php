<?php

namespace Database\Seeders;

use App\Models\Kriteria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Kriteria::truncate();

        // Data dummy
        DB::table('kriteria')->insert([
            [
                'kriteria' => 'Integritas',
                'bobot' => '10',
                'jenis' => 'Benefit'
            ],
            [
                'kriteria' => 'Kedisiplinan',
                'bobot' => '10',
                'jenis' => 'Benefit'
            ],
            [
                'kriteria' => 'Kerjasama',
                'bobot' => '10',
                'jenis' => 'Benefit'
            ],
            [
                'kriteria' => 'Komunikasi',
                'bobot' => '10',
                'jenis' => 'Benefit'
            ],
            [
                'kriteria' => 'Pelayanan',
                'bobot' => '10',
                'jenis' => 'Benefit'
            ],
            [
                'kriteria' => 'Kehadiran',
                'bobot' => '50',
                'jenis' => 'Benefit'
            ]
        ]);
    }
}
