@extends('layouts.admin')
@section('title')
 || Create Service
@endsection
@section('content')
<section class="panel">
    <div class="panel-body">
        <form action="{{ $service ? route('update.service', ['id'=>$service->id]) : route('save.service') }}" class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess"></label>
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-7">
                            <select name="icon" class="form-control input-lg m-bot15">
                                <option value="">Select Service Icon</option>
                                <option {{ $service? ( $service->icon == 'globe' ? 'selected': '' ) : '' }} value="globe">Globe</option>
                                <option {{ $service? ( $service->icon == 'mobile' ? 'selected': '' ) : '' }} value="mobile">Mobile</option>
                                <option {{ $service? ( $service->icon == 'desktop' ? 'selected': '' ) : '' }} value="desktop">Desktop</option>
                                <option {{ $service? ( $service->icon == 'wifi' ? 'selected': '' ) : '' }} value="wifi">Wifi</option>
                                <option {{ $service? ( $service->icon == 'briefcase' ? 'selected': '' ) : '' }} value="briefcase">Briefcase</option>
                                <option {{ $service? ( $service->icon == 'pencil' ? 'selected': '' ) : '' }} value="pencil">Pencil</option>
                                <option {{ $service? ( $service->icon == 'camera' ? 'selected': '' ) : '' }} value="camera">Camera</option>
                                <option {{ $service? ( $service->icon == 'edit' ? 'selected': '' ) : '' }} value="edit">Editing</option>
                            </select>
                            <input class="form-control input-lg m-bot15" name="name" value="{{ $service? ( $service->name? $service->name: ''):'' }}" type="text" placeholder="Service Name">
                            <textarea class="form-control input-lg m-bot15" name="content" rows="10" type="text" placeholder="Content">{{ $service? ( $service->content? $service->content: ''):'' }}</textarea>
                            <textarea class="form-control input-sm m-bot15" name="quote" type="text" placeholder="Quote">{{ $service? ( $service->quote? $service->quote: ''):'' }}</textarea>
                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                            <button type="submit" class="{{ $service? 'btn btn-info':'btn btn-success' }}">{{ $service? 'Update':'Create' }}</button>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <label for="file">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="{{ $service? ( $service->featured_image? asset('images/services/'.$service->featured_image): 'http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image' ) : '' }}" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                        </label>
                                        <span class="btn btn-white btn-file">
                                        <span id="file" class="fileupload-new"><i class="icon-paper-clip"></i> Select Featured Image</span>
                                        <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                        <input type="file" name="featured_image" value="{{ $service? ( $service->featured_image? $service->featured_image: ''):'' }}" class="defaults">
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