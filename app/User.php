<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Post;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','number','image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function posts(){
        return $this->hasMany('App\Post');
    }
    public function usermeta(){
        return $this->hasOne('App\UserMeta');
    }
    public function getnotifications(){
        $created_at = '';
        if($this->usermeta)
            $created_at = $this->usermeta->updated_at;
        $message = Post::where('created_at', '>' ,$created_at )->orderBy('updated_at', 'DESC')->get();
        return $message;
    }
}
