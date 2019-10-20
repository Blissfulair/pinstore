@extends('layouts.admin')
@section('title')
 || Profile Settings
@endsection
@section('content')
<div class="row">
<aside class="profile-nav col-lg-3">
        <section class="panel">
            <div class="user-heading round">
                <a href="#">
                    <img src="{{ $profile->image?asset('images/profile/'.$profile->image):asset('images/logo/givitec.png') }}" alt="">
                </a>
                <h1>{{ $profile->name }}</h1>
                <p>{{ $profile->email }}</p>
            </div>

            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="{{ route('profile') }}"> <i class="icon-user"></i> Profile</a></li>
                <li><a href="#"> <i class="icon-calendar"></i> Recent Activity <span class="label label-danger pull-right r-activity">9</span></a></li>
                <li><a href="{{ route('profile_setting') }}"> <i class="icon-edit"></i> Edit profile</a></li>
            </ul>

        </section>
    </aside>
    <aside class="profile-info col-lg-9">
        <section class="panel">
            <div class="bio-graph-heading">
            </div>
            <div class="panel-body bio-graph-info">
                <h1> Profile Info</h1>
                <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('update_profile_setting') }} " role="form">
                    <div class="form-group">
                        <label  class="col-lg-2 control-label">Name</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="f-name" value="{{ $profile? ($profile->name? $profile->name: '') : old('name') }}" name="name" placeholder=" ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" value="{{ $profile? ($profile->email? $profile->email: '') : old('email') }}" name="email" id="email" placeholder=" ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-lg-2 control-label">Username</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="username" value="{{ $profile? ($profile->username? $profile->username: '') : old('username') }}" id="username" placeholder=" ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-lg-2 control-label">Mobile</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="number" value="{{ $profile? ($profile->number? $profile->number: '') : old('number') }}" id="mobile" placeholder=" ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-lg-2 control-label">Change Avatar</label>
                        <div class="col-lg-6">
                            <input type="file" name="image" class="file-pos" id="exampleInputFile">
                        </div>
                    </div>
                    <div class="form-group">
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-default">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <section>
            <div class="panel panel-primary">
                <div class="panel-heading"> Sets New Password</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="{{ route('update_profile_password') }}" role="form">
                        <div class="form-group">
                            <label  class="col-lg-2 control-label">Current Password</label>
                            <div class="col-lg-6">
                                <input type="password" name="old_password" class="form-control" id="c-pwd" placeholder=" ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-lg-2 control-label">New Password</label>
                            <div class="col-lg-6">
                                <input type="password" name="password"  class="form-control" id="n-pwd" placeholder=" ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-lg-2 control-label">Re-type New Password</label>
                            <div class="col-lg-6">
                                <input type="password" name="password_confirmation" class="form-control" id="rt-pwd" placeholder=" ">
                            </div>
                        </div>
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button type="submit" class="btn btn-info">Save</button>
                                <button type="button" class="btn btn-default">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </aside>
</div>
@endsection