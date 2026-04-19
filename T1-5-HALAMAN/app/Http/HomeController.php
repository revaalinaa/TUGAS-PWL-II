<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function beranda(){
        return view('beranda');
    }

    public function cincin(){
        return view('cincin');
    }

    public function kalung(){
        return view('kalung');
    }

    public function gelang(){
        return view('gelang');
    }

    public function anting(){
        return view('anting');
    }

    public function bros(){
        return view('bros');
    }
}