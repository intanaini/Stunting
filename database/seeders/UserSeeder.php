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
        posyandu::create([
            'idposyandu' =>'ps-01',
        'nama_posyandu' => 'posyandu magetan',
        'alamat_posyandu' =>'magetan',
        'jadwal_posyandu'=>'magetan'
        ]);
        posyandu::create([
            'idposyandu' =>'pk-01',
        'nama_posyandu' => 'puskesmas magetan',
        'alamat_posyandu' =>'magetan',
        'jadwal_posyandu'=>'magetan'
        ]);
     
        User::create([
            'id_user'=> 'penguna-'.Str::random(8),
            'name'=> 'intan',
            'nik'=> '3316135906020002',
            'role'=> 'pengguna',
            'no_hp'=> '081542381347',
            'password' =>bcrypt('12345678'),
            'status_users' => 'aktif',
            'idposyandu' =>'ps-01',

        ]);
        User::create([
            'id_user'=> 'pakar-'.Str::random(8),
            'idposyandu' =>'ps-01',

            'name'=> 'intan pakar',
            'nik'=> '3316135906020003',
            'role'=> 'pakar',
            'no_hp'=> '081542381347',

            'password' =>bcrypt('12345678'),
            'status_users' => 'aktif',
        ]);
        User::create([
            'id_user'=> 'superadmin-'.Str::random(8),
            'idposyandu' =>'pk-01',
        
            'name'=> 'intan superadmin',
            'no_hp'=> '081542381347',
            'nik'=> '3316135906020004',
            'role'=> 'superadmin',
            'password' =>bcrypt('12345678'),
            'status_users' => 'aktif',
        ]);
        User::create([
            'id_user'=> 'admin-'.Str::random(8),
            'idposyandu' =>'ps-01',

            'no_hp'=> '081542381347',
            'name'=> 'intan admin',
            'nik'=> '3316135906020005',
            'role'=> 'admin',
            'password' =>bcrypt('12345678'),
            'status_users' => 'aktif',
        ]);
       
    }
}
