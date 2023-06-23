<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\whatsappGateway;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('/profil', [App\Http\Controllers\ProfilController::class, 'index'])->middleware('auth')->name('profil');
Route::get('/editprofil/{id}', [App\Http\Controllers\ProfilController::class, 'editprofil'])->middleware('auth')->name('edit-profil');
Route::post('/ubahprofil', [App\Http\Controllers\ProfilController::class, 'updateprofile'])->middleware('auth')->name('update-profil');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'hakakses:admin']], function () {
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

    // admin
    Route::get('/dataadmin', [App\Http\Controllers\AdminController::class, 'dataadmin'])->name('dataadmin');

    // user
    Route::get('/datauser', [App\Http\Controllers\AdminController::class, 'datauser'])->name('datauser');
    Route::get('/tambahuser', [AdminController::class, 'tambahdatauser'])->name('tambah-user');
    Route::post('/insertuser', [AdminController::class, 'insertdatauser'])->name('insert-user');
    Route::get('/edituser/{id}', [AdminController::class, 'editdatauser'])->name('edit-user');
    Route::post('/ubahuser/{id}', [AdminController::class, 'updateuser'])->name('update-user');
    Route::get('/deleteuser/{id}', [AdminController::class, 'deletedatauser'])->name('delete-user');
    // balita
    Route::get('/databalita', [App\Http\Controllers\AdminController::class, 'databalita'])->name('databalita');
    // aturan
    Route::get('/dataaturan', [App\Http\Controllers\AdminController::class, 'dataaturan'])->name('dataaturan');
    Route::get('/tambahaturan', [AdminController::class, 'tambahdataaturan'])->name('tambah-aturan');
    Route::post('/insertaturan', [AdminController::class, 'insertdataaturan'])->name('insert-aturan');
    Route::get('/editaturan/{id}', [AdminController::class, 'editdataaturan'])->name('edit-aturan');
    Route::post('/ubahaturan/{id}', [AdminController::class, 'updateaturan'])->name('update-aturan');
    Route::get('/deleteaturan/{id}', [AdminController::class, 'deletedataaturan'])->name('delete-aturan');
    // penyakit
    Route::get('/datapenyakit', [App\Http\Controllers\AdminController::class, 'datapenyakit'])->name('datapenyakit');
    // metode
    Route::get('/datainformasi', [App\Http\Controllers\AdminController::class, 'datainformasi'])->name('datainformasi');
    Route::get('/tambahinformasi', [AdminController::class, 'tambahdatainformasi'])->name('tambah-informasi');
    Route::post('/insertinformasi', [AdminController::class, 'insertdatainformasi'])->name('insert-informasi');
    Route::get('/editinformasi/{id}', [AdminController::class, 'editdatainformasi'])->name('edit-informasi');
    Route::post('/ubahinformasi/{id}', [AdminController::class, 'updateinformasi'])->name('update-informasi');
    Route::get('/deleteinformasi/{id}', [AdminController::class, 'deletedatainformasi'])->name('delete-informasi');
    // perkembangan
    Route::get('/dataperkembangan', [App\Http\Controllers\AdminController::class, 'dataperkembangan'])->name('dataperkembangan');
    Route::get('/viewperkembangan/{id}', [App\Http\Controllers\AdminController::class, 'viewperkembangan'])->name('viewperkembangan');
    Route::get('/tambahperkembangan', [AdminController::class, 'tambahdataperkembangan'])->name('tambah-perkembangan');
    Route::post('/insertperkembangan', [AdminController::class, 'insertdataperkembangan'])->name('insert-perkembangan');
    Route::get('/editperkembangan/{id}', [AdminController::class, 'editdataperkembangan'])->name('edit-perkembangan');
    Route::post('/ubahperkembangan/{id}', [AdminController::class, 'updateperkembangan'])->name('update-perkembangan');
    Route::get('/deleteperkembangan/{id}', [AdminController::class, 'deletedataperkembangan'])->name('delete-perkembangan');
    // balita
    Route::get('/databalita', [App\Http\Controllers\AdminController::class, 'databalita'])->name('databalita');

    Route::get('/tambahbalita', [PenggunaController::class, 'tambahdatabalita'])->name('tambah-balita');
    Route::post('/insertbalita', [PenggunaController::class, 'insertdatabalita'])->name('insert-balita');
    Route::get('/editbalita/{id}', [PenggunaController::class, 'editdatabalita'])->name('edit-balita');
    Route::post('/ubahbalita/{id}', [PenggunaController::class, 'updatebalita'])->name('update-balita');
    Route::get('/deletebalita/{id}', [PenggunaController::class, 'deletedatabalita'])->name('delete-balita');
    // diagnosa
    Route::get('/datadiagnosa', [App\Http\Controllers\AdminController::class, 'datadiagnosa'])->name('datadiagnosa');
    Route::any('/datadiagnosa', [App\Http\Controllers\AdminController::class, 'datadiagnosa'])->name('popo');
    Route::any('/tambahdiagnosa', [App\Http\Controllers\AdminController::class, 'tambahDiagnosa'])->name('tambahDiagnosa');

    Route::get('/hasil-diagnosa/{umur}/{panjang}', [AdminController::class, 'hasildiagnosaS'])->name('hasil-diagnosa');
    // posyandu
    Route::get('/dataposyandu', [App\Http\Controllers\AdminController::class, 'dataposyandu'])->name('dataposyandu');
    // posyandu
    Route::get('/laporandiagnosa', [App\Http\Controllers\AdminController::class, 'laporandiagnosa'])->name('laporandiagnosa');
    Route::get('/laporanperkembangan', [App\Http\Controllers\AdminController::class, 'laporanperkembangan'])->name('laporanperkembangan');
    // Route::get('cetaklaporanD',[App\Http\Controllers\AdminController::class,'cetaklaporanD'])->name('cetaklaporanD');
    // Route::get('cetaklaporanP',[App\Http\Controllers\AdminController::class,'cetaklaporanP'])->name('cetaklaporanP');
});

Route::group(['prefix' => 'super', 'middleware' => ['auth', 'hakakses:superadmin']], function () {
    Route::get('/tambahadmin', [AdminController::class, 'tambahdataadmin'])->name('tambah-admin');
    Route::post('/insertadmin', [AdminController::class, 'insertdataadmin'])->name('insert-admin');
    Route::get('/editadmin/{id}', [AdminController::class, 'editdataadmin'])->name('edit-admin');
    Route::post('/ubahadmin/{id}', [AdminController::class, 'updateadmin'])->name('update-admin');
    Route::get('/deleteadmin/{id}', [AdminController::class, 'deletedataadmin'])->name('delete-admin');
    Route::get('/dashboard', [App\Http\Controllers\SuperAdminController::class, 'index'])->name('superadmin');
    // Route::get('/dataadmin', [App\Http\Controllers\SuperAdminController::class, 'dataadmin'])->name('dataSadmin');
    Route::get('/datasadmin', [App\Http\Controllers\AdminController::class, 'datasadmin'])->name('dataSadmin');
    Route::get('/datasuser', [App\Http\Controllers\AdminController::class, 'dataSuser'])->name('dataSuser');
    Route::get('/tambahuser', [AdminController::class, 'tambahdataSuser'])->name('tambahS-user');
    Route::post('/insertuser', [AdminController::class, 'insertdataSuser'])->name('insertS-user');
    Route::get('/edituser/{id}', [AdminController::class, 'editdataSuser'])->name('editS-user');
    Route::post('/ubahuser/{id}', [AdminController::class, 'updateSuser'])->name('updateS-user');
    Route::get('/deleteuser/{id}', [AdminController::class, 'deletedataSuser'])->name('deleteS-user');
    Route::get('/databalita', [App\Http\Controllers\SuperAdminController::class, 'databalita'])->name('dataSbalita');
    Route::get('/search', [App\Http\Controllers\SuperAdminController::class, 'search'])->name('search');

    Route::get('/mengeloladataposyandu', [App\Http\Controllers\SuperAdminController::class, 'mengeloladataposyandu'])->name('mengeloladataposyandu');
    Route::get('/tambahposyandu', [SuperAdminController::class, 'tambahdataposyandu'])->name('tambah-posyandu');
    Route::post('/insertposyandu', [SuperAdminController::class, 'insertdataposyandu'])->name('insert-posyandu');
    Route::get('/editposyandu/{id}', [SuperAdminController::class, 'editdataposyandu'])->name('edit-posyandu');
    Route::post('/ubahposyandu/{id}', [SuperAdminController::class, 'updateposyandu'])->name('update-posyandu');
    Route::get('/deleteposyandu/{id}', [SuperAdminController::class, 'deletedataposyandu'])->name('delete-posyandu');
    Route::get('/laporandiagnosa', [App\Http\Controllers\AdminController::class, 'laporandiagnosa'])->name('laporanPdiagnosa');
    Route::get('/laporanperkembangan', [App\Http\Controllers\AdminController::class, 'laporanperkembangan'])->name('laporanPperkembangan');
    // Route::get('cetaklaporanD',[App\Http\Controllers\AdminController::class,'cetaklaporanD'])->name('cetakSlaporanD');
    // Route::get('cetaklaporanP',[App\Http\Controllers\AdminController::class,'cetaklaporanP'])->name('cetakSlaporanP');
});

Route::group(['prefix' => 'pakar', 'middleware' => ['auth', 'hakakses:pakar']], function () {
    Route::get('/dashboard', [App\Http\Controllers\PakarController::class, 'index'])->name('pakar');
    Route::get('/melihatlaporan', [App\Http\Controllers\PakarController::class, 'melihatlaporan'])->name('melihatlaporan');
    Route::get('/laporandiagnosa', [App\Http\Controllers\AdminController::class, 'laporandiagnosa'])->name('laporanSdiagnosa');
    Route::get('/laporanperkembangan', [App\Http\Controllers\AdminController::class, 'laporanperkembangan'])->name('laporanSperkembangan');
    Route::get('/blschat', [App\Http\Controllers\PakarController::class, 'blschat'])->name('blschat');
    Route::get('/reload-chat', [App\Http\Controllers\PakarController::class, 'reload_chat'])->name('reload-chat');
    Route::any('/blschat-kirimchat', [App\Http\Controllers\PakarController::class, 'kirimUser'])->name('blschat-pakar');
    Route::get('/viewchat/{id}', [App\Http\Controllers\PakarController::class, 'viewchat'])->name('viewchat');
});

Route::group(['prefix' => 'pengguna', 'middleware' => ['auth', 'hakakses:pengguna']], function () {
    Route::get('/dashboard', [App\Http\Controllers\PenggunaController::class, 'index'])->name('pengguna');
    Route::get('/chat', [App\Http\Controllers\PenggunaController::class, 'chat'])->name('chat');
    Route::get('/reload-chat', [App\Http\Controllers\PenggunaController::class, 'reloadchat'])->name('reload-chat');
    Route::any('/kirimchat', [App\Http\Controllers\PenggunaController::class, 'kirimUser'])->name('kirimUser');
    Route::get('/balita', [App\Http\Controllers\PenggunaController::class, 'balita'])->name('balita');
    Route::get('/lhtperkembangan', [App\Http\Controllers\PenggunaController::class, 'lhtperkembangan'])->name('lhtperkembangan');
    Route::get('/informasi', [App\Http\Controllers\PenggunaController::class, 'informasi'])->name('informasi');
    Route::get('/lihat-informasi/{id}', [App\Http\Controllers\PenggunaController::class, 'viewinfo'])->name('viewinfo');

    Route::get('/viewperkembangan/{id}', [App\Http\Controllers\AdminController::class, 'viewperkembangan'])->name('viewperkembangan-user');
});


Route::group(['middleware' => ['auth', 'hakakses:pakar,admin,superadmin']], function () {
    Route::get('cetaklaporanD', [App\Http\Controllers\AdminController::class, 'cetaklaporanD'])->name('cetaklaporanD');
    Route::get('cetaklaporanP', [App\Http\Controllers\AdminController::class, 'cetaklaporanP'])->name('cetaklaporanP');
});

Route::group(['middleware' => ['auth', 'hakakses:admin,pengguna']], function () {
    Route::get('admin/hasildiagnosa/{id}/{umur}/{panjang}', [AdminController::class, 'hasildiagnosa'])->name('hasildiagnosa-admin');
    Route::get('pengguna/hasildiagnosa/{id}/{umur}/{panjang}', [AdminController::class, 'hasildiagnosa'])->name('hasildiagnosa-pengguna');
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/hasilS', function () {
//     return view('admin.hasildiagnosaS');
// });
// Route::get('/hasilTS', function () {
//     return view('admin.hasildiagnosaTS');
// });
Route::get('/aktivasi/{id}', [RegisterController::class, 'aktivasi'])->name('aktivasi');
Route::post('/kirimaktivasi', [RegisterController::class, 'kirimaktivasi'])->name('kirimaktivasi');
