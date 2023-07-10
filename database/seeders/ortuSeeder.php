<?php

namespace Database\Seeders;

use App\Models\posyandu;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class ortuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 1')->pluck('idposyandu')->first(),
            'name' => 'abdi manaf',
            'nik' => '3316139065071608',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 1')->pluck('idposyandu')->first(),
            'name' => 'dian sopya rahma',
            'nik' => '3316139388477521',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 1')->pluck('idposyandu')->first(),
            'name' => 'dwi wijanarko',
            'nik' => '3316131076260614',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 1')->pluck('idposyandu')->first(),
            'name' => 'FINA ELFIANA',
            'nik' => '3316136573546046',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 1')->pluck('idposyandu')->first(),
            'name' => 'IMAM',
            'nik' => '3316131823321615',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 1')->pluck('idposyandu')->first(),
            'name' => 'jari',
            'nik' => '3316134218385978',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 1')->pluck('idposyandu')->first(),
            'name' => 'KAMID BUSRONI',
            'nik' => '3316131994090383',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 1')->pluck('idposyandu')->first(),
            'name' => 'lasidi',
            'nik' => '3316138772102664',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 1')->pluck('idposyandu')->first(),
            'name' => 'm khoirudin',
            'nik' => '3316138970206467',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 1')->pluck('idposyandu')->first(),
            'name' => 'M REVAN NURADRIANSYAH',
            'nik' => '3316132936347677',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 1')->pluck('idposyandu')->first(),
            'name' => 'M SOLIKIN',
            'nik' => '3316132328173876',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 1')->pluck('idposyandu')->first(),
            'name' => 'MASPIK',
            'nik' => '3316133829601459',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 1')->pluck('idposyandu')->first(),
            'name' => 'nur',
            'nik' => '3316131230511199',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 1')->pluck('idposyandu')->first(),
            'name' => 'nur huda',
            'nik' => '3316136803774726',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 1')->pluck('idposyandu')->first(),
            'name' => 'ROFIATUL ULA',
            'nik' => '3316134494972789',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 1')->pluck('idposyandu')->first(),
            'name' => 'siti nur khasanah',
            'nik' => '3316139776471685',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 1')->pluck('idposyandu')->first(),
            'name' => 'siti rukayah',
            'nik' => '3316134206707638',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 1')->pluck('idposyandu')->first(),
            'name' => 'slamet',
            'nik' => '3316136370315024',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 1')->pluck('idposyandu')->first(),
            'name' => 'SRI LESTARI',
            'nik' => '3316134624350394',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 1')->pluck('idposyandu')->first(),
            'name' => 'sri wahyuni',
            'nik' => '3316136000293763',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 1')->pluck('idposyandu')->first(),
            'name' => 'WARDATUN',
            'nik' => '3316133789093887',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 1')->pluck('idposyandu')->first(),
            'name' => 'WARNO',
            'nik' => '3316135787251748',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 2')->pluck('idposyandu')->first(),
            'name' => 'AGUS',
            'nik' => '3316137445873689',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 2')->pluck('idposyandu')->first(),
            'name' => 'AGUS LESTARI',
            'nik' => '3316139784386451',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 2')->pluck('idposyandu')->first(),
            'name' => 'budiono',
            'nik' => '3316138178579635',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 2')->pluck('idposyandu')->first(),
            'name' => 'Dewi anggraini',
            'nik' => '3316137116897822',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 2')->pluck('idposyandu')->first(),
            'name' => 'EDI',
            'nik' => '3316132247899681',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 2')->pluck('idposyandu')->first(),
            'name' => 'ILHARI',
            'nik' => '3316136432493105',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 2')->pluck('idposyandu')->first(),
            'name' => 'MUHAMMAD',
            'nik' => '3316134044845310',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 2')->pluck('idposyandu')->first(),
            'name' => 'MUTIA',
            'nik' => '3316137823557929',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 2')->pluck('idposyandu')->first(),
            'name' => 'RUBIYANTO',
            'nik' => '3316136808575406',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 2')->pluck('idposyandu')->first(),
            'name' => 'sumijan',
            'nik' => '3316138253515991',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 2')->pluck('idposyandu')->first(),
            'name' => 'SUWAJI',
            'nik' => '3316134432999537',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 2')->pluck('idposyandu')->first(),
            'name' => 'Yemik',
            'nik' => '3316133899444323',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 2')->pluck('idposyandu')->first(),
            'name' => 'ZAENAL ARIFIN',
            'nik' => '3316137741953913',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 3')->pluck('idposyandu')->first(),
            'name' => 'Dewi',
            'nik' => '3316132819780525',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 3')->pluck('idposyandu')->first(),
            'name' => 'Dwi Nuryati',
            'nik' => '3316138447114317',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 3')->pluck('idposyandu')->first(),
            'name' => 'EKA',
            'nik' => '3316133568726959',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 3')->pluck('idposyandu')->first(),
            'name' => 'EKO SETIAWAN',
            'nik' => '3316136777216654',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 3')->pluck('idposyandu')->first(),
            'name' => 'guntari',
            'nik' => '3316131800359565',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 3')->pluck('idposyandu')->first(),
            'name' => 'Jarmini',
            'nik' => '3316135094395573',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 3')->pluck('idposyandu')->first(),
            'name' => 'joko ngabdi',
            'nik' => '3316132803607106',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 3')->pluck('idposyandu')->first(),
            'name' => 'KARMIN',
            'nik' => '3316134537280192',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 3')->pluck('idposyandu')->first(),
            'name' => 'NUR APRIKA SARI',
            'nik' => '3316131287059361',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 3')->pluck('idposyandu')->first(),
            'name' => 'NYIPTO',
            'nik' => '3316133278187189',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 3')->pluck('idposyandu')->first(),
            'name' => 'SULISTIONO',
            'nik' => '3316138928750335',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 3')->pluck('idposyandu')->first(),
            'name' => 'SUNARDI',
            'nik' => '3316134029587788',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 3')->pluck('idposyandu')->first(),
            'name' => 'SUPIRMAN',
            'nik' => '3316133496316822',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 3')->pluck('idposyandu')->first(),
            'name' => 'SUWARNO',
            'nik' => '3316137636905809',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 3')->pluck('idposyandu')->first(),
            'name' => 'YARTO',
            'nik' => '3316131820396284',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 3')->pluck('idposyandu')->first(),
            'name' => 'Yulaikah',
            'nik' => '3316134062254446',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 3')->pluck('idposyandu')->first(),
            'name' => 'YULIANINGSIH',
            'nik' => '3316131650770718',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'ANIS SOFIAH',
            'nik' => '3316132775873834',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'ARIFIN',
            'nik' => '3316137872263767',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'ASEP',
            'nik' => '3316135918982924',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'BAMBANG',
            'nik' => '3316133990822868',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'BARUS',
            'nik' => '3316133633676804',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'BESRI',
            'nik' => '3316136213861708',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'CATUR WAHYUDI',
            'nik' => '3316135509905473',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'EKO',
            'nik' => '3316137702607021',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'ENI SUMARSIH',
            'nik' => '3316131365960319',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'Eni Sumarsih',
            'nik' => '3316131048314713',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'FAUZAN',
            'nik' => '3316132082528999',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'HUDA',
            'nik' => '3316139079151687',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'irvan maulana',
            'nik' => '3316139090885452',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'JASMANI',
            'nik' => '3316139514448160',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'JUPRI',
            'nik' => '3316137712825516',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'KASMUJI',
            'nik' => '3316132264428531',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'KEMIS',
            'nik' => '3316138111969650',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'KRISNAWATI',
            'nik' => '3316138625970826',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'NANDURIN',
            'nik' => '3316134078411646',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'NGATINI',
            'nik' => '3316138571563805',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'Niswah Datun',
            'nik' => '3316135324175660',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'NYAMIN',
            'nik' => '3316138674283292',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'Rini S',
            'nik' => '3316139108950118',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'SAMSUL HADI',
            'nik' => '3316135019546433',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'Santi',
            'nik' => '3316139435814957',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'Siswanti',
            'nik' => '3316133216737357',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'SOIM',
            'nik' => '3316134268913022',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'sugito',
            'nik' => '3316135505472718',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'SULASIH',
            'nik' => '3316133873585814',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'sunardi',
            'nik' => '3316135791249846',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'SUPRIYADI',
            'nik' => '3316138649625515',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'Sutina',
            'nik' => '3316135540094948',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'Suyatun',
            'nik' => '3316134037695223',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'SUYATUN',
            'nik' => '3316134396250876',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'WALUYO SUSANTO',
            'nik' => '3316131994221718',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'Winarni',
            'nik' => '3316139204658907',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'Winarsih',
            'nik' => '3316135827092959',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'Wiwik',
            'nik' => '3316132798649193',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 4')->pluck('idposyandu')->first(),
            'name' => 'YANTORO',
            'nik' => '3316135006075960',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 5')->pluck('idposyandu')->first(),
            'name' => 'AHMAD MIZAN',
            'nik' => '3316134733970527',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 5')->pluck('idposyandu')->first(),
            'name' => 'AHMAD sahroji',
            'nik' => '3316135337655104',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 5')->pluck('idposyandu')->first(),
            'name' => 'bibit',
            'nik' => '3316134893105057',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 5')->pluck('idposyandu')->first(),
            'name' => 'DAMAKUH',
            'nik' => '3316136272747345',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 5')->pluck('idposyandu')->first(),
            'name' => 'DWI PRAYITNO',
            'nik' => '3316133609973429',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 5')->pluck('idposyandu')->first(),
            'name' => 'HERI',
            'nik' => '3316133221798889',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 5')->pluck('idposyandu')->first(),
            'name' => 'muh suBADRI',
            'nik' => '3316135068195131',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 5')->pluck('idposyandu')->first(),
            'name' => 'nurul huda',
            'nik' => '3316138068963395',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 5')->pluck('idposyandu')->first(),
            'name' => 'PARJI',
            'nik' => '3316139234714177',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 5')->pluck('idposyandu')->first(),
            'name' => 'sulasno',
            'nik' => '3316134588343420',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 5')->pluck('idposyandu')->first(),
            'name' => 'SUNANDAR',
            'nik' => '3316133016428107',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 5')->pluck('idposyandu')->first(),
            'name' => 'suyartono',
            'nik' => '3316135885847252',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 5')->pluck('idposyandu')->first(),
            'name' => 'SUYATNO',
            'nik' => '3316137810653934',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 5')->pluck('idposyandu')->first(),
            'name' => 'toni',
            'nik' => '3316137863006494',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 5')->pluck('idposyandu')->first(),
            'name' => 'wahyu eko p utomo',
            'nik' => '3316132449034387',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'AHMAD RUDI',
            'nik' => '3316139825569825',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'ALI M',
            'nik' => '3316139600434794',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'ANTOK',
            'nik' => '3316132526763967',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'ANTON',
            'nik' => '3316137637690799',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'ARI',
            'nik' => '3316134020420533',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'ARIS-SELIA',
            'nik' => '3316139818342871',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'ARUMDONI',
            'nik' => '3316135060545666',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'BADI',
            'nik' => '3316136732189624',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'BAYU H.',
            'nik' => '3316133309982146',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'ENDRI',
            'nik' => '3316132391300419',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'HASAN',
            'nik' => '3316139904872472',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'HERU',
            'nik' => '3316131500660435',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'IMRON',
            'nik' => '3316131189869199',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'JAMIN',
            'nik' => '3316137609113341',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'KOLIL-KARMINI',
            'nik' => '3316136533481426',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'LALIK',
            'nik' => '3316134296393271',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'LILIK',
            'nik' => '3316133426345976',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'M. ZAENI',
            'nik' => '3316132440888261',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'MARYANTO',
            'nik' => '3316137998203474',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'MARYOTO',
            'nik' => '3316132795635337',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'MIRHAN',
            'nik' => '3316136148491970',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'MULYONO',
            'nik' => '3316139582315563',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'MUNADI',
            'nik' => '3316138163443778',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'PARDI',
            'nik' => '3316134594658229',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'PASIMAN',
            'nik' => '3316137975018890',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'PURWANTO',
            'nik' => '3316132893033003',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'ROBIIN',
            'nik' => '3316132139652643',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'Rohmat',
            'nik' => '3316139637113253',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'SABILAL ALIF',
            'nik' => '3316133114220391',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'SANTOSO',
            'nik' => '3316139786550051',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'SOBIRIN',
            'nik' => '3316135554825597',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'SOLIKIN',
            'nik' => '3316139141930433',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'SONY',
            'nik' => '3316139300878048',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'SUGIONO',
            'nik' => '3316132995333565',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'SUGITO',
            'nik' => '3316135196242614',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'SUJI-YATMI',
            'nik' => '3316135232343453',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'SUKARDI',
            'nik' => '3316133108595287',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'SUKARJI',
            'nik' => '3316139327752105',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'SULAIMAN',
            'nik' => '3316135928141853',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'SUMARJI',
            'nik' => '3316137070549511',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'SUPARWITO',
            'nik' => '3316138564668020',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'SUPRAMI',
            'nik' => '3316133510967145',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'SUPRIADI',
            'nik' => '3316131203285125',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'SURATNO',
            'nik' => '3316136354534251',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'SUTARJI',
            'nik' => '3316137577698846',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'SUYANTO',
            'nik' => '3316137452210025',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'SUYITYNO',
            'nik' => '3316137224110367',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'SUYONO',
            'nik' => '3316138198010440',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'TARMUJI',
            'nik' => '3316133742945024',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'TEGUH',
            'nik' => '3316131833774146',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'TUMIJAN',
            'nik' => '3316137782803032',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'WAHYUDI',
            'nik' => '3316131165191253',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'WASISTO',
            'nik' => '3316135798337522',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'WIJI',
            'nik' => '3316133221360446',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'WINARKO',
            'nik' => '3316139101629169',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'YATMI',
            'nik' => '3316135335914041',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 6')->pluck('idposyandu')->first(),
            'name' => 'YOSEP',
            'nik' => '3316137986893858',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 7')->pluck('idposyandu')->first(),
            'name' => 'ADE NUR ROHMAH',
            'nik' => '3316132252543120',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 7')->pluck('idposyandu')->first(),
            'name' => 'AHMAD BAHRUDIN',
            'nik' => '3316135278516653',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 7')->pluck('idposyandu')->first(),
            'name' => 'ALI K',
            'nik' => '3316135543084950',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 7')->pluck('idposyandu')->first(),
            'name' => 'Didik purwanto',
            'nik' => '3316134663981072',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 7')->pluck('idposyandu')->first(),
            'name' => 'Didik santoso',
            'nik' => '3316134644087269',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 7')->pluck('idposyandu')->first(),
            'name' => 'HIDAYATUL',
            'nik' => '3316139040055129',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 7')->pluck('idposyandu')->first(),
            'name' => 'Karmin',
            'nik' => '3316133775875013',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 7')->pluck('idposyandu')->first(),
            'name' => 'kasturi',
            'nik' => '3316137937815254',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 7')->pluck('idposyandu')->first(),
            'name' => 'LASIDI',
            'nik' => '3316135517298715',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 7')->pluck('idposyandu')->first(),
            'name' => 'MUKLISIN AHMAD S',
            'nik' => '3316139821293315',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 7')->pluck('idposyandu')->first(),
            'name' => 'Pitoyo',
            'nik' => '3316138433219269',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 7')->pluck('idposyandu')->first(),
            'name' => 'ROCHIM',
            'nik' => '3316133809392073',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 7')->pluck('idposyandu')->first(),
            'name' => 'RUSDI',
            'nik' => '3316137349382463',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 7')->pluck('idposyandu')->first(),
            'name' => 'SAMIDI',
            'nik' => '3316136958499374',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 7')->pluck('idposyandu')->first(),
            'name' => 'Subiyanto',
            'nik' => '3316136723961883',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 7')->pluck('idposyandu')->first(),
            'name' => 'SURAT',
            'nik' => '3316138404984322',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 7')->pluck('idposyandu')->first(),
            'name' => 'SUWARJI',
            'nik' => '3316137724777900',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 7')->pluck('idposyandu')->first(),
            'name' => 'tt',
            'nik' => '3316136262110429',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 7')->pluck('idposyandu')->first(),
            'name' => 'YUSLI',
            'nik' => '3316131220648680',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 8')->pluck('idposyandu')->first(),
            'name' => 'Ahmad SOLEH',
            'nik' => '3316133127817054',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 8')->pluck('idposyandu')->first(),
            'name' => 'ANDI',
            'nik' => '3316134519211005',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 8')->pluck('idposyandu')->first(),
            'name' => 'ANGGUN',
            'nik' => '3316131741869157',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 8')->pluck('idposyandu')->first(),
            'name' => 'ARIP SUBIANTO',
            'nik' => '3316135777271665',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 8')->pluck('idposyandu')->first(),
            'name' => 'BUDI HARTONO',
            'nik' => '3316133881767208',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 8')->pluck('idposyandu')->first(),
            'name' => 'BUDIANTO',
            'nik' => '3316135171506387',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 8')->pluck('idposyandu')->first(),
            'name' => 'DIDIK SUGIYANTO',
            'nik' => '3316137435365809',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 8')->pluck('idposyandu')->first(),
            'name' => 'HERI SETIANA',
            'nik' => '3316137024616235',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 8')->pluck('idposyandu')->first(),
            'name' => 'ISMANTO',
            'nik' => '3316138701833397',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 8')->pluck('idposyandu')->first(),
            'name' => 'JASWEKO',
            'nik' => '3316138135918721',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 8')->pluck('idposyandu')->first(),
            'name' => 'Jatmiko',
            'nik' => '3316138405349618',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 8')->pluck('idposyandu')->first(),
            'name' => 'KIKIK FRENGKI',
            'nik' => '3316138003956998',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 8')->pluck('idposyandu')->first(),
            'name' => 'SELA PUJI',
            'nik' => '3316132228000421',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 8')->pluck('idposyandu')->first(),
            'name' => 'SISWANTO',
            'nik' => '3316131289207400',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 8')->pluck('idposyandu')->first(),
            'name' => 'SUGIYANTO',
            'nik' => '3316132655694073',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 8')->pluck('idposyandu')->first(),
            'name' => 'SUJI',
            'nik' => '3316133420010749',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 8')->pluck('idposyandu')->first(),
            'name' => 'Suparman',
            'nik' => '3316135048348341',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 8')->pluck('idposyandu')->first(),
            'name' => 'SUPARNO',
            'nik' => '3316139881813986',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 8')->pluck('idposyandu')->first(),
            'name' => 'SUSPRAMONO',
            'nik' => '3316131745957821',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 8')->pluck('idposyandu')->first(),
            'name' => 'SUTRISNO',
            'nik' => '3316136893564670',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 8')->pluck('idposyandu')->first(),
            'name' => 'SUWARDI',
            'nik' => '3316138561993046',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 8')->pluck('idposyandu')->first(),
            'name' => 'WIWIK',
            'nik' => '3316132353224108',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 8')->pluck('idposyandu')->first(),
            'name' => 'YADI',
            'nik' => '3316137492538086',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 9')->pluck('idposyandu')->first(),
            'name' => 'ANDI PURNOMO',
            'nik' => '3316138600425714',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 9')->pluck('idposyandu')->first(),
            'name' => 'JOKO',
            'nik' => '3316135854698985',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 9')->pluck('idposyandu')->first(),
            'name' => 'KHARUN',
            'nik' => '3316132888062838',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 9')->pluck('idposyandu')->first(),
            'name' => 'LASNO',
            'nik' => '3316136811587472',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 9')->pluck('idposyandu')->first(),
            'name' => 'M NASIR',
            'nik' => '3316138427471815',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 9')->pluck('idposyandu')->first(),
            'name' => 'PUJIANTO',
            'nik' => '3316136356770909',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 9')->pluck('idposyandu')->first(),
            'name' => 'RUDI',
            'nik' => '3316134126367319',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 9')->pluck('idposyandu')->first(),
            'name' => 'SUBIYANTO',
            'nik' => '3316135361461794',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 9')->pluck('idposyandu')->first(),
            'name' => 'SUJIMAN',
            'nik' => '3316137924319252',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            user::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 9')->pluck('idposyandu')->first(),
            'name' => 'SUKAMTO',
            'nik' => '3316134079218523',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
            
            User::create([
            'idposyandu' => posyandu::where('nama_posyandu','Suka Maju 9')->pluck('idposyandu')->first(),
            'name' => 'SULASDI',
            'nik' => '3316137650520101',
            'no_hp' => '081542381347',
            'password' => bcrypt('12345678'),
            'role' => 'pengguna',
            'status_users' => 'aktif',
            'id_user' => 'pengguna-' . Str::random(8),
             ]);
    }
}
