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
use App\Mail\Email;

class ApiController extends Controller
{
    public function order(Request $request){
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
                $e_subject = 'Givitec '.ucwords($package->service->name).' ('.ucwords($package->name).' Package) Order';
        
                $e_body = ucwords($request['name'])." ($request->phone) has requested for the  ".$package->service->name.' '.$package->name 
                .' package @ N'.$request->amount. ". <p>Including $request->add. $tranRef is the transaction reference.</p>";
                $mailer->to('orders@givitec.com')->send( new Email('Order ['.$tranRef.']' ,$e_body));
                $usermessage = "Thank you for purchasing this service, we will respond within the next 24hours. <p><strong>NOTE:</strong> Do not reply to this email because this is a virtual email address.</P>";
                $mailer->to($request->email)->send( new Email( $e_subject,$usermessage));
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
            return response()->json(['statusCode'=>200, 'message'=>'successful']);
        }
    }
}
