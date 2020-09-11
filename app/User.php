<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     use SoftDeletes;
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // public static function getDownlines($user_id){
    //     $total = self::where('ref_id', $user_id)->pluck('id')->toArray();
    //     dd($total);
    // }
    protected $hidden = [
        'password', 'remember_token',
    ];

}
