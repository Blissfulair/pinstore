<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $table = "cards";
    protected $fillable = ['type', 'pin', 'serial_no', 'status'];

    public function pin_user(){
        return $this->belongsTo(User::class, 'user_id')->withDefault();
    }

    public function service(){
        return $this->belongsTo(Service::class, 'type')->withDefault();
    }


}
