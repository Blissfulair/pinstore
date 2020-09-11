<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Decodersub extends Model
{

     use SoftDeletes;
    protected $guarded = [];
    protected $table = "decodersubscriptions";



    public function trx()
    {
        return $this->hasMany('App\Trx','id');
    }
}
