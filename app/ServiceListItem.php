<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceListItem extends Model
{
    public function item(){
        return $this->belongsTo('App/ServiceList');
    }
}
