@extends('layouts.admin')
@section('title')
 || Create Service
@endsection
@section('content')
<section class="panel">
    <div class="panel-body">
        <form action="{{ $aboutus ? route('update.aboutus') : route('save.aboutus') }}" class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">About the Company</label>
                            <textarea class="form-control input-lg m-bot15" name="about_us" rows="10" type="text" placeholder="About The Company">{{ $aboutus? ( $aboutus->about_us? $aboutus->about_us: ''):'' }}</textarea>
                        </div>
                        <div class="col-lg-6">
                            <label for="">Mission</label>
                            <textarea class="form-control input-lg m-bot15" name="mission" rows="10" type="text" placeholder="Mission">{{ $aboutus? ( $aboutus->mission? $aboutus->mission: ''):'' }}</textarea>
                        </div>
                        <div class="col-lg-6">
                            <label for="">Vision</label>
                            <textarea class="form-control input-lg m-bot15" name="vision" rows="10" type="text" placeholder="Vision">{{ $aboutus? ( $aboutus->vision? $aboutus->vision: ''):'' }}</textarea>
                        </div>
                        <div class="col-lg-6">
                            <label for="">Expanding Goals</label>
                            <textarea class="form-control input-lg m-bot15" name="expanding_goal" rows="10" type="text" placeholder="Expanding Goals">{{ $aboutus? ( $aboutus->expanding_goal? $aboutus->expanding_goal: ''):'' }}</textarea>
                        </div>
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                        <div class="col-lg-4 col-lg-offset-4">
                            <button type="submit" class="{{ $aboutus? 'btn btn-info btn-lg btn-block':'btn btn-success btn-lg btn-block' }}">{{ $aboutus? 'Update':'Create' }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection