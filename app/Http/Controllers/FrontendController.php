<?php

namespace App\Http\Controllers;

use App\BuyMoney;
use App\Category;
use App\Continent;
use App\Country;
use App\Currency;
use App\Coin;
use App\ExchangeMoney;
use App\Faq;
use App\GeneralSettings;
use App\Mentor;
use App\Menu;
use App\Post;
use App\User;
use App\SellMoney;
use App\Service;
use App\Subscriber;
use App\Testimonial;
use Auth;
use Session;
use App\Internet;
use App\Internetbundle;
use App\Message;
use App\Bill;
use App\Power;
use App\Decoder;
use App\Decodersub;
use App\Job;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $basic = GeneralSettings::first();
        $data['page_title'] = "Home";
        $data['services'] = Service::all();

        if($basic->maintain == 1){
        return view('front.maintain', $data);
        }

        return view('front.home', $data);
    }



    public function mobilerecharge()
    {
        $data['page_title'] = 'Mobile Recharge';
        $data['network'] = Internet::wherePhone(1)->latest()->get();

        return view('front.airtime', $data);
    }


     public function internetdata()
    {
        $data['page_title'] = 'Internet Data';
        $data['network'] = Internet::whereStatus(1)->latest()->get();
        return view('front.internet', $data);
    }





    public function internetdatapost(Request $request)
    {
        $request->validate([
            'network' => 'required',
        ]);
         Session::put('Track', $request->network);

       return redirect()->route('internetdatapost');

    }

       public function internetdatapost2()
    {
        $data['page_title'] = 'Internet Data';
        $track = Session::get('Track');
        $data['network'] = Internet::whereId($track)->first();
        $data['data'] = Internetbundle::whereCode($track)->latest()->get();


        return view('front.internet_buy', $data);
    }
    public function cabletv()
    {
        $data['page_title'] = 'Cable TV';
        $data['network'] = Decoder::whereStatus(1)->latest()->get();



        return view('front.cabletv', $data);
    }


	 public function electricity()
    {
        $data['page_title'] = 'Electricity Bill';
        $data['power'] = Power::whereStatus(1)->latest()->get();
        return view('front.power', $data);
    }



    public function electricitypost2(Request $request)
    {
        $this->validate($request, [
            'code' => 'required|numeric',
            'amount' => 'required|numeric',
            'metertype' => 'required|numeric',
            'number' => 'required|numeric',

        ]);
        $user = Auth::user();
        $basic = GeneralSettings::first();
        $api_id = $basic->merchantid;
        $api_key = $basic->merchantkey;


        if(isset($request->pin)){
         try {
            $c_password = Auth::user()->transpin;
             if (Hash::check($request->pin, $c_password)) {

            } else {
                return back()->with('danger', 'Transaction Password Is Incorrect');
            }

        } catch (\PDOException $e) {
            return back()->with('danger', $e->getMessage());
        }

        }




         $baseUrl = "https://www.nellobytesystems.com";
        $endpoint = "/APIVerifyElectricityV1.asp?UserID=".$api_id."&APIKey=".$api_key ."&ElectricCompany=".$request->code."&meterno=".$request->number."";
        $httpVerb = "GET";
        $contentType = "application/json"; //e.g charset=utf-8
        $headers = array (
            "Content-Type: $contentType",

        );

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_URL, $baseUrl.$endpoint);
            curl_setopt($ch, CURLOPT_HTTPGET, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $content = json_decode(curl_exec( $ch ),true);
            $err     = curl_errno( $ch );
            $errmsg  = curl_error( $ch );
        	curl_close($ch);
			$result = implode(', ', (array)$content);

           if ($result == "INVALID_CREDENTIALS"){
		      return back()->with('danger', 'INVALID API KEY. Please Try Again');

    	    }

		 if ($result == "INVALID_METERNO"){
		  return back()->with('danger', 'You have entered an invalid meter number. Please Try Again');
          }

          if ($result == ""){
		  return back()->with('danger', 'We currently cant process your meter number. Please try again. Please Try Again');
          }

		 if ($result == "INVALID_ElectricCompany"){

         return back()->with('danger', 'You have selected an invalid service provider. Please Try Again');

		 }


		 Session::put('code', $request->code);
		 Session::put('name', $result);
		 Session::put('number', $request->number);
		 Session::put('amount', $request->amount);
		 Session::put('type', $request->metertype);

        Session::put('trx', substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ01234567890') , 0 , 6 ));
		 return redirect()->route('powerpay');
    	}





   public function about()
    {
        $basic = GeneralSettings::first();
        $data['page_title'] = "Home";
        $data['currency'] = Currency::whereStatus(1)->orderBy('symbol','asc')->get();
        $data['currency2'] = Currency::whereStatus(1)->orderBy('symbol','desc')->get();
        $data['testimonial'] = Testimonial::whereStatus(1)->get();
        $data['faq'] = Faq::all();

        if($basic->maintain == 1){
        return view('front.maintain', $data);
        }

        return view('front.about', $data);
    }

     public function rate()
    {
        $basic = GeneralSettings::first();
        $data['page_title'] = "Exchange Rate";
        $data['currency'] = Currency::whereDeleted_at(Null)->orderBy('symbol','asc')->get();

        if($basic->maintain == 1){
        return view('front.maintain', $data);
        }

        return view('front.rate', $data);
    }

     public function how()
    {
        $basic = GeneralSettings::first();
        $data['page_title'] = "Exchange Rate";
        $data['currency'] = Currency::whereDeleted_at(Null)->orderBy('symbol','asc')->get();

        if($basic->maintain == 1){
        return view('front.maintain', $data);
        }

        return view('front.how', $data);
    }

   public function privacy()
    {
        $basic = GeneralSettings::first();
        $data['page_title'] = "Privacy & Policy";

        if($basic->maintain == 1){
        return view('front.maintain', $data);
        }

        return view('front.privacy', $data);
    }

    public function maintain()
    {
        $basic = GeneralSettings::first();
        $data['page_title'] = "Privacy & Policy";

        return view('front.maintain', $data);
    }

    public function blog()
    {
        $data['page_title'] = "Blogs";
        $data['blogs'] = Job::where('status', 1)->paginate(6);
        return view('front.blog', $data);
    }


    public function blogview($id)
    {
        $data['page_title'] = "Blogs";
        $data['blog'] = Post::whereId($id)->first();
        return view('front.blogview', $data);
    }

    public function categoryByBlog($id)
    {
        $cat = Category::find($id);
        $data['page_title'] = "$cat->name";
        $data['blogs'] = $cat->posts()->latest()->paginate(3);
        return view('front.blog', $data);
    }

    public function details($id)
    {
        $post = Post::find($id);
        if ($post) {
            $data['page_title'] = "Blog Details";
            $data['post'] = $post;
            return view('front.details', $data);
        }
        abort(404);
    }

    public function faq()
    {
        $data['page_title'] = "Faq";
        $data['faq'] = Faq::all();
        return view('front.faq', $data);
    }
    public function termsCondition()
    {
        $data['page_title'] = "Terms & Condition";

        return view('front.terms', $data);
    }
    public function privacyPolicy()
    {
        $data['page_title'] = "Privacy & Policy";
        return view('front.policy', $data);
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
        ]);
        $macCount = Subscriber::where('email', $request->email)->count();
        if ($macCount > 0) {
            return back()->with('alert', 'This Email Already Exist !!');
        } else {
            Subscriber::create($request->all());
            return back()->with('success', ' Subscribe Successfully!');
        }
    }

    public function contactUs()
    {
        $data['page_title'] = "Contact Us";
        return view('front.contact', $data);
    }

    public function contactSubmit(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
            'subject' => 'required',
            'phone' => 'required',
        ]);
        $subject = $request->subject;
        $phone = "<br><br>" . "Contact Number : " . $request->phone . "<br><br>";

        $txt = $request->message . $phone;

        send_contact($request->email, $request->name, $subject, $txt);
        return back()->with('success', ' Contact Message Send Successfully!');
    }


    public function service($id)
    {
        $service = Service::find($id);
        if ($service) {
            $get['data'] = $service;
            $get['page_title'] = "Service";
            return view('front.service-info', $get);
        }
        abort(404);
    }

    public function menu($id)
    {
        $menu = Menu::find($id);
        if ($menu) {
            $data['page_title'] = $menu->name;
            $data['menu'] = $menu;
            return view('front.menu', $data);
        }
        abort(404);
    }


    public function register($reference)
    {
        $page_title = "Home";
        $faq = Faq::all();

        $exist = User::where('username', $reference)->count();

        if($exist > 0){
        session()->flash('ref', 'You are about to register using '.$reference.' as your sponsor. You can Also Share Your Referral Link To Earn Bonus When You Register');
        return view('auth.register',compact('faq','reference','page_title')); }

        else {
        session()->flash('referror', 'No user with this referral link. Please check and try again later');
        return redirect()->route('main');
        }
    }




    public function cronPrice()
    {
          $basic = GeneralSettings::first();
            $baseUrl = "https://api.coingate.com";
			$endpoint = "/v2/rates/merchant/USD/".$basic->currency."";
			$httpVerb = "GET";
			$contentType = "application/json"; //e.g charset=utf-8
			$headers = array (
				"Content-Type: $contentType",

        );

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_URL, $baseUrl.$endpoint);
            curl_setopt($ch, CURLOPT_HTTPGET, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $usdrate = json_decode(curl_exec( $ch ),true);
            $err     = curl_errno( $ch );
            $errmsg  = curl_error( $ch );
        	curl_close($ch);


        	$basic['rate'] = $usdrate;
        	$basic->save();


        	$baseUrl = "https://api.alternative.me";
			$endpoint = "/v2/ticker/";
			$httpVerb = "GET";
			$contentType = "application/json"; //e.g charset=utf-8
			$headers = array (
				"Content-Type: $contentType",

        );

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_URL, $baseUrl.$endpoint);
            curl_setopt($ch, CURLOPT_HTTPGET, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $rate = json_decode(curl_exec( $ch ),true);
            $err     = curl_errno( $ch );
            $errmsg  = curl_error( $ch );
        	curl_close($ch);




        	$coinrate  = $rate['data']['1'];
         	$amount = $coinrate['quotes']['USD'];
         	$rrate = $amount['price'];
         	$btc  = Currency::find(5);
			$btc['price'] = $rrate;
        	$btc->save();

        	$btcblock  = Coin::find(3);
			$btcblock['price'] = $rrate;
        	$btcblock->save();


    	    $coinrate  = $rate['data']['2'];
         	$amount = $coinrate['quotes']['USD'];
         	$rrate = $amount['price'];
         	$ltc  = Currency::find(4);
			$ltc['price'] = $rrate;
        	$ltc->save();

        	$ltcblock  = Coin::find(2);
			$ltcblock['price'] = $rrate;
        	$ltcblock->save();

        	$coinrate  = $rate['data']['1321'];
         	$amount = $coinrate['quotes']['USD'];
         	$rrate = $amount['price'];
         	$eth  = Currency::find(1);
			$eth['price'] = $rrate;
        	$eth->save();

        	$coinrate  = $rate['data']['1831'];
         	$amount = $coinrate['quotes']['USD'];
         	$rrate = $amount['price'];
         	$bch  = Currency::find(3);
			$bch['price'] = $rrate;
        	$bch->save();

        	$coinrate  = $rate['data']['131'];
         	$amount = $coinrate['quotes']['USD'];
         	$rrate = $amount['price'];
         	$bch  = Currency::find(10);
			$bch['price'] = $rrate;
        	$bch->save();


        	$coinrate  = $rate['data']['74'];
         	$amount = $coinrate['quotes']['USD'];
         	$rrate = $amount['price'];
         	$doge  = Currency::find(112);
			$doge['price'] = $rrate;
        	$doge->save();

            $dogeblock  = Coin::find(1);
			$dogeblock['price'] = $rrate;
        	$dogeblock->save();


    }


}
