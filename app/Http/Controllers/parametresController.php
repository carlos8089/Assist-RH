<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class parametresController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function page(){
        return view('pages.divers.parametres');
    }
}
