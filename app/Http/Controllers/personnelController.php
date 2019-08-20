<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class personnelController extends Controller
{
    //
    public function page(){
        return view('pages.Personnel.personnel');
    }
}
