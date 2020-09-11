<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bill extends Model
{

     use SoftDeletes;
    protected $guarded = [];
    protected $table = "bills";



    public function trx()
    {
        return $this->hasMany('App\Trx','id');
    }
}
