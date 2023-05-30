<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('profile.profile', compact('user'));
    }
    public function editprofil($iduser)
    {
        $user = User::all();
        return view('profile.editprofile', compact(['user']));
    }

    public function updateprofile(Request $request)
    {
        $data = [
            'id_user' => $request->id,
            'nik'     => $request->nik,
            'name'   => $request->name,
            'role' => $request->role,
            // 'password'   => $request->password,
            'status_users'   => $request->status_users,
            'no_hp'   => $request->no_hp,
            'idposyandu'   => $request->id_posyandu
        ];

        $updateData = User::where('id_user', $request->id)->update($data);
        if ($request->password) {
            $updateData->update([
                'password'   => $request->password,
            ]);
        }

        if ($updateData) {
            return redirect()->route('profil')->with('success', 'Data berhasil di ubah');
        } else {
            return redirect()->route('profil')->with('failed', 'Data gagal di ubah');
        }
    }
}
