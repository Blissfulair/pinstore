<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceItem extends Model
{
    public function packages(){
       return $this->hasMany('App\ServiceList','service_item_id');
    }
}
