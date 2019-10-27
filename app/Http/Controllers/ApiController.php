<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderItem;
use App\ServiceList;
use App\ServiceListItem;
use App\ServiceItem;
use App\Transaction;
use App\PaystackTransaction;
use App\Jamb;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailer;
use App\Mail\Orders;

class ApiController extends Controller
{
    public function order(Request $request, Mailer $mailer){
        $this->validate($request, [
            'email'=>'required',
            'phone'=>'required',
            'message'=>'required',
            'service'=>'required',
            'name'=>'required'
        ]);
        $order = Order::where('email', $request->email)->first();
        if(!$order){
            $order = new Order();
            $order->email = $request->email;
            $order->name = $request->name;
            $order->phone = $request->phone;
            $order->save();
        }
        $item = new OrderItem();
        $item->referral = $request->referral;
        $item->service = $request->service;
        $item->message = $request->message;
        $item->order_id = $order->id;
        if($item->save()){
            $e_subject = 'Givitec '.ucwords($request->service).' Service';
            if(!empty($request->referral))
                $referral = "<p>Referral code: $request->referral</p>";
            else
                $referral='';
            $e_body = "$request->message. $referral";
            $mailer->to('orders@givitec.com')->send( new Orders('Request for '.$request->service ,$e_body));
            $usermessage = "<p>Hello $request->name,</p> We have received your request and we will respond within the next 24hours. <p><strong>NOTE:</strong> Do not reply to this email because this is a virtual email address.</P>";
            $mailer->to($request->email)->send( new Orders( $e_subject,$usermessage));
            return response()->json(['status'=>'Thank you, your request has been successfully sent.']);
        }else{
            return response()->json(['status'=>'Oops, your request failed. Check the form and try again.']);
        }
        

    }
    public function services_list(){
        $services = ServiceList::all();
        return response()->json(['services'=>$services]);
    }
    public function service($id){
        $services = ServiceItem::where('name', 'LIKE' , '%'.$id.'%')->first();
        return response()->json(['services'=>$services]);
    }
    public function services($id){
        $lists = ServiceList::where('service_item_id', $id)->get();
        return response()->json(['services'=>$lists]);
    }
    public function selected_services($meta){
        $lists = ServiceItem::where('meta', $meta)->get();
        return response()->json(['services'=>$lists]);
    }
    public function service_features($id){
        $lists = ServiceListItem::where('service_list_id', $id)->get();
        return response()->json(['lists'=>$lists]);
    }
    public function transaction(Request $request, Mailer $mailer){
        // $this->validate($request, [
        //     'name'=>'required',
        //     'email'=>'required',
        //     'phone'=>'required',
        //     'amount'=>'required',
        //     'package'=>'required',
        //     'service'=>'required',
        // ]);
        $tranRef = '8768649879248768009848798476877926256626871652664249847100989101876548773428478428';
        $tranRef = substr(str_shuffle($tranRef), 11 ,10);
        $transact = Transaction::where('ref', $tranRef)->first();
         $package = ServiceList::find($request->package);
        if(!$transact){
            $transaction =Transaction::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'ref'=>$tranRef,
                'phone'=>$request->phone,
                'amount'=>$request->amount,
                'package'=>$request->package,
                'service'=>$request->service,
                'additionals'=>$request->additionals
            ]);
            if($transaction){
                if(empty($request->additionals)){
                    $jamb_details = Jamb::where('email', $request->email)->orderBy('created_at', 'desc')->first();
                    $e_subject = 'Givitec  JAMB Registration';
        
                    $e_body = ucwords($request['name'])." ($request->phone) has requested for jamb registration and vending PIN N$request->amount. <p>Including $tranRef is the transaction reference.</p>";
                    $e_body .="<h3>Below are the students Details</h3>";
                    $e_body .= "<table>";
                    $e_body .="<tr><td>Surname</td><td>$jamb_details->lastname</td></tr>";
                    $e_body .="<tr><td>First Name:</td><td>".ucfirst($jamb_details->firstname)."</td></tr>";
                    $e_body .="<tr><td>Middle Name:</td><td>".ucfirst($jamb_details->middle_name)."</td></tr>";
                    $e_body .="<tr><td>Reg Number:</td><td>".ucfirst($jamb_details->reg_no)."</td></tr>";
                    $e_body .="<tr><td>Profile Code:</td><td>$jamb_details->profile_code</td></tr>";
                    $e_body .="<tr><td>NIN:</td><td>$jamb_details->nin</td></tr>";
                    $e_body .="<tr><td>Date of Birth:</td><td>".date('jF M, Y', strtotime($jamb_details->dob))."</td></tr>";
                    $e_body .="<tr><td>Phone Number:</td><td>$jamb_details->phone</td></tr>";
                    $e_body .="<tr><td>Email:</td><td>$jamb_details->email</td></tr>";
                    $e_body .="<tr><td>Home Town:</td><td>".ucwords($jamb_details->home_town)."</td></tr>";
                    $e_body .="<tr><td>State:</td><td>".ucfirst($jamb_details->state)."</td></tr>";
                    $e_body .="<tr><td>Local Government Area:</td><td>".ucwords($jamb_details->lga)."</td></tr>";
                    $e_body .="<tr><td>Address:</td><td>".ucwords($jamb_details->address)."</td></tr>";
                    $e_body .="<tr><td>Password:</td><td>$jamb_details->password</td></tr>";
                    $e_body .="<tr><td>First Choice Institution:</td><td>".ucwords($jamb_details->first_choice_inst)."</td></tr>";
                    $e_body .="<tr><td>First Choice Course:</td><td>".ucwords($jamb_details->first_choice_course)."</td></tr>";
                    $e_body .="<tr><td>Second Choice Institution:</td><td>".ucwords($jamb_details->second_choice_inst)."</td></tr>";
                    $e_body .="<tr><td>Second Choice Course:</td><td>".ucwords($jamb_details->second_choice_course)."</td></tr>";
                    $e_body .="<tr><td>Third Choice Institution:</td><td>".ucwords($jamb_details->third_choice_inst)."</td></tr>";
                    $e_body .="<tr><td>Third Choice Course:</td><td>".ucwords($jamb_details->third_choice_course)."</td></tr>";
                    $e_body .="</table>";
                    $mailer->to('orders@givitec.com')->send( new Orders('Jamb Registration ['.$tranRef.']' ,$e_body));
                    $usermessage = "Thank you for purchasing Jamb form with us, we will respond within the next 24hours. <p><strong>NOTE:</strong> Do not reply to this email because this is a virtual email address.</P>";
                    $mailer->to($request->email)->send( new Orders( $e_subject,$usermessage));
                }else{
                $e_subject = 'Givitec '.ucwords($package->service->name).' ('.ucwords($package->name).' Package) Order';
        
                $e_body = ucwords($request['name'])." ($request->phone) has requested for the  ".$package->service->name.' '.$package->name 
                .' package @ N'.$request->amount. ". <p>Including $request->add. $tranRef is the transaction reference. Contact via email $request->email</p>";
                $mailer->to('orders@givitec.com')->send( new Orders('Order ['.$tranRef.']' ,$e_body));
                $usermessage = "Thank you for purchasing this service, we will respond within the next 24hours. <p><strong>NOTE:</strong> Do not reply to this email because this is a virtual email address.</P>";
                $mailer->to($request->email)->send( new Orders( $e_subject,$usermessage));
                }
                return response()->json(['status'=>'Hello '.$request->name.', thank you for choosing this service, we will respond shortly.', 'transaction'=>$transaction]);
            }
        }

    }
    public function save_paystack_transaction(Request $request){
        $paystack = PaystackTransaction::create([
            'status'=>$request->status,
            'givitec_ref'=>$request->givitec_ref,
            'paystack_ref'=>$request->paystack_ref,
            'message'=>$request->message,
        ]);
        if($request->status == 'success'){
            $transaction = Transaction::where('ref', $request->givitec_ref)->first();
            if($transaction){
                $transaction->status = Transaction::PAID;
                $transaction->update();
            }
            return response()->json(['status'=>'success','statusCode'=>200, 'message'=>'Tansaction was successful.']);
        }
        return response()->json(['status'=>'failed','statusCode'=>403, 'message'=>'Tansaction was unsuccessful.']);
    }
    public function jamb_registration(Request $request){
        $jamb_registration = Jamb::create([
            'reg_no'=>$request->reg_no,
            'lastname'=>$request->lastname,
            'firstname'=>$request->firstname,
            'middle_name'=>$request->middle_name,
            'nin'=>$request->nin,
            'phone'=>$request->phone,
            'password'=>$request->password,
            'email'=>$request->email,
            'home_town'=>$request->home_town,
            'address'=>$request->address,
            'lga'=>$request->lga,
            'state'=>$request->state,
            'profile_code'=>$request->profile_code,
            'first_choice_inst'=>$request->first_choice_inst,
            'second_choice_inst'=>$request->second_choice_inst,
            'third_choice_inst'=>$request->third_choice_inst,
            'first_choice_course'=>$request->first_choice_course,
            'second_choice_course'=>$request->second_choice_course,
            'third_choice_course'=>$request->third_choice_course,
            'dob'=>$request->dob
        ]);
        if($jamb_registration){
            return response()->json(['statusCode'=>200, 'message'=>'successful', 'name'=>$request->lastname
            .' '. $request->middle_name. ' '.$request->firstname, 'email'=>$request->email, 'phone'=>$request->phone]);
        }
    }
}
