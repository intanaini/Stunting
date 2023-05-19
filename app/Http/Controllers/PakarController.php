<?php

namespace App\Http\Controllers;

use App\Models\chat;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PakarController extends Controller
{
    public function index()
    {
        return view('pakar.pakar');
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
        return view('pakar.viewchat', compact(['pesans', 'id', 'initialDataCount']));
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
