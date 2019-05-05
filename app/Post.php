<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'content', 'featured_image', 'created_by'
    ];
    public static function exist($request){
        return self::where('title', $request->title)->first();
    }
    public static function get_post_by_title($name){
        return self::where('title', $name)->first();
    }
    public function postmetas(){
        return $this->hasMany('App\PostMeta');
    }
    public function get_trending(){
        return $this->postmetas()->orderBy('meta_value', 'DESC')->first();
    }
    public function comments(){
        return $this->hasMany('App\Comment');
    }
}
