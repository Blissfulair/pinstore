<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Decoder extends Model
{

     use SoftDeletes;
    protected $guarded = [];
    protected $table = "decoders";



    public function trx()
    {
        return $this->hasMany('App\Trx','id');
    }
}
