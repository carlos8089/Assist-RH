<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\bulletin;
use App\Http\Requests\BulletinRequest;
use App\Models\employe;

use PDF;

use App\Http\Controllers\employeController;
use App\Models\employe;

class ficheController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }
    public function page(){
       return view('pages.Paie.fiche');
    }

    public function supprimerPage(){

        $bulletins = bulletin::orderBy('id')->get();

        return view('pages.Paie.supBulletinPage', compact('bulletins'));
    }

    public function creationPage(){
        $employes = employes::get();
        return view('pages.Paie.creerBulletin',compact('employes'));
    }
    
}
