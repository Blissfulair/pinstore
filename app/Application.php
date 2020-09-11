<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = "application";
    protected $guarded =[];


    public function Job()
    {
        return $this->belongsTo('App\Job','job_id','id');
    }

}
