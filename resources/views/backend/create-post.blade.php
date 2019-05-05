@extends('layouts.admin')
@section('title')
 || Create post
@endsection
@section('content')
<section class="panel">
    <div class="panel-body">
        <form action="{{ $post ? route('update.post', ['id'=>$post->id]) : route('save.post') }}" class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess"></label>
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-7">
                            <input class="form-control input-lg m-bot15" name="title" value="{{ $post? ( $post->title? $post->title: ''):'' }}" type="text" placeholder="Post Title">
                            <textarea class="form-control ckeditor" placeholder="Post Content" name="content" rows="6">{{ $post? ( $post->content? $post->content: ''):'' }}</textarea>
                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                            <button type="submit" class="{{ $post? 'btn btn-info':'btn btn-success' }}">{{ $post? 'Update':'Create' }}</button>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="{{ $post? ( $post->featured_image? route('display_image', ['filename'=>$post->featured_image]): 'http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image' ) : '' }}" alt="" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                        <span class="btn btn-white btn-file">
                                        <span class="fileupload-new"><i class="icon-paper-clip"></i> Select Featured Image</span>
                                        <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                        <input type="file" name="featured_image" value="{{ $post? ( $post->featured_image? $post->featured_image: ''):'' }}" class="defaults">
                                        </span>
                                            <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection