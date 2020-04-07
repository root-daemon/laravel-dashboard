<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
   protected $primaryKey ='client_id';
    //public function device(){
      //  return $this->hasMany(Device::class);
   // }
   public function owner(){
       return $this->hasMany(Owner::class);
   }
   protected $guarded = [];
}
