<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categorie;
use App\Models\bulletin;
use App\Models\poste;
use App\Models\contrat;


class employe extends Model
{
    //
    protected $fillable = [
        'nom','prenoms','sexe','dateNais','lieuNais','sitMat','nbEnfant','addr','numMat','poste',
        'agence','contrat','dateEmbauche'
    ];

    // renvoie tous les bulletin associées à l'employe
    public function bulletins(){
        return $this->hasMany(bulletin::class);
    }

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

    public function contrat(){
        return $this->belongsTo(contrat::class);
    }

    public function poste(){
        return $this->belongsTo(poste::class);
    }

    protected $hidden = [
        'created_at','updated_at'
    ];
}
