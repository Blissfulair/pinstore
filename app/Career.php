<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable = [
        'icon', 'name', 'content'
    ];
    public static function exist($request){
        return self::where('name', $request->name)->first();
    }
}
