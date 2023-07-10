<?php

namespace Database\Seeders;

use App\Models\posyandu;
use Illuminate\Database\Seeder;

class PosyanduSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        posyandu::create([
            'idposyandu' => 'pk-0001',
            'nama_posyandu' => 'puskesmas magetan',
            'alamat_posyandu' => 'magetan',
            'jadwal_posyandu' => '1'
        ]);
        posyandu::create([
            'idposyandu' => 'ps-0001',
            'nama_posyandu' => 'posyandu magetan',
            'alamat_posyandu' => 'magetan',
            'jadwal_posyandu' => '2'
        ]);
        posyandu::create([
            'nama_posyandu' => 'Margo Mulyo 1',
            'alamat_posyandu' => 'Ngilen ',
            'jadwal_posyandu' => '16',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Margo Mulyo 2',
            'alamat_posyandu' => 'Tempur ',
            'jadwal_posyandu' => '13',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Margo Mulyo 3',
            'alamat_posyandu' => 'Jatal ',
            'jadwal_posyandu' => '12',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Melati 1',
            'alamat_posyandu' => 'Gebangan',
            'jadwal_posyandu' => '17',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Melati 2',
            'alamat_posyandu' => 'Roworejo ',
            'jadwal_posyandu' => '18',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Melati 3',
            'alamat_posyandu' => 'Karangpung',
            'jadwal_posyandu' => '15',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Melati 4',
            'alamat_posyandu' => 'Plosorejo',
            'jadwal_posyandu' => '16',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Sido Mulyo 1',
            'alamat_posyandu' => 'Ngronggah  ',
            'jadwal_posyandu' => '20',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Sido Mulyo 2',
            'alamat_posyandu' => 'Sempu',
            'jadwal_posyandu' => '11',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Sido Mulyo 3',
            'alamat_posyandu' => 'Guplo Kulon',
            'jadwal_posyandu' => '15',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Sido Mulyo 4',
            'alamat_posyandu' => 'Guplo Wetan',
            'jadwal_posyandu' => '16',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Suka Maju 1',
            'alamat_posyandu' => 'Balong',
            'jadwal_posyandu' => '15',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Suka Maju 2',
            'alamat_posyandu' => 'Kawisan ',
            'jadwal_posyandu' => '10',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Suka Maju 3',
            'alamat_posyandu' => 'Nguter ',
            'jadwal_posyandu' => '4',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Suka Maju 4',
            'alamat_posyandu' => 'Ngreco ',
            'jadwal_posyandu' => '18',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Suka Maju 5',
            'alamat_posyandu' => 'Tanduran',
            'jadwal_posyandu' => '8',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Suka Maju 6',
            'alamat_posyandu' => 'Pungkruk',
            'jadwal_posyandu' => '8',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Suka Maju 7',
            'alamat_posyandu' => 'Ngrapoh',
            'jadwal_posyandu' => '14',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Suka Maju 8',
            'alamat_posyandu' => 'Gabluk',
            'jadwal_posyandu' => '2',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Suka Maju 9',
            'alamat_posyandu' => 'Nglencong ',
            'jadwal_posyandu' => '24',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Lestari 1',
            'alamat_posyandu' => 'Sonokidul ',
            'jadwal_posyandu' => '10',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Lestari 2',
            'alamat_posyandu' => 'Banyak Ijo ',
            'jadwal_posyandu' => '9',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Lestari 3',
            'alamat_posyandu' => 'Jomblang ',
            'jadwal_posyandu' => '3',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Lestari 4',
            'alamat_posyandu' => 'Dukuhan',
            'jadwal_posyandu' => '6',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Lestari 5',
            'alamat_posyandu' => 'Trowolu ',
            'jadwal_posyandu' => '6',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Lestari 6',
            'alamat_posyandu' => 'Temas ',
            'jadwal_posyandu' => '5',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Sido Waras 1',
            'alamat_posyandu' => 'Kodokan ',
            'jadwal_posyandu' => '20',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Sido Waras 2',
            'alamat_posyandu' => 'Bojeng ',
            'jadwal_posyandu' => '17',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Melati 1',
            'alamat_posyandu' => 'Ngriking',
            'jadwal_posyandu' => '15',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Melati 2',
            'alamat_posyandu' => 'Doyok',
            'jadwal_posyandu' => '18',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Melati 3',
            'alamat_posyandu' => 'Ngrejeng ',
            'jadwal_posyandu' => '5',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Melati 4',
            'alamat_posyandu' => 'Kemiri ',
            'jadwal_posyandu' => '10',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Melati 1',
            'alamat_posyandu' => 'Cowekan ',
            'jadwal_posyandu' => '7',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Melati 2',
            'alamat_posyandu' => 'Grogolan ',
            'jadwal_posyandu' => '22',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Melati 3',
            'alamat_posyandu' => 'Dawung ',
            'jadwal_posyandu' => '14',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Melati 4',
            'alamat_posyandu' => 'Buloh ',
            'jadwal_posyandu' => '17',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Melati 5',
            'alamat_posyandu' => 'Kalimongo',
            'jadwal_posyandu' => '19',
        ]);

        posyandu::create([
            'nama_posyandu' => 'Melati ',
            'alamat_posyandu' => 'Cungkup ',
            'jadwal_posyandu' => '16',
        ]);
    }
}
