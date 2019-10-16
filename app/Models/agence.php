<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\employe;
use App\Models\poste;

class agence extends Model
{
    //
    public $fillable = ['nomAgence','addrAgence'];

    public function employes(){
        return $this->hasMany(employe::class);
    }

    public function postes(){
        return $this->hasMany(poste::class);
    }
}
