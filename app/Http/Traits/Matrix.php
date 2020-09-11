<?php
namespace App\Http\Traits;


use App\GeneralSettings;
use App\Plan;
use App\Mlmpay;
use App\User;
use Mail;

trait Matrix{

    function get_position($user_id){
        $user = User::find($user_id);
             if ($user->ref_id != 0){
                return $this->assign_position($user->id);
             }

    }

// khali_ache_naki
    function assign_position($user_id){

        $user = User::find($user_id);
        $refer = User::find($user->ref_id);

         $stststs = 0;

    
        if($this->khali_ache_naki($refer->id)!=0){
            $user->position_id = $refer->id;
            $user->position =$this->khali_ache_naki($refer->id);
            $user->save();

        }else{

             for ($level=1; $level < 100 ; $level++) {

                    $myref = $this->showPositionBelow($refer->id);
                         $nxt =   $myref;
                    for ($i=1; $i < $level ; $i++) {
                        $nxt = array();
                        foreach($myref as $uu){
                            $n = $this->showPositionBelow($uu);
                            $nxt = array_merge($nxt, $n);
                        }
                        $myref = $nxt;
                    }


                foreach($nxt as $uu){

                    if($this->khali_ache_naki($uu)!=0){
                        $user->position_id = $uu;
                        $user->position =$this->khali_ache_naki($uu);
                        $user->save();
                       $stststs = 1;
                    }

                    if($stststs == 1){
                        break;
                    }

                }

                 if($stststs == 1){
                    break;
                }
             }

        }

    }






function showPositionBelow($id){
    $arr = array();
    $under_ref = \App\User::where('position_id',$id)->get();
    foreach($under_ref as $u){
        array_push($arr,$u->id);
    }
    return $arr;
}



    function khali_ache_naki($user_id){
        $count = User::where('position_id',$user_id)->count();

        if($count < $this->matrix_width()){
            return $count+1;
        }else{
            return 0;
        }

    }




    function give_referral_commission($user_id, $plan_id){

        $user = User::find($user_id);
        $plan = Plan::whereId($plan_id)->first();
        if($user){
            if ($user->ref_id != 0){
                $refer = $this->user_valid($user->ref_id);
                $refer->update(['matrixpay' => $refer->matrixpay + $plan->ref_bonus]);
                $refer->update(['pvs' => $refer->pvs + $plan->pvs]);


                  Mlmpay::create([
                    'amount' => $plan->ref_bonus,
                    'user_id' => $refer->id,
                    'amount' => $plan->ref_bonus,
                    'balance' => $refer->balance,
                    'type' => 4,
                    'title' => 'Referral Bonus from ' .$user->username,
                    'trx' => getTrx(),
                ]);

                 $email = $refer->email;
                 $basic = GeneralSettings::first();
        $refer = $this->user_valid($user->ref_id);
        $to_name = $refer->username;
        $sitename = env('APP_NAME');
        $to_email = $refer->email;
        $heading = "Referral Comission";
        $data = array("name"=> $refer->username,"heading"=>"Referral Commission", "body" => "Your have earned ".$basic->currency." ". $plan->ref_bonus." referral commission on your Multilevel Network Plan, Thank you for choosing ".$basic->sitename."");

        Mail::send("mail", $data, function($message) use ($to_name,  $heading, $to_email) {
        $message->to($to_email, $to_name,  $heading)
        ->subject("Referral Commision");

         $message->from(env('MAIL_USERNAME'),env('APP_NAME'));
        });






            }

        }
    }



    function give_level_commission($user_id, $plan_id){

        $fromUser = User::find($user_id);
        $usr = $user_id;
        $plan = Plan::whereId($plan_id)->with('plan_level')->first();
        $i = 1;
        while($usr !="" || $usr != "0" || $i <= $this->matrix_height()){
            $me = User::find($usr);
            if($this->user_valid($me->position_id) === false){ break; }
            $refer = $this->user_valid($me->position_id);   
            if ($i <= $this->matrix_height()){

                // echo $refer->id.'<br>';

                $commission = $plan->plan_level->where('level',$i)->first();
                if (!$commission){ break; }
                $refer->update(['matrixpay' => $refer->matrixpay + $commission->amount]);
                $refer->update(['pvs' => $refer->pvs + $commission->pvs]);

                 Mlmpay::create([
                    'amount' => $commission->amount,
                    'user_id' => $refer->id,
                    'amount' => $commission->amount,
                    'balance' => $refer->balance,
                    'type' => 11,
                    'title' => 'Level '.$i.' Commission From '. $fromUser->username,
                    'trx' => getTrx(),
            ]);




                 $email = $refer->email;
                 $basic = GeneralSettings::first();

                $to_name = $refer->username;
                $sitename = env('APP_NAME');
                $to_email = $refer->email;
                $heading = "Referral Level Comission";
                $data = array("name"=> $refer->username,"heading"=>"Referral Level Commission", "body" => "Your have earned ".$basic->currency." ".$commission->amount." level commission on your Multilevel Network Plan. Your new MLM level is ".$i."");

                Mail::send("mail", $data, function($message) use ($to_name,  $heading, $to_email) {
                $message->to($to_email, $to_name,  $heading)
                ->subject("Level Commision");
                $message->from(env('MAIL_USERNAME'),env('APP_NAME'));
                });




            }

            $usr = $refer->id;
            $i++;
        }
        return 0;
    }





    function user_valid($user_id){
        $user = User::find($user_id);
        return $user ? $user:false;
    }

    function matrix_width(){
       return GeneralSettings::first()->matrix_width;
    }

    function matrix_height(){
        return GeneralSettings::first()->matrix_height;
    }

}
