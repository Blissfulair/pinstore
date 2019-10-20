<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jamb extends Model
{
    protected $fillable =[
        'reg_no', 'lastname', 'firstname', 'middle_name', 'dob',
        'nin', 'profile_code', 'lga', 'home_town', 'email', 'phone',
        'password', 'state', 'address', 'first_choice_inst', 'second_choice_inst',
        'third_choice_inst', 'first_choice_course', 'second_choice_course', 'third_choice_course'
    ];
}
