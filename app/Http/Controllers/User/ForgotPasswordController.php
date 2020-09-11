<?php

namespace App\Http\Controllers\User;

use App\GeneralSettings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Password;
use App\User;
use DB;
use Mail;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;
    public function __construct()
    {
        $basic= GeneralSettings::first();

    }

    public function showLinkRequestForm()
    {
        $data['page_title'] = "Send Link password";
        return view('auth.passwords.email',$data);
    }

    public function sendResetLinkEmail(Request $request)
    {
        $this->validateEmail($request);
        $us = User::whereEmail($request->email)->count();
        if ($us == 0)
        {
            return redirect()->back()->with('danger', 'We can\'t find a user with that e-mail address.');
        }else{
            $user = User::whereEmail($request->email)->first();
            $to =$user->email;
            $name = $user->fname. ' '.$user->lname;
            $subject = 'Password Reset';
            $code = str_random(30);

            $link = url('/user-password/').'/reset/'.$code;

            $message = "Your Username: $user->username";
            $message .= "Use The Link Below to Reset Password. If link is not clickable, copy link text and paste in your browser to reset your password:";
            $message .= ".$link.";

            DB::table('password_resets')->insert(
                ['email' => $to, 'token' => $code,  'created_at' => date("Y-m-d h:i:s")]
            );

        $to_name = $user->username;
        $sitename = env('APP_NAME');
        $to_email = $user->email;
        $heading = "Password Reset";
        $data = array("name"=> $user->username,"heading"=>"Password Reset", "body" => $message);

        Mail::send("mail", $data, function($message) use ($to_name,  $heading, $to_email) {
        $message->to($to_email, $to_name,  $heading)
        ->subject("Password Reset");

         $message->from(env('MAIL_USERNAME'),env('APP_NAME'));
        });



            return redirect()->back()->with('success','Password Reset Link Send Your E-mail');
        }
    }
}
