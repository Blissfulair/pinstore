<?php

namespace App\Http\Controllers;

use App\Currency;
use Illuminate\Http\Request;
use Auth;
use App\GeneralSettings;
use App\Internet;
use App\Internetbundle;
use App\Message;
use App\Bill;
use App\Power;
use App\Decoder;
use App\Decodersub;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use File;
use Carbon\Carbon;
use Image;
use App\User;
use Session;

class AdminMerchantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
       public function internet()
    {
        $data['page_title'] = 'Manage Data Plans';
        $data['network'] = Internet::latest()->get();
        return view('admin.merchant.internet', $data);
    }

    public function airtimeswaprate()
    {
        $data['page_title'] = 'Manage Airtime Swap';
        $data['network'] = Internet::latest()->get();
        return view('admin.merchant.swap', $data);
    }
    
    public function manageswapview($id)
    {
        $data['page_title'] = 'Manage Swap Rate';
        $data['network'] = Internet::find($id);
        $decoder = Internet::find($id); 
        return view('admin.merchant.swapmanage', $data);


    }
     public function airtimeswappost(Request $request)
    {
        $data['page_title'] = 'Manage Airtime Swap';
        $basic = GeneralSettings::first();
        if ($basic->demo == 1) {
				return back()->with('alert', 'You are not allowed to make changes to the demo script. Please make a purchase!'); }


        $data = Internet::find($request->id);
        $data->rate = $request->rate;
        $data->number = $request->number;
        $data->save();
         return back()->with('success', 'Network Updated Successfully');
    }
  
       public function manageswapenable($id)
    {
        $data['page_title'] = 'Manage Swap Plans';
        
        $basic = GeneralSettings::first();
        if ($basic->demo == 1) {
				return back()->with('alert', 'You are not allowed to make changes to the demo script. Please make a purchase!'); }


        $data = Internet::find($id);
        $data->swap = 1;
        $data->save();
          return back()->with('success', 'Network Swap Enabled');
    }

     public function manageswapdisable($id)
    {
        $data['page_title'] = 'Manage Swap Plans';
        
        $basic = GeneralSettings::first();
        if ($basic->demo == 1) {
				return back()->with('alert', 'You are not allowed to make changes to the demo script. Please make a purchase!'); }


        $data = Internet::find($id);
        $data->swap = 0;
        $data->save();
        return back()->with('success', 'Network Swap Disabled');
    }



       public function manageinternetenable($id)
    {
        $data['page_title'] = 'Manage Data Plans';
        
        $basic = GeneralSettings::first();
        if ($basic->demo == 1) {
				return back()->with('alert', 'You are not allowed to make changes to the demo script. Please make a purchase!'); }


        $data = Internet::find($id);
        $data->status = 1;
        $data->save();
          return back()->with('success', 'Network Enabled');
    }

     public function manageinternetdisable($id)
    {
        $data['page_title'] = 'Manage Data Plans';
        
        $basic = GeneralSettings::first();
        if ($basic->demo == 1) {
				return back()->with('alert', 'You are not allowed to make changes to the demo script. Please make a purchase!'); }


        $data = Internet::find($id);
        $data->status = 0;
        $data->save();
        return back()->with('success', 'Network Disabled');
    }

   public function manageinternetview($id)
    {
        $data['page_title'] = 'Manage Cable TV';
        $data['decoder'] = Internet::find($id);
        $decoder = Internet::find($id);
        $data['network'] = Internetbundle::whereCode($decoder->code)->get();
        return view('admin.merchant.internet-manage', $data);


    }
       public function manageinternetplanenable($id)
    {
        $data['page_title'] = 'Manage Internet';
        
        $basic = GeneralSettings::first();
        if ($basic->demo == 1) {
				return back()->with('alert', 'You are not allowed to make changes to the demo script. Please make a purchase!'); }


        $data = Internetbundle::find($id);
        $data->status = 1;
        $data->save();
          return back()->with('success', 'Subscription Plan Enabled');
    }

     public function manageinternetplandisable($id)
    {
        $data['page_title'] = 'Manage Internet';
        
        $basic = GeneralSettings::first();
        if ($basic->demo == 1) {
				return back()->with('alert', 'You are not allowed to make changes to the demo script. Please make a purchase!'); }


        $data = Internetbundle::find($id);
        $data->status = 0;
        $data->save();
          return back()->with('success', 'Subscription Plan Disabled');
    }

       public function manageinternetplanview($id)
    {
        $data['page_title'] = 'Manage Data Plans';
        $network = Internetbundle::find($id);
        $data['network'] = Internetbundle::find($id);
        $data['decoder'] = Internet::find($network->code);
        return view('admin.merchant.internet-edit', $data);


    }


    public function manageinternetplanpost(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'fee' => 'required|numeric',
            'plan' => 'required|numeric',

        ]);
        
        $basic = GeneralSettings::first();
        if ($basic->demo == 1) {
				return back()->with('alert', 'You are not allowed to make changes to the demo script. Please make a purchase!'); }


        $user = Auth::user();
        $basic = GeneralSettings::first();
        $network = Internetbundle::find($id);
        $network->name = $request->name;
        $network->plan = $request->plan;
        $network->cost = $request->fee;
        $network->save();


        $notification =  array('message' => 'Data Subscription Plan Updated Successfuly !!', 'alert-type' => 'success');
        return back()->with($notification);
	}


     public function internettrx()
    {
        $data['page_title'] = 'Data Subscription';
        $data['trx'] = Bill::whereType(2)->latest()->get();
        $data['network'] = Internet::latest()->get();
        return view('admin.merchant.internettrx', $data);
    }



    public function internettrxind($id)
    {
        $data['page_title'] = 'Data Subscription';
        $data['trx'] = Bill::whereType(2)->whereNetwork($id)->latest()->get();
        $data['network'] = Internet::latest()->get();
        return view('admin.merchant.internettrx', $data);
    }
    public function internettrxsearch(Request $request)
    {

          $this->validate($request, [
            'trx' => 'required',

        ]);
        $data['page_title'] = 'Data Sunscription Transactions';
        $count = Bill::whereType(2)->whereTrx($request->trx)->count();
         if ($count < 1){
        return back()->with('danger', 'There is no transaction with this transaction number');
        }

        $data['trx'] = Bill::whereType(2)->whereTrx($request->trx)->latest()->get();
        $data['network'] = Internet::latest()->get();
         return view('admin.merchant.internettrx', $data);
    }
     public function airtime()
    {
        $data['page_title'] = 'Manage Network';
        $data['network'] = Internet::latest()->get();
        return view('admin.merchant.airtime', $data);
    }

     public function manageairtimeenable($id)
    {
        $data['page_title'] = 'Manage Network';
        $data = Internet::find($id);
        $data->phone = 1;
        $data->save();
          return back()->with('success', 'Network Enabled');
    }

     public function manageairtimedisable($id)
    {
        $data['page_title'] = 'Manage Network';
        
        $basic = GeneralSettings::first();
        if ($basic->demo == 1) {
				return back()->with('alert', 'You are not allowed to make changes to the demo script. Please make a purchase!'); }


        $data = Internet::find($id);
        $data->phone = 0;
        $data->save();
          return back()->with('success', 'Network Disabled');
    }
     public function airtimetrx()
    {
        $data['page_title'] = 'Airtime Topup';
        $data['trx'] = Bill::whereType(1)->latest()->get();
        $data['network'] = Internet::latest()->get();
        return view('admin.merchant.airtimetrx', $data);
    }



  public function airtimetrxind($id)
    {
        $data['page_title'] = 'Airtime Topup';
        
        $basic = GeneralSettings::first();
        if ($basic->demo == 1) {
				return back()->with('alert', 'You are not allowed to make changes to the demo script. Please make a purchase!'); }


        $data['trx'] = Bill::whereType(1)->whereNetwork($id)->latest()->get();
        $data['network'] =Internet::latest()->get();
        return view('admin.merchant.airtimetrx', $data);
    }
      public function airtimetrxsearch(Request $request)
    {

          $this->validate($request, [
            'trx' => 'required',

        ]);
        $data['page_title'] = 'Airtime Recharge Transactions';
        $count = Bill::whereType(1)->whereTrx($request->trx)->count();
         if ($count < 1){
        return back()->with('danger', 'There is no transaction with this transaction number');
        }

        $data['trx'] = Bill::whereType(1)->whereTrx($request->trx)->latest()->get();
        $data['network'] = Internet::latest()->get();
        return view('admin.merchant.airtimetrx', $data);
    }
    
    
  public function airtimeswaptrx()
    {
        $data['page_title'] = 'Airtime Swap';
        $data['trx'] = Bill::whereType(5)->latest()->get();
        $data['network'] =Internet::latest()->get();
        return view('admin.merchant.airtimeswaptrx', $data);
    }
    
    
  public function airtimeswaptrxind($id)
    {
        $data['page_title'] = 'Airtime Topup';
        $data['trx'] = Bill::whereType(5)->whereNetwork($id)->latest()->get();
        $data['network'] =Internet::latest()->get();
        return view('admin.merchant.airtimeswaptrx', $data);
    }
      public function airtimeswaptrxsearch(Request $request)
    {

          $this->validate($request, [
            'trx' => 'required',

        ]);
        $data['page_title'] = 'Airtime Recharge Transactions';
        $count = Bill::whereType(5)->whereTrx($request->trx)->count();
         if ($count < 1){
        return back()->with('danger', 'There is no transaction with this transaction number');
        }

        $data['trx'] = Bill::whereType(5)->whereTrx($request->trx)->latest()->get();
        $data['network'] = Internet::latest()->get();
        return view('admin.merchant.airtimeswaptrx', $data);
    }
    
       public function airtimeswaptrxapp($id)
    {
        $data['page_title'] = 'Manage trx';
        
        $data = Bill::find($id);
        $data->status = 1;
        $data->save();
          return back()->with('success', 'Transaction Approved');
    }

   public function airtimeswaptrxrej($id)
    {
        $data['page_title'] = 'Manage trx';
        $data = Bill::find($id);
        $data->status = 2;
        $data->save();
          return back()->with('success', 'Transaction Rejected');
    }


    
    

















    public function managecabletv()
    {
        $data['page_title'] = 'Manage Cable TV';
        $data['network'] = Decoder::latest()->get();
        return view('admin.merchant.cabletv', $data);
    }

     public function managecabletvenable($id)
    {
        $data['page_title'] = 'Manage Cable TV';
        $basic = GeneralSettings::first();
        if ($basic->demo == 1) {
				return back()->with('alert', 'You are not allowed to make changes to the demo script. Please make a purchase!'); }


        $data = Decoder::find($id);
        $data->status = 1;
        $data->save();
          return back()->with('success', 'Decoder Enabled');
    }

     public function managecabletvdisable($id)
    {
        $data['page_title'] = 'Manage Cable TV';
        
        $basic = GeneralSettings::first();
        if ($basic->demo == 1) {
				return back()->with('alert', 'You are not allowed to make changes to the demo script. Please make a purchase!'); }


        $data = Decoder::find($id);
        $data->status = 0;
        $data->save();
          return back()->with('success', 'Decoder Disabled');
    }

   public function managecabletvview($id)
    {
        $data['page_title'] = 'Manage Cable TV';
        $data['decoder'] = Decoder::find($id);
        $decoder = Decoder::find($id);
        $data['network'] = Decodersub::whereCode($decoder->code)->get();
        return view('admin.merchant.cabletv-manage', $data);


    }

     public function managecabletvplanenable($id)
    {
        $data['page_title'] = 'Manage Cable TV';
        $data = Decodersub::find($id);
        $data->status = 1;
        $data->save();
          return back()->with('success', 'Decoder Bouquet Enabled');
    }

     public function managecabletvplandisable($id)
    {
        $data['page_title'] = 'Manage Cable TV';
        
        $basic = GeneralSettings::first();
        if ($basic->demo == 1) {
				return back()->with('alert', 'You are not allowed to make changes to the demo script. Please make a purchase!'); }


        $data = Decodersub::find($id);
        $data->status = 0;
        $data->save();
          return back()->with('success', 'Decoder  Bouquet Disabled');
    }

   public function managecabletvplanview($id)
    {
        $data['page_title'] = 'Manage Cable TV';
        $decoder = Decodersub::find($id);
        $data['network'] = Decodersub::find($id);
        $dat = Decodersub::find($id);
        $data['decoder'] = Decoder::find($dat->code);
        return view('admin.merchant.cabletv-edit', $data);


    }


    public function managecabletvplanpost(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'fee' => 'required|numeric',
            'plan' => 'required|numeric',

        ]);
        
        $basic = GeneralSettings::first();
        if ($basic->demo == 1) {
				return back()->with('alert', 'You are not allowed to make changes to the demo script. Please make a purchase!'); }


        $user = Auth::user();
        $basic = GeneralSettings::first();
        $network = Decodersub::find($id);
        $network->name = $request->name;
        $network->plan = $request->plan;
        $network->cost = $request->fee;
        $network->save();


        $notification =  array('message' => 'Bouquet Plan Updated Successfuly !!', 'alert-type' => 'success');
        return back()->with($notification);
	}



  public function cabletvtrx()
    {
        $data['page_title'] = 'Cable TV Transactions';
        $data['trx'] = Bill::whereType(4)->latest()->get();
        $data['network'] = Decoder::latest()->get();
        return view('admin.merchant.cabletvtrx', $data);
    }



  public function cabletvtrxind($id)
    {
        $data['page_title'] = 'Cable TV Transactions';
        $data['trx'] = Bill::whereType(4)->whereNetwork($id)->latest()->get();
        $data['network'] = Decoder::latest()->get();
        return view('admin.merchant.cabletvtrx', $data);
    }



  public function cabletvtrxearch(Request $request)
    {

          $this->validate($request, [
            'trx' => 'required',

        ]);
        $data['page_title'] = 'Cable TV Transactions';
        $count = Bill::whereType(4)->whereTrx($request->trx)->count();
         if ($count < 1){
        return back()->with('danger', 'There is no transaction with this transaction number');
        }

        $data['trx'] = Bill::whereType(4)->whereTrx($request->trx)->latest()->get();
        $data['network'] = Decoder::latest()->get();
        return view('admin.merchant.cabletvtrx', $data);
    }



  public function managepower()
    {
        $data['page_title'] = 'Manage Power';
        $data['network'] = Power::latest()->get();
        return view('admin.merchant.power', $data);
    }

      public function managepowerenable($id)
    {
        $data['page_title'] = 'Manage Power';
        
        $basic = GeneralSettings::first();
        if ($basic->demo == 1) {
				return back()->with('alert', 'You are not allowed to make changes to the demo script. Please make a purchase!'); }


        $data = Power::find($id);
        $data->status = 1;
        $data->save();
          return back()->with('success', 'Electricity Company Enabled');
    }

     public function managepowerdisable($id)
    {
        $data['page_title'] = 'Manage Power';
        
        $basic = GeneralSettings::first();
        if ($basic->demo == 1) {
				return back()->with('alert', 'You are not allowed to make changes to the demo script. Please make a purchase!'); }


        $data = Power::find($id);
        $data->status = 0;
        $data->save();
          return back()->with('success', 'Electricity Company Disabled');
    }

   public function managepowerview($id)
    {
        $data['page_title'] = 'Manage Company';
        $data['power'] = Power::find($id);
        return view('admin.merchant.power-edit', $data);


    }

      public function managepowerpost(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'fee' => 'required|numeric',
            'slogan' => 'required',
            'code' => 'required|numeric',

        ]);
        
        $basic = GeneralSettings::first();
        if ($basic->demo == 1) {
				return back()->with('alert', 'You are not allowed to make changes to the demo script. Please make a purchase!'); }


        $user = Auth::user();
        $basic = GeneralSettings::first();
        $network = Power::find($id);
        $network->name = $request->name;
        $network->slogan = $request->slogan;
        $network->code = $request->code;
        $network->fee = $request->fee;
        $network->save();


        $notification =  array('message' => 'Electricity Company Updated Successfuly !!', 'alert-type' => 'success');
        return back()->with($notification);
	}




  public function powertrx()
    {
        $data['page_title'] = 'Power Bill Transactions';
        $data['trx'] = Bill::whereType(3)->latest()->get();
        $data['network'] = Power::latest()->get();
        return view('admin.merchant.powertrx', $data);
    }



  public function powertrxind($id)
    {
        $data['page_title'] = 'Cable TV Transactions';
        $data['trx'] = Bill::whereType(3)->whereNetwork($id)->latest()->get();
        $data['network'] = Power::latest()->get();
        return view('admin.merchant.powertrx', $data);
    }










    public function rechargenow(Request $request)
    {
        $this->validate($request, [
            'phone' => 'required|numeric',
            'network' => 'required|numeric',
            'amount' => 'required|numeric|min:100',

        ]);
        $user = Auth::user();
        $basic = GeneralSettings::first();
        $network = Internet::find($request->network);
        $api_id = $basic->merchantid;
        $api_key = $basic->merchantkey;

        if ($user->balance < $request->amount){
        return back()->with('danger', 'You dont have enough funds in your deposit wallet to complete this transaction');
        }

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
        $endpoint = "/APIAirtimeV1.asp?UserID=".$api_id."&APIKey=".$api_key."&MobileNetwork=".$request->network."&Amount=".$request->amount."&MobileNumber=".$request->phone."&CallBackURL=#";
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


		 if ($result == "INVALID_RECIPIENT"){
		  return back()->with('danger', 'You have entered an invalid phone number. Please Try Again');
          }

		 if ($result == "INSUFFICIENT_APIBALANCE"){

         return back()->with('danger', 'Merchant API Doesnt Have Enough Fund To Service Your Request. No fund deducted from your wallet');

		}


		 if ($result == "MISSING_MOBILENETWORK"){
         return back()->with('danger', 'Mobile Network Is Empty. Please try again');
	     }

         $trx = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ01234567890') , 0 , 10 );

        if ($user->balance >= $request->amount){
		$user->balance = $user->balance - $request->amount;
        $user->save(); }

            Message::create([
                    'user_id' => $user->id,
                    'title' => 'Phone Recharged',
                    'details' => 'Your Phone Number'.$request->phone.' has been successfully recharged with the sum of '.$basic->currency_sym.' '.$request->amount.' worth of  '.$network->name.' recharge card, Thank you for choosing '.$basic->sitename.'',
                    'admin' => 1,
                    'status' =>  0
                ]);


              Bill::create([
                    'user_id' => $user->id,
                    'amount' => $request->amount,
                    'phone' => $request->phone,
                    'trx' => $trx,
                    'network' => $request->network,
                    'newbalance' => $user->balance,
                    'type' => 1,
                    'status' =>  1
                ]);


        $notification =  array('message' => 'Mobile Phone Recharges Successfully !!', 'alert-type' => 'success');
        return back()->with($notification);
	}


     public function cabletv()
    {
        $data['page_title'] = 'Cable TV';
        $data['network'] = Decoder::latest()->get();
        return view('user.merchant.cabletv', $data);
    }

      public function cabletvpost(Request $request)
    {
        $request->validate([
            'network' => 'required',
        ]);
         Session::put('Track', $request->network);

       return redirect()->route('cabletvpost2');

    }

        public function cabletvpost2()
    {
        $data['page_title'] = 'Internet Data';
        $track = Session::get('Track');
        $data['network'] = Decoder::whereId($track)->first();
        $data['data'] = Decodersub::whereCode($track)->latest()->get();
        return view('user.merchant.cabletv_buy', $data);
    }


 public function cabletvpost3(Request $request)
    {
        $this->validate($request, [
            'plan' => 'required|numeric',
            'decoder' => 'required|numeric',
            'number' => 'required|numeric',

        ]);
        $user = Auth::user();
        $basic = GeneralSettings::first();
        $api_id = $basic->merchantid;
        $api_key = $basic->merchantkey;

        if ($user->balance < $request->amount){
        return back()->with('danger', 'You dont have enough funds in your deposit wallet to complete this transaction');
        }

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
        $endpoint = "/APIVerifyCableTVV1.0.asp?UserID=".$api_id."&APIKey=".$api_key."&cabletv=".$request->decoder."&smartcardno=".$request->number."";

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


			 if ($result == "PACKAGE_NOT_AVAILABLE"){
			       return back()->with('danger', 'Your slected subscription plan is not available at the moment. Please Try Again');

        	    }
		     if ($result == "INVALID_SMARTCARDNO"){
		      return back()->with('danger', 'You have entered an invalid decoder/smart card number. Please Try Again');

    	    }
    	     if ($result == ""){
			       return back()->with('danger', 'We are unable to process your resuest at the moment. Please Try Again');

        	    }


         Session::put('plan', $request->code);
		 Session::put('name', $result);
		 Session::put('number', $request->number);
		 Session::put('decoder', $request->decoder);
		 Session::put('amount', $decoder->cost);

         Session::put('trx', substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ01234567890') , 0 , 6 ));
		 return redirect()->route('cabletvpay');

	}

         public function cabletvpay()
    {

        $data['page_title'] = 'Cable TV';
         $data['name'] = Session::get('name');
        $data['decoder'] = Session::get('decoder');
        $data['number'] = Session::get('number');
        $data['trxcode'] = Session::get('trx');
        $data['time'] = Carbon::now();

        $decoder = Decodersub::whereCode($data['decoder'])->first();
        $data['amount'] = $decoder->cost;
        $data['plan2'] = $decoder->name;
        $data['plan'] = $decoder->plan;
        $data['power'] = Decoder::whereCode($data['decoder'])->first();



        return view('user.merchant.cabletvpay', $data);
    }



        public function cabletvpay2(Request $request)
    {
        $this->validate($request, [
            'code' => 'required|numeric',
            'amount' => 'required|numeric',
            'plan' => 'required|numeric',
            'number' => 'required|numeric',
            'trx' => 'required|',

        ]);
        $user = Auth::user();
        $basic = GeneralSettings::first();
        $api_id = $basic->merchantid;
        $api_key = $basic->merchantkey;


        if ($user->balance < $request->amount){
        session()->flash('success', 'You dont have enough funds in your deposit wallet to complete this transaction');

         return redirect()->route('home');

        }


        $baseUrl = "https://www.nellobytesystems.com";
        $endpoint = "/APICableTVV1.asp?UserID=".$api_id."&APIKey=".$api_key."&CableTV=".$request->code."&Package=".$request->plan."&SmartCardNo=".$request->number."&CallBackURL=http://www.your-website.com";

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


	    	 if ($result == "PACKAGE_NOT_AVAILABLE"){
			       return back()->with('danger', 'Your slected subscription plan is not available at the moment. Please Try Again');

        	    }
		     if ($result == "INVALID_SMARTCARDNO"){
		      return back()->with('danger', 'You have entered an invalid decoder/smart card number. Please Try Again');

    	    }
    	     if ($result == ""){
			       return back()->with('danger', 'We are unable to process your resuest at the moment. Please Try Again');

        	    }

           if ($result == "INSUFFICIENT_APIBALANCE"){
             session()->flash('success', 'Merchant API Doesnt Have Enough Fund To Service Your Request. No fund deducted from your wallet');

            return redirect()->route('home');

		}

          if ($result == ""){
             session()->flash('success', 'We currently cant process your meter number. Please try again. Please Try Again');

           return redirect()->route('home');
           }

        if ($result == "ORDER_RECEIVED"){
		if ($user->balance >= $request->amount){
		$user->balance = $user->balance - $request->amount;
        $user->save(); }
        $power = Power::whereCode($request->code)->first();


		   Message::create([
                    'user_id' => $user->id,
                    'title' => 'Paid Electricity Bill',
                    'details' => 'Your Electricity Meter with meter Number '.$request->number.' has been successfully recharged with '.$request->amount.'  '.$basic->currency.' power units from '.$power->name.', Thank you for choosing '.$basic->sitename.'',
                    'admin' => 1,
                    'status' =>  0
                ]);


              Bill::create([
                    'user_id' => $user->id,
                    'amount' => $request->amount,
                    'phone' => $request->number,
                    'trx' => $request->trx,
                    'network' => $request->code,
                    'newbalance' => $user->balance,
                    'plan' => $request->type,
                    'type' => 4,
                    'status' =>  1
                ]);
            return redirect()->route('electricity')->with("success", "Transaction Successful");

        }
	}







     public function internetdata()
    {
        $data['page_title'] = 'Internet Data';
        $data['network'] = Internet::latest()->get();
        return view('user.merchant.internet', $data);
    }





    public function internetdatapost(Request $request)
    {
        $request->validate([
            'network' => 'required',
        ]);
         Session::put('Track', $request->network);

       return redirect()->route('internetdata2');

    }

       public function internetdata2()
    {
        $data['page_title'] = 'Internet Data';
        $track = Session::get('Track');
        $data['network'] = Internet::whereId($track)->first();
        $data['data'] = Internetbundle::whereCode($track)->latest()->get();
        return view('user.merchant.internet_buy', $data);
    }


    public function internetdatapost2(Request $request)
    {
        $this->validate($request, [
            'phone' => 'required|numeric',
            'network' => 'required|numeric',
            'plan' => 'required|numeric',

        ]);
        $user = Auth::user();
        $basic = GeneralSettings::first();
        $bundle = Internetbundle::whereCode($request->network)->wherePlan($request->plan)->first();

        $network = Internet::find($request->network);
        $api_id = $basic->merchantid;
        $api_key = $basic->merchantkey;

        if ($user->balance < $request->amount){
        return back()->with('danger', 'You dont have enough funds in your deposit wallet to complete this transaction');
        }

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
        $endpoint = "/APIDatabundleV1.asp?UserID=".$api_id."&APIKey=".$api_key."&MobileNetwork=".$request->networ."&DataPlan=".$request->plan."&MobileNumber=".$request->phone."&CallBackURL=#";
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


		 if ($result == "INVALID_RECIPIENT"){
		  return back()->with('danger', 'You have entered an invalid phone number. Please Try Again');
          }

		 if ($result == "INSUFFICIENT_APIBALANCE"){

         return back()->with('danger', 'Merchant API Doesnt Have Enough Fund To Service Your Request. No fund deducted from your wallet');

		}


		 if ($result == "MISSING_MOBILENETWORK"){
         return back()->with('danger', 'Mobile Network Is Empty. Please try again');
	     }




           if ($user->balance >= $bundle->cost){
		$user->balance = $user->balance - $bundle->cost;
        $user->save(); }

        $trx = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ01234567890') , 0 , 10 );

            Message::create([
                    'user_id' => $user->id,
                    'title' => 'Purchased Internet Bundle',
                    'details' => 'Your Phone Number '.$request->phone.' has been successfully recharged with '.$network->name.'  '.$bundle->name.' internet data, Thank you for choosing '.$basic->sitename.'',
                    'admin' => 1,
                    'status' =>  0
                ]);


              Bill::create([
                    'user_id' => $user->id,
                    'amount' => $request->amount,
                    'phone' => $request->phone,
                    'trx' => $trx,
                    'network' => $bundle->code,
                    'newbalance' => $user->balance,
                    'plan' => $request->plan,
                    'type' => 2,
                    'status' =>  1
                ]);
            return redirect()->route('internetdata')->with("success", "Transaction Successful");


	}



	 public function electricity()
    {
        $data['page_title'] = 'Electricity Bill';
        $data['power'] = Power::latest()->get();
        return view('user.merchant.power', $data);
    }



    public function electricitypost(Request $request)
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

        if ($user->balance < $request->amount){
        return back()->with('danger', 'You dont have enough funds in your deposit wallet to complete this transaction');
        }

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



	 public function electricitypay()
    {
        $data['page_title'] = 'Electricity Bill';
        $data['code'] = Session::get('code');
        $data['type'] = Session::get('type');
        $data['name'] = Session::get('name');
        $data['amount'] = Session::get('amount');
        $data['number'] = Session::get('number');
        $data['trxcode'] = Session::get('trx');
         $data['time'] = Carbon::now();
        $data['power'] = Power::whereCode($data['code'])->first();
        return view('user.merchant.powerpay', $data);
    }

      public function electricitypay2(Request $request)
    {
        $this->validate($request, [
            'code' => 'required|numeric',
            'amount' => 'required|numeric',
            'type' => 'required|numeric',
            'number' => 'required|numeric',

        ]);
        $user = Auth::user();
        $basic = GeneralSettings::first();
        $api_id = $basic->merchantid;
        $api_key = $basic->merchantkey;


        if ($user->balance < $request->amount){
        session()->flash('success', 'You dont have enough funds in your deposit wallet to complete this transaction');

         return redirect()->route('home');

        }


        $baseUrl = "https://www.nellobytesystems.com";
        $endpoint = "/APIElectricityV1.asp?UserID=".$api_id."&APIKey=".$api_key."&ElectricCompany=".$request->code."&MeterType=".$request->type."&MeterNo=".$request->number."&Amount=".$request->amount."&CallBackURL=http://www.your-website.com";
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


		 if ($result == "INVALID_METERNO"){
		  session()->flash('success', 'You have entered an invalid meter number. Please Try Again');

         return redirect()->route('home');


          }




           if ($result == "INSUFFICIENT_APIBALANCE"){
             session()->flash('success', 'Merchant API Doesnt Have Enough Fund To Service Your Request. No fund deducted from your wallet');

         return redirect()->route('home');

		}

          if ($result == ""){
             session()->flash('success', 'We currently cant process your meter number. Please try again. Please Try Again');

         return redirect()->route('home');
       }

		 if ($result == "INVALID_ElectricCompany"){

		      session()->flash('success', 'You have selected an invalid service provider. Please Try Again');

         return redirect()->route('home');


		 }
		  if ($user->balance >= $request->amount){
		$user->balance = $user->balance - $request->amount;
        $user->save(); }
        $power = Power::whereCode($request->code)->first();


		   Message::create([
                    'user_id' => $user->id,
                    'title' => 'Paid Electricity Bill',
                    'details' => 'Your Electricity Meter with meter Number '.$request->number.' has been successfully recharged with '.$request->amount.'  '.$basic->currency.' power units from '.$power->name.', Thank you for choosing '.$basic->sitename.'',
                    'admin' => 1,
                    'status' =>  0
                ]);


              Bill::create([
                    'user_id' => $user->id,
                    'amount' => $request->amount,
                    'phone' => $request->number,
                    'trx' => $request->trx,
                    'network' => $request->code,
                    'newbalance' => $user->balance,
                    'plan' => $request->type,
                    'type' => 3,
                    'status' =>  1
                ]);
            return redirect()->route('electricity')->with("success", "Transaction Successful");
        	}




     public function rechargelog()
    {
        $user = User::find(Auth::user()->id);
        $data['page_title'] = 'Recharge Log';
        $data['log'] = Bill::wheretype(1)->whereUser_id($user->id)->paginate(10);
        return view('user.merchant.recharge-log', $data);
    }




     public function internetlog()
    {
        $user = User::find(Auth::user()->id);
        $data['page_title'] = 'Internet Data Subscriptions';
        $data['log'] = Bill::wheretype(2)->whereUser_id($user->id)->paginate(10);
        return view('user.merchant.internet-log', $data);
    }



     public function tvlog()
    {
        $user = User::find(Auth::user()->id);
        $data['page_title'] = 'Cable TV Subscriptions';
        $data['log'] = Bill::wheretype(3)->whereUser_id($user->id)->paginate(10);
        return view('user.merchant.tv-log', $data);
    }


     public function powerlog()
    {
        $user = User::find(Auth::user()->id);
        $data['page_title'] = 'Electricity Bill Payments';
        $data['log'] = Bill::wheretype(3)->whereUser_id($user->id)->paginate(10);
        return view('user.merchant.power-log', $data);
    }

       public function rechargesearch(Request $request)
    {
        $request->validate([
            'trx' => 'required',
        ]);
         Session::put('Track', $request->trx);

       return redirect()->route('rechargesearchget');

    }

        public function rechargesearchget()
    {
        $user = User::find(Auth::user()->id);
        $data['page_title'] = 'Internet Data';
        $track = Session::get('Track');


       if($track == 'MTN')
       {
       $code = 01;
       $count2 = Bill::whereNetwork($code)->wheretype(1)->whereUser_id($user->id)->count();

       if($count2 > 0){

         $data['log'] = Bill::whereNetwork($code)->wheretype(1)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.recharge-log', $data);
        }}
        if($track == 'mtn')
       {
       $code = 01;
        $count2 = Bill::whereNetwork($code)->wheretype(1)->whereUser_id($user->id)->count();

       if($count2 > 0){
         $data['log'] = Bill::whereNetwork($code)->wheretype(1)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.recharge-log', $data);
        }}
          if($track == 'glo')
       {
       $code = 02;
         $count2 = Bill::whereNetwork($code)->wheretype(1)->whereUser_id($user->id)->count();

       if($count2 > 0){
         $data['log'] = Bill::whereNetwork($code)->wheretype(1)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.recharge-log', $data);
        }}
          if($track == 'GLO')
       {
       $code = 02;
         $count2 = Bill::whereNetwork($code)->wheretype(1)->whereUser_id($user->id)->count();

        if($track == 'GLOBACOM')
            if($count2 > 0){
         $data['log'] = Bill::whereNetwork($code)->wheretype(1)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.recharge-log', $data);
        }}

            if($track == 'GLOBACOM')

       {
       $code = 02;
         $count2 = Bill::whereNetwork($code)->wheretype(1)->whereUser_id($user->id)->count();

        if($count2 > 0){
         $data['log'] = Bill::whereNetwork($code)->wheretype(1)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.recharge-log', $data); }
        }

        if($track == 'Globacom')
       {
       $code = 02;
         $count2 = Bill::whereNetwork($code)->wheretype(1)->whereUser_id($user->id)->count();

       if($count2 > 0){
         $data['log'] = Bill::whereNetwork($code)->wheretype(1)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.recharge-log', $data);
        }}

        if($track == '9mobile')
       {
       $code = 03;
      $count2 = Bill::whereNetwork($code)->wheretype(1)->whereUser_id($user->id)->count();

       if($count2 > 0){
         $data['log'] = Bill::whereNetwork($code)->wheretype(1)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.recharge-log', $data);
        }}

        if($track == 'Etisalat')
       {
       $code = 03;
      $count2 = Bill::whereNetwork($code)->wheretype(1)->whereUser_id($user->id)->count();

       if($count2 > 0){
         $data['log'] = Bill::whereNetwork($code)->wheretype(1)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.recharge-log', $data);
        }}

        if($track == 'etisalat')
       {
       $code = 03;
      $count2 = Bill::whereNetwork($code)->wheretype(1)->whereUser_id($user->id)->count();

       if($count2 > 0){
         $data['log'] = Bill::whereNetwork($code)->wheretype(1)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.recharge-log', $data);
        }}

        if($track == 'Airtel')
       {
       $code = 04;
      $count2 = Bill::whereNetwork($code)->wheretype(1)->whereUser_id($user->id)->count();

       if($count2 > 0){
         $data['log'] = Bill::whereNetwork($code)->wheretype(1)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.recharge-log', $data);
        }}


        if($track == 'airtel')
       {
       $code = 04;
         $count2 = Bill::whereNetwork($code)->wheretype(1)->whereUser_id($user->id)->count();

       if($count2 > 0){
         $data['log'] = Bill::whereNetwork($code)->wheretype(1)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.recharge-log', $data);
        }}








        $count1 = Bill::whereTrx($track)->wheretype(1)->whereUser_id($user->id)->count();
        if($count1 > 0){
         $data['log'] = Bill::whereTrx($track)->wheretype(1)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.recharge-log', $data);
        }




        $count3 = Bill::wherePhone($track)->wheretype(1)->whereUser_id($user->id)->count();
        if($count3 > 0){
         $data['log'] = Bill::whereTrx($track)->wheretype(1)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.recharge-log', $data);
        }

        else
        {
        return back()->with('alert', 'There is no transaction with this entry .');
        }




    }



        public function datasearch(Request $request)
    {
        $request->validate([
            'trx' => 'required',
        ]);
         Session::put('Track', $request->trx);

       return redirect()->route('datasearchget');

    }

        public function datasearchget()
    {
        $user = User::find(Auth::user()->id);
        $data['page_title'] = 'Internet Data';
        $track = Session::get('Track');


       if($track == 'MTN')
       {
       $code = 01;
       $count2 = Bill::whereNetwork($code)->wheretype(2)->whereUser_id($user->id)->count();

       if($count2 > 0){

         $data['log'] = Bill::whereNetwork($code)->wheretype(2)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.internet-log', $data);
        }}
        if($track == 'mtn')
       {
       $code = 01;
        $count2 = Bill::whereNetwork($code)->wheretype(2)->whereUser_id($user->id)->count();

       if($count2 > 0){
         $data['log'] = Bill::whereNetwork($code)->wheretype(2)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.internet-log', $data);
        }}
          if($track == 'glo')
       {
       $code = 02;
         $count2 = Bill::whereNetwork($code)->wheretype(2)->whereUser_id($user->id)->count();

       if($count2 > 0){
         $data['log'] = Bill::whereNetwork($code)->wheretype(2)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.internet-log', $data);
        }}
          if($track == 'GLO')
       {
       $code = 02;
         $count2 = Bill::whereNetwork($code)->wheretype(2)->whereUser_id($user->id)->count();


            if($count2 > 0){
         $data['log'] = Bill::whereNetwork($code)->wheretype(2)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.internet-log', $data);
        }}

            if($track == 'GLOBACOM')

       {
       $code = 02;
         $count2 = Bill::whereNetwork($code)->wheretype(2)->whereUser_id($user->id)->count();

        if($count2 > 0){
         $data['log'] = Bill::whereNetwork($code)->wheretype(2)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.internet-log', $data); }
        }

        if($track == 'Globacom')
       {
       $code = 02;
         $count2 = Bill::whereNetwork($code)->wheretype(2)->whereUser_id($user->id)->count();

       if($count2 > 0){
         $data['log'] = Bill::whereNetwork($code)->wheretype(2)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.internet-log', $data);
        }}

        if($track == '9mobile')
       {
       $code = 03;
      $count2 = Bill::whereNetwork($code)->wheretype(2)->whereUser_id($user->id)->count();

       if($count2 > 0){
         $data['log'] = Bill::whereNetwork($code)->wheretype(2)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.internet-log', $data);
        }}

        if($track == 'Etisalat')
       {
       $code = 03;
      $count2 = Bill::whereNetwork($code)->wheretype(2)->whereUser_id($user->id)->count();

       if($count2 > 0){
         $data['log'] = Bill::whereNetwork($code)->wheretype(2)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.internet-log', $data);
        }}

        if($track == 'etisalat')
       {
       $code = 03;
      $count2 = Bill::whereNetwork($code)->wheretype(2)->whereUser_id($user->id)->count();

       if($count2 > 0){
         $data['log'] = Bill::whereNetwork($code)->wheretype(2)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.internet-log', $data);
        }}

        if($track == 'Airtel')
       {
       $code = 04;
      $count2 = Bill::whereNetwork($code)->wheretype(2)->whereUser_id($user->id)->count();

       if($count2 > 0){
         $data['log'] = Bill::whereNetwork($code)->wheretype(2)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.internet-log', $data);
        }}


        if($track == 'airtel')
       {
       $code = 04;
         $count2 = Bill::whereNetwork($code)->wheretype(2)->whereUser_id($user->id)->count();

       if($count2 > 0){
         $data['log'] = Bill::whereNetwork($code)->wheretype(2)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.internet-log', $data);
        }}








        $count1 = Bill::whereTrx($track)->wheretype(2)->whereUser_id($user->id)->count();
        if($count1 > 0){
         $data['log'] = Bill::whereTrx($track)->wheretype(2)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.internet-log', $data);
        }

        $count3 = Bill::wherePhone($track)->wheretype(2)->whereUser_id($user->id)->count();
        if($count1 > 0){
         $data['log'] = Bill::whereTrx($track)->wheretype(2)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.internet-log', $data);
        }

        else
        {
        return back()->with('alert', 'There is no transaction with this entry .');
        }




    }





        public function tvsearch(Request $request)
    {
        $request->validate([
            'trx' => 'required',
        ]);
         Session::put('Track', $request->trx);

       return redirect()->route('tvsearchget');

    }

        public function tvsearchget()
    {
        $user = User::find(Auth::user()->id);
        $data['page_title'] = 'TV Subscription';
        $track = Session::get('Track');


       if($track == 'DSTV')
       {
       $code = 01;
       $count2 = Bill::whereNetwork($code)->wheretype(4)->whereUser_id($user->id)->count();

       if($count2 > 0){

         $data['log'] = Bill::whereNetwork($code)->wheretype(4)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.tv-log', $data);
        }}

         if($track == 'GOTV')
       {
       $code = 02;
       $count2 = Bill::whereNetwork($code)->wheretype(4)->whereUser_id($user->id)->count();

       if($count2 > 0){

         $data['log'] = Bill::whereNetwork($code)->wheretype(4)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.tv-log', $data);
        }}

         if($track == 'STARTIMES')
       {
       $code = 03;
       $count2 = Bill::whereNetwork($code)->wheretype(4)->whereUser_id($user->id)->count();

       if($count2 > 0){

         $data['log'] = Bill::whereNetwork($code)->wheretype(4)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.tv-log', $data);
        }}

         if($track == 'dstv')
       {
       $code = 01;
       $count2 = Bill::whereNetwork($code)->wheretype(4)->whereUser_id($user->id)->count();

       if($count2 > 0){

         $data['log'] = Bill::whereNetwork($code)->wheretype(4)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.tv-log', $data);
        }}

         if($track == 'gotv')
       {
       $code = 02;
       $count2 = Bill::whereNetwork($code)->wheretype(4)->whereUser_id($user->id)->count();

       if($count2 > 0){

         $data['log'] = Bill::whereNetwork($code)->wheretype(4)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.tv-log', $data);
        }}

         if($track == 'startimes')
       {
       $code = 03;
       $count2 = Bill::whereNetwork($code)->wheretype(4)->whereUser_id($user->id)->count();

       if($count2 > 0){

         $data['log'] = Bill::whereNetwork($code)->wheretype(4)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.tv-log', $data);
        }}


        $count1 = Bill::whereTrx($track)->wheretype(3)->whereUser_id($user->id)->count();
        if($count1 > 0){
         $data['log'] = Bill::whereTrx($track)->wheretype(4)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.tv-log', $data);
        }



        $count3 = Bill::wherePhone($track)->wheretype(4)->whereUser_id($user->id)->count();
        if($count3 > 0){
         $data['log'] = Bill::wherePhone($track)->wheretype(4)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.tv-log', $data);
        }

        else
        {
        return back()->with('alert', 'There is no transaction with this entry .');
        }




    }






        public function powersearch(Request $request)
    {
        $request->validate([
            'trx' => 'required',
        ]);
         Session::put('Track', $request->trx);

       return redirect()->route('powersearchget');

    }

        public function powersearchget()
    {
        $user = User::find(Auth::user()->id);
        $data['page_title'] = 'Electricity Bills';
        $track = Session::get('Track');


       if($track == 'EKEDC')
       {
       $code = 01;
       $count2 = Bill::whereNetwork($code)->wheretype(3)->whereUser_id($user->id)->count();

       if($count2 > 0){

         $data['log'] = Bill::whereNetwork($code)->wheretype(3)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.power-log', $data);
        }}



       if($track == 'IKEDC')
       {
       $code = 02;
       $count2 = Bill::whereNetwork($code)->wheretype(3)->whereUser_id($user->id)->count();

       if($count2 > 0){

         $data['log'] = Bill::whereNetwork($code)->wheretype(3)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.power-log', $data);
        }}




       if($track == 'KEDCO')
       {
       $code = 04;
       $count2 = Bill::whereNetwork($code)->wheretype(3)->whereUser_id($user->id)->count();

       if($count2 > 0){

         $data['log'] = Bill::whereNetwork($code)->wheretype(3)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.power-log', $data);
        }}



       if($track == 'PHEDC')
       {
       $code = 05;
       $count2 = Bill::whereNetwork($code)->wheretype(3)->whereUser_id($user->id)->count();

       if($count2 > 0){

         $data['log'] = Bill::whereNetwork($code)->wheretype(3)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.power-log', $data);
        }}




       if($track == 'JED')
       {
       $code = 06;
       $count2 = Bill::whereNetwork($code)->wheretype(3)->whereUser_id($user->id)->count();

       if($count2 > 0){

         $data['log'] = Bill::whereNetwork($code)->wheretype(3)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.power-log', $data);
        }}


       if($track == 'AEDC')
       {
       $code = 03;
       $count2 = Bill::whereNetwork($code)->wheretype(3)->whereUser_id($user->id)->count();

       if($count2 > 0){

         $data['log'] = Bill::whereNetwork($code)->wheretype(3)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.power-log', $data);
        }}


       if($track == 'IBEDC')
       {
       $code = 07;
       $count2 = Bill::whereNetwork($code)->wheretype(3)->whereUser_id($user->id)->count();

       if($count2 > 0){

         $data['log'] = Bill::whereNetwork($code)->wheretype(3)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.power-log', $data);
        }}


       if($track == 'EEDC')
       {
       $code = '08';
       $count2 = Bill::whereNetwork($code)->wheretype(3)->whereUser_id($user->id)->count();

       if($count2 > 0){

         $data['log'] = Bill::whereNetwork($code)->wheretype(3)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.power-log', $data);
        }}


        $count1 = Bill::wherePhone($track)->wheretype(3)->whereUser_id($user->id)->count();
        if($count1 > 0){
         $data['log'] = Bill::whereTrx($track)->wheretype(3)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.power-log', $data);
        }



        $count3 = Bill::whereTrx($track)->wheretype(3)->whereUser_id($user->id)->count();
        if($count3 > 0){
         $data['log'] = Bill::wherePhone($track)->wheretype(3)->whereUser_id($user->id)->paginate(10);
         return view('user.merchant.power-log', $data);
        }

        else
        {
        return back()->with('alert', 'There is no transaction with this entry .');
        }




    }








    /**
     * Display the specified resource.
     *
     * @param  \App\Currency $currency
     * @return \Illuminate\Http\Response
     */
    public function show(Currency $currency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Currency $currency
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['currency'] = Giftcard::find($id);
        $data['page_title'] = "Manage Giftcard";
        return view('admin.giftcard.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Currency $currency
     * @return \Illuminate\Http\Response
     */
    public function post(Request $request )
    {

        $request->validate([
            'buy' => 'required|min:0',
            'symbol' => 'required',
            'name' => 'required',
        ]);

        $data = Giftcard::find($request->id);
        $data['name'] = $request->name ;
        $data['image'] = $request->symbol ;
        $data['buy'] = $request->buy ;
        $data->save();

        return back()->with('success', 'Gift Card Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Currency $currency
     * @return \Illuminate\Http\Response
     */
    public function destroy(Currency $currency)
    {
        //
    }
}
