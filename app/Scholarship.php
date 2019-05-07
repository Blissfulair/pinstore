<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
   protected $fillable = [
       'name', 'image', 'subject1', 'subject2', 'subject3', 'subject4', 'reg_number', 'email', 'phone_num'
   ];
}
