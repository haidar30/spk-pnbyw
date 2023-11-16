<?php

namespace Database\Seeders;

use App\Models\DataPegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DataPegawai::truncate();

        // Data dummy
        DB::table('data_pegawai')->insert([
            [
                'nama' => 'Hariyanto',
                'jabatan' => 'Honorer Dipa',
                'status' => 'Satpam',
                'tahun_masuk' => '2022',
                'alamat' => 'Banyuwangi'
            ],
            [
                'nama' => 'Hillarius Suparwanto',
                'jabatan' => 'Honorer Dipa',
                'status' => 'Satpam',
                'tahun_masuk' => '2010',
                'alamat' => 'Banyuwangi'
            ],
            [
                'nama' => 'Septian Eko Laksono',
                'jabatan' => 'Honorer Dipa',
                'status' => 'Pramubakti',
                'tahun_masuk' => '2015',
                'alamat' => 'Banyuwangi'
            ],
            [
                'nama' => 'Ike Agung Maulida',
                'jabatan' => 'Honorer Dipa',
                'status' => 'Pramubakti',
                'tahun_masuk' => '2016',
                'alamat' => 'Banyuwangi'
            ],
            [
                'nama' => 'Didin Bramiana Bakhtiar',
                'jabatan' => 'Honorer Dipa',
                'status' => 'Pramubakti',
                'tahun_masuk' => '2010',
                'alamat' => 'Banyuwangi'
            ],
            [
                'nama' => 'Afiif Hadiani Pratiwi',
                'jabatan' => 'Honorer Dipa',
                'status' => 'Pramubakti',
                'tahun_masuk' => '2022',
                'alamat' => 'Banyuwangi'
            ],
            [
                'nama' => 'Rudianto',
                'jabatan' => 'Honorer Dipa',
                'status' => 'Driver',
                'tahun_masuk' => '2010',
                'alamat' => 'Banyuwangi'
            ],
            [
                'nama' => 'Ummah Hayrofiq',
                'jabatan' => 'Honorer Dipa',
                'status' => 'Driver',
                'tahun_masuk' => '2016',
                'alamat' => 'Banyuwangi'
            ]
        ]);
    }
}
