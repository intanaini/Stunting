<?php

namespace Database\Seeders;

use App\Models\balita;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class balitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316136510220001',
            'idortu' => User::where('name', 'PURWANTO')->pluck('id_user')->first(),
            'nama_balita' => 'KUMAIRA DIKIYYA AZZAHRA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2022-10-25',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132909220002',
            'idortu' => User::where('name', 'ARUMDONI')->pluck('id_user')->first(),
            'nama_balita' => 'TIO MAULANA PUTRA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2022-09-29',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316502409223277',
            'idortu' => User::where('name', 'irvan maulana')->pluck('id_user')->first(),
            'nama_balita' => 'AZAM NABIL SAPUTRA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2022-09-24',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131806860001',
            'idortu' => User::where('name', 'Didik purwanto')->pluck('id_user')->first(),
            'nama_balita' => 'AHMAD SEPTIAN DIRGANTARA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2022-09-16',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316501808223939',
            'idortu' => User::where('name', 'tt')->pluck('id_user')->first(),
            'nama_balita' => 'AL FAREL SANDI JUNIANTO',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2022-08-18',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316505808221906',
            'idortu' => User::where('name', 'tt')->pluck('id_user')->first(),
            'nama_balita' => 'AZZAYLA HANANIA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2022-08-18',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316134608220001',
            'idortu' => User::where('name', 'SUTARJI')->pluck('id_user')->first(),
            'nama_balita' => 'ANINDYA ALENA KIRANA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2022-08-06',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316137107220001',
            'idortu' => User::where('name', 'Pitoyo')->pluck('id_user')->first(),
            'nama_balita' => 'ARFIA HASNA KARIMAH',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2022-07-31',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316130505220001',
            'idortu' => User::where('name', 'Dewi anggraini')->pluck('id_user')->first(),
            'nama_balita' => 'M LUTFI BAGUS IRAWAN',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2022-07-27',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316505107229258',
            'idortu' => User::where('name', 'BARUS')->pluck('id_user')->first(),
            'nama_balita' => 'AGNIYA SHANZA ALSYAMNA BARUS',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2022-07-11',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316136709229001',
            'idortu' => User::where('name', 'Jatmiko')->pluck('id_user')->first(),
            'nama_balita' => 'M FINO ALBIZAR',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2022-07-11',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316136210220001',
            'idortu' => User::where('name', 'Jatmiko')->pluck('id_user')->first(),
            'nama_balita' => 'M FANO ALHUSAYN',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2022-07-11',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316134706220001',
            'idortu' => User::where('name', 'BAYU H.')->pluck('id_user')->first(),
            'nama_balita' => 'GHEZIYA JINANDRA A. ZEYYATI',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2022-06-07',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316502605221115',
            'idortu' => User::where('name', 'NUR APRIKA SARI')->pluck('id_user')->first(),
            'nama_balita' => 'MUHAMAD HAFIDZUL AKROM',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2022-05-26',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316136605220001',
            'idortu' => User::where('name', 'Suparman')->pluck('id_user')->first(),
            'nama_balita' => 'AIRA ZAHRA RATIFA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2022-05-26',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316500805227884',
            'idortu' => User::where('name', 'EKO SETIAWAN')->pluck('id_user')->first(),
            'nama_balita' => 'MUHARA WIJAYATUL MAHMUDA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2022-05-08',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316506003224906',
            'idortu' => User::where('name', 'M SOLIKIN')->pluck('id_user')->first(),
            'nama_balita' => 'AZMA MAIZA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2022-03-20',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316506003226259',
            'idortu' => User::where('name', 'M SOLIKIN')->pluck('id_user')->first(),
            'nama_balita' => 'SYIFA MAIZA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2022-03-20',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316506003222492',
            'idortu' => User::where('name', 'm khoirudin')->pluck('id_user')->first(),
            'nama_balita' => 'ZAHRA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2022-03-20',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316135803220001',
            'idortu' => User::where('name', 'M. ZAENI')->pluck('id_user')->first(),
            'nama_balita' => 'AFISA HERA ARAFIA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2022-03-18',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316501503228556',
            'idortu' => User::where('name', 'WALUYO SUSANTO')->pluck('id_user')->first(),
            'nama_balita' => 'PRIMA SATRIA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2022-03-15',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316506802226814',
            'idortu' => User::where('name', 'KAMID BUSRONI')->pluck('id_user')->first(),
            'nama_balita' => 'FIA FARADILA FATIN',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2022-02-28',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316502802225910',
            'idortu' => User::where('name', 'FINA ELFIANA')->pluck('id_user')->first(),
            'nama_balita' => 'RAFINDRA WILDAN AMRULLAH',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2022-02-28',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316136502220001',
            'idortu' => User::where('name', 'SUGIONO')->pluck('id_user')->first(),
            'nama_balita' => 'AFIA HANIFAH BELIZAYU PUTRI',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2022-02-25',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316501201222486',
            'idortu' => User::where('name', 'M REVAN NURADRIANSYAH')->pluck('id_user')->first(),
            'nama_balita' => 'M REVAN NURADRIANSYAH',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2022-01-12',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316502612214520',
            'idortu' => User::where('name', 'CATUR WAHYUDI')->pluck('id_user')->first(),
            'nama_balita' => 'M MIRZA HANIF',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-12-26',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131912210002',
            'idortu' => User::where('name', 'YADI')->pluck('id_user')->first(),
            'nama_balita' => 'ZIDAN MAISAN ALHAFID',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-12-19',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316505712214591',
            'idortu' => User::where('name', 'lasidi')->pluck('id_user')->first(),
            'nama_balita' => 'ARINA SITI SOFIYA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-12-17',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316504812213521',
            'idortu' => User::where('name', 'YANTORO')->pluck('id_user')->first(),
            'nama_balita' => 'SAIDA NURIYA TARA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-12-08',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316134712210002',
            'idortu' => User::where('name', 'SUGITO')->pluck('id_user')->first(),
            'nama_balita' => 'AMARA ELIZA FIONA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-12-07',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316134811210001',
            'idortu' => User::where('name', 'ARIP SUBIANTO')->pluck('id_user')->first(),
            'nama_balita' => 'ANITA ZAMROATUNNISA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-11-04',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316133104210001',
            'idortu' => User::where('name', 'HERI SETIANA')->pluck('id_user')->first(),
            'nama_balita' => 'ATTA HAFIZ ALFAREZI',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-10-31',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316136610210002',
            'idortu' => User::where('name', 'WIJI')->pluck('id_user')->first(),
            'nama_balita' => 'MIKA SHANUM MALAYKA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-10-26',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316502110214154',
            'idortu' => User::where('name', 'SUWARNO')->pluck('id_user')->first(),
            'nama_balita' => 'ADAM MAULANA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-10-21',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131410210001',
            'idortu' => User::where('name', 'Ahmad SOLEH')->pluck('id_user')->first(),
            'nama_balita' => 'DAFFA SYAUQI',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-10-14',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131310210001',
            'idortu' => User::where('name', 'PASIMAN')->pluck('id_user')->first(),
            'nama_balita' => 'M. ZIDAN AFANDI',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-10-13',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131004210001',
            'idortu' => User::where('name', 'tt')->pluck('id_user')->first(),
            'nama_balita' => 'M MAUZA ALFATIH',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-10-04',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316500310211688',
            'idortu' => User::where('name', 'NYAMIN')->pluck('id_user')->first(),
            'nama_balita' => 'BADRUS SHODIQ A LAWI',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-10-03',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3315096509220002',
            'idortu' => User::where('name', 'IMRON')->pluck('id_user')->first(),
            'nama_balita' => 'AMIRA AZAHRA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-09-26',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316501509218710',
            'idortu' => User::where('name', 'jari')->pluck('id_user')->first(),
            'nama_balita' => 'M ABDUL JAMALUDIN AKBAR',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-09-15',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316134309210001',
            'idortu' => User::where('name', 'SANTOSO')->pluck('id_user')->first(),
            'nama_balita' => 'ARUMI SEKAR PRATISTA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-09-03',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316500109214519',
            'idortu' => User::where('name', 'SOIM')->pluck('id_user')->first(),
            'nama_balita' => 'M SAID ZAKY',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-09-01',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316501808226399',
            'idortu' => User::where('name', 'SUWARNO')->pluck('id_user')->first(),
            'nama_balita' => 'AHMAD HERDI PRASETYO',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-08-18',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316130810210001',
            'idortu' => User::where('name', 'YOSEP')->pluck('id_user')->first(),
            'nama_balita' => 'BARA ANDIKA PRATAMA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-08-05',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316134508210002',
            'idortu' => User::where('name', 'SURATNO')->pluck('id_user')->first(),
            'nama_balita' => 'SENA GRAWITA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-08-05',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316130408210001',
            'idortu' => User::where('name', 'SUPRIADI')->pluck('id_user')->first(),
            'nama_balita' => 'M. SAUQI AL AYUBI',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-08-04',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316130606210001',
            'idortu' => User::where('name', 'tt')->pluck('id_user')->first(),
            'nama_balita' => 'M ADI NUR H',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-06-06',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316130706210001',
            'idortu' => User::where('name', 'tt')->pluck('id_user')->first(),
            'nama_balita' => 'MUHAMMAD FARIS',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-06-01',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131305210001',
            'idortu' => User::where('name', 'SUWARDI')->pluck('id_user')->first(),
            'nama_balita' => 'ARYA RAKASOTA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-05-13',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132804210002',
            'idortu' => User::where('name', 'SOBIRIN')->pluck('id_user')->first(),
            'nama_balita' => 'ABDUL HAMID',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-04-28',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132104210001',
            'idortu' => User::where('name', 'SUTRISNO')->pluck('id_user')->first(),
            'nama_balita' => 'M FIRDAN',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-04-21',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316135004210001',
            'idortu' => User::where('name', 'WINARKO')->pluck('id_user')->first(),
            'nama_balita' => 'APRILIA ILONA ANATASYA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-04-10',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316130604210001',
            'idortu' => User::where('name', 'kasturi')->pluck('id_user')->first(),
            'nama_balita' => 'FATHAN IBRAHIM',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-04-06',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132203210001',
            'idortu' => User::where('name', 'SUKARDI')->pluck('id_user')->first(),
            'nama_balita' => 'ADVAN ADI PASETYO',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-03-23',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316501203212913',
            'idortu' => User::where('name', 'EKO')->pluck('id_user')->first(),
            'nama_balita' => 'AHMAD ROY ALVINO',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-03-12',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131003210001',
            'idortu' => User::where('name', 'ISMANTO')->pluck('id_user')->first(),
            'nama_balita' => 'FAUZAN KEVIN A',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-03-10',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316504803212193',
            'idortu' => User::where('name', 'BAMBANG')->pluck('id_user')->first(),
            'nama_balita' => 'SAHIRA AYU ARSHANTI',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-03-08',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131802210001',
            'idortu' => User::where('name', 'SUYANTO')->pluck('id_user')->first(),
            'nama_balita' => 'NAZRIL UMAR BIL FAQIH',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-02-18',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316501502219669',
            'idortu' => User::where('name', 'ASEP')->pluck('id_user')->first(),
            'nama_balita' => 'PRANAZA AKSAN ARGA S',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-02-15',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316130802210001',
            'idortu' => User::where('name', 'MARYOTO')->pluck('id_user')->first(),
            'nama_balita' => 'M DERE ALFARO',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-02-08',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316130602210001',
            'idortu' => User::where('name', 'SONY')->pluck('id_user')->first(),
            'nama_balita' => 'AL DEVARO FABIAN AR FARIZY',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-02-06',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316503001213814',
            'idortu' => User::where('name', 'SULASIH')->pluck('id_user')->first(),
            'nama_balita' => 'AMAR KOMARUDIN',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-01-30',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316130201210001',
            'idortu' => User::where('name', 'SUYITYNO')->pluck('id_user')->first(),
            'nama_balita' => 'ADZRIEL ROHMAD DUAJI',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2021-01-02',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132512200002',
            'idortu' => User::where('name', 'RUSDI')->pluck('id_user')->first(),
            'nama_balita' => 'DANIS SYAILENDRA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-12-25',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131812200001',
            'idortu' => User::where('name', 'HERI')->pluck('id_user')->first(),
            'nama_balita' => 'ABIZARD NABIL M',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-12-18',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '331613141200003',
            'idortu' => User::where('name', 'SUJI')->pluck('id_user')->first(),
            'nama_balita' => 'M YUSUF SULTAN',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-11-14',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316130511200001',
            'idortu' => User::where('name', 'WAHYUDI')->pluck('id_user')->first(),
            'nama_balita' => 'PRANANDA PUTRA A.W',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-11-05',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316135310200002',
            'idortu' => User::where('name', 'ANGGUN')->pluck('id_user')->first(),
            'nama_balita' => 'ALMAIRA ANINDYA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-10-13',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316130910200001',
            'idortu' => User::where('name', 'ALI K')->pluck('id_user')->first(),
            'nama_balita' => 'NARENDRAIQBAL AL GIFFARY',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-10-09',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316500310208771',
            'idortu' => User::where('name', 'KRISNAWATI')->pluck('id_user')->first(),
            'nama_balita' => 'ADIBA NURIYATUL AZAHRA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-10-03',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316130110200002',
            'idortu' => User::where('name', 'WIWIK')->pluck('id_user')->first(),
            'nama_balita' => 'MAULANA BINAR',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-10-01',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316135909200002',
            'idortu' => User::where('name', 'MULYONO')->pluck('id_user')->first(),
            'nama_balita' => 'NADIVA NAZLA NUR F',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-09-19',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316504309204003',
            'idortu' => User::where('name', 'SUPRIYADI')->pluck('id_user')->first(),
            'nama_balita' => 'INTAN NUR AZAHRA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-09-03',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316134608200001',
            'idortu' => User::where('name', 'SUGIYANTO')->pluck('id_user')->first(),
            'nama_balita' => 'NASHWA AIRA MUNIR',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-08-06',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '331613250720001',
            'idortu' => User::where('name', 'SUWARNO')->pluck('id_user')->first(),
            'nama_balita' => 'FADIL JUMAWAN',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-07-25',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '331613517200001',
            'idortu' => User::where('name', 'YATMI')->pluck('id_user')->first(),
            'nama_balita' => 'AFIFAH NUR ZULAIKAH',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-07-12',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316504607201196',
            'idortu' => User::where('name', 'SOLIKIN')->pluck('id_user')->first(),
            'nama_balita' => 'ZIDNI ALMUT ARDULAH',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-07-06',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316504407207417',
            'idortu' => User::where('name', 'NANDURIN')->pluck('id_user')->first(),
            'nama_balita' => 'M DEVANDRA ALFARISKI',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-07-04',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '331613270200002',
            'idortu' => User::where('name', 'ARI')->pluck('id_user')->first(),
            'nama_balita' => 'ARZIYAH AISYAH',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-06-27',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132406200001',
            'idortu' => User::where('name', 'BUDIANTO')->pluck('id_user')->first(),
            'nama_balita' => 'IBRAHIM ARFAN B',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-06-24',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132006200003',
            'idortu' => User::where('name', 'nur')->pluck('id_user')->first(),
            'nama_balita' => 'ahmad jonathan saputra',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-06-20',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316135706200001',
            'idortu' => User::where('name', 'dian sopya rahma')->pluck('id_user')->first(),
            'nama_balita' => 'askya munaya saidah',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-06-17',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131506200001',
            'idortu' => User::where('name', 'HERU')->pluck('id_user')->first(),
            'nama_balita' => 'M NATHAN AL FARIZKI',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-06-15',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131206200001',
            'idortu' => User::where('name', 'ILHARI')->pluck('id_user')->first(),
            'nama_balita' => 'ADIB AL AMINULLAH',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-06-13',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316500806209470',
            'idortu' => User::where('name', 'YUSLI')->pluck('id_user')->first(),
            'nama_balita' => 'GIBRAN RAFKA AL FAZAHRI',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-06-08',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316502605202995',
            'idortu' => User::where('name', 'SUPIRMAN')->pluck('id_user')->first(),
            'nama_balita' => 'M ZULFIKAR ALI',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-05-26',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132705200003',
            'idortu' => User::where('name', 'nurul huda')->pluck('id_user')->first(),
            'nama_balita' => 'M DYLAN AL RISKI',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-05-22',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316136205200003',
            'idortu' => User::where('name', 'toni')->pluck('id_user')->first(),
            'nama_balita' => 'DANEEN SAHIRA WIDIANTONI',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-05-22',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316502005207806',
            'idortu' => User::where('name', 'HUDA')->pluck('id_user')->first(),
            'nama_balita' => 'M AZKA ARFA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-05-20',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131005200002',
            'idortu' => User::where('name', 'suyartono')->pluck('id_user')->first(),
            'nama_balita' => 'MUHAMMAD GIBRAN ARSA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-05-16',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316501105206148',
            'idortu' => User::where('name', 'ENI SUMARSIH')->pluck('id_user')->first(),
            'nama_balita' => 'FAJAR ROMADHONI',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-05-11',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316501005203830',
            'idortu' => User::where('name', 'ANIS SOFIAH')->pluck('id_user')->first(),
            'nama_balita' => 'SYAFA NAFISA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-05-10',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316134505200001',
            'idortu' => User::where('name', 'WASISTO')->pluck('id_user')->first(),
            'nama_balita' => 'SITI FITRIANINGSIH',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-05-05',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316136004200003',
            'idortu' => User::where('name', 'guntari')->pluck('id_user')->first(),
            'nama_balita' => 'GUNTARI PUTRI RAHMADANI',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-04-24',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132104200001',
            'idortu' => User::where('name', 'SUPRAMI')->pluck('id_user')->first(),
            'nama_balita' => 'RAFASTA ADITYA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-04-21',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316136004200002',
            'idortu' => User::where('name', 'TUMIJAN')->pluck('id_user')->first(),
            'nama_balita' => 'RISMA PUTRI APRILIYANI',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-04-20',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131904200000',
            'idortu' => User::where('name', 'TEGUH')->pluck('id_user')->first(),
            'nama_balita' => 'RAKA DENY ARDIAN',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-04-19',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316501404201952',
            'idortu' => User::where('name', 'joko ngabdi')->pluck('id_user')->first(),
            'nama_balita' => 'PUJI DILAN AL FARIZKI',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-04-14',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316135102100001',
            'idortu' => User::where('name', 'AGUS')->pluck('id_user')->first(),
            'nama_balita' => 'NADILA APRILIA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-04-11',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316137003200001',
            'idortu' => User::where('name', 'SUMARJI')->pluck('id_user')->first(),
            'nama_balita' => 'KHANSA ALMIRA HUSNA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-03-30',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316136503200003',
            'idortu' => User::where('name', 'HIDAYATUL')->pluck('id_user')->first(),
            'nama_balita' => 'SALWA ZAKIYA ROHMAN',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-03-25',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316113032000003',
            'idortu' => User::where('name', 'Winarni')->pluck('id_user')->first(),
            'nama_balita' => 'MUH.PUTRA RIANDRA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-03-13',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131003200001',
            'idortu' => User::where('name', 'Dewi')->pluck('id_user')->first(),
            'nama_balita' => 'M IMRON FADIL',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-03-11',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132502200001',
            'idortu' => User::where('name', 'MUHAMMAD')->pluck('id_user')->first(),
            'nama_balita' => 'VERNANDA EZA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-03-10',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132002200003',
            'idortu' => User::where('name', 'Winarsih')->pluck('id_user')->first(),
            'nama_balita' => 'FABIAN L KHADAFI',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-02-20',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316502002201714',
            'idortu' => User::where('name', 'BAMBANG')->pluck('id_user')->first(),
            'nama_balita' => 'FABIAN L KHADAFI',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-02-20',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131902200011',
            'idortu' => User::where('name', 'sulasno')->pluck('id_user')->first(),
            'nama_balita' => 'M SHOLEH ADI NUGROGO',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-02-19',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131402200003',
            'idortu' => User::where('name', 'NYIPTO')->pluck('id_user')->first(),
            'nama_balita' => 'PUJI KANZA ZARIFA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-02-14',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131002200001',
            'idortu' => User::where('name', 'MULYONO')->pluck('id_user')->first(),
            'nama_balita' => 'NAUFAL ADITAMA ELVAN SYAHREZA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-02-10',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316130502200011',
            'idortu' => User::where('name', 'EKA')->pluck('id_user')->first(),
            'nama_balita' => 'M AZLAN AL GHIFARI',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-02-05',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316136401200001',
            'idortu' => User::where('name', 'EDI')->pluck('id_user')->first(),
            'nama_balita' => 'NAILAH ARSINTA PUTRI',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-01-24',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316506001206809',
            'idortu' => User::where('name', 'JASMANI')->pluck('id_user')->first(),
            'nama_balita' => 'MUNASIROTUN NIKMAH',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-01-20',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316134901200001',
            'idortu' => User::where('name', 'WARDATUN')->pluck('id_user')->first(),
            'nama_balita' => 'KHAYYURI KHIROTUN KHISAN',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-01-09',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316130801200001',
            'idortu' => User::where('name', 'wahyu eko p utomo')->pluck('id_user')->first(),
            'nama_balita' => 'fabian afnan hafizh prasetyo',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2020-01-08',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316137012190001',
            'idortu' => User::where('name', 'SUPARNO')->pluck('id_user')->first(),
            'nama_balita' => 'SINTIA AULIASARI',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-12-30',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132812190002',
            'idortu' => User::where('name', 'LILIK')->pluck('id_user')->first(),
            'nama_balita' => 'A LINA SENJA DWI NINGTYAS',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-12-28',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316135012190002',
            'idortu' => User::where('name', 'sumijan')->pluck('id_user')->first(),
            'nama_balita' => 'HAFIZAH HUMAIRA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-12-10',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316130712190002',
            'idortu' => User::where('name', 'ANTON')->pluck('id_user')->first(),
            'nama_balita' => 'AL KHAFI DESTA LINASTHAN',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-12-07',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316130612190003',
            'idortu' => User::where('name', 'MIRHAN')->pluck('id_user')->first(),
            'nama_balita' => 'MAVAZA AZELIA KHATIJAH',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-12-06',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316134112190001',
            'idortu' => User::where('name', 'sri wahyuni')->pluck('id_user')->first(),
            'nama_balita' => 'nayla permata zahra',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-12-01',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316136611190001',
            'idortu' => User::where('name', 'YULIANINGSIH')->pluck('id_user')->first(),
            'nama_balita' => 'RACHEL HAFIZATUL JINAN',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-11-26',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132611190001',
            'idortu' => User::where('name', 'bibit')->pluck('id_user')->first(),
            'nama_balita' => 'FAIZAL RENANDRA PUTRA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-11-26',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316136511190001',
            'idortu' => User::where('name', 'SUWAJI')->pluck('id_user')->first(),
            'nama_balita' => 'WAHYU YULIAKASIH ALFIANTI',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-11-25',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316136011190003',
            'idortu' => User::where('name', 'Rini S')->pluck('id_user')->first(),
            'nama_balita' => 'RAYNAN',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-11-20',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316135811190002',
            'idortu' => User::where('name', 'SAMSUL HADI')->pluck('id_user')->first(),
            'nama_balita' => 'NASYA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-11-19',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316135711190003',
            'idortu' => User::where('name', 'ARIFIN')->pluck('id_user')->first(),
            'nama_balita' => 'LUBNA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-11-17',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316505711197925',
            'idortu' => User::where('name', 'ARIFIN')->pluck('id_user')->first(),
            'nama_balita' => 'LUBNA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-11-17',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316504811196066',
            'idortu' => User::where('name', 'SUGITO')->pluck('id_user')->first(),
            'nama_balita' => 'NAZWA NUR LAILA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-11-08',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316130811900002',
            'idortu' => User::where('name', 'Karmin')->pluck('id_user')->first(),
            'nama_balita' => 'DAVA DWI SAPUTRA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-11-08',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316134511190011',
            'idortu' => User::where('name', 'FAUZAN')->pluck('id_user')->first(),
            'nama_balita' => 'WAID',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-11-05',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316134511190002',
            'idortu' => User::where('name', 'AGUS LESTARI')->pluck('id_user')->first(),
            'nama_balita' => 'ALIKA REHANA SAHIRAHANUM',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-11-05',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316500511195141',
            'idortu' => User::where('name', 'FAUZAN')->pluck('id_user')->first(),
            'nama_balita' => 'AHJAZAUL FAWAID',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-11-05',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316130211190001',
            'idortu' => User::where('name', 'siti nur khasanah')->pluck('id_user')->first(),
            'nama_balita' => 'arfan athafaris musyaffa',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-11-02',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316136410190001',
            'idortu' => User::where('name', 'SRI LESTARI')->pluck('id_user')->first(),
            'nama_balita' => 'kanaya bening frelika',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-10-24',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316136510190002',
            'idortu' => User::where('name', 'HERI')->pluck('id_user')->first(),
            'nama_balita' => 'ANGGUN MALIKA octavia',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-10-24',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131003190002',
            'idortu' => User::where('name', 'DWI PRAYITNO')->pluck('id_user')->first(),
            'nama_balita' => 'ferdi riskiansyah',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-10-03',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132609190005',
            'idortu' => User::where('name', 'MULYONO')->pluck('id_user')->first(),
            'nama_balita' => 'GANIH AL FATIH PUTRA AMORA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-09-26',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316134702910002',
            'idortu' => User::where('name', 'sunardi')->pluck('id_user')->first(),
            'nama_balita' => 'ZULFA ADZKIA ASHARI',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-09-20',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131709190005',
            'idortu' => User::where('name', 'SABILAL ALIF')->pluck('id_user')->first(),
            'nama_balita' => 'EDZARD BRYAN DOMANI',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-09-17',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316130603190002',
            'idortu' => User::where('name', 'ANDI PURNOMO')->pluck('id_user')->first(),
            'nama_balita' => 'ARGANATA FEBIANO PURNOMO',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-09-16',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131609190003',
            'idortu' => User::where('name', 'SULASDI')->pluck('id_user')->first(),
            'nama_balita' => 'FATIAN HIBATUL ALFARIZZI',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-09-16',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316134109190001',
            'idortu' => User::where('name', 'WAHYUDI')->pluck('id_user')->first(),
            'nama_balita' => 'WAHYU EXCELL KENZO JULIAN',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-09-14',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316130809190003',
            'idortu' => User::where('name', 'sugito')->pluck('id_user')->first(),
            'nama_balita' => 'LAILA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-09-08',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316130509190011',
            'idortu' => User::where('name', 'Yulaikah')->pluck('id_user')->first(),
            'nama_balita' => 'JASMANTO',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-09-05',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316135309170002',
            'idortu' => User::where('name', 'HASAN')->pluck('id_user')->first(),
            'nama_balita' => 'RACHEL DWI S',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-08-06',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316134408190001',
            'idortu' => User::where('name', 'KOLIL-KARMINI')->pluck('id_user')->first(),
            'nama_balita' => 'NAILAH MISHA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-08-04',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316135907190001',
            'idortu' => User::where('name', 'PARDI')->pluck('id_user')->first(),
            'nama_balita' => 'SITI PRADITA PUTRI',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-07-19',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131307190001',
            'idortu' => User::where('name', 'Didik santoso')->pluck('id_user')->first(),
            'nama_balita' => 'AHMAD JUNA NUR MUWAFIG',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-07-13',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132906190001',
            'idortu' => User::where('name', 'SUBIYANTO')->pluck('id_user')->first(),
            'nama_balita' => 'RAFA REYNAL NUR BRAMASTA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-06-29',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316136606190004',
            'idortu' => User::where('name', 'MUNADI')->pluck('id_user')->first(),
            'nama_balita' => 'FATIMAH ALMAHIRA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-06-26',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132509190001',
            'idortu' => User::where('name', 'ANTOK')->pluck('id_user')->first(),
            'nama_balita' => 'ARKANA ETHEN SAPUTRA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-05-29',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132805190011',
            'idortu' => User::where('name', 'JASWEKO')->pluck('id_user')->first(),
            'nama_balita' => 'AL FAHRI JUAN NARENDRA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-05-28',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131605190001',
            'idortu' => User::where('name', 'JASWEKO')->pluck('id_user')->first(),
            'nama_balita' => 'AL FAHRI JUAN NARENDRA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-05-28',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316136509190011',
            'idortu' => User::where('name', 'Jarmini')->pluck('id_user')->first(),
            'nama_balita' => 'KHOIRUN NAYLA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-05-25',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132505190003',
            'idortu' => User::where('name', 'KARMIN')->pluck('id_user')->first(),
            'nama_balita' => 'REVAN RAMADANI SAPUTRA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-05-25',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131605190004',
            'idortu' => User::where('name', 'Subiyanto')->pluck('id_user')->first(),
            'nama_balita' => 'ALMAIR HAUFANZA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-05-16',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316135305190011',
            'idortu' => User::where('name', 'SULISTIONO')->pluck('id_user')->first(),
            'nama_balita' => 'AQILLAPUTRI SULISTYONO',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-05-13',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131105190003',
            'idortu' => User::where('name', 'Eni Sumarsih')->pluck('id_user')->first(),
            'nama_balita' => 'FAJAR',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-05-11',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316136041980001',
            'idortu' => User::where('name', 'abdi manaf')->pluck('id_user')->first(),
            'nama_balita' => 'FAHIM AUFA AHMAD',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-04-28',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132704190003',
            'idortu' => User::where('name', 'Suyatun')->pluck('id_user')->first(),
            'nama_balita' => 'syailendra',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-04-27',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316502704193330',
            'idortu' => User::where('name', 'SUYATUN')->pluck('id_user')->first(),
            'nama_balita' => 'PERMADANI SYAILENDRA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-04-27',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316136402190001',
            'idortu' => User::where('name', 'SUPARWITO')->pluck('id_user')->first(),
            'nama_balita' => 'DZIKIRNA SHAKIRA CHILIA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-04-14',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316134704190011',
            'idortu' => User::where('name', 'ANDI')->pluck('id_user')->first(),
            'nama_balita' => 'APRILIZA SYARIFA AL HAFIZAH',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-04-07',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316130504190002',
            'idortu' => User::where('name', 'Yemik')->pluck('id_user')->first(),
            'nama_balita' => 'WILDAN RADIT',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-04-05',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132803190003',
            'idortu' => User::where('name', 'SUSPRAMONO')->pluck('id_user')->first(),
            'nama_balita' => 'NIZAM NUR AFFANDI',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-03-28',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316135802190002',
            'idortu' => User::where('name', 'ROBIIN')->pluck('id_user')->first(),
            'nama_balita' => 'NAZWA AIRA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-03-19',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316135403190005',
            'idortu' => User::where('name', 'TARMUJI')->pluck('id_user')->first(),
            'nama_balita' => 'QONITAH ZALFA FATIMAH',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-03-14',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132702190004',
            'idortu' => User::where('name', 'SUJIMAN')->pluck('id_user')->first(),
            'nama_balita' => 'KAYSAR FATHUR ROZZI',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-03-06',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316134603190002',
            'idortu' => User::where('name', 'SELA PUJI')->pluck('id_user')->first(),
            'nama_balita' => 'ARIMANDA BIBIT MASELLA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-03-06',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132802190011',
            'idortu' => User::where('name', 'SISWANTO')->pluck('id_user')->first(),
            'nama_balita' => 'MUHAMMAD LUTHFI AR-RASYID',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-02-28',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316136802190001',
            'idortu' => User::where('name', 'SUYONO')->pluck('id_user')->first(),
            'nama_balita' => 'DOBIRLIA ASKIA NUR NIKMAH',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-02-28',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132602180001',
            'idortu' => User::where('name', 'SOLIKIN')->pluck('id_user')->first(),
            'nama_balita' => 'NUZUNUL PUTRA FERDIANSAH',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-02-26',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132002190001',
            'idortu' => User::where('name', 'LALIK')->pluck('id_user')->first(),
            'nama_balita' => 'ERWIN ADAM FERDIANSAH',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-02-19',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131002190003',
            'idortu' => User::where('name', 'Sutina')->pluck('id_user')->first(),
            'nama_balita' => 'RIZKI NUGROHO',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-02-10',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316136401190001',
            'idortu' => User::where('name', 'dwi wijanarko')->pluck('id_user')->first(),
            'nama_balita' => 'AQIFA WILAN ALDABELLA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-02-01',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316136191190002',
            'idortu' => User::where('name', 'SUNANDAR')->pluck('id_user')->first(),
            'nama_balita' => 'NURUL hilya LAYINA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-01-21',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316136001190011',
            'idortu' => User::where('name', 'Niswah Datun')->pluck('id_user')->first(),
            'nama_balita' => 'muna',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-01-20',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131401190002',
            'idortu' => User::where('name', 'AHMAD MIZAN')->pluck('id_user')->first(),
            'nama_balita' => 'AMAD SAHAL',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-01-14',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131301190003',
            'idortu' => User::where('name', 'JUPRI')->pluck('id_user')->first(),
            'nama_balita' => 'ARLANG SAMUDRA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-01-13',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316501301198527',
            'idortu' => User::where('name', 'JUPRI')->pluck('id_user')->first(),
            'nama_balita' => 'ARLANG SAMUDRA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-01-13',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316504601198332',
            'idortu' => User::where('name', 'MUTIA')->pluck('id_user')->first(),
            'nama_balita' => 'MARATU QUROTA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-01-06',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316130501190011',
            'idortu' => User::where('name', 'KARMIN')->pluck('id_user')->first(),
            'nama_balita' => 'MUHAMMAD RIDHO SAPUTRA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-01-05',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316134601190001',
            'idortu' => User::where('name', 'SUYATNO')->pluck('id_user')->first(),
            'nama_balita' => 'FAIZIYAH ADHIMAH',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2019-01-05',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131912180011',
            'idortu' => User::where('name', 'abdi manaf')->pluck('id_user')->first(),
            'nama_balita' => 'YOFI',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-12-19',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316501912183763',
            'idortu' => User::where('name', 'abdi manaf')->pluck('id_user')->first(),
            'nama_balita' => 'M.YOFI ABDUL RAHMAN',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-12-19',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131212180002',
            'idortu' => User::where('name', 'WARNO')->pluck('id_user')->first(),
            'nama_balita' => 'AHMAD GHAISAN',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-12-12',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316135112180002',
            'idortu' => User::where('name', 'SUWARNO')->pluck('id_user')->first(),
            'nama_balita' => 'HUMAIRA PUTRI PRIMADONA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-12-11',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316130612180002',
            'idortu' => User::where('name', 'siti rukayah')->pluck('id_user')->first(),
            'nama_balita' => 'shofwan nur faiq ahmad',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-12-06',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316500612189533',
            'idortu' => User::where('name', 'budiono')->pluck('id_user')->first(),
            'nama_balita' => 'SANDA BUDI BANYUBIRU',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-12-06',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316134512180001',
            'idortu' => User::where('name', 'AHMAD BAHRUDIN')->pluck('id_user')->first(),
            'nama_balita' => 'AZKAYNA HASNA NELIDA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-12-05',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316136511160002',
            'idortu' => User::where('name', 'ADE NUR ROHMAH')->pluck('id_user')->first(),
            'nama_balita' => 'SALMA ZAKIYA ROHMAN',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-11-25',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131210180002',
            'idortu' => User::where('name', 'PUJIANTO')->pluck('id_user')->first(),
            'nama_balita' => 'RAFIANATA YUDHA OKTARA DAVIANTO',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-11-13',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316135211180002',
            'idortu' => User::where('name', 'ROFIATUL ULA')->pluck('id_user')->first(),
            'nama_balita' => 'NADHIFA ARSYA RAHMANIA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-11-12',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316134811180002',
            'idortu' => User::where('name', 'slamet')->pluck('id_user')->first(),
            'nama_balita' => 'CHIKA NOVITA SARI',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-11-08',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131510180001',
            'idortu' => User::where('name', 'Dwi Nuryati')->pluck('id_user')->first(),
            'nama_balita' => 'MUHAMMAD PANDU HANAN ALFATIH',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-10-15',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131806180001',
            'idortu' => User::where('name', 'RUDI')->pluck('id_user')->first(),
            'nama_balita' => 'AL FAIZ NUR ROHIM',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-10-12',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316135210180001',
            'idortu' => User::where('name', 'PUJIANTO')->pluck('id_user')->first(),
            'nama_balita' => 'REFIANATA DISTRI OKTARA DAVIANTO',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-10-12',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131110180001',
            'idortu' => User::where('name', 'BADI')->pluck('id_user')->first(),
            'nama_balita' => 'PUTRA RIZKY ZULFAN',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-10-11',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131110180002',
            'idortu' => User::where('name', 'BADI')->pluck('id_user')->first(),
            'nama_balita' => 'PUTRA RIZKY ZULFIAN',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-10-11',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316134910180002',
            'idortu' => User::where('name', 'SULAIMAN')->pluck('id_user')->first(),
            'nama_balita' => 'DIVA OKTA PUTRI',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-10-09',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316134610180001',
            'idortu' => User::where('name', 'SAMIDI')->pluck('id_user')->first(),
            'nama_balita' => 'LUTHFIA RINDI OKTAVIABA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-10-06',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316136091800002',
            'idortu' => User::where('name', 'KIKIK FRENGKI')->pluck('id_user')->first(),
            'nama_balita' => 'EARLYTA NURAINI PUTRI E',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-09-28',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316136309180001',
            'idortu' => User::where('name', 'nur huda')->pluck('id_user')->first(),
            'nama_balita' => 'AYSA NUHA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-09-23',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316135709180002',
            'idortu' => User::where('name', 'YARTO')->pluck('id_user')->first(),
            'nama_balita' => 'WINDI',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-09-17',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131609180001',
            'idortu' => User::where('name', 'DIDIK SUGIYANTO')->pluck('id_user')->first(),
            'nama_balita' => 'NUR IKSAN BAGUS SAPUTRA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-09-16',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316134809180002',
            'idortu' => User::where('name', 'muh suBADRI')->pluck('id_user')->first(),
            'nama_balita' => 'ariqa ASKANA sakhi',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-09-08',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132708180001',
            'idortu' => User::where('name', 'DAMAKUH')->pluck('id_user')->first(),
            'nama_balita' => 'M RIFKI ALVINO',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-08-27',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132008180001',
            'idortu' => User::where('name', 'SUWARJI')->pluck('id_user')->first(),
            'nama_balita' => 'FRENDI AGUSTIONO ADHA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-08-20',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316135708180001',
            'idortu' => User::where('name', 'ZAENAL ARIFIN')->pluck('id_user')->first(),
            'nama_balita' => 'AQILA PUTRI A',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-08-17',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131708180001',
            'idortu' => User::where('name', 'SUJI-YATMI')->pluck('id_user')->first(),
            'nama_balita' => 'MAVRISKI DIRGAYU',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-08-17',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131209180001',
            'idortu' => User::where('name', 'AHMAD sahroji')->pluck('id_user')->first(),
            'nama_balita' => 'KENZI CIKAL AL HUSEN',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-08-16',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131008180001',
            'idortu' => User::where('name', 'ROCHIM')->pluck('id_user')->first(),
            'nama_balita' => 'M. KAFKA AL KAZAKI',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-08-16',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316130508180001',
            'idortu' => User::where('name', 'ENDRI')->pluck('id_user')->first(),
            'nama_balita' => 'ZULKYAH NUR A',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-08-15',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316130108180001',
            'idortu' => User::where('name', 'ENDRI')->pluck('id_user')->first(),
            'nama_balita' => 'ARINDA NABIL',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-08-01',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132907180001',
            'idortu' => User::where('name', 'MASPIK')->pluck('id_user')->first(),
            'nama_balita' => 'ahmad rafly ABQORI',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-07-29',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132507180001',
            'idortu' => User::where('name', 'SURAT')->pluck('id_user')->first(),
            'nama_balita' => 'AHMAD TOHIR SUNINGRAT',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-07-25',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316134807180001',
            'idortu' => User::where('name', 'IMAM')->pluck('id_user')->first(),
            'nama_balita' => 'NURWAHIDA HUSNA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-07-10',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316504807180002',
            'idortu' => User::where('name', 'IMAM')->pluck('id_user')->first(),
            'nama_balita' => 'HUSNA KHAIRAN NISA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-07-08',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316130407180001',
            'idortu' => User::where('name', 'MARYANTO')->pluck('id_user')->first(),
            'nama_balita' => 'MUHAMMAD ILHAM K',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-07-04',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316130307180002',
            'idortu' => User::where('name', 'SUGITO')->pluck('id_user')->first(),
            'nama_balita' => 'AHMAD WILDAN BAGUS DWI A',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-07-03',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316134107180003',
            'idortu' => User::where('name', 'Siswanti')->pluck('id_user')->first(),
            'nama_balita' => 'AUDRY nabila',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-07-01',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316504107181786',
            'idortu' => User::where('name', 'KEMIS')->pluck('id_user')->first(),
            'nama_balita' => 'AUDRY NABILA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-07-01',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316137006180002',
            'idortu' => User::where('name', 'ALI M')->pluck('id_user')->first(),
            'nama_balita' => 'YAKSAN RAYA S',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-06-30',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132606180001',
            'idortu' => User::where('name', 'SUKARJI')->pluck('id_user')->first(),
            'nama_balita' => 'FIKO DWI A',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-06-26',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316136306180001',
            'idortu' => User::where('name', 'PARJI')->pluck('id_user')->first(),
            'nama_balita' => 'SALSABILA INAYATUS',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-06-23',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316506006180002',
            'idortu' => User::where('name', 'Siswanti')->pluck('id_user')->first(),
            'nama_balita' => 'Audri',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-06-20',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316134410180001',
            'idortu' => User::where('name', 'M NASIR')->pluck('id_user')->first(),
            'nama_balita' => 'SABRINA USWATUN',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-06-18',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316135608180004',
            'idortu' => User::where('name', 'SUWARNO')->pluck('id_user')->first(),
            'nama_balita' => 'WIDYA KARISMA AGUSTINA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-06-16',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316137105180001',
            'idortu' => User::where('name', 'JAMIN')->pluck('id_user')->first(),
            'nama_balita' => 'ELISA DWI RAMADANI',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-05-31',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316134205180001',
            'idortu' => User::where('name', 'KASMUJI')->pluck('id_user')->first(),
            'nama_balita' => 'NASYA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-05-24',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316136305180001',
            'idortu' => User::where('name', 'BUDI HARTONO')->pluck('id_user')->first(),
            'nama_balita' => 'SALSABILA PUTRI RAMADANI',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-05-23',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316135705180001',
            'idortu' => User::where('name', 'MUKLISIN AHMAD S')->pluck('id_user')->first(),
            'nama_balita' => 'QIANDRA MEISYA ASYAHRI',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-05-17',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131405180001',
            'idortu' => User::where('name', 'SUNARDI')->pluck('id_user')->first(),
            'nama_balita' => 'MUHAMMAD RESTU AL BUKHORI',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-05-14',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316130905080001',
            'idortu' => User::where('name', 'SISWANTO')->pluck('id_user')->first(),
            'nama_balita' => 'RAVA ALVIN RAMADAN',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-05-09',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '331613445180003',
            'idortu' => User::where('name', 'Rohmat')->pluck('id_user')->first(),
            'nama_balita' => 'AL ZAHWA NUHAI MEI FIRA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-05-04',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316134804180003',
            'idortu' => User::where('name', 'KEMIS')->pluck('id_user')->first(),
            'nama_balita' => 'FITRI',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-04-28',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316506604180001',
            'idortu' => User::where('name', 'Santi')->pluck('id_user')->first(),
            'nama_balita' => 'Fitriana aprilia',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-04-26',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316136604180000',
            'idortu' => User::where('name', 'EDI')->pluck('id_user')->first(),
            'nama_balita' => 'SYIFA NADHIFA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-04-26',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316136004180001',
            'idortu' => User::where('name', 'SUKAMTO')->pluck('id_user')->first(),
            'nama_balita' => 'ASYIFA BELLA APRILIA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-04-26',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132504180001',
            'idortu' => User::where('name', 'RUBIYANTO')->pluck('id_user')->first(),
            'nama_balita' => 'ABITAMA ASWANDA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-04-24',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316136404180001',
            'idortu' => User::where('name', 'AHMAD RUDI')->pluck('id_user')->first(),
            'nama_balita' => 'ANISA EVA MAHARANI',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-04-24',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132304180001',
            'idortu' => User::where('name', 'ARIS-SELIA')->pluck('id_user')->first(),
            'nama_balita' => 'ASWA NESWARA',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-04-23',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316131311160004',
            'idortu' => User::where('name', 'BAMBANG')->pluck('id_user')->first(),
            'nama_balita' => 'WAHYU ABDIL JUSTIN GILBERT',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-04-20',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316501404180001',
            'idortu' => User::where('name', 'JOKO')->pluck('id_user')->first(),
            'nama_balita' => 'FURQON',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-04-14',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316135704170002',
            'idortu' => User::where('name', 'KHARUN')->pluck('id_user')->first(),
            'nama_balita' => 'ZAFIRA NURIYATI',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-04-14',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132801180001',
            'idortu' => User::where('name', 'LASNO')->pluck('id_user')->first(),
            'nama_balita' => 'FERNANDO AL FANZI',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-04-10',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316134104180003',
            'idortu' => User::where('name', 'Wiwik')->pluck('id_user')->first(),
            'nama_balita' => 'arsyi',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-04-01',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316134603180001',
            'idortu' => User::where('name', 'BESRI')->pluck('id_user')->first(),
            'nama_balita' => 'AZMIYA',
            'jenis_kelamin' => 'perempuan ',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-03-31',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316132803180003',
            'idortu' => User::where('name', 'LASIDI')->pluck('id_user')->first(),
            'nama_balita' => 'GILANG AFANDY',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-03-28',
        ]);

        balita::create([
            'idbalita'=> 'balita-' . Str::random(8),
            'nik' => '3316502803186754',
            'idortu' => User::where('name', 'NGATINI')->pluck('id_user')->first(),
            'nama_balita' => 'FARANISA SARI',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'Blora',
            'tanggal_lahir' => '2018-03-28',
        ]);
    }
}
