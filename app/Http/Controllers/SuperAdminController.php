<?php

namespace App\Http\Controllers;

use App\Models\balita;
use App\Models\posyandu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Stringable;
use Illuminate\Support\Str;

class SuperAdminController extends Controller
{
    public function index()
    {
        return view('superadmin.superadmin');
    }
    public function dataadmin()
    {
        return view('superadmin.dataadmin');
    }
    public function datauser()
    {
        return view('superadmin.datauser');
    }
    public function databalita()
    {
        $user = balita::all();
        return view('superadmin.databalita',compact('user'));
    }
    public function mengeloladataposyandu()
    {
        $posyandu = posyandu::all();
        return view('superadmin.mengeloladataposyandu',compact('posyandu'));
    }
    public function tambahdataposyandu()
    {
        $posyandu = posyandu::all();

        return view('superadmin.tambahposyandu',compact('posyandu'));
    }
    public function insertdataposyandu(Request $request)
    {
        $this->validate($request, [
        //    'idposyandu' => 'required',
           'nama_posyandu' => 'required', 
           'alamat_posyandu' => 'required', 
           'jadwal_posyandu' => 'required',
        ]);
        $ids = 'ps-'.Str::random(3);
        $request->merge(['password' => Hash::make($request->input('password'))]);
       $posyandu = posyandu::create([
        'idposyandu'=>$ids,
        'nama_posyandu'     => $request->nama_posyandu,
        'alamat_posyandu'   => $request->alamat_posyandu,
        'jadwal_posyandu'=> $request->jadwal_posyandu,
    
        ]);

        if ($posyandu) {
            return redirect()->route('mengeloladataposyandu')->with('success', 'Data berhasil di tambahkan');
        } else {
            return redirect()->route('mengeloladataposyandu')->with('failed', 'Data gagal di tambahkan');
        }
    }
    public function editdataposyandu($idposyandu)
    {
        $posyandu = posyandu::where('idposyandu',$idposyandu)->first();
        return view('superadmin.editposyandu', compact(['posyandu']));
    }

    public function updateposyandu(Request $request, $id)
    {
        $data = [
        'idposyandu'=>$id,
        'nama_posyandu'     => $request->nama_posyandu,
        'alamat_posyandu'   => $request->alamat_posyandu,
        'jadwal_posyandu'=> $request->jadwal_posyandu
        ];

        $updateData= posyandu::where('idposyandu', $request->id)->update($data);

        if($updateData){
            return redirect()->route('mengeloladataposyandu')->with('success', 'Data berhasil di ubah');
        } else {
            return redirect()->route('mengeloladataposyandu')->with('failed', 'Data gagal di ubah');
        }
    }

    public function deletedataposyandu($id)
    {
        $data = posyandu::where('idposyandu',$id)->first();
        // dd($data);
        $data->delete();
        return redirect()->route('mengeloladataposyandu')->with('success','Data Berhasil Di Hapus');
    }

}
