<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
//use Intervention\Image\ImageManagerStatic as Image;
use Image;
use App\Service;
use App\Post;
use App\User;
use App\Scholarship;
use App\Career;
use App\AboutUs;
use App\Team;
use App\Setting;
use App\Contact;
use App\UserMeta;


class BackendController extends Controller
{
    public function dashboard(){
        $users = User::all();
        $posts= Post::all();
        $services = Service::all();
        $scholarships = Scholarship::all();
        return view('backend.dashboard', compact('users','posts','services','scholarships'));
    }
    public function message(){
        $mails = Contact::all();
        $user = Auth::user();
        return view('backend.mail', compact('mails','user'));
    }
    public function setting(){
        $setting = Setting::find(1);
        if(!$setting)
        $setting = '';
        return view('backend.setting', compact('setting'));
    }
    public function profile_setting(){
        $profile = Auth::user();
        return view('backend.profile-edit',compact('profile'));
    }
    public function profile(){
        $profile = Auth::user();
        return view('backend.profile',compact('profile'));
    }
    public function create_service(){
        $service = '';
        return view('backend.create-service', compact('service'));
    }
    public function create_career(){
        $career = '';
        return view('backend.create-career', compact('career'));
    }
    public function create_team(){
        $team = '';
        return view('backend.create-team', compact('team'));
    }
    public function create_post(){
        $post = '';
        return view('backend.create-post', compact('post'));
    }
    public function create_user(){
        $user = '';
        return view('backend.create-user', compact('user'));
    }
    public function aboutus(){
        $aboutus = AboutUs::find(1);
        return view('backend.about', compact('aboutus'));
    }
    public function manage_scholarship(){
        $scholarships = Scholarship::all();
        return view('backend.manage-scholarship', compact('scholarships'));
    }
    public function save_user(Request $request){
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $user = User::create([
            'name' => $request['name'],
            'number' => $request['number'],
            'email' => $request['email'],
            'username' => $request['username'],
            'password' => Hash::make($request['password']),
        ]);
        if($user){
            return redirect()->route('manage_user')->with('success', 'User created successfully');
        }else{
            return redirect()->back()->with('error', 'Operation was not successful');
        }
    }
    public function save_aboutus(Request $request){
        $this->validate($request, [
            'about_us' => 'required',
            'mission' => 'required',
            'vision' => 'required',
            'expanding_goal' => 'required',
        ]);
        $aboutus = AboutUs::create([
            'about_us' => $request['about_us'],
            'mission' => $request['mission'],
            'vision' => $request['vision'],
            'expanding_goal' => $request['expanding_goal'],
        ]);
        if($aboutus){
            return redirect()->back()->with('success', 'Created successfully');
        }else{
            return redirect()->back()->with('error', 'Operation was not successful');
        }
    }
    public function save_setting(Request $request){
        $this->validate($request, [
            'about' => ['required','max:250'],
            'number' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'youtube'=>'required',
            'feed'=>'required',
            'foursquare'=>'required',
            'address'=>'required',
            'email'=>'required',
            'gplus'=>'required'
        ]);
        $file = $request->file('logo');
        if($file){
            $filename = date('YmdHis').'.'.$file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath());              
            $image_resize->resize(148, 40);
            $image_resize->save(public_path('images/logo/' .$filename));
        }
        $setting = Setting::create([
            'about' => $request['about'],
            'number' => $request['number'],
            'facebook' => $request['facebook'],
            'twitter' => $request['twitter'],
            'youtube' => $request['youtube'],
            'feed' => $request['feed'],
            'foursquare' => $request['foursquare'],
            'address' => $request['address'],
            'email' => $request['email'],
            'gplus' => $request['gplus'],
            'logo' => $filename,
        ]);
        if($setting){
            return redirect()->back()->with('success', 'Created successfully');
        }else{
            return redirect()->back()->with('error', 'Operation was not successful');
        }
    }
    public function update_setting(Request $request){
        $this->validate($request, [
            'about' => ['required','max:250'],
            'number' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'youtube'=>'required',
            'feed'=>'required',
            'foursquare'=>'required',
            'address'=>'required',
            'email'=>'required',
            'gplus'=>'required'
        ]);
        $file = $request->file('logo');
        $setting = Setting::find(1);
        if($file){
            $filename = date('YmdHis').'.'.$file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath());              
            $image_resize->resize(148, 40);
            $image_resize->save(public_path('images/logo/' .$filename));
            $setting->logo= $filename;
        }
            $setting->about= $request['about'];
            $setting->number= $request['number'];
            $setting->facebook= $request['facebook'];
            $setting->twitter= $request['twitter'];
            $setting->youtube= $request['youtube'];
            $setting->feed= $request['feed'];
            $setting->foursquare= $request['foursquare'];
            $setting->address= $request['address'];
            $setting->email= $request['email'];
            $setting->gplus= $request['gplus'];
        if($setting->update()){
            return redirect()->back()->with('success', 'Updated successfully');
        }else{
            return redirect()->back()->with('error', 'Operation was not successful');
        }
    }
    public function manage_service(){
        $services = Service::orderBy('created_at', 'ASC')->get();
        return view('backend.manage-service', compact('services'));
    }
    public function manage_team(){
        $teams = Team::orderBy('created_at', 'ASC')->get();
        return view('backend.manage-team', compact('teams'));
    }
    public function manage_career(){
        $careers = Career::orderBy('created_at', 'ASC')->get();
        return view('backend.manage-career', compact('careers'));
    }
    public function manage_post(){
        $posts = Post::orderBy('created_at', 'DESC')->get();
        return view('backend.manage-post', compact('posts'));
    }
    public function manage_user(){
        $users = User::orderBy('created_at', 'DESC')->get();
        return view('backend.manage-user', compact('users'));
    }
    public function edit_service($id){
        $service = Service::find($id);
        return view('backend.create-service', compact('service'));
    }
    public function edit_team($id){
        $team = Team::find($id);
        return view('backend.create-team', compact('team'));
    }
    public function edit_career($id){
        $career = Career::find($id);
        return view('backend.create-career', compact('career'));
    }
    public function edit_post($id){
        $post = Post::find($id);
        return view('backend.create-post', compact('post'));
    }
    public function edit_user($id){
        $user = User::find($id);
        return view('backend.create-user', compact('user'));
    }
    public function destroy_service($id){
        $service = Service::find($id);
        if($service->delete())
            return redirect()->back()->with('success', 'Deleted Successfully');
        else
            return redirect()->back()->with('error', 'Delete Operation Failed');
    }
    public function destroy_team($id){
        $team = Team::find($id);
        if($team->delete())
            return redirect()->back()->with('success', 'Deleted Successfully');
        else
            return redirect()->back()->with('error', 'Delete Operation Failed');
    }
    public function destroy_career($id){
        $career = Career::find($id);
        if($career->delete())
            return redirect()->back()->with('success', 'Deleted Successfully');
        else
            return redirect()->back()->with('error', 'Delete Operation Failed');
    }
    public function destroy_post($id){
        $post = Post::find($id);
        if($post->delete())
            return redirect()->back()->with('success', 'Deleted Successfully');
        else
            return redirect()->back()->with('error', 'Delete Operation Failed');
    }
    public function destroy_user($id){
        $user = User::find($id);
        if($user->delete())
            return redirect()->back()->with('success', 'Deleted Successfully');
        else
            return redirect()->back()->with('error', 'Delete Operation Failed');
    }
    public function update_service(Request $request, $id){
        $service = Service::find($request->id);
        $this->validate($request, [
            'icon'=>'required',
            'name'=>'required',
            'content'=>'required',
            'quote'=>'required',
        ]);
        $file = $request->file('featured_image');
        if($file){
            $filename = str_replace(' ','',$request->name).date('YmdHis').'.'.$file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath());              
            $image_resize->resize(870, 480);
            $image_resize->save(public_path('images/services/' .$filename));
            $service->featured_image = $filename;
        }
        $service->icon = $request->icon;
        $service->name = $request->name;
        $service->content = $request->content;
        $service->quote = $request->quote;
        if(!$service->update())
            return redirect('manage_service')->with('error', 'Failed to Update');
        else
            return redirect('manage_service')->with('success', 'Updated Successfully.');
    }
    public function update_team(Request $request, $id){
        $team = Team::find($request->id);
        $this->validate($request, [
            'name'=>'required',
            'position'=>'required',
            'about'=>['required','max:100'],
        ]);
        $file = $request->file('image');
        if($file){
            $filename = str_replace(' ','',$request->name).date('YmdHis').'.'.$file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath());              
            $image_resize->resize(270, 200);
            $image_resize->save(public_path('images/members/' .$filename));
            $team->featured_image = $filename;
        }
        $team->name = $request->name;
        $team->position = $request->position;
        $team->about = $request->about;
        if(!$team->update())
            return redirect('manage_team')->with('error', 'Failed to Update');
        else
            return redirect('manage_team')->with('success', 'Updated Successfully.');
    }
    public function update_aboutus(Request $request){
        $aboutus = AboutUs::find(1);
        $this->validate($request, [
            'about_us'=>'required',
            'mission'=>'required',
            'vision'=>'required',
            'expanding_goal'=>'required',
        ]);
        $aboutus->about_us = $request->about_us;
        $aboutus->mission = $request->mission;
        $aboutus->vision = $request->vision;
        $aboutus->expanding_goal = $request->expanding_goal;
        if(!$aboutus->update())
            return redirect()->back()->with('error', 'Failed to Update');
        else
            return redirect()->back()->with('success', 'Updated Successfully.');
    }
    public function update_career(Request $request, $id){
        $career = Career::find($request->id);
        $this->validate($request, [
            'icon'=>'required',
            'name'=>'required',
            'content'=>'required',
        ]);
        $career->icon = $request->icon;
        $career->name = $request->name;
        $career->content = $request->content;
        if(!$career->update())
            return redirect('manage_career')->with('error', 'Failed to Update');
        else
            return redirect('manage_career')->with('success', 'Updated Successfully.');
    }
    public function update_message_ajax(){
        $user = Auth::user();
        $usermeta = UserMeta::where('user_id',$user->id)->first();
        if($usermeta){
            $usermeta->post_id=$usermeta->post_id + 1;
            $usermeta->update();
        }else{
                $usermeta = new UserMeta();
                $usermeta->user_id=$user->id;
                $usermeta->save();
        }
        return response()->json(['ok'=>'ok']);
    }
    public function update_post(Request $request, $id){
        $post = Post::find($request->id);
        $this->validate($request, [
            'title'=>'required',
            'content'=>'required',
        ]);
        $file = $request->file('featured_image');
        if($file){
            $filename = str_replace(':', '',str_replace(' ','',$request->title)).date('YmdHis').'.'.$file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath());              
            $image_resize->resize(870, 480);
            $image_resize->save(public_path('images/posts/' .$filename));
            $post->featured_image = $filename;
        }
        $post->title = $request->title;
        $post->content = $request->content;
        if(!$post->update())
            return redirect('manage_post')->with('error', 'Failed to Update');
        else
            return redirect('manage_post')->with('success', 'Updated Successfully.');
    }
    public function update_user(Request $request, $id){
        $user = User::find($request->id);
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->number = $request->number;
        $user->role = $request->role;
        $user->password = Hash::make($request['password']);
        if(!$user->update())
            return redirect('manage_user')->with('error', 'Failed to Update');
        else
            return redirect('manage_user')->with('success', 'Updated Successfully.');
    }
    public function update_profile_setting(Request $request){
        $user = Auth::user();
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'number'=>'required',
        ]);
        $file = $request->file('image');
        if($file){
            $filename = str_replace(' ','',$request->name).date('YmdHis').'.'.$file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath());              
            $image_resize->resize(200, 200);
            $image_resize->save(public_path('images/profile/' .$filename));
            $user->image = $filename;
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->number = $request->number;
        if(!$user->update())
            return redirect()->back()->with('error', 'Failed to Update');
        else
            return redirect()->back()->with('success', 'Updated Successfully.');
    }
    public function update_profile_password(Request $request){
        $user = Auth::user();
        $this->validate($request, [
            'old_password'=>'required',
            'password'=>['required', 'string', 'min:8', 'confirmed'],
        ]);
        if(Auth::attempt(['email'=>$user->email,'password'=>$request['old_password']])){
            $user->password = Hash::make($request['password']);
            if($user->update()){
                return redirect()->back()->with('success', 'Password updated successfully.');
            }else{
                return redirect()->back()->withInput();
            }
        }else{
            return redirect()->back()->with('error', 'Old Password does not match existing Password');
        }
    }
    public function save_service(Request $request){
        $this->validate($request, [
            'icon'=>'required',
            'name'=>'required',
            'content'=>'required',
            'featured_image'=>'required',
            'quote'=>'required',
        ]);
        $file = $request->file('featured_image');
        if($file){
            $filename = str_replace(' ','',$request->name).date('YmdHis').'.'.$file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath());              
            $image_resize->resize(870, 480);
            $image_resize->save(public_path('images/services/' .$filename));
            $service = Service::exist($request);
            if(!$service){
               $service = Service::create([
                    'icon'=>$request->icon,
                    'name'=>$request->name,
                    'featured_image'=>$filename,
                    'content'=>$request->content,
                    'quote'=>$request->quote,
                    'brochure_image'=>'kjljljlj',
                    'created_by'=>1
                ]);
                if($service)
                    return redirect('manage_service')->with('success', 'Service '.$request->name.' was created successfully');
                else
                    return redirect('manage_service')->with('error', 'Service '.$request->name.' failed to create');
            }else
                return redirect('manage_service')->with('error', 'Service '.$request->name.' already exists');
        }
    }
    public function save_team(Request $request){
        $this->validate($request, [
            'name'=>'required',
            'position'=>'required',
            'about'=>['required','max:100'],
        ]);
        $file = $request->file('image');
        if($file){
            $filename = str_replace(' ','',$request->name).date('YmdHis').'.'.$file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath());              
            $image_resize->resize(270, 200);
            $image_resize->save(public_path('images/members/' .$filename));
            $team = Team::exist($request);
            if(!$team){
               $team = Team::create([
                    'name'=>$request->name,
                    'position'=>$request->position,
                    'image'=>$filename,
                    'about'=>$request->about,
                ]);
                if($team)
                    return redirect('manage_team')->with('success', 'Team member '.$request->name.' was created successfully');
                else
                    return redirect('manage_team')->with('error', 'Team member '.$request->name.' failed to create');
            }else
                return redirect('manage_team')->with('error', 'Team member '.$request->name.' already exists');
        }
    }
        public function save_career(Request $request){
        $this->validate($request, [
            'icon'=>'required',
            'name'=>'required',
            'content'=>'required'
        ]);
        $career = Career::exist($request);
        if(!$career){
            $career = Career::create([
                'icon'=>$request->icon,
                'name'=>$request->name,
                'content'=>$request->content,
            ]);
            if($career)
                return redirect('manage_career')->with('success', 'Career '.$request->name.' was created successfully');
            else
                return redirect('manage_career')->with('error', 'Career '.$request->name.' failed to create');
        }else
            return redirect('manage_career')->with('error', 'Career '.$request->name.' already exists');
    }
    public function save_post(Request $request){
        $this->validate($request, [
            'title'=>'required',
            'content'=>'required',
            'featured_image'=>'required',
        ]);
        $file = $request->file('featured_image');
        if($file){
            $filename = str_replace(':', '',str_replace(' ','',$request->title)).date('YmdHis').'.'.$file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath());              
            $image_resize->resize(870, 480);
            $image_resize->save(public_path('images/posts/' .$filename));
            // Storage::disk('local')->put($filename, File::get($file));
            $service = Post::exist($request);
            if(!$service){
               $service = Post::create([
                    'title'=>$request->title,
                    'content'=>$request->content,
                    'featured_image'=>$filename,
                    'created_by'=>Auth::user()->id,
                ]);
                if($service)
                    return redirect('manage_post')->with('success', 'Post  was created successfully');
                else
                    return redirect('manage_post')->with('error', 'Post  failed to create');
            }else
                return redirect()->back()->with('error', 'Post post with this title already exists');
        }else
            return redirect()->back()->with('error', 'Post must have a featured image');
    }
}
