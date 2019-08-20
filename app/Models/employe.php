<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employe extends Model
{
    //the attributes that are mass assignable
    protected $fillable = ['nom','prenoms','sexe','lieuNais','sitMat','nbEnfant','addr','poste','agence','contrat'];

    //hidden attributes
    protected $hidden = ['created_at','updated_at'];
}
