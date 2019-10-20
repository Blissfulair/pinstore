<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceList extends Model
{
    public function items(){
        return $this->hasMany('App\ServiceListItem');
    }
    public function package(){
        return $this->belongsTo('App\ServiceItem', 'id');
    }
}
