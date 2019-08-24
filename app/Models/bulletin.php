<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bulletin extends Model
{
    //
    protected $fillable = [
        'numCSS','anciennte','libelleContrat','salaireDeBase','primeAnciennete','primeCaisse','primeResponsabilite',
        'indemniteLogement','indemniteRepresentation',
        'primeHabillement','primeDeplacement','primeEncouragement','primeSante','primeterrain','primeJourFerie','primeSemestrielle','primeOuvertureCompte',
        'CNSS','IRPP','TCS','cotisationMutuelle','pretImmobilier','TS'
    ];

    protected $hidden = [
        'created_at','updated_at'
    ];
}
