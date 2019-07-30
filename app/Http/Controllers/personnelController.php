<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class personnelController extends Controller
{
    //
    public function show(){
        return view('pages.personnel');
    }
}
