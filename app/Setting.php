<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'about','facebook','twitter','logo', 'gplus', 'feed','number','email','youtube','foursquare','address'
    ];
}
