<?php

namespace App\Models;
use App\Models\employe;

use Illuminate\Database\Eloquent\Model;

class contrat extends Model
{
    protected $fillable = 'libelleContrat';

    public function employes(){
        return $this->hasMany(employe::class);
    }
}
