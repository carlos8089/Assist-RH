<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\ {
    Http\Requests\ProfilRequest,
    User
};

class UtilisateursController extends Controller
{
    //
    public function page()
    {
        
        $users = User::orderBy('id')->get();

        return view('pages.Profils.profils',compact('users'));
    }
}
