<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name', 'message', 'phone_num', 'subject', 'email'
    ];
}
