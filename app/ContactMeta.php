<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactMeta extends Model
{
    protected $fillable = [
        'contact_id', 'user_id', 'status'
    ];
    public function contact(){
        return $this->belongsTo('App\Contact');
    }
    public static function unreadmails(){
        
    }
}
