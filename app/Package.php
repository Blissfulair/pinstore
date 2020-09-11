<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{

     use SoftDeletes;
    protected $guarded = [];
    protected $table = "packages";



    public function trx()
    {
        return $this->hasMany('App\Trx','id');
    }
}
