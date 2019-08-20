<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ficheController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }
    public function page(){
       return view('pages.Paie.fiche');
    }
}
