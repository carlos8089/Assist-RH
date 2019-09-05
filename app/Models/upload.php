<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\employe;

class upload extends Model
{
    
    public function employe(){
        return $this->belongsTo(employe::class);
    }
}
