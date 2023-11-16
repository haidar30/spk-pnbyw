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

            // SUB KRITERIA INTEGRITAS
            [
                'id_kriteria' => '1',
                'subkriteria' => 'Sangat Baik - Pegawai memiliki integritas yang sangat tinggi.',
                'bobot' => '5',
            ],
            [
                'id_kriteria' => '1',
                'subkriteria' => 'Baik - Pegawai memiliki integritas yang baik.',
                'bobot' => '4',
            ],
            [
                'id_kriteria' => '1',
                'subkriteria' => 'Cukup - Pegawai menunjukkan tingkat integritas yang memadai.',
                'bobot' => '3',
            ],
            [
                'id_kriteria' => '1',
                'subkriteria' => 'Kurang - Integritas Pegawai perlu perbaikan signifikan.',
                'bobot' => '2',
            ],
            [
                'id_kriteria' => '1',
                'subkriteria' => 'Buruk - Integritas Pegawai rendah.',
                'bobot' => '1',
            ],

            // SUB KRITERIA KEDISIPLINAN
            [
                'id_kriteria' => '2',
                'subkriteria' => 'Sangat Baik - Menunjukkan komitmen tinggi terhadap kedisiplinan pribadi dan organisasional.',
                'bobot' => '5',
            ],
            [
                'id_kriteria' => '2',
                'subkriteria' => 'Baik - Menunjukkan komitmen terhadap kedisiplinan, meskipun ada ruang untuk perbaikan.',
                'bobot' => '4',
            ],
            [
                'id_kriteria' => '2',
                'subkriteria' => 'Cukup - Dapat meningkatkan komitmen terhadap kedisiplinan.',
                'bobot' => '3',
            ],
            [
                'id_kriteria' => '2',
                'subkriteria' => 'Kurang - Memerlukan bimbingan dan perhatian intensif terkait perbaikan kedisiplinan.',
                'bobot' => '2',
            ],
            [
                'id_kriteria' => '2',
                'subkriteria' => 'Buruk - Memerlukan tindakan disipliner dan bimbingan intensif.',
                'bobot' => '1',
            ],

            // SUB KRITERIA KERJASAMA
            [
                'id_kriteria' => '3',
                'subkriteria' => 'Sangat Baik - Pegawai honorer secara konsisten berkontribusi pada kerjasama tim.',
                'bobot' => '5',
            ],
            [
                'id_kriteria' => '3',
                'subkriteria' => 'Baik - Pegawai honorer secara umum dapat bekerja sama dengan baik.',
                'bobot' => '4',
            ],
            [
                'id_kriteria' => '3',
                'subkriteria' => 'Cukup - Pegawai honorer menunjukkan kerjasama yang memadai.',
                'bobot' => '3',
            ],
            [
                'id_kriteria' => '3',
                'subkriteria' => 'Kurang - Kerjasama pegawai honorer perlu perbaikan signifikan.',
                'bobot' => '2',
            ],
            [
                'id_kriteria' => '3',
                'subkriteria' => 'Buruk - Kerjasama pegawai honorer sangat rendah.',
                'bobot' => '1',
            ],

            // SUB KRITERIA KOMUNIKASI
            [
                'id_kriteria' => '4',
                'subkriteria' => 'Sangat Baik - Pegawai honorer sangat efektif dalam berkomunikasi, baik lisan maupun tertulis.',
                'bobot' => '5',
            ],
            [
                'id_kriteria' => '4',
                'subkriteria' => 'Baik - Pegawai honorer mampu berkomunikasi dengan baik secara umum.',
                'bobot' => '4',
            ],
            [
                'id_kriteria' => '4',
                'subkriteria' => 'Cukup - egawai honorer menunjukkan kemampuan komunikasi yang memadai.',
                'bobot' => '3',
            ],
            [
                'id_kriteria' => '4',
                'subkriteria' => 'Kurang - Kemampuan komunikasi pegawai honorer perlu perbaikan signifikan.',
                'bobot' => '2',
            ],
            [
                'id_kriteria' => '4',
                'subkriteria' => 'Buruk - Pegawai honorer memiliki kesulitan dalam berkomunikasi.',
                'bobot' => '1',
            ],

            // SUB KRITERIA PELAYANAN
            [
                'id_kriteria' => '5',
                'subkriteria' => 'Sangat Baik - Pegawai honorer memberikan pelayanan yang sangat baik kepada publik.',
                'bobot' => '5',
            ],
            [
                'id_kriteria' => '5',
                'subkriteria' => 'Baik - Pelayanan yang diberikan pegawai honorer dinilai baik.',
                'bobot' => '4',
            ],
            [
                'id_kriteria' => '5',
                'subkriteria' => 'Cukup - Pelayanan pegawai honorer dinilai memadai.',
                'bobot' => '3',
            ],
            [
                'id_kriteria' => '5',
                'subkriteria' => 'Kurang - Pelayanan pegawai honorer perlu perbaikan signifikan.',
                'bobot' => '2',
            ],
            [
                'id_kriteria' => '5',
                'subkriteria' => 'Buruk - Pelayanan pegawai honorer sangat rendah.',
                'bobot' => '1',
            ],

            // SUB KRITERIA KEHADIRAN
            [
                'id_kriteria' => '6',
                'subkriteria' => 'Sangat Baik - Menunjukkan disiplin dan tanggung jawab terhadap jadwal kerja.',
                'bobot' => '5',
            ],
            [
                'id_kriteria' => '6',
                'subkriteria' => 'Baik - Menunjukkan tanggung jawab terhadap kewajiban kehadiran.',
                'bobot' => '4',
            ],
            [
                'id_kriteria' => '6',
                'subkriteria' => 'Cukup - Memerlukan perhatian agar kehadiran menjadi lebih konsisten.',
                'bobot' => '3',
            ],
            [
                'id_kriteria' => '6',
                'subkriteria' => 'Kurang - Dibutuhkan pendekatan yang lebih serius untuk meningkatkan kehadiran.',
                'bobot' => '2',
            ],
            [
                'id_kriteria' => '6',
                'subkriteria' => 'Buruk - Diperlukan tindakan disipliner untuk meningkatkan kehadiran.',
                'bobot' => '1',
            ],
        ]);
    }
}
