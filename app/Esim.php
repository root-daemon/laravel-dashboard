<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Esim extends Model
{   protected $guarded = [];
    public function device(){
        return $this->belongsTo(Device::class);
    }
    public function plan(){
        return $this->belongsTo(Plan::class);
    }

}
