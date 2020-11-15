<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jamb extends Model
{
    protected $table = "jamb";
    protected $guarded =[];


    public function bill()
    {
        return $this->belongsTo('App\Bill','bill_id','id');
    }
    public function cbt()
    {
        return $this->belongsTo('App\Cbt','cbt_id','id');
    }

}
