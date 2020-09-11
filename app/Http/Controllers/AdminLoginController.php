<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\GeneralSettings;

class AdminLoginController extends Controller
{


	public function __construct(){
		$Gset = GeneralSettings::first();
		$this->sitename = $Gset->sitename;
	}


	public function index(){

		if(Auth::guard('admin')->check()){
			return redirect()->route('admin.dashboard');
		}

		$data['page_title'] = "Admin";
		return view('admin.login', $data);
	}

	public function authenticate(Request $request){
		if (Auth::guard('admin')->attempt([
			'email' => $request->username,
			'password' => $request->password,
		])) {
		   session()->flash('success', 'Login Successfully. ');

			return redirect()->route('admin.dashboard');
		}
			return back()->with('alert', 'Wrong Admin Login Details!');

	}
}
