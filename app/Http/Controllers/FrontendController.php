<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\Service;
use App\Post;
use App\Comment;
use App\Contact;
use App\Subject;
use App\Scholarship;
use App\Career;
use App\AboutUs;
use App\Team;
use App\Training;

class FrontendController extends Controller
{
    public function index() {
        $activities = Service::orderBy('created_at', 'ASC')->limit(3)->get();
        $services = Service::orderBy('created_at', 'ASC')->limit(4)->get();
        $posts = Post::orderBy('created_at', 'DESC')->limit(3)->get();
        return view('frontend.home',compact('services', 'posts','activities'));
    }
    public function register_training(Request $request){
        $program = $request->program;
        return view('frontend.register', compact('program'));
    }
    public function train(){
        return view('frontend.train');
    }
    public function training_register(Request $request){
        $this->validate($request, [
            'program'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|unique:trainings',
            'phone_num'=>'required|min:11|max:11|unique:trainings'
        ]);
        $trainings = Training::create([
            'program'=>$request->program,
            'fname'=>$request->first_name,
            'name'=>$request->last_name,
            'email'=>$request->email,
            'phone_num'=>$request->phone_num
        ]);
        if($trainings)
        return response()->json(['status'=>'sent']);
        else
        return response()->json(['status'=>'error']);
    }
    public function services(){
        $services = Service::orderBy('created_at', 'ASC')->get();
        return view('frontend.service', compact('services'));
    }
    public function careers(){
        $careers = Career::all();
        return view('frontend.career',compact('careers'));
    }
    public function career($name){
        $careers = Career::orderBy('created_at', 'ASC')->get();
        $career = Career::where('name', $name)->first();
        return view('frontend.career-single',compact('career', 'careers'));
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
        $aboutus = AboutUs::find(1);
        $teams = Team::limit(4)->get();
        return view('frontend.about', compact('aboutus','teams'));
    }
    public function service_single($name){
        $services = Service::orderBy('created_at', 'ASC')->get();
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
        return view('frontend.post-single', compact('post', 'posts'));   
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
    public function contact_form(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'subject'=>'required',
            'message'=>'required',
        ]);
        $contact = Contact::create([
            'name'=>$request->name,
            'email'=>filter_var($request->email, FILTER_VALIDATE_EMAIL),
            'subject'=>$request->subject,
            'phone_num'=>$request->phone,
            'message'=>$request->message
        ]);
        if($contact)
        return response()->json(['status'=>'sent']);
        else
        return response()->json(['error'=>'failed']);
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
            $filename = str_replace(' ','',$request->name).date('YmdHis').'.'.$file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath());              
            $image_resize->resize(300, 300);
            $image_resize->save(public_path('images/application/' .$filename));
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
                    return response()->json(['success'=>'sent']);
                else
                    return response()->json(['error'=>'declined']);
            }else
                return response()->json(['error'=>'email']);
        }else
        return response()->json(['error'=>'passport']);
    }
}
