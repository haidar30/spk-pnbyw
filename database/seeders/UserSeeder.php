<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::truncate();

        // Data dummy
        DB::table('users')->insert([
            [
                'name' => 'MH Pandji Santoso, S.H., M.H.,',
                'nip' => '19700218 199603 1 003',
                'email' => 'superadmin@gmail.com',
                'email_verified_at' => now(),
                'type' => '2',
                'jabatan' => 'Ketua',
                'password' => bcrypt('12341234'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Linda Kusumawati, S.H',
                'nip' => '19710529 199903 2 002',
                'email' => 'linda@gmail.com',
                'email_verified_at' => now(),
                'type' => '1',
                'jabatan' => 'Sekretaris',
                'password' => bcrypt('12341234'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Supari, S.H',
                'nip' => '19710611 199403 2 002',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'type' => '1',
                'jabatan' => 'Kasubag Kepegawaian',
                'password' => bcrypt('12341234'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Wildana Setia Warga Dinata, S.H.I., M.Sy',
                'nip' => '19890701 201403 1 003',
                'email' => 'wildan@gmail.com',
                'email_verified_at' => now(),
                'type' => '1',
                'jabatan' => 'Kasubag Umum & Keuangan',
                'password' => bcrypt('12341234'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Pudji, S.H',
                'nip' => '19670909 199103 1 002',
                'email' => 'pudji@gmail.com',
                'email_verified_at' => now(),
                'type' => '1',
                'jabatan' => 'Kasubag PTIP',
                'password' => bcrypt('12341234'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Poniyah, S.H',
                'nip' => '19650211 198603 2 003',
                'email' => 'pon@gmail.com',
                'email_verified_at' => now(),
                'type' => '1',
                'jabatan' => 'Panmud Perdata',
                'password' => bcrypt('12341234'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Slamet Syafiudin, S.H',
                'nip' => '19720511 199403 1 002',
                'email' => 'slamet@gmail.com',
                'email_verified_at' => now(),
                'type' => '1',
                'jabatan' => 'Panmud Pidana',
                'password' => bcrypt('12341234'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Khudzaifah, S.H',
                'nip' => '19670515 198903 2 015',
                'email' => 'khudzaifah@gmail.com',
                'email_verified_at' => now(),
                'type' => '1',
                'jabatan' => 'Panmud Hukum',
                'password' => bcrypt('12341234'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hariyanto',
                'nip' => '',
                'email' => 'user@gmail.com',
                'email_verified_at' => now(),
                'type' => '0',
                'jabatan' => 'Honorer Dipa',
                'password' => bcrypt('12341234'),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
