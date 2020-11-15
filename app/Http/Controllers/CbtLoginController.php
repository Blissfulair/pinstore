<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\GeneralSettings;
use App\Cbt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class CbtLoginController extends Controller
{


	public function __construct(){
		$Gset = GeneralSettings::first();
		$this->sitename = $Gset->sitename;
	}


	public function index(){

		if(Auth::guard('cbt')->check()){
			return redirect()->route('cbt.dashboard');
		}

		$data['page_title'] = "CBT User";
		return view('cbt.login', $data);
	}

	public function authenticate(Request $request){
		if (Auth::guard('cbt')->attempt([
			'username' => $request->username,
			'password' => $request->password,
		])) {
		   session()->flash('success', 'Login Successfully. ');

			return redirect()->route('cbt.dashboard');
		}
			return back()->with('alert', 'Wrong CBT Login Details!');

	}

	public function create(Request $request)
    {
        $basic = GeneralSettings::first();

        if ($basic->email_verification == 1) {
            $email_verify = 0;
        } else {
            $email_verify = 1;
        }

        if ($basic->sms_verification == 1) {
            $phone_verify = 0;
        } else {
            $phone_verify = 1;
        }





        $verification_code  = strtoupper(Str::random(6));
        $sms_code  = strtoupper(Str::random(6));
        $email_time = Carbon::parse()->addMinutes(5);
        $phone_time = Carbon::parse()->addMinutes(5);



        $user = Cbt::create([
            'email' => $request['email'],
            'timezone' => $basic->timezone,
            'phone' => $request['phone'],
            'username' => strtolower($request['username']),
            'email_verify' => $email_verify,
            'verification_code' => $verification_code,
            'sms_code' => $sms_code,
            'email_time' => $email_time,
            'phone_verify' => $phone_verify,
            'confirmed' => 1,
			'status'=>1,
            'token' => strtoupper(Str::random(100)),
            'phone_time' => $phone_time,
            'password' => Hash::make($request['password']),
        ]);
        Auth::guard('cbt')->login($user, true);
        if(Auth::guard('cbt')->check()){
			return redirect()->route('cbt.dashboard');
        }
        return back();
	}
	public function register(){

		if(Auth::guard('cbt')->check()){
			return redirect()->route('cbt.dashboard');
		}

		$data['page_title'] = "CBT User";
		return view('cbt.register', $data);
	}
}
