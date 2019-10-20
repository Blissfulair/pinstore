<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    const PAID = 1;
    protected $fillable = [
        'name', 'email', 'amount', 'additionals', 'service', 'package', 'phone', 'ref', 'status'
    ];
}
