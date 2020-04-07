<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    public function client(){
        return $this->belongsTo(Client::class);
    }
    public function device(){
        return $this->hasOne(Device::class);
    }
    protected $guarded = [];
}
