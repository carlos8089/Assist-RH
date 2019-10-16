<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\employe;
use App\Models\poste;

class Categorie extends Model
{
    protected $fillable = [
        'nomCategorie','categorie_salaireDeBase','categorie_primeCaisse','categorie_primeResponsabilite','categorie_indemniteLogement',
        'categorie_indemniteRepresentation','categorie_primeHabillement','categorie_primeDeplacement','categorie_primeEncouragement','categorie_primeSante',
        'categorie_primeTerrain','categorie_primeJourFerie','categorie_primeSemestrielle','categorie_primeOuvertureCompte'
    ];
        
    public function employes(){
        return $this->hasMany(employe::class);
    }

    public function toutpostes(){
        return $this->hasMany('App\Models\poste','id');
    }
    public function postes($id){
        //retourne les postes pour la catégorie sélectionnée
        return poste::whereCategorieId($id)->get();
    }
}
