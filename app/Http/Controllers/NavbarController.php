<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function warisan(){
        return view('components.warisan');
    }
    public function lembaga(){
        return view('components.lembaga');
    }
    public function gebongmemarong(){
        return view('components.gebongmemarong');
    }
}
