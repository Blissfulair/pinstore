<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Internetbundle extends Model
{

     use SoftDeletes;
    protected $guarded = [];
    protected $table = "internetbundles";



    public function trx()
    {
        return $this->hasMany('App\Trx','id');
    }
}
