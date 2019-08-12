<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilController extends Controller
{
    //
    public function show(){
        return view('pages.Profil.profil');
    }
}
