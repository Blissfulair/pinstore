<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name','position','about','image'
    ]; 
    public static function exist($request){
        return self::where('name', $request->name)->first();
    }
}
