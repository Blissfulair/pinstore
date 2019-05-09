@extends('layouts.guest')
@section('title')
|| Register
@endsection
@section('content')
<form class="form-signin" method="post" action="{{ route('register') }}">
    @csrf()
    <h2 class="form-signin-heading">registration now</h2>
    <div class="login-wrap">
        <p>Enter your personal details below</p>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Fullname" autofocus>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
        <br>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
        <label class="checkbox">
            <input type="checkbox" value="agree this condition"> I agree to the Terms of Service and Privacy Policy
        </label>
        <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>

        <div class="registration">
            Already Registered.
            <a class="" href="{{ route('login') }}">
                Login
            </a>
        </div>

    </div>

</form>
@endsection
