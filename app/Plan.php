<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    public function esim(){
        return $this->hasMany(Esim::class);
    }
}
