@extends('layouts.admin')
@section('title')
 || Create Team Member
@endsection
@section('content')
<section class="panel">
    <div class="panel-body">
        <form action="{{ $team ? route('update.team', ['id'=>$team->id]) : route('save.team') }}" class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess"></label>
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-7">
                            <input class="form-control input-lg m-bot15" name="name" value="{{ $team? ( $team->name? $team->name: ''):'' }}" type="text" placeholder="Name">
                            <input class="form-control input-lg m-bot15" name="position" value="{{ $team? ( $team->position? $team->position: ''):'' }}" type="text" placeholder="Position">
                            <input class="form-control input-lg m-bot15" name="about" value="{{ $team? ( $team->about? $team->about: ''):'' }}" type="text" placeholder="About Team Member">
                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                            <button type="submit" class="{{ $team? 'btn btn-info':'btn btn-success' }}">{{ $team? 'Update':'Create' }}</button>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <label for="file">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="{{ $team? ( $team->image? asset('images/members/'.$team->image): 'http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image' ) : '' }}" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                        </label>
                                        <span class="btn btn-white btn-file">
                                        <span id="file" class="fileupload-new"><i class="icon-paper-clip"></i> Select Featured Image</span>
                                        <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                        <input type="file" name="image" value="{{ $team? ( $team->image? $team->image: ''):'' }}" class="defaults">
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