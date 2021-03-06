<!DOCTYPE html><html lang="zxx" class="js"><head><meta charset="utf-8"><meta name="author" content="Softnio"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><meta name="description" content="@@page-discription"><link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}"><title>{{isset($page_title) ? $page_title : ''}} | {{$basic->sitename}} </title><link rel="stylesheet" href="{{asset('backend/css/')}}/{{$basic->theme2}}"><link rel="stylesheet" href="{{asset('backend/css/skins/theme-green.css')}}">
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<style>
div.ex1 {
  background-color: lightblue;
  width: 110px;
  height: 110px;
  overflow: scroll;
}

div.ex2 {
  background-color: lightblue;
  width: 110px;
  height: 110px;
  overflow: hidden;
}

div.ex3 {

  overflow: auto;
}

div.ex4 {
  background-color: lightblue;
  width: 110px;
  height: 110px;
  overflow: visible;
}
</style>
<link href="{{asset('frontend/css/jquery.growl.css')}}" rel="stylesheet" />
 <script src="{{asset('process/countries.js')}}"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-91615293-4"></script><script>window.dataLayer = window.dataLayer || [];function gtag() {dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-91615293-4');</script> </head>




<body class="nk-body toastr-info npc-crypto has-sidebar has-sidebar-fat ui-clean " ><div class="nk-app-root"><div class="nk-main "><div class="nk-sidebar nk-sidebar-fat nk-sidebar-fixed" data-content="sidebarMenu"><div class="nk-sidebar-element nk-sidebar-head"><div class="nk-sidebar-brand"><a href="{{URL('/')}}" class="logo-link nk-sidebar-logo"><img class="logo-light logo-img" src="{{asset('assets/images/favicon.png')}}" srcset="{{asset('assets/images/favicon.png')}}" alt="logo"><img class="logo-dark logo-img" src="{{asset('assets/images/favicon.png')}}" srcset="{{asset('assets/images/favicon.png')}}" alt="logo-dark"> </a></div><div class="nk-menu-trigger mr-n2"><a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a></div></div><div class="nk-sidebar-element"><div class="nk-sidebar-body ex3" data-ssimplebar><div class="nk-sidebar-content"><div class="nk-sidebar-widget d-none d-xl-block"><div class="user-account-info between-center"></div>  </div><div class="nk-sidebar-widget nk-sidebar-widget-full d-xl-none pt-0"><a class="nk-profile-toggle toggle-expand" data-target="sidebarProfile" href="#"><div class="user-card-wrap"><div class="user-card"><div class="user-avatar"><span>{{substr(Auth::guard('web')->user()->fname, 0, 1)}}{{substr(Auth::guard('web')->user()->lname, 0, 1)}}</span></div><div class="user-info"><span class="lead-text">{{Auth::guard('web')->user()->username}}</span><span class="sub-text">{{Auth::guard('web')->user()->email}}</span></div><div class="user-action"><em class="icon ni ni-chevron-down"></em></div></div></div></a><div class="nk-profile-content toggle-expand-content" data-content="sidebarProfile"> <ul class="link-list"><li><a href="{{route('profile')}}"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li> <li><a href="{{route('activities')}}"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li></ul><ul class="link-list"><li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>

<em class="icon ni ni-signout"></em><span>Sign out</span></a></li></ul></div></div>



<div class="nk-sidebar-menu"><ul class="nk-menu"><li class="nk-menu-heading"><h6 class="overline-title">Menu</h6></li><li class="nk-menu-item"><a href="{{URL('/')}}" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-dashboard text-primary"></em></span><span class="nk-menu-text">Dashboard</span></a></li>
<li class="nk-menu-item has-sub">
    <a href="#" class="nk-menu-link nk-menu-toggle">
        <span class="nk-menu-icon">
        <em class="icon ni ni-wallet text-primary "></em>
        </span><span class="nk-menu-text">Fund Wallet</span>
    </a>
    <ul class="nk-menu-sub">
        <li class="nk-menu-item">
            <a href="{{ route('fund_wallet') }}" class="nk-menu-link">
                <span class="nk-menu-text">With Online Payment</span>
            </a>
        </li>
        <li class="nk-menu-item">
            <a href="{{route('directDeposit')}}" class="nk-menu-link">
                <span class="nk-menu-text">With Bank</span>
            </a>
        </li> 
    </ul>
</li>
<?php $services = App\Service::whereStatus(0)->get(); ?>
<li class="nk-menu-item has-sub">
    <a href="#" class="nk-menu-link nk-menu-toggle">
        <span class="nk-menu-icon">
        <em class="icon ni ni-list text-primary "></em>
        </span><span class="nk-menu-text">Services</span>
    </a>
    <ul class="nk-menu-sub">
        @if($services)
            @foreach($services as $service)
                <li class="nk-menu-item">
                    <a href="{{ route('user.service', ['name'=>$service->name]) }}" class="nk-menu-link">
                        <span class="nk-menu-text">{{ $service->name }}</span>
                    </a>
                </li>
            @endforeach
        @endif
    </ul>
</li>
<li class="nk-menu-item"><a href="{{ route('transaction-history')}}" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-clock text-primary"></em></span><span class="nk-menu-text">Service History</span></a></li>
<li class="nk-menu-item"><a href="{{ route('purchasedScratchcards')}}" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-cards text-primary"></em></span><span class="nk-menu-text">Purchased Scratch Cards</span></a></li>
<li class="nk-menu-item"><a href="{{ route('payment-transactions')}}" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-money text-primary"></em></span><span class="nk-menu-text">Payments</span></a></li>


<li class="nk-menu-item"><a href="{{route('profile')}}" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-user-c text-primary"></em></span><span class="nk-menu-text">My Account</span></a></li>
<li class="nk-menu-item"><a href="{{route('activities')}}" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-calendar text-primary"></em></span><span class="nk-menu-text">Activities Log</span></a></li> <li class="nk-menu-heading"><h6 class="overline-title">Message Center</h6></li><li class="nk-menu-item has-sub"><a href="{{route('inbox')}}" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-emails text-primary"></em></span><span class="nk-menu-text">Message Inbox</span></a></li>
<li class="nk-menu-item has-sub"><a href="{{route('ticket')}}" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-headphone-fill text-primary"></em></span><span class="nk-menu-text">Support Ticket</span></a></li>

<li class="nk-menu-item"><a href="{{route('user.testimonial')}}" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-happy text-primary"></em></span><span class="nk-menu-text">Testimonials</span></a></li>
</ul></div>

<div class="nk-sidebar-footer"><ul class="nk-menu nk-menu-footer"><li class="nk-menu-item"><a href="#" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-help-alt text-primary"></em></span><span class="nk-menu-text">Support</span></a></li><li class="nk-menu-item ml-auto"><div class="dropup"><a href="#" class="nk-menu-link dropdown-indicator has-indicator" data-toggle="dropdown" data-offset="0,10"><span class="nk-menu-icon"><em class="icon ni ni-globe"></em></span><span class="nk-menu-text">English</span></a><div class="dropdown-menu dropdown-menu-sm dropdown-menu-right"><ul class="language-list"><li><a href="#" class="language-item"><img src="../images/flags/english.png" alt="" class="language-flag"><span class="language-name">English</span></a></li><li><a href="#" class="language-item"><img src="../images/flags/spanish.png" alt="" class="language-flag"><span class="language-name">Español</span></a></li><li><a href="#" class="language-item"><img src="../images/flags/french.png" alt="" class="language-flag"><span class="language-name">Français</span></a></li><li><a href="#" class="language-item"><img src="../images/flags/turkey.png" alt="" class="language-flag"><span class="language-name">Türkçe</span></a></li></ul></div></div></li></ul></div></div></div></div></div><div class="nk-wrap "><div class="nk-header nk-header-fluid nk-header-fixed bg-primary"><div class="container-fluid"><div class="nk-header-wrap"><div class="nk-menu-trigger d-xl-none ml-n1"><a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a></div><div class="nk-header-brand d-xl-none"><a href="{{URL('/')}}" class="logo-link"><img class="logo-light logo-img" src="{{asset('assets/images/favicon.png')}}" srcset="{{asset('assets/images/favicon.png')}}" alt="logo"><img class="logo-dark logo-img" src="{{asset('assets/images/favicon.png')}}" srcset="{{asset('assets/images/favicon.png')}}" alt="logo-dark"> </a></div><div class="nk-header-news d-none d-xl-block"><div class="nk-news-list"><a class="nk-news-item" href="#"><div class="nk-news-icon"><em class="icon ni ni-card-view"></em></div></a></div></div><div class="nk-header-tools"><ul class="nk-quick-nav"><li class="dropdown user-dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><div class="user-toggle"><div class="user-avatar sm"> @if( file_exists(Auth::guard('web')->user()->image))
                        <img src="{{asset(Auth::guard('web')->user()->image)}} " width="100"
                             alt="Profile Pic">
                    @else

                        <img src=" {{url('assets/user/images/user-default.png')}} " width="100"
                             alt="Profile Pic">
                    @endif</div><div class="user-info d-none d-md-block"><div class="user-status user-status-unverified"><?php
    /* This sets the $time variable to the current hour in the 24 hour clock format */
    $time = date("H");
    /* Set the $timezone variable to become the current timezone */
    $timezone = date("e");
    /* If the time is less than 1200 hours, show good morning */
    if ($time < "12") {
        echo "Good morning";
    } else
    /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
    if ($time >= "12" && $time < "17") {
        echo "Good afternoon";
    } else
    /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
    if ($time >= "17" && $time < "19") {
        echo "Good evening";
    } else
    /* Finally, show good night if the time is greater than or equal to 1900 hours */
    if ($time >= "19") {
        echo "Good night";
    }
    ?></div><div class="user-name dropdown-indicator">{{Auth::guard('web')->user()->username}}</div></div></div></a><div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1"><div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block"><div class="user-card">


 <div class="user-avatar"><span>{{substr(Auth::guard('web')->user()->fname, 0, 1)}}{{substr(Auth::guard('web')->user()->lname, 0, 1)}}</span></div><div class="user-info"><span class="lead-text">{{Auth::guard('web')->user()->username}}</span><span class="sub-text">{{Auth::guard('web')->user()->email}}</span></div></div></div><div class="dropdown-inner"><ul class="link-list"> <li><a href="{{route('profile')}}"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li><li><a href="{{route('activities')}}"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li></ul></div><div class="dropdown-inner"><ul class="link-list"><li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li></ul></div></div></li><li class="dropdown notification-dropdown mr-n1"><a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
  <?php $coins = DB::table('messages')->whereStatus(0)->whereUser_id(Auth::guard('web')->user()->id)->get(); ?>

  @if($coins)
 <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
 @else
 <em class="icon ni ni-bell"></em>
 @endif


 </a><div class="dropdown-menu dropdown-menu-xl dropdown-menu-right dropdown-menu-s1"><div class="dropdown-head"><span class="sub-title nk-dropdown-title">Notifications</span> </div><div class="dropdown-body"><div class="nk-notification">

 @if($coins)
 @foreach($coins as $data)

 <div class="nk-notification-item dropdown-inner"><div class="nk-notification-icon"><em class="icon icon-circle bg-primary-dim ni ni-chat-circle"></em></div>

 <div class="nk-notification-content">
 <a href="{{route('inbox-view',$data->id)}}">
 <div class="nk-notification-text">{{$data->title}}</div><div class="nk-notification-time">{{ Carbon\Carbon::parse($data->created_at)->diffForHumans() }}</div></div></div>
</a>
 @endforeach
@endif
</div></div><div class="dropdown-foot center"><a href="{{route('inbox')}}">View All</a></div></div></li></ul></div></div></div></div>

@if( request()->is('user/verify') )
@yield('content')
@elseif( request()->is('user/activate-plan') )
@yield('content2')

@elseif (Auth::guard('web')->user()->confirmed == '0')

				 <div class="nk-content nk-content-fluid">
                        <div class="container-xl wide-lg">
                            <div class="nk-content-body">
                                <div class="buysell  ">

                                    <div class="buysell-title text-center"><h6 class="title text-danger">You won't be able to proceed to page as you will need to confirm your account package {{App\Plan::whereId(Auth::guard('web')->user()->plan_id)->first()->name}}. Please select a payment method below and click on the proceed button to make payment of <b>{{$basic->currency_sym}} {{number_format(App\Plan::whereId(Auth::guard('web')->user()->plan_id)->first()->price, $basic->decimal)}}</b>  in order to activate plan! You will earn {{$basic->regbonus}}% of this amount when payment is successful</h6></div>
                                    @if(session('success'))
                                        <div class="alert alert-success">
                                            {{session('success')}}
                                        </div>
                                    @endif
                                    <div class="buysell-block">
                                        <form method="post" class="buysell-form" action="{{route('activateplan')}}">
                                         @csrf
                                            </div>

                                            <div class="buysell-field form-group">
                                                <div class="form-label-group"><label class="form-label">Select Payment Method</label></div>
                                                <div class="form-pm-group">
                                                    <ul class="buysell-pm-list">
                                                    <?php $gates = DB::table('gateways')->whereCoin(0)->whereStatus(1)->where('id' ,'>' ,  99)->orderBy('name','asc')->get(); ?>
                                                    @foreach($gates as $data)
                                                        <li class="buysell-pm-item">
                                                            <input class="buysell-pm-control" type="radio" value="{{$data->id}}" name="gateway" id="pm-{{$data->name}}" />
                                                            <label class="buysell-pm-label" for="pm-{{$data->name}}">
                                                                <span class="pm-name">{{$data->name}}</span><span class="pm-icon"><em class="icon ni ni-{{$data->val7}}"></em></span>
                                                            </label>
                                                        </li>
                                                    @endforeach

                                                    </ul>
                                                </div>
                                            </div>
<input name="id" value="{{Auth::guard('web')->user()->plan_id}}" hidden />
                                            <div class="buysell-field form-action"><button type="submit" class="btn btn-lg btn-block btn-primary">Proceed</button></div>
                                            <div class="form-note text-base text-center">* Payment gateway company may charge you a <a href="#">processing fee.</a>.</div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


@else


@yield('content')
@endif



@if(Auth::guard('web')->user()->time < $time )
<div class="modal fade" tabindex="-1" id="modalbonus">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross"></em></a>
                <div class="modal-body modal-body-lg text-center">
                    <div class="nk-modal">
                        <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-success"></em>
                        <h4 class="nk-modal-title">Congratulations!</h4>
                        <div class="nk-modal-text">
                            <div class="caption-text">Its a new day to earn your daily bonus. Please click the button below to earn your <strong>{{$basic->currency_sym}}{{$basic->bonus}}</strong> bonus for the day</div>

                        </div>
                        <div class="nk-modal-action">
                            <a href="{{ route('userDailyBonus') }}" class="btn btn-lg btn-mw btn-primary"  >Earn Bonus</a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-lighter">
                    <div class="text-center w-100">
                        <p>Earn upto {{$basic->currency_sym}}{{$basic->ref}} for each friend your refer! <a href="#">Invite friends</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
<div class="modal fade" tabindex="-1" id="modalbonus">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross"></em></a>
                <div class="modal-body modal-body-lg text-center">
                    <div class="nk-modal">
                        <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-cross bg-danger"></em>
                        <h4 class="nk-modal-title">Oops!</h4>
                        <div class="nk-modal-text">
                            <div class="caption-text">Sorry, You have already earned your bonus for the day. Please come back later for new earning</div>

                        </div>
                        <div class="nk-modal-action">
                            <a href="#" data-dismiss="modal" class="btn btn-lg btn-mw btn-primary"  >Close</a>
                        </div>
                    </div>
                </div>
                <style>
      .blink {
      animation: blinker 0.6s linear infinite;
      color: #FF0000;
      font-size: 10px;
      font-weight: bold;
      font-family: sans-serif;
      }
    </style>
                <div class="modal-footer bg-lighter">
                    <div class="text-center w-100">
                        <p> <a class='blink' href="#" id="demo">Please Wait</a></p>
                    </div>
                    <script>
// Set the date we're counting down to
var countDownDate = new Date("{{Auth::guard('web')->user()->time}}").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);



  // Display the result in the element with id="demo"
   if(days > 0) {
  document.getElementById("demo").innerHTML = days + "Days " + hours + "Hrs "
  + minutes + "Mins " + seconds + "Secs ";
  }
 else {
  document.getElementById("demo").innerHTML = days + "Day " + hours + "Hrs "
  + minutes + "Mins " + seconds + "Secs ";
    }
  // If the count down is finished, write some text

}, 1000);
</script>
                </div>
            </div>
        </div>
    </div>
@endif

 <div class="nk-footer nk-footer-fluid"><div class="container-fluid"><div class="nk-footer-wrap"><div class="nk-footer-copyright"> &copy; {{date('Y')}} {{$basic->sitename}}  </div><div class="nk-footer-links"><ul class="nav nav-sm"><li class="nav-item"><a class="nav-link" href="#">Terms</a></li><li class="nav-item"><a class="nav-link" href="#">Privacy</a></li><li class="nav-item"><a class="nav-link" href="#">Help</a></li></ul></div></div></div></div></div></div></div>

<script src="{{asset('backend/js/bundle.js?ver=1.6.1')}}"></script>
 <script src="{{asset('backend/js/scripts.js?ver=1.6.1')}}"></script>
 <script src="{{asset('backend/js/demo-settings.js?ver=1.6.1')}}"></script>
 <script src="{{asset('backend/js/charts/chart-crypto.js?ver=1.6.1')}}"></script>



 @yield('scripts')

    <script src="{{asset('frontend/js/rainbow.js')}}"></script>
	<script src="{{asset('frontend/js/sample.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.growl.js')}}"></script>




	@if(session('alert'))
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

	@if(session('message'))
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


@if(session('error'))
	<script>
		 (function () {
		  $(function () {
		   return $.growl.error({
				message: "{{ session('error') }}"
			});


		  });
		}).call(this);


	</script>
	@endif

@if(session('danger'))
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

 @if(session('success'))
	<script>
		 (function () {
		  $(function () {
		   return $.growl.notice({
				message: "{{ session('success') }}"
			});


		  });
		}).call(this);


	</script>
	@endif
	@if ($errors->any())
 @foreach ($errors->all() as $error)
 <script>
		 (function () {
		  $(function () {
		   return $.growl.error({
				message: "{{ $error }}"
			});


		  });
		}).call(this);


	</script>
    @endforeach

@endif

 </body></html>

<!-- Localized -->
