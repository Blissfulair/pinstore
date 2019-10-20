<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaystackTransaction extends Model
{
    protected $fillable = [
        'status','givitec_ref', 'paystack_ref','message'
    ];
}
