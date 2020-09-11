<!DOCTYPE html>
<html lang="zxx" class="js">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="{{$basic->sitename}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{$basic->sitename}} Crypto currency trading system."><!-- Fav Icon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}"><!-- Site Title  -->
    <title>{{isset($page_title) ? $page_title : ''}} | {{$basic->sitename}} </title><!-- Vendor Bundle CSS -->
    <link rel="stylesheet" href="{{asset('dash-assets/css/vendor.bundle-62688.css')}}">
    <link href="{{asset('front-assets/css/jquery.growl.css')}}" rel="stylesheet" />
    <script src="{{asset('process/countries.js')}}"></script>
<!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{asset('dash-assets/css')}}/{{$basic->theme}}" id="layoutstyle">
  </head>



<body class="page-user toastr-info">
  <div class="topbar-wrap">
    <div class="topbar is-sticky">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <ul class="topbar-nav d-lg-none">
            <li class="topbar-nav-item relative">
              <a class="toggle-nav" href="#">
                <div class="toggle-icon">
                  <span class="toggle-line"></span>
                  <span class="toggle-line"></span>
                  <span class="toggle-line"></span>
                  <span class="toggle-line"></span>
                </div>
              </a>
            </li><!-- .topbar-nav-item -->
          </ul><!-- .topbar-nav -->
          <a class="topbar-logo" href="{{url('/')}}">
            <img src="{{asset('assets/images/favicon.png')}}" srcset="{{asset('assets/images/favicon.png')}}" alt="logo">
          </a>
          <ul class="topbar-nav">
            <li class="topbar-nav-item relative">
              <span class="user-welcome d-none d-lg-inline-block">Welcome! {{Auth::guard('admin')->user()->username}}</span>
              <a class="toggle-tigger user-thumb" href="#">
                <em class="ti ti-user"></em>
              </a>
              <div class="toggle-class dropdown-content dropdown-content-right dropdown-arrow-right user-dropdown">
                <div class="user-status">
                  <h6 class="user-status-title">Username</h6>
                  <div class="user-status-balance">{{Auth::guard('admin')->user()->username}}  </div>
                </div>
                <ul class="user-links">
                  <li>
                    <a href="{{route('admin.profile')}}">
                      <i class="ti ti-id-badge"></i>Admin Profile
                    </a>
                  </li>  
                </ul>
                <ul class="user-links bg-light">
                  <li>
                    <a href="{{route('admin.logout')}}">
                      <i class="ti ti-power-off"></i>Logout
                    </a>
                  </li>
                </ul>
              </div>
            </li><!-- .topbar-nav-item -->
          </ul><!-- .topbar-nav -->
        </div>
      </div><!-- .container -->
    </div><!-- .topbar -->
    <div class="navbar">
      <div class="container">
        <div class="navbar-innr">
          <ul class="navbar-menu">
          <li>
              <a href="{{route('admin.dashboard')}}">
                <em class="text-primary ti ti-dashboard"></em>&nbsp;  
                Dashboard
              </a>
            </li>
            <?php $user = Illuminate\Support\Facades\Auth::guard('admin')->user(); ?>

            @if($user->deposit == 1)
            <li class="has-dropdown page-links-all">
              <a class="drop-toggle" href="#"><em class="text-primary ti ti-wallet"></em>&nbsp;  Jobs</a>
              <ul class="navbar-dropdown">
              <!-- </li> -->
                <li>
                  <a href="{{route('deposits')}}">Processed Deposits</a>
                </li>
                <li>
                  <a href="{{route('deposits.declined')}}">Declined Deposits </a>
                </li>
              </ul>
            </li>
            @endif

            @if($user->sales == 1)
            <li class="has-dropdown page-links-all">
              <a class="drop-toggle" href="#">
                <em class="text-primary fa fa-sitemap"></em>&nbsp;  Application
              </a>
              <ul class="navbar-dropdown">
                <li>
                  <a href="{{route('manage.level')}}">Manage Matrix Level</a>
                </li>
                <li>
                  <a href="{{route('manage.plans')}}">Manage Matrix Plans  </a>
                </li>
              </ul>
            </li>
            @endif

            @if($basic->merchant == 1 && $user->sales == 1)
            <li class="has-dropdown page-links-all">
              <a class="drop-toggle" href="#"><em class="text-primary ti ti-gift"></em>&nbsp; Merchant</a>
              <ul class="navbar-dropdown">
                @if($basic->television == 1)
                <li class="has-dropdown">
                  <a class="drop-toggle" href="#">Cable TV</a>
                  <ul class="navbar-dropdown">
                    <li>
                      <a href="{{route('admin.cabletv')}}">Manage Bouquet</a>
                    </li>
                    <li>
                      <a href="{{route('admin.cabletvplantrx')}}">View Sales  </a>
                    </li>
                  </ul>
                </li>
                @endif
                @if($basic->electric == 1)
                <li class="has-dropdown">
                  <a class="drop-toggle" href="#">Electricity Bills</a>
                    <ul class="navbar-dropdown">
                      <li><a href="{{route('admin.power')}}">Manage Services</a></li>
                      <li><a href="{{route('admin.powersales')}}">View Sales</a></li> 
                    </ul>
                </li>
                @endif
              </ul>
            </li>
            @endif

            @php
              $count = \App\Verification::whereStatus(0)->count();
            @endphp

            @if($user->createuser == 1 || $user->viewuser == 1 || $user->kyc == 1)
            <li class="has-dropdown page-links-all">
              <a class="drop-toggle" href="#"><em class="text-primary ti ti-user"></em>&nbsp; Users</a>
              <ul class="navbar-dropdown">
                @if($user->viewuser == 1)
                <li class=" "><a class=" " href="{{route('users')}}">Active Customers </a></li>
                <li class=" "><a class=" " href="{{route('user.ban')}}">Inactive Inactive Customers</a></li>
                @endif
                @if($user->createuser == 1)
                <li class=" "><a class=" " href="{{route('createadmin')}}">Create Admin</a></li>
                @endif

                @if($user->kyc == 1)
                <li class=" ">
                  <a class=" " href="{{route('admin.kyc')}}">Profiles
                  @if($count > 0)
                    ({{$count}} New)
                  @endif
                  </a>
                </li>
                @endif
              </ul>
            </li>
            @endif

            @if($user->message == 1)
            <li class="has-dropdown page-links-all">
              <a class="drop-toggle" href="#"><em class="text-primary ti ti-comments"></em>&nbsp;  Message</a>
              <ul class="navbar-dropdown">
                <li class=" "><a class="" href="{{route('user.notification')}}">Create News</a></li>
                <li class=" "><a class="" href="{{route('user.tickets')}}">Customers' Request</a></li>
                <li><a href="{{route('admin.testi')}}">Customers' Testimonial</a></li>
              </ul>
            </li>
            @endif


            @if($user->settings == 1 || $user->frontend == 1)
            <li class="has-dropdown page-links-all">
              <a class="drop-toggle" href="#"><em class="text-primary ti ti-settings"></em>&nbsp;  Settings</a>
              <ul class="navbar-dropdown">
              <!-- </li> -->
                @if($user->settings == 1)
                <li class=" "><a class="" href="{{route('admin.GenSetting')}}">System Settings</a></li>
                <li class="has-dropdown">
                  <a class="drop-toggle" href="#">Giftcards</a>
                  <ul class="navbar-dropdown">
                    <li><a href="{{route('giftcard.index')}}">Manage Giftcards</a></li>
                    <li><a href="{{route('giftcard.type')}}">Manage Giftcard Types</a></li>
                  </ul>
                </li>
                <li class=" "><a class="" href="{{route('merchantapi')}}">Merchant Settings </a></li>
                <li class=" "><a class="" href="{{route('email.template')}}">Email & SMS Settings</a></li>
                <li class=" "><a class="" href="{{route('gateway')}}">Payment Gateway</a></li>
                <li class=" "><a class="" href="{{route('admin.bank')}}">Bank Account Settings</a></li>
                @endif
                @if($user->frontend == 1)
                <li class="has-dropdown page-links-all">
                  <a class="drop-toggle" href="#">Frontend Settings</a>
                  <ul class="navbar-dropdown">
                    <li><a href="{{route('admin.about')}}">About Us</a></li>
                    <li><a href="{{route('faqs-all')}}">FAQs</a></li>
                    <li><a href="{{route('admin.header')}}">Home Header</a></li>
                    <li><a href="{{route('admin.hows')}}">How it Works</a></li>
                    <li><a href="{{route('admin.privacy')}}">Privacy & Policies</a></li>
                    <li><a href="{{route('admin.vmg')}}">Vision & Mission<span class="badge badge-warning">New</span></a></li>
                  </ul>
                </li>
                @endif
              </ul>
            </li>
            @endif
        </div><!-- .navbar-innr -->
      </div><!-- .container -->
    </div><!-- .navbar -->
  </div><!-- .topbar-wrap -->


  @yield('body')





  <div class="footer-bar">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-8">
          <ul class="footer-links"></ul>
        </div><!-- .col -->
        <div class="col-md-4 mt-2 mt-sm-0">
          <div class="d-flex justify-content-between justify-content-md-end align-items-center guttar-25px pdt-0-5x pdb-0-5x">
            <div class="copyright-text">&copy; {{date('Y')}}{{$basic->sitename}}.</div>
            <div class="lang-switch relative">
              <a href="#" class="lang-switch-btn toggle-tigger">En <em class="ti ti-angle-up"></em></a>
              <div class="toggle-class dropdown-content dropdown-content-up">
                <ul class="lang-list">
                  <li><a href="#">Fr</a></li>
                  <li><a href="#">Bn</a></li>
                  <li><a href="#">Lt</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div><!-- .col -->
      </div><!-- .row -->
    </div><!-- .container -->
  </div><!-- .footer-bar -->
  <!-- JavaScript (include all script here) -->
  <script src="{{asset('dash-assets/js/jquery.bundle.js?ver=104')}}"></script><script src="{{asset('dash-assets/js/script.js?ver=104')}}"></script>
  <script src="{{asset('front-assets/js/rainbow.js')}}"></script>
	<script src="{{asset('front-assets/js/sample.js')}}"></script>
	<script src="{{asset('front-assets/js/jquery.growl.js')}}"></script>
	<script src="{{asset('front-assets/js/script2.js')}}"></script>
    @yield('js')
    @if (session('alert'))
    <script>
    !function(t){"use strict";
    var c=t(".toastr-info");c.length>0&&c.ready(function(){toastr.clear(),toastr.options={closeButton:!0,debug:!1,newestOnTop:!0,progressBar:!1,positionClass:"toast-top-right",preventDuplicates:!0,showDuration:"1000",hideDuration:"10000",timeOut:"9000",extendedTimeOut:"1000"},toastr.error('<em class="ti ti-na toast-message-icon"></em> {{ session('alert') }}')});
    }(jQuery);
    </script>
    @endif
    @if(Session::has('success'))
    <script>
    !function(t){"use strict";
    var c=t(".toastr-info");c.length>0&&c.ready(function(){toastr.clear(),toastr.options={closeButton:!0,debug:!1,newestOnTop:!0,progressBar:!1,positionClass:"toast-top-right",preventDuplicates:!0,showDuration:"1000",hideDuration:"10000",timeOut:"9000",extendedTimeOut:"1000"},toastr.success('<em class="ti ti-check toast-message-icon"></em> {{ Session::get('success') }}')});
    }(jQuery);
    </script>

      @endif

    @if (session('message'))
      <script>
    !function(t){"use strict";
    var c=t(".toastr-info");c.length>0&&c.ready(function(){toastr.clear(),toastr.options={closeButton:!0,debug:!1,newestOnTop:!0,progressBar:!1,positionClass:"toast-top-right",preventDuplicates:!0,showDuration:"1000",hideDuration:"10000",timeOut:"9000",extendedTimeOut:"1000"},toastr.success('<em class="ti ti-check toast-message-icon"></em> {{ session('message') }}')});
    }(jQuery);
    </script>
    @endif
    @if(Session::has('danger'))
    <script>
    !function(t){"use strict";
    var c=t(".toastr-info");c.length>0&&c.ready(function(){toastr.clear(),toastr.options={closeButton:!0,debug:!1,newestOnTop:!0,progressBar:!1,positionClass:"toast-top-right",preventDuplicates:!0,showDuration:"1000",hideDuration:"10000",timeOut:"9000",extendedTimeOut:"1000"},toastr.error('<em class="ti ti-na toast-message-icon"></em> {{ session('danger') }}')});
    }(jQuery);
    </script>
    @endif

    @if ($errors->has('fname'))

      <script>
    !function(t){"use strict";
    var c=t(".toastr-info");c.length>0&&c.ready(function(){toastr.clear(),toastr.options={closeButton:!0,debug:!1,newestOnTop:!0,progressBar:!1,positionClass:"toast-top-right",preventDuplicates:!0,showDuration:"1000",hideDuration:"10000",timeOut:"9000",extendedTimeOut:"1000"},toastr.error('<em class="ti ti-na toast-message-icon"></em> {{ $errors->first('fname') }}')});
    }(jQuery);
    </script>
    @endif

    @if ($errors->has('lname'))
    <script>
    !function(t){"use strict";
    var c=t(".toastr-info");c.length>0&&c.ready(function(){toastr.clear(),toastr.options={closeButton:!0,debug:!1,newestOnTop:!0,progressBar:!1,positionClass:"toast-top-right",preventDuplicates:!0,showDuration:"1000",hideDuration:"10000",timeOut:"9000",extendedTimeOut:"1000"},toastr.error('<em class="ti ti-na toast-message-icon"></em> {{ $errors->first('lname') }}')});
    }(jQuery);
    </script>
    @endif
    @if ($errors->has('username'))
    <script>
    !function(t){"use strict";
    var c=t(".toastr-info");c.length>0&&c.ready(function(){toastr.clear(),toastr.options={closeButton:!0,debug:!1,newestOnTop:!0,progressBar:!1,positionClass:"toast-top-right",preventDuplicates:!0,showDuration:"1000",hideDuration:"10000",timeOut:"9000",extendedTimeOut:"1000"},toastr.error('<em class="ti ti-na toast-message-icon"></em> {{ $errors->first('username') }}')});
    }(jQuery);
    </script>
    @endif
    @if ($errors->has('phone'))
    <script>
    !function(t){"use strict";
    var c=t(".toastr-info");c.length>0&&c.ready(function(){toastr.clear(),toastr.options={closeButton:!0,debug:!1,newestOnTop:!0,progressBar:!1,positionClass:"toast-top-right",preventDuplicates:!0,showDuration:"1000",hideDuration:"10000",timeOut:"9000",extendedTimeOut:"1000"},toastr.error('<em class="ti ti-na toast-message-icon"></em> {{ $errors->first('phone') }}')});
    }(jQuery);
    </script>
    @endif
    @if ($errors->has('email'))
    <script>
    !function(t){"use strict";
    var c=t(".toastr-info");c.length>0&&c.ready(function(){toastr.clear(),toastr.options={closeButton:!0,debug:!1,newestOnTop:!0,progressBar:!1,positionClass:"toast-top-right",preventDuplicates:!0,showDuration:"1000",hideDuration:"10000",timeOut:"9000",extendedTimeOut:"1000"},toastr.error('<em class="ti ti-na toast-message-icon"></em> {{ $errors->first('email') }}')});
    }(jQuery);
    </script>
    @endif
    @if ($errors->has('password'))
    <script>
    !function(t){"use strict";
    var c=t(".toastr-info");c.length>0&&c.ready(function(){toastr.clear(),toastr.options={closeButton:!0,debug:!1,newestOnTop:!0,progressBar:!1,positionClass:"toast-top-right",preventDuplicates:!0,showDuration:"1000",hideDuration:"10000",timeOut:"9000",extendedTimeOut:"1000"},toastr.error('<em class="ti ti-na toast-message-icon"></em> {{ $errors->first('password') }}')});
    }(jQuery);
    </script>
    @endif
    @if ($errors->has('currency'))
    <script>
    !function(t){"use strict";
    var c=t(".toastr-info");c.length>0&&c.ready(function(){toastr.clear(),toastr.options={closeButton:!0,debug:!1,newestOnTop:!0,progressBar:!1,positionClass:"toast-top-right",preventDuplicates:!0,showDuration:"1000",hideDuration:"10000",timeOut:"9000",extendedTimeOut:"1000"},toastr.error('<em class="ti ti-na toast-message-icon"></em> {{ $errors->first('country') }}')});
    }(jQuery);
    </script>
    @endif
    @if ($errors->has('address'))
    <script>
    !function(t){"use strict";
    var c=t(".toastr-info");c.length>0&&c.ready(function(){toastr.clear(),toastr.options={closeButton:!0,debug:!1,newestOnTop:!0,progressBar:!1,positionClass:"toast-top-right",preventDuplicates:!0,showDuration:"1000",hideDuration:"10000",timeOut:"9000",extendedTimeOut:"1000"},toastr.error('<em class="ti ti-na toast-message-icon"></em> {{ $errors->first('address') }}')});
    }(jQuery);
    </script>
    @endif
    @if ($errors->has('zip_code'))
    <script>
    !function(t){"use strict";
    var c=t(".toastr-info");c.length>0&&c.ready(function(){toastr.clear(),toastr.options={closeButton:!0,debug:!1,newestOnTop:!0,progressBar:!1,positionClass:"toast-top-right",preventDuplicates:!0,showDuration:"1000",hideDuration:"10000",timeOut:"9000",extendedTimeOut:"1000"},toastr.error('<em class="ti ti-na toast-message-icon"></em> {{ $errors->first('zip_code') }}')});
    }(jQuery);
    </script>
    @endif
    @if ($errors->has('current_password'))
    <script>
    !function(t){"use strict";
    var c=t(".toastr-info");c.length>0&&c.ready(function(){toastr.clear(),toastr.options={closeButton:!0,debug:!1,newestOnTop:!0,progressBar:!1,positionClass:"toast-top-right",preventDuplicates:!0,showDuration:"1000",hideDuration:"10000",timeOut:"9000",extendedTimeOut:"1000"},toastr.error('<em class="ti ti-na toast-message-icon"></em> {{ $errors->first('currenct_password') }}')});
    }(jQuery);
    </script>
    @endif
    @if ($errors->has('password_confirmation'))
    <script>
    !function(t){"use strict";
    var c=t(".toastr-info");c.length>0&&c.ready(function(){toastr.clear(),toastr.options={closeButton:!0,debug:!1,newestOnTop:!0,progressBar:!1,positionClass:"toast-top-right",preventDuplicates:!0,showDuration:"1000",hideDuration:"10000",timeOut:"9000",extendedTimeOut:"1000"},toastr.error('<em class="ti ti-na toast-message-icon"></em> {{ $errors->first('password_confrimation') }}')});
    }(jQuery);
    </script>
    @endif
    @if ($errors->has('city'))
    <script>
    !function(t){"use strict";
    var c=t(".toastr-info");c.length>0&&c.ready(function(){toastr.clear(),toastr.options={closeButton:!0,debug:!1,newestOnTop:!0,progressBar:!1,positionClass:"toast-top-right",preventDuplicates:!0,showDuration:"1000",hideDuration:"10000",timeOut:"9000",extendedTimeOut:"1000"},toastr.error('<em class="ti ti-na toast-message-icon"></em> {{ $errors->first('city') }}')});
    }(jQuery);
    </script>
    @endif
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <script>
    !function(t){"use strict";
    var c=t(".toastr-info");c.length>0&&c.ready(function(){toastr.clear(),toastr.options={closeButton:!0,debug:!1,newestOnTop:!0,progressBar:!1,positionClass:"toast-top-right",preventDuplicates:!0,showDuration:"1000",hideDuration:"10000",timeOut:"9000",extendedTimeOut:"1000"},toastr.error('<em class="ti ti-na toast-message-icon"></em> {{ $error }}')});
    }(jQuery);
    </script>

        @endforeach

    @endif

  </body>
</html>
