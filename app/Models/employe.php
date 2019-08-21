<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employe extends Model
{
    //
    protected $fillable = [
        'nom','prenoms','sexe','lieuNais','sitMat','nbEnfant','addr','numMat','poste',
        'agence','contrat'
    ];
    protected $hidden = [
        'created_at','updated_at'
    ];
}
