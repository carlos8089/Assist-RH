<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilController extends Controller
{
    //
    public function page(){
        return view('pages.Profils.profil');
    }
}
