<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected  $guarded = [];
    protected $fillable = ['type', 'amount'];
}
