<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\ {
    Http\Requests\ProfilRequest,
    User
};
use App\Http\Controllers;

class UtilisateursController extends Controller
{
    //
    public function page()
    {
        
        $users = User::orderBy('id')->paginate(10);

        return view('pages.Profils.profils',compact('users'));
    }
    public function find(){
        $nomUtilisateur = $_GET['username'];
        $users = User::where('name',$nomUtilisateur)->get();

        return view('pages.Profils.profil',compact('users'));
    }
}
