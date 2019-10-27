@extends('layouts.admin')
@section('title')
 || Create Service
@endsection
@section('content')
<section class="panel">
    <div class="panel-body">
        <form action="{{ $career ? route('update.career', ['id'=>$career->id]) : route('save.career') }}" class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess"></label>
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-2">
                            <select name="icon" class="form-control input-lg m-bot15">
                                <option value="">Select career Icon</option>
                                <option {{ $career? ( $career->icon == 'globe' ? 'selected': '' ) : '' }} value="globe">Globe</option>
                                <option {{ $career? ( $career->icon == 'mobile' ? 'selected': '' ) : '' }} value="mobile">Mobile</option>
                                <option {{ $career? ( $career->icon == 'desktop' ? 'selected': '' ) : '' }} value="desktop">Desktop</option>
                                <option {{ $career? ( $career->icon == 'wifi' ? 'selected': '' ) : '' }} value="wifi">Wifi</option>
                                <option {{ $career? ( $career->icon == 'briefcase' ? 'selected': '' ) : '' }} value="briefcase">Briefcase</option>
                                <option {{ $career? ( $career->icon == 'pencil' ? 'selected': '' ) : '' }} value="pencil">Pencil</option>
                                <option {{ $career? ( $career->icon == 'camera' ? 'selected': '' ) : '' }} value="camera">Camera</option>
                                <option {{ $career? ( $career->icon == 'edit' ? 'selected': '' ) : '' }} value="edit">Editing</option>
                            </select>
                            <input class="form-control input-lg m-bot15" name="name" value="{{ $career? ( $career->name? $career->name: ''):'' }}" type="text" placeholder="career Name">
                            <textarea class="form-control input-lg m-bot15" name="content" rows="10" type="text" placeholder="Content">{{ $career? ( $career->content? $career->content: ''):'' }}</textarea>
                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                            <button type="submit" class="{{ $career? 'btn btn-info':'btn btn-success' }}">{{ $career? 'Update':'Create' }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection