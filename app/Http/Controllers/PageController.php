<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function beranda()
    {
        return view('beranda');
    }

    public function menuGame()
    {
        return view('menugame');
    }

    public function profil()
    {
        return view('profil');
    }
}
