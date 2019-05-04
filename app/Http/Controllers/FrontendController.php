<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class FrontendController extends Controller
{
    public function index() {
        $services = Service::limit(3)->get();
        return view('frontend.home',compact('services'));
    }
    public function services(){
        return view('frontend.service');
    }
    public function careers(){
        return view('frontend.career');
    }
    public function trainings(){
        return view('frontend.training');
    }
    public function bulletins(){
        return view('frontend.bulletin');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function about(){
        return view('frontend.about');
    }
    public function service_single(){
        $service = Service::find(1);
        return view('frontend.service-single',compact('service'));
    }
}
