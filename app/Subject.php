<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public static function subject($subject_id){
        $subject = '';
        if($subject_id != null){
            $subject = substr(self::find($subject_id)->name, 4);
            switch($subject){
                case 'English':
                $subject = 'Use of English';
                break;
                case 'Crs':
                $subject = 'crs/crk';
                break;
                case 'Account':
                $subject = 'accounting';
                break;
                case 'Literature':
                $subject = 'lit-in-english';
                break;
                case 'Agric':
                $subject = 'Agric. Science';
                break;
            }
            return strtoupper($subject);
        }else
            return $subject;

    }
}
