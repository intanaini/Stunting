<?php

namespace Database\Seeders;

use App\Models\posyandu;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Margo Mulyo 1')->pluck('idposyandu')->first(),
            'name' => 'admin Margo Mulyo 1',
            'nik' => '31',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Margo Mulyo 3')->pluck('idposyandu')->first(),
            'name' => 'admin Margo Mulyo 2',
            'nik' => '32',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Melati 1')->pluck('idposyandu')->first(),
            'name' => 'admin Margo Mulyo 3',
            'nik' => '33',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Melati 2')->pluck('idposyandu')->first(),
            'name' => 'admin Melati 1',
            'nik' => '34',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Melati 3')->pluck('idposyandu')->first(),
            'name' => 'admin Melati 2',
            'nik' => '35',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Melati 4')->pluck('idposyandu')->first(),
            'name' => 'admin Melati 3',
            'nik' => '36',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Sido Mulyo 1')->pluck('idposyandu')->first(),
            'name' => 'admin Melati 4',
            'nik' => '37',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Sido Mulyo 2')->pluck('idposyandu')->first(),
            'name' => 'admin Sido Mulyo 1',
            'nik' => '38',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Sido Mulyo 3')->pluck('idposyandu')->first(),
            'name' => 'admin Sido Mulyo 2',
            'nik' => '39',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Sido Mulyo 4')->pluck('idposyandu')->first(),
            'name' => 'admin Sido Mulyo 3',
            'nik' => '40',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Suka Maju 1')->pluck('idposyandu')->first(),
            'name' => 'admin Sido Mulyo 4',
            'nik' => '41',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Suka Maju 2')->pluck('idposyandu')->first(),
            'name' => 'admin Suka Maju 1',
            'nik' => '42',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Suka Maju 3')->pluck('idposyandu')->first(),
            'name' => 'admin Suka Maju 2',
            'nik' => '43',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'admin Suka Maju 3',
            'nik' => '44',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Suka Maju 5')->pluck('idposyandu')->first(),
            'name' => 'admin Suka Maju 4',
            'nik' => '45',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'admin Suka Maju 5',
            'nik' => '46',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Suka Maju 7')->pluck('idposyandu')->first(),
            'name' => 'admin Suka Maju 6',
            'nik' => '47',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Suka Maju 8')->pluck('idposyandu')->first(),
            'name' => 'admin Suka Maju 7',
            'nik' => '48',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Suka Maju 9')->pluck('idposyandu')->first(),
            'name' => 'admin Suka Maju 8',
            'nik' => '49',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Lestari 1')->pluck('idposyandu')->first(),
            'name' => 'admin Suka Maju 9',
            'nik' => '50',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Lestari 2')->pluck('idposyandu')->first(),
            'name' => 'admin Lestari 1',
            'nik' => '51',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Lestari 3')->pluck('idposyandu')->first(),
            'name' => 'admin Lestari 2',
            'nik' => '52',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Lestari 4')->pluck('idposyandu')->first(),
            'name' => 'admin Lestari 3',
            'nik' => '53',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Lestari 5')->pluck('idposyandu')->first(),
            'name' => 'admin Lestari 4',
            'nik' => '54',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Lestari 6')->pluck('idposyandu')->first(),
            'name' => 'admin Lestari 5',
            'nik' => '55',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Sido Waras 1')->pluck('idposyandu')->first(),
            'name' => 'admin Lestari 6',
            'nik' => '56',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Sido Waras 2')->pluck('idposyandu')->first(),
            'name' => 'admin Sido Waras 1',
            'nik' => '57',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Melati 1')->pluck('idposyandu')->first(),
            'name' => 'admin Sido Waras 2',
            'nik' => '58',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Melati 2')->pluck('idposyandu')->first(),
            'name' => 'admin Melati 1',
            'nik' => '59',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Melati 3')->pluck('idposyandu')->first(),
            'name' => 'admin Melati 2',
            'nik' => '60',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Melati 4')->pluck('idposyandu')->first(),
            'name' => 'admin Melati 3',
            'nik' => '61',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Melati 1')->pluck('idposyandu')->first(),
            'name' => 'admin Melati 4',
            'nik' => '62',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Melati 2')->pluck('idposyandu')->first(),
            'name' => 'admin Melati 1',
            'nik' => '63',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Melati 3')->pluck('idposyandu')->first(),
            'name' => 'admin Melati 2',
            'nik' => '64',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Melati 4')->pluck('idposyandu')->first(),
            'name' => 'admin Melati 3',
            'nik' => '65',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Melati 5')->pluck('idposyandu')->first(),
            'name' => 'admin Melati 4',
            'nik' => '66',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Melati')->pluck('idposyandu')->first(),
            'name' => 'admin Melati 5',
            'nik' => '67',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);

        user::create([
            'idposyandu' => posyandu::where('nama_posyandu', 'Melati')->pluck('idposyandu')->first(),
            'name' => 'admin Melati ',
            'nik' => '68',
            'no_hp' => '81234567892',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status_users' => 'aktif',
            'id_user' => 'admin-' . Str::random(8),
        ]);
    }
}
