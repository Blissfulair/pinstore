<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'name', 'url', 'comment', 'post_id', 'email'
    ];
    public function post(){
        return $this->belongsTo('App\Post');
    }
    public function replies(){
        return $this->hasMany('App\Reply');
    }
}
