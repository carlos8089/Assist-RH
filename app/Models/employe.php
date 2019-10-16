<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categorie;
use App\Models\bulletin;
use App\Models\poste;
use App\Models\contrat;
use App\Models\upload;


class employe extends Model
{
    //
    protected $fillable = [
        'nom','prenoms','sexe','dateNais','lieuNais','sitMat','nbEnfant','addr','numMat','poste',
        'agence','contrat','dateEmbauche'
    ];

    protected $hidden = [
        'created_at','updated_at'
    ];

    // renvoie tous les bulletin associées à l'employe
    public function bulletins(){
        return $this->hasMany(bulletin::class);
    }

    //renoie la categorie à laquelle appartient l'employe
    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

    public function contrat(){
        return $this->belongsTo(contrat::class);
    }

    public function poste(){
        return $this->belongsTo(poste::class);
    }

    public function agence(){
        return $this->belongsTo(employe::class);
    }
    
    //renvoie la photo de l'employe
    public function photo(){
        return $this->hasOne(upload::class);
    }

    
}
