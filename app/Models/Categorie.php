<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\employe;
use App\Models\poste;

class Categorie extends Model
{
    protected $fillable = [
        'nomCategorie','salaireDeBase','primeCaisse','primeResponsabilite','indemniteLogement',
        'indemniteRepresentation','primeHabillement','primeDeplacement','primeEncouragement','primeSante',
        'primeTerrain','primeJourFerie','primeSemestrielle','primeOuvertureCompte'
    ];
        
    public function employes(){
        return $this->hasMany(employe::class);
    }

    public function postes(){
        return $this->hasMany(poste::class);
    }
}
