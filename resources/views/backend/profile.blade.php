@extends('layouts.admin')
@section('content')
<?php $user = Auth::user(); ?>
<div class="row">
    <aside class="profile-nav col-lg-3">
        <section class="panel">
            <div class="user-heading round">
                <a href="#">
                    <img src="{{ $user->image?asset('images/profile/'.$user->image):asset('images/logo/givitec.png') }}" alt="">
                </a>
                <h1>{{ $user->name }}</h1>
                <p>{{ $user->email }}</p>
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
            Personal Profile
            </div>
            <div class="panel-body bio-graph-info">
                <h1>Bio Data</h1>
                <div class="row">
                    <div class="bio-row">
                        <p><span>Name </span>: {{ $user->name }}</p>
                    </div>
                    <div class="bio-row">
                        <p><span>Username </span>: {{ $user->username }}</p>
                    </div>
                    <div class="bio-row">
                        <p><span>Role </span>: {{ $user->role }}</p>
                    </div>
                    <div class="bio-row">
                        <p><span>Email </span>: {{ $user->email }}</p>
                    </div>
                    <div class="bio-row">
                        <p><span>Mobile </span>: {{ $user->number }}</p>
                    </div>
                </div>
            </div>
        </section>
    </aside>
</div>
@endsection