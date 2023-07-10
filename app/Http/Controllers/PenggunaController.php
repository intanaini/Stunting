<?php

namespace App\Http\Controllers;

use App\Models\balita;
use App\Models\chat;
use App\Models\informasi;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $sekarang = Carbon::now()->format('Y-m-d');
        $kemarin = Carbon::yesterday()->format('Y-m-d');
        $pesans = chat::orWhere('idpengirim', Auth::user()->id_user)->orWhere('idpenerima', Auth::user()->id_user)->orderBy('created_at', 'ASC')->get();
        $initialDataCount = chat::count();
        $grup = $pesans->groupBy(function ($item) {
            $date = Carbon::parse($item->created_at)->format('Y-m-d');
            $sekarang = Carbon::now()->format('Y-m-d');
            $kemarin = Carbon::yesterday()->format('Y-m-d');
            if ($date == $sekarang) {
                return 'Hari ini';
                # code...
            } elseif ($date == $kemarin) {
                return 'Kemarin';
            } else {

                return date('d F', strtotime($item->created_at));
            }
        });
        $uniq = $grup->keys();
        // dd($grup);
        return view('pengguna.chat', compact(['pesans', 'initialDataCount', 'grup']));
    }
    public function reloadchat()
    {
        $latestData = chat::latest()->get();
        return response()->json($latestData);
    }
    public function kirimUser(Request $request)
    {

        $pakar = User::where('role', 'pakar')->first();

        chat::create([
            'idchat' => 'chat-' . Str::random(8),
            'idpengirim' => Auth::user()->id_user,
            'idpenerima' => $pakar->id_user,
            'isi_text' => $request->isi_text,
            'pakar' => 'no',
            'tanggal' => Carbon::now(),

        ]);

        return redirect()->back();
    }
    public function balita()
    {
        $data = User::where('idposyandu', Auth::user()->idposyandu)->pluck('id_user')->toArray();
        $balita = balita::where('idortu', Auth::user()->id_user)->get();
        return view('pengguna.balita', compact(['balita']));
    }
    public function tambahdatabalita()
    {
        $balita = balita::all();
        $ortu = User::where('role', 'pengguna')->where('idposyandu', Auth::user()->idposyandu)->get();
        return view('pengguna.tambahbalita', compact(['balita', 'ortu']));
    }
    public function insertdatabalita(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'nik' => 'required',
            'nama_balita' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'orang_tua' => 'required'
        ], [
            'nik.required' => 'Kolom Wajib Diisi',
            'nama_balita.required' => 'Kolom Wajib Diisi',
            'tempat_lahir.required' => 'Kolom Wajib Diisi',
            'tanggal_lahir.required' => 'Kolom Wajib Diisi',
        ]);

        $ids = 'balita-' . Str::random(8);
        // $request->merge(['password' => Hash::make($request->input('password'))]);
        $balita = balita::create([
            'idbalita' => $ids,
            'nik'     => $request->nik,
            'idortu' => $request->orang_tua,
            'nama_balita'   => $request->nama_balita,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir'   => $request->tempat_lahir,
            'tanggal_lahir'   => $request->tanggal_lahir
        ]);
        // dd($balita);

        if ($balita) {
            return redirect()->route('databalita')->with('success', 'Data berhasil di tambahkan');
        } else {
            return redirect()->route('databalita')->with('failed', 'Data gagal di tambahkan');
        }
    }

    public function editdatabalita($idbalita)
    {
        $balita = balita::where('idbalita', $idbalita)->first();
        $ortu = User::where('role', 'pengguna')->get();
        return view('pengguna.editbalita', compact(['balita', 'ortu']));
    }

    public function updatebalita(Request $request, $id)
    {
        $this->validate($request, [
            'nik' => 'required',
            'nama_balita' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'orang_tua' => 'required'
        ]);

        $data = [
            // 'idbalita'=>$id,
            'nik'     => $request->nik,
            'nama_balita'   => $request->nama_balita,
            'idortu' => $request->orang_tua,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir'   => $request->tempat_lahir,
            'tanggal_lahir'   => $request->tanggal_lahir
        ];

        $updateData = balita::where('idbalita', $request->id)->update($data);


        if ($updateData) {
            return redirect()->route('databalita')->with('success', 'Data berhasil di ubah');
        } else {
            return redirect()->route('databalita')->with('failed', 'Data gagal di ubah');
        }
    }

    public function deletedatabalita($id)
    {
        $data = balita::find($id);
        $data->delete();
        return redirect()->route('databalita')->with('success', 'Data Berhasil Di Hapus');
    }


    public function lhtperkembangan()
    {
        $user = User::find(Auth::user()->id_user);
        $perkembangan = $user->balita()->with('perkembangan')->get()->pluck('perkembangan')->flatten();


        return view('pengguna.lhtperkembangan', compact(['perkembangan']));
    }
    public function informasi()
    {
        $info = informasi::paginate(9);
        $info_f = informasi::orderBy('created_at', 'desc')->first();

        return view('pengguna.informasi', compact(['info', 'info_f']));
    }
    public function viewinfo($id)
    {
        $info = informasi::where('idinformasi', $id)->first();
        return view('pengguna.view-info', compact(['info']));
    }
}
