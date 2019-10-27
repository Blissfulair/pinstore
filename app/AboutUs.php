<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $fillable = [
        'about_us', 'mission', 'vision', 'expanding_goal'
    ];
}
