<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    public function owner(){
        return $this->belongsTo(Owner::class);
    }
    public function esim(){
        return $this->hasOne(Esim::class);
    }
}
