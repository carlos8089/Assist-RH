<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class personnelController extends Controller
{
    //
    public function page(){
        return view('pages.Personnel.personnelPage');
    }
    public function lister(){
        $employes = employe::orderBy('id')->get();
        
        return view('pages.Personnel.listeEmploye', compact('employes'));
    }
}
