<?php

namespace App\Http\Controllers;

use App\Models\balita;
use App\Models\chat;
use App\Models\diagnosa;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PakarController extends Controller
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
        return view('pakar.pakar', compact(['data', 'dataStunting', 'dataTDKStunting', 'totaldata', 'jb', 'jp', 'jd']));
    }

    public function melihatlaporan()
    {
        return view('pakar.melihatlaporan');
    }
    public function blschat()
    {
        $chat = chat::where('pakar', 'no')->orderBy('created_at', 'DESC')->get();
        // $initialDataCount = chat::count();
        return view('pakar.blschat', compact(['chat']));
    }
    public function viewchat($id)
    {
        $pesans = chat::orWhere('idpengirim', $id)->orWhere('idpenerima', $id)->orderBy('created_at', 'ASC')->get();
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
        return view('pakar.viewchat', compact(['pesans', 'id', 'initialDataCount','grup']));
    }
    public function kirimUser(Request $request)
    {

        // $pakar = User::where('role', 'pakar')->first();

        chat::create([
            'idchat' => 'chat-' . Str::random(8),
            'idpengirim' => Auth::user()->id_user,
            'idpenerima' => $request->idpenerima,
            'isi_text' => $request->isi_text,
            'pakar' => 'yes',
            'tanggal' => Carbon::now(),

        ]);

        return redirect()->back();
    }

    public function reload_chat()
    {
        $latestData = chat::latest()->get();
        return response()->json($latestData);
    }
}
