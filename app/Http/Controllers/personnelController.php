<?php

namespace App\Http\Controllers;

use App\Http\Conrollers\employeController;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\employe;


class personnelController extends Controller
{
    //Affichage la page de festion du personnel
    public function page(){
        $employes = employe::orderBy('id')->paginate(10);

        return view('pages.Personnel.personnelPage', compact('employes'));
    }

    //Affichage un employe dont le nom a été passé en paramètre
    public function find(){
        $nomEmploye = $_GET['nomEmploye'];
        $employes = employe::where('nom',$nomEmploye)->get();

        return view('pages.Personnel.rechercheEmploye',compact('employes'));
    }
    
   
}
