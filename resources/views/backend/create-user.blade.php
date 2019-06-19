@extends('layouts.admin')
@section('title')
|| Register
@endsection
@section('content')

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Create User
            </header>
            <div class="panel-body">
                <div class="stepy-tab">
                    <ul id="default-titles" class="stepy-titles clearfix">
                        <li id="default-title-0" class="current-step">
                            <div>Step 1</div>
                        </li>
                        <li id="default-title-1" class="">
                            <div>Step 2</div>
                        </li>
                        <li id="default-title-2" class="">
                            <div>Step 3</div>
                        </li>
                    </ul>
                </div>
                <form class="form-horizontal" id="default" method="post" action="{{  $user ? route('update.user', ['id'=>$user->id]) : route('save_user') }}">
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                    <fieldset title="Step1" class="step" id="default-step-0">
                        <legend> </legend>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Full Name</label>
                            <div class="col-lg-10">
                                <input type="text" id="name" value="{{ $user? ( $user->name? $user->name: ''): old('name') }}" name="name" class="form-control" placeholder="Full Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Email Address</label>
                            <div class="col-lg-10">
                                <input type="text" value="{{ $user? ( $user->email? $user->email: ''):old('email') }}" name="email" id="email" class="form-control" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">User Name</label>
                            <div class="col-lg-10">
                                <input type="text" value="{{ $user? ( $user->username? $user->username: ''):old('username') }}" name="username"  id="username" class="form-control" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Role</label>
                            <div class="col-lg-10">
                                <select name="role" class="form-control" id="role">
                                <option value="">Select Role</option>
                                    <option {{ $user? ( $user->role == '0' ? 'selected': '' ) : '' }} value="0">Subscriber</option>
                                    <option {{ $user? ( $user->role == '1' ? 'selected': '' ) : '' }} value="1">Editor</option>
                                    <option {{ $user? ( $user->role == '2' ? 'selected': '' ) : '' }} value="2">Technical Support</option>
                                    <option {{ $user? ( $user->role == '3' ? 'selected': '' ) : '' }} value="3">Admin</option>
                                </select>
                            </div>
                        </div>

                    </fieldset>
                    <fieldset title="Step 2" class="step" id="default-step-1" >
                        <legend> </legend>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Phone</label>
                            <div class="col-lg-10">
                                <input type="text" value="{{ $user? ( $user->number? $user->number: ''):old('number') }}" name="number" id="number" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Password</label>
                            <div class="col-lg-10">
                                <input type="password" value="{{ old('password') }}" name="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Confirm Password</label>
                            <div class="col-lg-10">
                                <input type="password" value="{{ old('password_confirmation') }}" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                            </div>

                    </fieldset>
                    <fieldset title="Step 3" class="step" id="default-step-2" >
                        <legend> </legend>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Full Name</label>
                            <div class="col-lg-10">
                                <p id="name-display" class="form-control-static"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Email Address</label>
                            <div class="col-lg-10">
                                <p id="email-display" class="form-control-static"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">User Name</label>
                            <div class="col-lg-10">
                                <p id="username-display" class="form-control-static"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Phone</label>
                            <div class="col-lg-10">
                                <p id="number-display" class="form-control-static"></p>
                            </div>
                        </div>
                    </fieldset>
                    <input type="submit" class="finish btn btn-danger" value="Finish"/>
                </form>
            </div>
        </section>
    </div>
</div>
<script>
    jQuery(document).ready(function($){
        $('#name').on('blur', function(){
                $('#name-display').text($('#name').val())
        })
        $('#email').on('blur', function(){
                $('#email-display').text($('#email').val())
        })
        $('#number').on('blur', function(){
                $('#number-display').text($('#number').val())
        })
        $('#username').on('blur', function(){
                $('#username-display').text($('#username').val())
        })
    })
</script>
@endsection
