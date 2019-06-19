@extends('layouts.guest')
@section('title')
|| Login
@endsection
@section('content')
<form class="form-signin" action="{{ route('login') }}" method="post">
        <input type="hidden" name="_token" value="{{ Session::token() }}">
    <h2 class="form-signin-heading">login</h2>
    <div class="login-wrap">
        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
        <label class="checkbox">
            <input type="checkbox" value="remember-me" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
            <span class="pull-right">
                <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

            </span>
        </label>
        <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
        <p>or you can sign in via social network</p>
        <div class="login-social-link">
            <a href="index.html" class="facebook">
                <i class="icon-facebook"></i>
                Facebook
            </a>
            <a href="index.html" class="twitter">
                <i class="icon-twitter"></i>
                Twitter
            </a>
        </div>

    </div>
</form>
<form method="POST" id='reset' action="{{ route('password.email') }}">
    @csrf

    <!-- Modal -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Forgot Password ?</h4>
                </div>
                <div class="modal-body">
                    <p>Enter your e-mail address below to reset your password.</p>
                    <input id="email" type="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required  autofocus>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->
</form>
@endsection