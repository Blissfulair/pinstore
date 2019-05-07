<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\Service;
use App\Post;
use App\Comment;
use App\Subject;
use App\Scholarship;

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
        $subjects = Subject::all();
        return view('frontend.training', compact('subjects'));
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
        $services = Service::all();
        $service = Service::where('name', $name)->first();
        return view('frontend.service-single',compact('service', 'services'));
    }
    public function display_image($filename){
        $file = Storage::disk('local')->get($filename);
        return new Response($file, 200);
    }
    public function post_single($name){
        $obj = new Post();
        $post = $obj::get_post_by_title($name);
        $posts = $obj::get_recent();
        $comments = Comment::where('post_id', $post->id)->get();
        return view('frontend.post-single', compact('post','comments', 'posts'));   
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
    public function save_scholarship(Request $request){
        $this->validate($request, [
            'name'=>'required',
            'reg_number'=>'required|unique:scholarships',
            'subject'=>'required',
            'email'=>'required',
            'phone_num'=>'required|unique:scholarships',
        ]);
        $file = $request->file('image');
       if($file){
            // $filename = str_replace(' ','',$request->name).date('YmdHis').'.'.$file->getClientOriginalExtension();
            // $image_resize = Image::make($file->getRealPath());              
            // $image_resize->resize(300, 300);
            // $image_resize->save(public_path('images/application/' .$filename));
            if(filter_var($request->email, FILTER_VALIDATE_EMAIL))
                $email = $request->email;
            else
                return redirect()->back()->with('error', 'Invalid email address');
            $scholarship = Scholarship::where('email', $request->email)->first();
            if(!$scholarship){
                if(count($request->subject) != 3)
                return redirect()->back()->with('error', 'Your must select four(4) subjects');
               $scholarship = Scholarship::create([
                    'name'=>$request->name,
                    'reg_number'=>$request->reg_number,
                    'image'=>$filename,
                    'email'=>$email,
                    'phone_num'=>$request->phone_num,
                    'subject1'=>1,
                    'subject2'=>$request->subject[0],
                    'subject3'=>$request->subject[1],
                    'subject4'=>$request->subject[2],
                ]);
                if($scholarship)
                    return redirect()->back()->with('success', 'Hello, '.$request->name.' your application was sent successfully');
                else
                    return redirect()->back()->with('error', 'Hello, '.$request->name.' your application was declined please try again later');
            }else
                return redirect()->back()->with('error', 'The email address '.$request->email.' is already taken');
        }else
        return redirect()->back()->with('error', 'Your Passport is required');
    }
}
