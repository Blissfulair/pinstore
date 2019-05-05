<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Service;
use App\Post;
use App\Comment;

class FrontendController extends Controller
{
    public function index() {
        $activities = Service::limit(3)->get();
        $services = Service::limit(4)->get();
        $posts = Post::limit(3)->get();
        return view('frontend.home',compact('services', 'posts','activities'));
    }
    public function services(){
        $services = Service::all();
        return view('frontend.service', compact('services'));
    }
    public function careers(){
        return view('frontend.career');
    }
    public function trainings(){
        return view('frontend.training');
    }
    public function bulletins(){
        $posts = Post::orderBy('created_at', 'DESC')->paginate(6);
        return view('frontend.bulletin', compact('posts'));
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function about(){
        return view('frontend.about');
    }
    public function service_single($name){
        $service = Service::where('name', $name)->first();
        return view('frontend.service-single',compact('service'));
    }
    public function display_image($filename){
        $file = Storage::disk('local')->get($filename);
        return new Response($file, 200);
    }
    public function post_single($name){
        $post = Post::get_post_by_title($name);
        $comments = Comment::where('post_id', $post->id)->get();
        return view('frontend.post-single', compact('post','comments'));   
    }
    public function create_comment(Request $request){
        $this->validate($request,[
            'comment'=>'required'
        ]);
        Comment::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'url'=>$request->url,
            'comment'=>$request->comment,
            'post_id'=>$request->post_id
        ]);
        return redirect()->back();
    }
}
