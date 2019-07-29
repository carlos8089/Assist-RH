<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ficheController extends Controller
{
    //
    public function show(){
       return view('pages/fiche');
    }
}
