<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('pakar.blschat');
    }
    public function viewchat()
    {
        return view('pakar.viewchat');
    }
}