

@extends('include.frontend')
@section('content')
    <div id="top-content" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-slider">
                        <div class="slide">
                            <div class="row rtl-row">
                                <div class="col-sm-5">
                                    <div class="img-holder">
                                        <img src="{{ asset('pinstore/images/slide-img1.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="b-text">Buy Exam Scratch<br>Cards Online.</div>
                                    <div class="m-text">WAEC | <span class="bold">JAMB</span> | NECO | NABTEB</div>
                                    <a href="/register" class="hbtn hbtn-primary hbtn-lg">Register Now</a>
                                </div>
                            </div>
                        </div><!-- slide -->
                        <div class="slide">
                            <div class="row rtl-row">
                                <div class="col-sm-5">
                                    <div class="img-holder">
                                        <img src="{{ asset('pinstore/images/slide-img2.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="b-text">Create an account <br>in just 2 minutes.</div>
                                    <div class="m-text">PinStore.com.ng has just been made <span class="bold">easy</span></div>
                                    <a href="/register" class="hbtn hbtn-primary hbtn-lg">Create now</a>
                                </div>
                            </div>
                        </div><!-- slide -->
                        <div class="slide">
                            <div class="row rtl-row">
                                <div class="col-sm-5">
                                    <div class="img-holder">
                                        <img src="images/slide-img3.png" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="b-text">Your Examination <br>Access Pins Comes Instantly</div>
                                    <div class="m-text">PinStore.com.ng is <span class="bold">Superfast</span> and <span class="bold">Reliable</span></div>
                                    <a href="#" class="hbtn hbtn-primary hbtn-lg">Learn more</a>
                                </div>
                            </div>
                        </div><!-- slide -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="latest-news container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="row-title">
                    Available PinStore Services
                </div>
            </div>
            <div class="col-sm-4">
                <div class="main-btn-holder">
                    <a href="/login" class="hbtn hbtn-default">Login Now</a>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($services as $service)
            <div class="col-sm-6 col-md-4">
                <div class="post-box grey-bg">
                    <a href="{{ route('user.service', ['name'=>$service->name]) }}"><img src="{{asset('kyc').'/'.$service->image}}" style="width:100%; height: 150px;"></a>
                    @if($service->status == 0)
                    <span class="badge badge-success" style="font-size:14px;">Available</span>
                    @else
                    <span class="badge badge-danger" style="font-size:14px;">Unavailable</span>
                    @endif
                    <div class="post-title"><a href="{{ route('user.service', ['name'=>$service->name]) }}" style="color:#fff; text-decoration:none;"><?php echo htmlentities($service->name, ENT_QUOTES, 'UTF-8'); ?></a></div>
                    <div class="post-link"><a href="{{ route('user.service', ['name'=>$service->name]) }}">Buy Now (₦<?php echo $service->amount ?>)</a></div>
                </div>
            </div><!--item -->
            @endforeach
        </div><!-- row -->
    </div>
</div>
<div class="features container-fluid">
    <div class="container">
        <div class="row rtl-row">
            <div class="col-sm-6">
                <img src="{{ asset('pinstore/images/female-student-2.jpg') }}" style="width:100%; margin-top:55px; border-radius:10px;" alt="">
            </div>
            <div class="col-sm-6">
                <div class="feature-info">
                    <div class="feature-title">Your SuperFast Scratch Card Dealer!</div>
                    <div class="feature-text">We care of all your exams scratch cards(WAEC, NECO, JAMB, NABTEB etc) online through a secure and user-friendly web interface. Register today in less than 3 minutes with a valid Email. After registration, you can easily purchase your Exam scratch cards online. </div>
                    <div class="feature-link"><a href="#" class="hbtn hbtn-default">Get Started!</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="domain-search-holder container-fluid">
    <div class="container">
        <form action="{{ route('login') }}" method="post">
        @csrf
            <div class="row">
                <div class="col-sm-5 col-md-5 col-lgmd-5">
                    <input class="domain-input" name="username" type="text" placeholder="Username"> 
                </div>
                <div class="col-sm-5 col-md-5 col-lgmd-5">
                    <input class="domain-input" name="password" type="password" placeholder="Password"> 
                </div>
                <div class="col-sm-2 col-md-2 col-lgmd-2">
                    <button type="submit">Login</button>
                </div>
            </div>
        </form>
    </div>
</div>



@endsection


