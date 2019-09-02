<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categorie;
use App\Models\employe;

class poste extends Model
{
    public function employes(){
        return $this->hasMany(employe::class);
    }
    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
}
