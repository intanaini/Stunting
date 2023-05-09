<?php

namespace App\Http\Controllers;

use App\Models\aturan;
use App\Models\balita;
use App\Models\detail_perkembangan;
use App\Models\informasi;
use App\Models\perkembangan;
use App\Models\posyandu;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('admin.admin' ,compact('data'));
    }
    // admin
    public function dataadmin()
    {
        $admin = User::where('role','admin')->get();
        return view('admin.dataadmin',compact(['admin']));
    }
    public function datasadmin()
    {
        $admin = User::whereIn('role',['admin','superadmin'])->get();
        return view('superadmin.dataadmin',compact(['admin']));
    }
    public function tambahdataadmin()
    {
        $posyandu = posyandu::all();
        return view('admin.tambahadmin',compact(['posyandu']));
    }
    public function insertdataadmin(Request $request)
    {
        $this->validate($request, [
           'nik' => 'required',
           'name' => 'required', 
           'role' => 'required', 
           'password' => 'required|min:8',
           'status_users' => 'required',
           'no_hp' => 'required',
           'id_posyandu' => 'required',
        ]);
        $ids = $request->role.'-'. Str::random(8);
        $request->merge(['password' => Hash::make($request->input('password'))]);
       $User = User::create([
        'id_user'=>$ids,
        'nik'     => $request->nik,
        'name'   => $request->name,
        'role'=> $request->role,
        'password'   => $request->password,
        'status_users'   => $request->status_users,
        'no_hp'   => $request->no_hp,
        'idposyandu'   => $request->id_posyandu
        ]);

        if ($User) {
            return redirect()->route('dataSadmin')->with('success', 'Data berhasil di tambahkan');
        } else {
            return redirect()->route('dataSadmin')->with('failed', 'Data gagal di tambahkan');
        }
    }
    public function editdataadmin($id_user)
    {
        $admin = User::where('id_user',$id_user)->first();
        $posyandu = posyandu::all();
        return view('admin.editadmin', compact(['admin','posyandu']));
    }

    public function updateadmin(Request $request, $id)
    {
        $data = [
        'id_user'=>$id,
        'nik'     => $request->nik,
        'name'   => $request->name,
        'role'=> $request->role,
        'password'   => $request->password,
        'status_users'   => $request->status_users,
        'no_hp'   => $request->no_hp,
        'idposyandu'   => $request->id_posyandu
        ];

        $updateData= User::where('id_user', $request->id)->update($data);

        if($updateData){
            return redirect()->route('dataSadmin')->with('success', 'Data berhasil di ubah');
        } else {
            return redirect()->route('dataSadmin')->with('failed', 'Data gagal di ubah');
        }
    }

    public function deletedataadmin($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('dataSadmin')->with('success','Data Berhasil Di Hapus');
    }

    // user
    public function datauser()
    {
        
        $user = User::where('role','pengguna')->get();
        return view('admin.datauser',compact('user'));
    }
    public function dataSuser()
    {
        $user = User::where('role','pengguna')->get();
        return view('superadmin.datauser',compact(['user']));
    }
    public function tambahdatauser()
    {
        $posyandu = posyandu::all();
        return view('admin.tambahuser',compact('posyandu'));
    }
    public function tambahdataSuser()
    {
        $posyandu = posyandu::all();
        return view('superadmin.tambahuser',compact('posyandu'));
    }
    public function insertdatauser(Request $request)
    {
        $this->validate($request, [
           'nik' => 'required',
           'name' => 'required', 
           'role' => 'required', 
           'password' => 'required|min:8',
           'status_users' => 'required',
           'no_hp' => 'required',
           'id_posyandu' => 'required',
        ]);
        $ids = $request->role.'-'. Str::random(8);
        $request->merge(['password' => Hash::make($request->input('password'))]);
       $User = User::create([
        'id_user'=>$ids,
        'nik'     => $request->nik,
        'name'   => $request->name,
        'role'=> $request->role,
        'password'   => $request->password,
        'status_users'   => $request->status_users,
        'no_hp'   => $request->no_hp,
        'idposyandu'   => $request->id_posyandu
        ]);

        if ($User) {
            return redirect()->route('datauser')->with('success', 'Data berhasil di tambahkan');
        } else {
            return redirect()->route('datauser')->with('failed', 'Data gagal di tambahkan');
        }
    }
    public function insertdataSuser(Request $request)
    {
        $this->validate($request, [
           'nik' => 'required',
           'name' => 'required', 
           'role' => 'required', 
           'password' => 'required|min:8',
           'status_users' => 'required',
           'no_hp' => 'required',
           'id_posyandu' => 'required',
        ]);
        $ids = $request->role.'-'. Str::random(8);
        $request->merge(['password' => Hash::make($request->input('password'))]);
       $User = User::create([
        'id_user'=>$ids,
        'nik'     => $request->nik,
        'name'   => $request->name,
        'role'=> $request->role,
        'password'   => $request->password,
        'status_users'   => $request->status_users,
        'no_hp'   => $request->no_hp,
        'idposyandu'   => $request->id_posyandu
        ]);

        if ($User) {
            return redirect()->route('dataSuser')->with('success', 'Data berhasil di tambahkan');
        } else {
            return redirect()->route('dataSuser')->with('failed', 'Data gagal di tambahkan');
        }
    }
    public function editdatauser($id_user)
    {
        $admin = User::where('id_user',$id_user)->first();
        $posyandu = posyandu::all();
        return view('admin.edituser', compact(['admin','posyandu']));
    }

    public function updateuser(Request $request, $id)
    {
        $data = [
        'id_user'=>$id,
        'nik'     => $request->nik,
        'name'   => $request->name,
        'role'=> $request->role,
        'password'   => $request->password,
        'status_users'   => $request->status_users,
        'no_hp'   => $request->no_hp,
        'idposyandu'   => $request->id_posyandu
        ];

        $updateData= User::where('id_user', $request->id)->update($data);

        if($updateData){
            return redirect()->route('datauser')->with('success', 'Data berhasil di ubah');
        } else {
            return redirect()->route('datauser')->with('failed', 'Data gagal di ubah');
        }
    }

    public function editdataSuser($id_user)
    {
        $admin = User::where('id_user',$id_user)->first();
        $posyandu = posyandu::all();
        return view('superadmin.edituser', compact(['admin','posyandu']));
    }

    public function updateSuser(Request $request, $id)
    {
        $data = [
        'id_user'=>$id,
        'nik'     => $request->nik,
        'name'   => $request->name,
        'role'=> $request->role,
        'password'   => $request->password,
        'status_users'   => $request->status_users,
        'no_hp'   => $request->no_hp,
        'idposyandu'   => $request->id_posyandu
        ];

        $updateData= User::where('id_user', $request->id)->update($data);

        if($updateData){
            return redirect()->route('dataSuser')->with('success', 'Data berhasil di ubah');
        } else {
            return redirect()->route('dataSuser')->with('failed', 'Data gagal di ubah');
        }
    }

    public function deletedatauser($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('datauser')->with('success','Data Berhasil Di Hapus');
    }

    public function deletedataSuser($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('dataSuser')->with('success','Data Berhasil Di Hapus');
    }


    // balita
    public function databalita()
    {
        $balita = balita::all();
        return view('admin.databalita',compact(['balita']));
    }

    // aturan
    public function dataaturan()
    {
        $aturan = aturan::all();
        return view('admin.dataaturan',compact('aturan'));
    }
    public function tambahdataaturan()
    {
        $aturan = aturan::all();

        return view('admin.tambahaturan',compact('aturan'));
    }
    public function insertdataaturan(Request $request)
    {
        $this->validate($request, [
           'jenis_kelamin' => 'required',
           'umur' => 'required', 
           'panjang_badan' => 'required', 
           'penyakit' => 'required',
        ]);
        $ids = $request->role.'-'. Str::random(8);
        $request->merge(['password' => Hash::make($request->input('password'))]);
       $aturan = aturan::create([
        'idaturan'=>$ids,
        'jenis_kelamin'     => $request->jenis_kelamin,
        'umur'   => $request->umur,
        'panjang_badan'=> $request->panjang_badan,
        'penyakit'   => $request->penyakit,
    
        ]);

        if ($aturan) {
            return redirect()->route('dataaturan')->with('success', 'Data berhasil di tambahkan');
        } else {
            return redirect()->route('dataaturan')->with('failed', 'Data gagal di tambahkan');
        }
    }
    public function editdataaturan($idaturan)
    {
        $aturan = aturan::where('idaturan',$idaturan)->first();
        return view('admin.editaturan', compact(['aturan']));
    }

    public function updateaturan(Request $request, $id)
    {
        $data = [
        'idaturan'=>$id,
        'jenis_kelamin'     => $request->jenis_kelamin,
        'umur'   => $request->umur,
        'panjang_badan'=> $request->panjang_badan,
        'penyakit'   => $request->penyakit
        ];

        $updateData= aturan::where('idaturan', $request->id)->update($data);

        if($updateData){
            return redirect()->route('dataaturan')->with('success', 'Data berhasil di ubah');
        } else {
            return redirect()->route('dataaturan')->with('failed', 'Data gagal di ubah');
        }
    }

    public function deletedataaturan($id)
    {
        $data = aturan::find($id);
        $data->delete();
        return redirect()->route('dataaturan')->with('success','Data Berhasil Di Hapus');
    }


    public function datapenyakit()
    {
        return view('admin.datapenyakit');
    }

    // Informasi
    public function datainformasi()
    {
        $informasi = informasi::all();
        return view('admin.datainformasi',compact('informasi'));
    }
    public function tambahdatainformasi()
    {
        $informasi = informasi::all();

        return view('admin.tambahinformasi',compact('informasi'));
    }
    public function insertdatainformasi(Request $request)
    {
        $this->validate($request, [
           'keterangan' => 'required', 
           'deskripsi' => 'required',
        ]);
        $ids = $request->role.'-'. Str::random(8);
        // $request->merge(['password' => Hash::make($request->input('password'))]);
       $informasi = informasi::create([
        'idinformasi'=>$ids,
        'keterangan'   => $request->keterangan,
        'deskripsi'=> $request->deskripsi
        ]);

        if ($informasi) {
            return redirect()->route('datainformasi')->with('success', 'Data berhasil di tambahkan');
        } else {
            return redirect()->route('datainformasi')->with('failed', 'Data gagal di tambahkan');
        }
    }

    public function editdatainformasi($idinformasi)
    {
        $informasi = informasi::where('idinformasi',$idinformasi )->first();
        return view('admin.editinformasi', compact(['informasi']));
    }

    public function updateinformasi(Request $request, $id)
    {
        $data = [
        'idinformasi'=>$id,
        'keterangan'   => $request->keterangan,
        'deskripsi'=> $request->deskripsi
        ];

        $updateData= informasi::where('idinformasi', $request->id)->update($data);

        if($updateData){
            return redirect()->route('datainformasi')->with('success', 'Data berhasil di ubah');
        } else {
            return redirect()->route('datainformasi')->with('failed', 'Data gagal di ubah');
        }
    }
    public function deletedatainformasi($id)
    {
        $data = informasi::find($id);
        $data->delete();
        return redirect()->route('datainformasi')->with('success','Data Berhasil Di Hapus');
    }

    // perkembangan
    public function dataperkembangan()
    {
        $perkembangan = perkembangan::all();
        return view('admin.dataperkembangan',compact('perkembangan'));
    }
    public function viewperkembangan($id)
    {
        $perkembangan = perkembangan::where('idperkembangan',$id)->first();
        return view('admin.detailperkembangan',compact(['perkembangan']));
    }
    public function tambahdataperkembangan()
    {
        $balita = balita::all();

        return view('admin.tambahperkembangan',compact('balita'));
    }
    public function insertdataperkembangan(Request $request)
    {
        $this->validate($request, [
           'umur' => 'required', 
           'panjang_badan' => 'required', 
           'status' => 'required',
        ]);
        $ids = 'perkembangan-'. Str::random(8);
        $request->merge(['password' => Hash::make($request->input('password'))]);
       $perkembangan = perkembangan::create([
        'idperkembangan'=>$ids,
        'umur'   => $request->umur,
        'panjang_badan'=> $request->panjang_badan,
        'status'   => $request->status,
        'idbalita'   => $request->idbalita
        ]);
        // dd($perkembangan);
        $idsa = 'detail-perkembangan-'. Str::random(8);
         detail_perkembangan::create([
            'iddetail_perkembangan'=> $idsa,
            'idperkembangan'=> $ids,
            'umur'   => $request->umur,
            'tanggal'=>Carbon::now(),
            'panjang_badan'=> $request->panjang_badan,
            'status'   => $request->status,
        ]);

        if ($perkembangan) {
            return redirect()->route('dataperkembangan')->with('success', 'Data berhasil di tambahkan');
        } else {
            return redirect()->route('dataperkembangan')->with('failed', 'Data gagal di tambahkan');
        }
    }
    public function editdataperkembangan($idperkembangan)
    {
        $perkembangan = perkembangan::where('idperkembangan',$idperkembangan )->first();
        $balita = balita::all();
        return view('admin.editperkembangan', compact(['perkembangan','balita']));
    }

    public function updateperkembangan(Request $request, $id)
    {
        $data = [
        'idperkembangan'=>$id,
        'umur'   => $request->umur,
        'panjang_badan'=> $request->panjang_badan,
        'status'   => $request->status,
        'idbalita'   => $request->idbalita
        ];

        $updateData= perkembangan::where('idperkembangan', $request->id)->first();
        $updateData->update($data);
        $idsa = 'detail-perkembangan-'. Str::random(8);
        detail_perkembangan::create([
            'iddetail_perkembangan'=> $idsa,
            'idperkembangan'=> $updateData->idperkembangan,
            'umur'   => $request->umur,
            'tanggal'=>Carbon::now(),
            'panjang_badan'=> $request->panjang_badan,
            'status'   => $request->status,
        ]);
        if($updateData){
            return redirect()->route('dataperkembangan')->with('success', 'Data berhasil di ubah');
        } else {
            return redirect()->route('dataperkembangan')->with('failed', 'Data gagal di ubah');
        }
    }

    public function deletedataperkembangan($id)
    {
        $data = perkembangan::find($id);
        $data->delete();
        return redirect()->route('dataperkembangan')->with('success','Data Berhasil Di Hapus');
    }



    // =========================== diagnosa=====================================



    public function datadiagnosa()
    {
        $balita = balita::all();
        return view('admin.datadiagnosa',compact(['balita']));
    }
    public function tambahDiagnosa(Request $request)
    {
        $this->validate($request, [
            'balita' => 'required',
            'panjang' => 'required', 
            
         ]);
        $balita = balita::where('idbalita',$request->balita)->first();
        // dd(Carbon::parse($balita->tanggal_lahir)->diffInMonths());
        $bulan = Carbon::parse($balita->tanggal_lahir)->diffInMonths();
        if ($bulan == 0) {
            $bulan = 1;
        }
        $aturan= aturan::where('umur',$bulan)->where('jenis_kelamin',$balita->jenis_kelamin)->first();

        // dd($aturan);
        if (is_null($aturan)) {
            dd('Anak anda umur '.$bulan.' Bulan');
        }else{

        if($request->panjang > $aturan->panjang_badan){
            $status = 'tidak stunting';
        }else{
            $status = 'stunting';

        }
        dd($status);}
       
    }
    public function hasildiagnosa()
    {
        return view('admin.hasildiagnosa');
    }
    public function dataposyandu()
    {
        $posyandu = posyandu::all();
        return view('admin.dataposyandu',compact(['posyandu']));
    }
    public function datalaporan()
    {
        return view('admin.datalaporan');
    }
}
