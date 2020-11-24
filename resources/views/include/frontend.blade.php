<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{isset($page_title) ? $page_title : ''}} | {{$basic->sitename}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.png">

    <!-- CSS
        ============================================ -->


    <link rel="stylesheet" type="text/css" href="{{ asset('pinstore/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('pinstore/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('pinstore/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('pinstore/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('pinstore/css/custom.css')}}">

</head>

<body>
<div id="header-holder">
<nav id="nav" class="navbar navbar-full">
    <div class="container-fluid">
        <div class="container container-nav">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-header">
                        <button aria-expanded="false" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/"><img src="{{asset('pinstore/images/logo-1-dark.png')}}" alt="PinStore"></a>
                    </div>
                    <div style="height: 1px;" role="main" aria-expanded="false" class="navbar-collapse collapse navbar-collapse-centered" id="bs">
                        <ul class="nav navbar-nav navbar-nav-centered">
                            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="/">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/cbt">CBT Portal</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/login">Login</a></li>
                                    <li><a class="dropdown-item" href="/register">Sign Up</a></li><br>
                                    <li><a class="dropdown-item" href="#">Forgot Password</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right other-navbar">
                            <li class="nav-item">
                                <a class="nav-link btn-client-area" href="/login"><img src="{{asset('images/lock.svg')}}" alt="">My Account</a>
                                <div class="chat-info"><i class="hstb hstb-right-arrow"></i>Chat Available</div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-chat" href="#"><i class="hstb hstb-chat"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

@yield('content')




<div class="support-links container-fluid">
    <div class="row">
        <div class="col-sm-6 hylink-holder">
            <div class="hylink-box">
                <div class="icon"><img src="{{asset('pinstore/images/info.svg')}}" alt=""></div>
                <a href="#" class="link">Let’s talk</a>
                <div class="text">Chat with a live agent! Our live chat is always available to guide you.</div>
            </div>
        </div>
        <div class="col-sm-6 hylink-holder">
            <div class="hylink-box">
                <div class="icon"><img src="{{asset('pinstore/images/chat.svg')}}" alt=""></div>
                <a href="#" class="link">Go to support center</a>
                <div class="text">Do you have complaints or you want to make an inquiry? Reach us.</div>
            </div>
        </div>
    </div>
</div>
<div class="footer container-fluid">
    <a class="btn-go-top" href="#"><i class="hstb hstb-down-arrow"></i></a>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <div class="footer-menu">
                    <h4>Our Company</h4>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">News & Blog</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <div class="footer-menu">
                    <h4>Affiliate Links</h4>
                    <ul>
                        <li><a href="#">YomSMS</a></li>
                        <li><a href="#">Yomnet</a></li>
                        <li><a href="#">YomHost</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <div class="footer-menu">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <div class="footer-menu">
                    <h4>My Account</h4>
                    <ul>
                        <li><a href="/user/login">Account Login</a></li>
                        <li><a href="/user/register">Account Sign Up</a></li>
                        <li><a href="#">Forgot Password</a></li>
                    </ul>  
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="footer-menu custom-footer-menu">
                    <h4>Contact us</h4>
                    <ul class="social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                    <ul>
                    {{$basic->sitename}}
                        <?php $phones = explode(',', $basic->phone) ?>
                        @foreach($phones as $key=>$phone)
                            @if($key == 0)
                                <li>Tel: +(234) {{$phone}}</li>
                            @else
                                <li>{{$phone}}</li>
                            @endif
                                
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="row">
                <div class="col-md-6">
                    <div class="sub-footer-menu">
                        <ul>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="copyright">© Copyright 2018 Pinstore, All Rights Reserved</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/569167a171782c741ea827bb/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->












    <script src="{{asset('pinstore/js/jquery.min.js')}}"></script>
    <script src="{{asset('pinstore/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('pinstore/js/slick.min.js')}}"></script>
    <script src="{{asset('pinstore/js/main.js')}}"></script>



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


</body>

</html>
