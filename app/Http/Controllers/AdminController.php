<?php

namespace App\Http\Controllers;

use App\Models\aturan;
use App\Models\balita;
use App\Models\perkembangan;
use App\Models\posyandu;
use App\Models\User;
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
        $user = User::all();
        return view('superadmin.datauser',compact(['user']));
    }
    public function tambahdatauser()
    {
        $posyandu = posyandu::all();
        return view('admin.tambahuser',compact('posyandu'));
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

    public function deletedatauser($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('datauser')->with('success','Data Berhasil Di Hapus');
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

    // metode
    public function datametode()
    {
        return view('admin.datametode');
    }

    // perkembangan
    public function dataperkembangan()
    {
        $perkembangan = perkembangan::all();
        return view('admin.dataperkembangan',compact('perkembangan'));
    }
    public function viewperkembangan()
    {
        return view('admin.detailperkembangan');
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
        $ids = $request->role.'-'. Str::random(8);
        $request->merge(['password' => Hash::make($request->input('password'))]);
       $perkembangan = perkembangan::create([
        'idperkembangan'=>$ids,
        'umur'   => $request->umur,
        'panjang_badan'=> $request->panjang_badan,
        'status'   => $request->status,
        'idbalita'   => $request->idbalita
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
        return view('admin.editperkembangan', compact(['perkembangan']));
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

        $updateData= perkembangan::where('idperkembangan', $request->id)->update($data);

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
        return view('admin.datadiagnosa');
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
