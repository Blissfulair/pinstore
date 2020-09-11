<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Apibill extends Model
{

     use SoftDeletes;
    protected $guarded = [];
    protected $table = "apibills";



    public function trx()
    {
        return $this->hasMany('App\Trx','id');
    }
}
