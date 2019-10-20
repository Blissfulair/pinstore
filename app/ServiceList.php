<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceList extends Model
{
    public function items(){
        return $this->hasMany('App\ServiceListItem');
    }
    public function service(){
        return $this->belongsTo('App\ServiceItem','service_item_id', 'id');
    }
}
