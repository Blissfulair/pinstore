<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = "jobs";
    protected $guarded =[];
    protected $fillable = ['job_title', 'job_description', 'job_cat', 'location', 'created_by', 'image', 'status'];


    public function category()
    {
        return $this->belongsTo('App\Category','job_cat','id');
    }

}
