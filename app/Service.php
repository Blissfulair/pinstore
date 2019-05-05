<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'icon', 'name', 'content','featured_image', 'quote','brochure_image','created_by'
    ];
    public static function exist($request){
        return self::where('name', $request->name)->first();
    }
}
