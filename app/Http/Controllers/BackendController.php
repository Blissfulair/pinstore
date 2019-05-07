<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;
use App\Service;
use App\Post;

class BackendController extends Controller
{
    public function dashboard(){
        return view('backend.dashboard');
    }
    public function create_service(){
        $service = '';
        return view('backend.create-service', compact('service'));
    }
    public function create_post(){
        $post = '';
        return view('backend.create-post', compact('post'));
    }
    public function manage_service(){
        $services = Service::all();
        return view('backend.manage-service', compact('services'));
    }
    public function manage_post(){
        $posts = Post::all();
        return view('backend.manage-post', compact('posts'));
    }
    public function edit_service($id){
        $service = Service::find($id);
        return view('backend.create-service', compact('service'));
    }
    public function edit_post($id){
        $post = Post::find($id);
        return view('backend.create-post', compact('post'));
    }
    public function destroy_service($id){
        $service = Service::find($id);
        if($service->delete())
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
    public function update_service(Request $request, int $id){
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
    public function update_post(Request $request, int $id){
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
            }
        }
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
                    'created_by'=>1
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
