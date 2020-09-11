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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('front-assets/css/vendor/bootstrap.min.css')}}">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{asset('front-assets/css/vendor/fontawesome-all.min.css')}}">

    <!-- Slick slider CSS -->
    <link rel="stylesheet" href="{{asset('front-assets/css/plugins/slick.min.css')}}">

    <!-- justify CSS -->
    <link rel="stylesheet" href="{{asset('front-assets/css/plugins/justify.css')}}">

    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="{{asset('front-assets/css/plugins/swiper.min.css')}}">

    <!-- Odomete CSS -->
    <link rel="stylesheet" href="{{asset('front-assets/css/plugins/odometer.min.css')}}">

    <!-- animate-text CSS -->
    <link rel="stylesheet" href="{{asset('front-assets/css/plugins/animate-text.css')}}">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('front-assets/css/plugins/animate.min.css')}}">

    <!-- Light gallery CSS -->
    <link rel="stylesheet" href="{{asset('front-assets/css/plugins/lightgallery.min.css')}}">



    <link rel="stylesheet" href="{{asset('front-assets/css/revolution/rs6.css')}}">



        <link rel="stylesheet" href="{{asset('front-assets/css/vendor/vendor.min.css')}}">
        <link rel="stylesheet" href="{{asset('front-assets/css/plugins/plugins.min.css')}}">


    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('front-assets/css/style.css')}}">

</head>

<body>


    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>







    <!--====================  header area ====================-->
    <div class="header-area header-sticky header-area--absolute">
        <div class="container-fluid container-fluid--cp-150">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header position-relative">
                        <!-- brand logo -->
                        <div class="header__logo">
                            <a href="{{url('/')}}">
                                <img src="{{asset('assets/images/favicon.png')}}" style="width:50px;height:50px;" class="img-fluid light-logo" alt="Saas">
                                <img src="{{asset('assets/images/favicon.png')}}"  style="width:50px;height:50px;"  class="img-fluid dark-logo" alt="Saas">
                            </a>
                        </div>
                        <!-- navigation menu -->
                        <div class="header__navigation d-none d-xl-block">
                            <nav class="navigation-menu navigation-menu--onepage navigation-menu--text_white">
                                <ul>
                                    <li><a href="{{url('/')}}"><span>HOME</span></a></li>
                                    <li><a href="{{url('/about')}}"><span>ABOUT</span></a></li>
                                    <li><a href="{{url('/jobs')}}"><span>JOBS</span></a></li>
                                    <li><a href="{{url('/register')}}"><span>REGISTER</span></a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- header actions -->
                        <div class="header__actions">
                            <div class="header__icons-wrapper" id="hidden-icon-wrapper">
                                  @if(Auth::user())
                             <div class="header-button button--white">
                                    <a href="{{route('home')}}" class="btn btn--white">Dashboard</a>
                                </div>
                            @else

                                <div class="header-button button--white">
                                    <a href="{{route('login')}}" class="btn btn--white">Login</a>
                                </div>
                            @endif
                            </div>
                            <!-- mobile menu -->

                            <!-- hidden icons menu -->
                            <div class="hidden-icons-menu d-block d-md-none">
                            @if(Auth::user())
                             <div class="header-button button--white">
                                    <a href="{{route('home')}}" class="btn btn--white">Dashboard</a>
                                </div>
                            @else

                                <div class="header-button button--white">
                                    <a href="{{route('login')}}" class="btn btn--white">Login</a>
                                </div>
                            @endif
                            </div>
                            <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger">
                                <i></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of header area  ====================-->



@yield('content')





    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fal fa-long-arrow-up"></i>
        <i class="arrow-bottom fal fa-long-arrow-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->




















    <!--====================  search overlay ====================-->
    <div class="search-overlay" id="search-overlay">
        <div class="search-overlay__inner">
            <div class="search-overlay__header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-8">
                            <!-- logo -->
                            <div class="logo">
                                <a href="/">
                                    <img src="assets/images/favion.png" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-4">
                            <!-- search content -->
                            <div class="search-content text-right">
                                <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search-overlay__body">
                <div class="search-overlay__form">
                    <form action="#">
                        <input type="text" placeholder="Enter search keyword...">
                        <button type="submit"><i class="far fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of search overlay  ====================-->

<!--====================  mobile menu overlay ====================-->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay">
        <div class="mobile-menu-overlay__inner">
            <div class="mobile-menu-overlay__header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-8">
                            <!-- logo -->
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{asset('assets/images/favicon.png')}}" style="width:50px;height:50px;" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-4">
                            <!-- mobile menu content -->
                            <div class="mobile-menu-content text-right">
                                <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-overlay__body">
                <nav class="offcanvas-navigation offcanvas-navigation--onepage">
                    <ul>
                        <li><a href="{{url('/')}}"><span>HOME</span></a></li>
                                    <li><a href="{{url('/about')}}"><span>ABOUT</span></a></li>
                                    <li><a href="{{url('/jobs')}}"><span>JOBS</span></a></li>
                                    <li><a href="{{url('/register')}}"><span>REGISTER</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!--====================  End of mobile menu overlay  ====================-->

    <!--====================  footer area ====================-->
    <div class="footer-area-wrapper reveal-footer">

        <div class="footer-copyright-area border-top section-space--ptb_30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center text-md-left">
                        <span class="copyright-text">© {{Date('Y')}} {{$basic->sitename}} All Rights Reserved. Powered By <a href="https://www.givitec.com">Givitec Ltd</a></span>
                    </div>
                    <div class="col-md-6 text-center text-md-right">
                        <ul class="list ht-social-networks solid-rounded-icon">
                            <li class="item">
                                <a href="#" target="_blank" class="social-link"> <i class="fab fa-facebook social-link-icon"></i> </a>
                            </li>
                            <li class="item">
                                <a href="#" target="_blank" class="social-link"> <i class="fab fa-twitter social-link-icon"></i> </a>
                            </li>
                            <li class="item">
                                <a href="#" target="_blank" class="social-link"> <i class="fab fa-instagram social-link-icon"></i> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of footer area  ====================-->












     <!-- JS
    ============================================ -->
    <!--
     Modernizer JS
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>-->

    <!-- jQuery JS -->
    <script src="{{asset('front-assets/js/vendor/jquery-3.3.1.min.js')}}"></script>

    <!-- Bootstrap JS -->
    <script src="{{asset('front-assets/js/vendor/bootstrap.min.js')}}"></script>

    <!-- Popper JS -->
    <script src="{{asset('front-assets/js/vendor/popper.min.js')}}"></script>

    <!-- Swiper Slider JS -->
    <script src="{{asset('front-assets/js/plugins/swiper.min.js')}}"></script>

    <!-- Tippy JS -->
    <script src="{{asset('front-assets/js/plugins/tippy.min.js')}}"></script>

    <!-- Light gallery JS -->
    <script src="{{asset('front-assets/js/plugins/lightgallery.min.js')}}"></script>

    <!-- Light gallery video JS -->
    <script src="{{asset('front-assets/js/plugins/lg-video.min.js')}}"></script>

    <!-- Waypoints JS -->
    <script src="{{asset('front-assets/js/plugins/waypoints.min.js')}}"></script>

    <!-- Counter down JS -->
    <script src="{{asset('front-assets/js/plugins/countdown.min.js')}}"></script>

    <!-- Counter down JS -->
    <script src="{{asset('front-assets/js/plugins/odometer.min.js')}}"></script>

    <!-- Isotope JS -->
    <script src="{{asset('front-assets/js/plugins/isotope.min.js')}}"></script>

    <!-- Masonry JS -->
    <script src="{{asset('front-assets/js/plugins/masonry.min.js')}}"></script>

    <!-- ImagesLoaded JS -->
    <script src="{{asset('front-assets/js/plugins/images-loaded.min.js')}}"></script>

    <!-- Appear JS -->
    <script src="{{asset('front-assets/js/plugins/appear.min.js')}}"></script>

    <!-- TweenMax JS -->
    <script src="{{asset('front-assets/js/plugins/TweenMax.min.js')}}"></script>

    <!-- Wavify JS -->
    <script src="{{asset('front-assets/js/plugins/wavify.js')}}"></script>

    <!-- jQuery Wavify JS -->
    <script src="{{asset('front-assets/js/plugins/jquery.wavify.js')}}"></script>

    <!-- circle progress JS -->
    <script src="{{asset('front-assets/js/plugins/circle-progress.min.js')}}"></script>

    <!-- counterup JS -->
    <script src="{{asset('front-assets/js/plugins/counterup.min.js')}}"></script>

    <!-- instafeed JS -->
    <script src="{{asset('front-assets/js/plugins/instafeed.min.js')}}"></script>

    <!-- wow JS -->
    <script src="{{asset('front-assets/js/plugins/wow.min.js')}}"></script>

    <!-- time circles JS -->
    <script src="{{asset('front-assets/js/plugins/time-circles.js')}}"></script>

    <!-- animation text JS -->
    <script src="{{asset('front-assets/js/plugins/animation-text.min.js')}}"></script>

    <!-- one page nav JS -->
    <script src="{{asset('front-assets/js/plugins/one-page-nav.min.js')}}"></script>

    <!-- Mailchimp JS -->
    <script src="{{asset('front-assets/js/plugins/mailchimp-ajax-submit.min.js')}}"></script>

    <!-- test JS -->
    <script src="{{asset('front-assets/js/plugins/test.js')}}"></script>




    <!-- Revolution JS -->
    <script src="{{asset('front-assets/js/revolution/revolution.tools.min.js')}}"></script>
    <script src="{{asset('front-assets/js/revolution/rs6.min.js')}}"></script>
    <script src="{{asset('front-assets/js/revolution.js')}}"></script>

    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

    <!--
    <script src="assets/js/plugins/plugins.min.js"></script>
    -->

    <!-- Main JS -->
    <script src="{{asset('front-assets/js/main.js')}}"></script>
          <script src="{{asset('front-assets/js/rainbow.js')}}"></script>
	<script src="{{asset('front-assets/js/sample.js')}}"></script>
	<script src="{{asset('front-assets/js/jquery.growl.js')}}"></script>



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
