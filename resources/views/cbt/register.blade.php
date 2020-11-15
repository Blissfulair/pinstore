
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

<body class="nk-body npc-crypto ui-clean pg-auth">
    <!-- app body @s -->
    <div class="nk-app-root">
        <div class="nk-split nk-split-page nk-split-md">
            <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                    <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                </div>
                <div class="nk-block nk-block-middle nk-auth-body">
                    <div class="brand-logo pb-5">
                        <a href="/" class="logo-link">
                            <img class="{{asset('assets/images/favicon.png')}}" width="50" src="{{asset('assets/images/favicon.png')}}" srcset="{{asset('assets/images/favicon.png')}} 2x" alt="logo">
                               </a>
                    </div>
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">Create CBT Account</h5>
                            <div class="nk-block-des">
                                <p>Fill the form below to create a new {{$basic->sitename}} account.</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->


                    <form action="{{ route('cbt.registerSave') }}" method="post" class="form" novalidate="">
                    @csrf
                         <div class="form-group">
                            <div class="form-label-group">
                                <label class="form-label" for="default-01">Username</label>

                            </div>
                            <input type="text" name="username" value="{{ old('username') }}"  class="form-control form-control-lg" id="default-01" placeholder="Enter your username">
                        </div><!-- .foem-group -->
                        <div class="form-group">
                            <div class="form-label-group">
                                <label class="form-label" for="default-01">Email</label>

                            </div>
                            <input  type="email" name="email" value="{{ old('email') }}"  class="form-control form-control-lg" id="default-01" placeholder="Enter your email">
                        </div><!-- .foem-group -->

                           <div class="form-group">
                            <div class="form-label-group">
                                <label class="form-label" for="default-01">Phone Number</label>

                            </div>
                            <input  type="number" name="phone" value="{{ old('phone') }}"   class="form-control form-control-lg" id="default-01" placeholder="Enter your username">
                        </div><!-- .foem-group -->

                        <div class="form-group">
                            <div class="form-label-group">
                                <label class="form-label" for="password">Password</label>

                            </div>
                            <div class="form-control-wrap">
                                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                </a>
                                <input type="password" name="password"   class="form-control form-control-lg" id="password" placeholder="Enter your passcode">
                            </div>
                        </div><!-- .foem-group -->
                        <div class="form-group">
                            <div class="form-label-group">
                                <label class="form-label" for="password_confirmation">Confirm Password</label>

                            </div>
                            <div class="form-control-wrap">
                                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password_confirmation">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                </a>
                                <input type="password" name="password_confirmation"  class="form-control form-control-lg" id="password_confirmation" placeholder="Enter your passcode">
                            </div>
                        </div><!-- .foem-group -->


                        <div class="form-group">
                            <button class="btn btn-lg btn-primary btn-block">Create CBT Account</button>
                        </div>
                    </form><!-- form -->

                    <div class="text-center pt-4 pb-3">
                        <h6 class="overline-title overline-title-sap"><span>Have an Account?</span></h6>
                    </div>
                    <ul class="nav justify-center gx-4">
                        <li class="nav-item"><a class="nav-link" href="{{ route('cbt.login') }}">Login</a></li>
                    </ul>

                </div><!-- .nk-block -->
                <div class="nk-block nk-auth-footer">
                    <div class="nk-block-between">
                        <ul class="nav nav-sm">
                            <li class="nav-item">
                                <a class="nav-link" href="#">&copy; {{date('Y')}}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">{{$basic->sitename}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.givitec.com"> All Rights Reserved. Powered By Givitec Ltd</a>
                            </li>

                        </ul><!-- .nav -->
                    </div>
                    <div class="mt-3">

                    </div>
                </div><!-- .nk-block -->
            </div><!-- .nk-split-content -->
            <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                    <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>

                        <div class="slider-item">
                            <div class="nk-feature nk-feature-center">
                                <div class="nk-feature-img">
                                    <img class="round" src="{{asset('core-img/shopping-checkout.png')}}" srcset="{{asset('core-img/shopping-checkout.png')}} 2x" alt="">
                                </div>
                                <div class="nk-feature-content py-4 p-sm-5">
                                    <h4>{{$basic->sitename}}</h4>
                                    <p>You are a step closer to your dream job.</p>
                                </div>
                            </div>
                        </div><!-- .slider-item -->
                    </div><!-- .slider-init -->
                    <div class="slider-dots"></div>
                    <div class="slider-arrows"></div>
                </div><!-- .slider-wrap -->
            </div><!-- .nk-split-content -->
        </div><!-- .nk-split -->
    </div><!-- app body @e -->
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
