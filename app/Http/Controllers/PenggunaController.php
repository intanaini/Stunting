<?php

namespace App\Http\Controllers;

use App\Models\balita;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PenggunaController extends Controller
{
    public function index()
    {
        return view('pengguna.pengguna');
    }
    public function chat()
    {
        return view('pengguna.chat');
    }
    public function balita()
    {
        $balita = balita::all();
        return view('pengguna.balita',compact(['balita']));
    }
    public function tambahdatabalita()
    {
        $balita = balita::all();
        $ortu = User::where('role','pengguna')->get();
        return view('pengguna.tambahbalita',compact(['balita','ortu']));
    }
    public function insertdatabalita(Request $request)
    {
        $this->validate($request, [
           'nik' => 'required',
           'nama_balita' => 'required', 
           'jenis_kelamin' => 'required', 
           'tempat_lahir' => 'required|min:8',
           'tanggal_lahir' => 'required',
           'orang_tua'=> 'required'
        ]);
        $ids = 'balita-'. Str::random(8);
        // $request->merge(['password' => Hash::make($request->input('password'))]);
       $balita = balita::create([
        'idbalita'=>$ids,
        'nik'     => $request->nik,
        'idortu'=> $request->orang_tua,
        'nama_balita'   => $request->nama_balita,
        'jenis_kelamin'=> $request->jenis_kelamin,
        'tempat_lahir'   => $request->tempat_lahir,
        'tanggal_lahir'   => $request->tanggal_lahir
        ]);

        if ($balita) {
            return redirect()->route('databalita')->with('success', 'Data berhasil di tambahkan');
        } else {
            return redirect()->route('databalita')->with('failed', 'Data gagal di tambahkan');
        }
    }
    public function editdatabalita($idbalita)
    {
        $balita = balita::where('idbalita',$idbalita)->first();
        $ortu = User::where('role','pengguna')->get();
        return view('pengguna.editbalita', compact(['balita','ortu']));
    }

    public function updatebalita(Request $request, $id)
    {
        $this->validate($request, [
            'nik' => 'required',
            'nama_balita' => 'required', 
            'jenis_kelamin' => 'required', 
            'tempat_lahir' => 'required|min:8',
            'tanggal_lahir' => 'required',
            'orang_tua'=> 'required'
         ]);

        $data = [
            // 'idbalita'=>$id,
            'nik'     => $request->nik,
            'nama_balita'   => $request->nama_balita,
            'idortu'=> $request->orang_tua,
            'jenis_kelamin'=> $request->jenis_kelamin,
            'tempat_lahir'   => $request->tempat_lahir,
            'tanggal_lahir'   => $request->tanggal_lahir
        ];

        $updateData= balita::where('idbalita', $request->id)->update($data);
        

        if($updateData){
            return redirect()->route('databalita')->with('success', 'Data berhasil di ubah');
        } else {
            return redirect()->route('databalita')->with('failed', 'Data gagal di ubah');
        }
    }

    public function deletedatabalita($id)
    {
        $data = balita::find($id);
        $data->delete();
        return redirect()->route('databalita')->with('success','Data Berhasil Di Hapus');
    }


    public function lhtperkembangan()
    {
        return view('pengguna.lhtperkembangan');
    }
    public function informasi()
    {
        return view('pengguna.informasi');
    }
}
