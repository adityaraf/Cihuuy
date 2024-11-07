<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            array(
                [
                    'nama_user' => 'John Doe',
                    'username' => 'john_doe',
                    'password' => bcrypt('1234'),
                    'email' => 'admin@admin',
                    'no_hp' => '081234567890',
                    'wa' => '081234567890',
                    'pin' => '1234',
                    'id_jenis_user' => '1',
                    'create_by' => 'system',
                    'update_by' => 'system'
                ],
                [
                    'nama_user' => 'Kepin',
                    'username' => 'kepin',
                    'password' => bcrypt('1234'),
                    'email' => 'kepin@gmail.com',
                    'no_hp' => '081234567891',
                    'wa' => '081234567891',
                    'pin' => '1234',
                    'id_jenis_user' => '1',
                    'create_by' => 'system',
                    'update_by' => 'system'
                ],
                [
                    'nama_user' => 'vin',
                    'username' => 'kevin',
                    'password' => bcrypt('1234'), // silahkan rubah password yang berada didalam bcrypt
                    'email' => 'kevin@gmail.com',
                    'no_hp' => '081234567892',
                    'wa' => '081234567892',
                    'pin' => '1234',
                    'id_jenis_user' => '2',
                    'create_by' => 'system',
                    'update_by' => 'system'
                ],
            )
        );
    }
}
