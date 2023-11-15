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
                'name' => 'MH Pandji Santoso',
                'email' => 'superadmin@gmail.com',
                'email_verified_at' => now(),
                'type' => '2',
                'password' => bcrypt('12341234'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Supari',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'type' => '1',
                'password' => bcrypt('12341234'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hariyanto',
                'email' => 'user@gmail.com',
                'email_verified_at' => now(),
                'type' => '0',
                'password' => bcrypt('12341234'),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
