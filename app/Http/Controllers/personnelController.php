<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\employe;


class personnelController extends Controller
{
    //
    public function page(){
        $employes = employe::orderBy('id')->get();

        return view('pages.Personnel.personnelPage', compact('employes'));
    }
   
}
