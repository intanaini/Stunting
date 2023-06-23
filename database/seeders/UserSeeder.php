<?php

namespace Database\Seeders;

use App\Models\posyandu;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        User::create([
            'id_user' => 'penguna-' . Str::random(8),
            'name' => 'intan',
            'nik' => '3316135906020002',
            'role' => 'pengguna',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'status_users' => 'aktif',
            'idposyandu' => 'ps-0002',

        ]);
        User::create([
            'id_user' => 'pakar-' . Str::random(8),
            'idposyandu' => 'ps-0002',

            'name' => 'intan pakar',
            'nik' => '3316135906020003',
            'role' => 'pakar',
            'no_hp' => '081542381347',

            'password' => bcrypt('12345678'),
            'status_users' => 'aktif',
        ]);
        User::create([
            'id_user' => 'superadmin-' . Str::random(8),
            'idposyandu' => 'ps-0001',

            'name' => 'intan superadmin',
            'no_hp' => '081542381347',
            'nik' => '3316135906020004',
            'role' => 'superadmin',
            'password' => bcrypt('12345678'),
            'status_users' => 'aktif',
        ]);
        User::create([
            'id_user' => 'admin-' . Str::random(8),
            'idposyandu' => 'ps-0002',

            'no_hp' => '081542381347',
            'name' => 'intan admin',
            'nik' => '3316135906020005',
            'role' => 'admin',
            'password' => bcrypt('12345678'),
            'status_users' => 'aktif',
        ]);



        
    }
}
