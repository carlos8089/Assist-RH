<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categorie;
use App\Models\employe;
use App\Models\agence;

class poste extends Model
{
    protected $fillable = ['id','libellePoste','categorie_id'] ;


    public function employes(){
        return $this->hasMany(employe::class);
    }

    public function categorie(){
        return $this->belongsTo('App\Models\Categorie','categorie_id');
    }

    public function agences(){
        return $this->belongsToMany(agence::class);
    }
}
