<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceItem extends Model
{
    public function packages(){
       return $this->hasMany('App\ServiceList','id','service_item_id');
    }
    public function transactions(){
        return $this->hasMany('App\Transaction','service', 'id');
    }
}
