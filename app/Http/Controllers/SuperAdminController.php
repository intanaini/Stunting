<?php

namespace App\Http\Controllers;

use App\Models\balita;
use App\Models\diagnosa;
use App\Models\posyandu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Stringable;
use Illuminate\Support\Str;

class SuperAdminController extends Controller
{
    public function index()
    {
        $data = User::where('idposyandu', Auth::user()->idposyandu)->pluck('id_user')->toArray();
        $jb = balita::count();
        $jp = User::where('role', 'pengguna')->count();
        // dd($jumlahbalita);
        // dd($data);
        $balita = balita::pluck('idbalita')->toArray();
        $jd = diagnosa::count();
        // dd($balita);        // $ortu = 

        $dataStunting = [];
        $dataTDKStunting = [];
        $bulan = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
        foreach ($bulan as $key) {
            $diagnosa = diagnosa::whereIn('idbalita', $balita)->where('hasil_diagnosa', 'stunting')->whereMonth('created_at', $key)->whereYear('created_at', date('Y'))->get();
            array_push($dataStunting, ($diagnosa->count() ?? 0));
        }
        foreach ($bulan as $key) {
            $diagnosa = diagnosa::whereIn('idbalita', $balita)->where('hasil_diagnosa', 'tidak stunting')->whereMonth('created_at', $key)->whereYear('created_at', date('Y'))->get();
            array_push($dataTDKStunting, ($diagnosa->count() ?? 0));
        }

        // ==========================================================


        $totaldata = [];
        $ts = diagnosa::whereIn('idbalita', $balita)->where('hasil_diagnosa', 'stunting')->get();
        $tts = diagnosa::whereIn('idbalita', $balita)->where('hasil_diagnosa', 'tidak stunting')->get();
        array_push($totaldata, $ts->count() ?? 0);
        array_push($totaldata, $tts->count() ?? 0);

        return view('superadmin.superadmin', compact(['data', 'dataStunting', 'dataTDKStunting', 'totaldata', 'jb', 'jp', 'jd']));
    }
    public function dataadmin()
    {
        return view('superadmin.dataadmin');
    }
    public function datauser()
    {
        return view('superadmin.datauser');
    }
    public function databalita(Request $request)
    {   
        $searchTerm = $request->input('q');

        $query = balita::query();

        if ($searchTerm) {
            $query->where('nama_balita', 'LIKE', "%$searchTerm%")
                ->orWhere('jenis_kelamin', 'LIKE', "%$searchTerm%")
                ->orWhere('tempat_lahir', 'LIKE', "%$searchTerm%")
                ->orWhere('tanggal_lahir', 'LIKE', "%$searchTerm%")
                ->orWhereHas('ortu.posyandu', function ($q) use ($searchTerm) {
                    $q->where('nama_posyandu', 'LIKE', "%$searchTerm%");
                });
        }

        $user = $query->paginate(30);

        return view('superadmin.databalita', compact('user'));
    }
    public function search(Request $request)
    {
        $searchTerm = $request->input('q');

        $results = balita::where('nama_balita', 'LIKE', "%$searchTerm%")
            ->get();
        return view('superadmin.databalita', ['user' => $results]);
    }
    public function mengeloladataposyandu()
    {
        $posyandu = posyandu::orderBy('nama_posyandu')->paginate(10);

        return view('superadmin.mengeloladataposyandu', compact('posyandu'));
    }
    public function tambahdataposyandu()
    {
        $posyandu = posyandu::all();

        return view('superadmin.tambahposyandu', compact('posyandu'));
    }
    public function insertdataposyandu(Request $request)
    {
        $this->validate($request, [
            //    'idposyandu' => 'required',
            'nama_posyandu' => 'required',
            'alamat_posyandu' => 'required',
            'jadwal_posyandu' => 'required',
        ]);
        $ids = 'ps-' . Str::random(3);
        $request->merge(['password' => Hash::make($request->input('password'))]);
        $posyandu = posyandu::create([
            'idposyandu' => $ids,
            'nama_posyandu'     => $request->nama_posyandu,
            'alamat_posyandu'   => $request->alamat_posyandu,
            'jadwal_posyandu' => $request->jadwal_posyandu,

        ]);

        if ($posyandu) {
            return redirect()->route('mengeloladataposyandu')->with('success', 'Data berhasil di tambahkan');
        } else {
            return redirect()->route('mengeloladataposyandu')->with('failed', 'Data gagal di tambahkan');
        }
    }
    public function editdataposyandu($idposyandu)
    {
        $posyandu = posyandu::where('idposyandu', $idposyandu)->first();
        return view('superadmin.editposyandu', compact(['posyandu']));
    }

    public function updateposyandu(Request $request, $id)
    {
        $data = [
            'idposyandu' => $id,
            'nama_posyandu'     => $request->nama_posyandu,
            'alamat_posyandu'   => $request->alamat_posyandu,
            'jadwal_posyandu' => $request->jadwal_posyandu
        ];

        $updateData = posyandu::where('idposyandu', $request->id)->update($data);

        if ($updateData) {
            return redirect()->route('mengeloladataposyandu')->with('success', 'Data berhasil di ubah');
        } else {
            return redirect()->route('mengeloladataposyandu')->with('failed', 'Data gagal di ubah');
        }
    }

    public function deletedataposyandu($id)
    {
        $data = posyandu::where('idposyandu', $id)->first();
        // dd($data);
        $data->delete();
        return redirect()->route('mengeloladataposyandu')->with('success', 'Data Berhasil Di Hapus');
    }
    public function cetaklaporanD()
    {
        return view('superadmin.cetakSlaporanD');
    }
    public function cetaklaporanP()
    {
        return view('superadmin.cetakSlaporanP');
    }
}
