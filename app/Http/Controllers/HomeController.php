<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if ( Auth::user()->role == "admin"){
            // return view('admin');
            return redirect()->route('admin');

    } elseif (Auth::user()->role == "superadmin"){
        return redirect()->route('superadmin');

    } elseif (Auth::user()->role == "pakar"){
        return redirect()->route('pakar');
    
    
    } elseif (Auth::user()->role == "pengguna"){
        return redirect()->route('pengguna');

    } else {
        return view('home');


        
    }
}
}
