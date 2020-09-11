
<!DOCTYPE html>
<html lang="zxx" class="js">

<head>

    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Recharge and get paid">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}">
    <!-- Page Title  -->
    <title>{{isset($page_title) ? $page_title : ''}} | {{$basic->sitename}}</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('backend/css/')}}/{{$basic->theme2}}">
    <link rel="stylesheet" href="{{asset('backend/css/skins/theme-green.css')}}">
    <link href="{{asset('frontend/css/jquery.growl.css')}}" rel="stylesheet" />
</head>
<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center">
                             <a href=" " class="logo-link">
                            <img class="{{asset('assets/images/favicon.png')}}" width="50" src="{{asset('assets/images/favicon.png')}}" srcset="{{asset('assets/images/favicon.png')}} 2x" alt="logo">
                               </a>
                        </div>


                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">Reset password</h5>
                                        <div class="nk-block-des">
                                            <p>If you forgot your password, well, then we’ll email you instructions to reset your password.</p>
                                        </div>
                                    </div>
                                </div>
                                 <form method="POST" action="{{ route('user.password.email') }}" class="form">
                                     @csrf
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">Email</label>
                                        </div>
                                        <input type="email" name="email" class="form-control form-control-lg" id="default-01" placeholder="Enter your email address">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary btn-block">Send Reset Link</button>
                                    </div>
                                </form>
                                <div class="form-note-s2 text-center pt-4">
                                    <a href="{{ route('login') }}"><strong>Return to login</strong></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-footer nk-auth-footer-full">
                        <div class="container wide-lg">
                            <div class="row g-3">
                                <div class="col-lg-6 order-lg-last">
                                    <ul class="nav nav-sm justify-content-center justify-content-lg-end">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Terms & Condition</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Privacy Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Help</a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <div class="nk-block-content text-center text-lg-left">
                                        <p class="text-soft">&copy; {{date('Y')}} {{$basic->sitename}}. All Rights Reserved. Powered By <a href="https://www.givitec.com">Givitec Ltd</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
 <script src="{{asset('backend/js/bundle.js?ver=1.6.1')}}"></script>
 <script src="{{asset('backend/js/scripts.js?ver=1.6.1')}}"></script>
@yield('script')
    <script src="{{asset('frontend/js/rainbow.js')}}"></script>
	<script src="{{asset('frontend/js/sample.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.growl.js')}}"></script>



@yield('js')
@if (session('alert'))
	<script>
		 (function () {
		  $(function () {
		   return $.growl.error({
				message: "{{ session('alert') }}"
			});
  		  });
		}).call(this);
 	</script>
@endif


@if ($errors->has('fname'))
<script>
		 (function () {
		  $(function () {
		   return $.growl.error({
				message: "{{ $errors->first('fname') }}"
			});
  		  });
		}).call(this);
 	</script>
@endif

@if ($errors->has('lname'))
<script>
		 (function () {
		  $(function () {
		   return $.growl.error({
				message: "{{ $errors->first('lname') }}"
			});
  		  });
		}).call(this);
 	</script>
@endif
@if ($errors->has('username'))
<script>
		 (function () {
		  $(function () {
		   return $.growl.error({
				message: "{{ $errors->first('username') }}"
			});
  		  });
		}).call(this);
 	</script>
@endif
@if ($errors->has('phone'))
<script>
		 (function () {
		  $(function () {
		   return $.growl.error({
				message: "{{ $errors->first('phone') }}"
			});
  		  });
		}).call(this);
 	</script>
@endif
@if ($errors->has('email'))
<script>
		 (function () {
		  $(function () {
		   return $.growl.error({
				message: "{{ $errors->first('email') }}"
			});
  		  });
		}).call(this);
 	</script>
@endif
@if ($errors->has('password'))
<script>
		 (function () {
		  $(function () {
		   return $.growl.error({
				message: "{{ $errors->first('password') }}"
			});
  		  });
		}).call(this);
 	</script>
@endif


@if(Session::has('success'))
<script>
		 (function () {
		  $(function () {
		   return $.growl.notice({
				message: "{{ Session::get('success') }}"
			});
  		  });
		}).call(this);
 	</script>
 @endif

@if (session('message'))
<script>
		 (function () {
		  $(function () {
		   return $.growl.notice({
				message: "{{ session('message') }}"
			});
  		  });
		}).call(this);
 	</script>
 @endif
@if(Session::has('danger'))
<script>
		 (function () {
		  $(function () {
		   return $.growl.error({
				message: "{{ session('danger') }}"
			});
  		  });
		}).call(this);
 	</script>
 @endif

 @if ($errors->has('sms_code'))
<script>
		 (function () {
		  $(function () {
		   return $.growl.error({
				message: "{{ $errors->first('sms_code') }}"
			});
  		  });
		}).call(this);
 	</script>
@endif

 @if ($errors->has('email_code'))
<script>
		 (function () {
		  $(function () {
		   return $.growl.error({
				message: "{{ $errors->first('email_code') }}"
			});
  		  });
		}).call(this);
 	</script>
@endif
@if(Session::has('ref'))
<script>
 swal("Hello", "{!! session()->get('ref')  !!}", "info");
</script>
@endif
@if(Session::has('referror'))
<script>
 swal("Hello", "{!! session()->get('referror')  !!}", "error");
</script>
@endif



</body></html>
<!-- Localized -->
