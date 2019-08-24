<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employe extends Model
{
    //
    protected $fillable = [
        'nom','prenoms','sexe','dateNais','lieuNais','sitMat','nbEnfant','addr','numMat','poste',
        'agence','contrat','created_at'
    ];
    protected $hidden = [
        'updated_at'
    ];
}
