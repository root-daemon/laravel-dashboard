<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Esim extends Model
{
    public function device(){
        return $this->belongsTo(Device::class);
    }
    public function plan(){
        return $this->hasOne(Plan::class);
    }
}
