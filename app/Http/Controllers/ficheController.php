<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\bulletin;
use App\Http\Requests\BulletinRequest;
use App\Models\employe;
use App\Models\poste;
use App\Models\Categorie;

use PDF;

use App\Http\Controllers\employeController;


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
        return view('pages.Paie.creerBulletin');
    }

    public function creationPage2(){
        $employes = employe::get();
        return view('pages.Paie.bulletinPage2',compact('employes'));
    }
    
    public function creationPage3($id){
        $employes = employe::where('id',$id)->get();
       // echo $employes;
       //dd($employe);
        $poste = employe::find($id)->poste;
        $employe_categories = poste::find($poste)->categorie_id;
        
        $categories = categorie::where('id',$employe_categories)->get();
        
        return view('pages.Paie.bulletinPage3', compact('employes','categories'));
    }
}
