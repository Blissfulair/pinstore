@extends('include.frontend')
@section('content')
   <div class="site-wrapper-reveal">
        <div class="start-ups-hero__slider start-ups-hero--bg__images  position-relative  section-space--pt_120 section-space--pb_60">
            <div class="container-fluid container-fluid--cp-150 ">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="start-ups-hero__content">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="start-ups-hero__text section-space--start-pt">
                                        <h1>{{$basic->sitename}}<br></h1>
                                            <!-- <p class="hers h6-font font-w--70  mb-6 cd-headline letters scale"> <span class="cd-words-wrapper color--light">
                                        <b class="is-visible">Security and Social Welfare</b>
                                        <b>Infrastructural Development/Urban Renewal</b>
                                        <b>Manpower Development and Training</b>
                                        <b>Public-Private Partnership(PPP)</b>
                                        <b>Leadership by Example</b>
                                        <b>Employment Creation and Social Empowerment Scheme</b>
                                    </span></p> -->
                                            <div class="hero-btn-wrap">
                                                <a href="/register" class="btn btn--green">Get started</a>
                                            </div>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="start-ups-hero--images__midea">
                                        <!-- <img src="{{asset('assets/images/about-video-image.jpg')}}" alt="" class="img-fluid"> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wavify-wrapper hero-white">
                <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <defs></defs>
                    <path id="ht-wavify_white" d="M 0 121.212 C 317.16666666666663 98.656 317.16666666666663 98.656 634.3333333333333 109.935 C 951.4999999999999 121.212 951.4999999999999 121.212 1268.6666666666665 135.48 C 1585.833333333333 149.741 1585.833333333333 149.741 1903 118.9 L 1903 623 L 0 623 Z" fill="#f6f5f9"></path>
                </svg>
            </div>


        </div>






        <!--============= saas-feature Start =================-->
        <div class="start-ups-feature" id="platforms-section">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center section-space--mb_60">
                            <h2 class="font-weight--bold mb-15 wow move-up">{{$basic->about_title}}</h2>
                            <span class="section-tesxt wow move-up">{!!$basic->about!!}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>







        <!--================= Tabs Area Start ==================-->

        <div class="tabs-wrapper section-space--mt_30 section-space--pb_120 gradient--secondary">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrapper text-center section-space--mb_60 wow move-up">
                            <h2 class="section-title font-weight--bold mb-15">Your part of the bargain is to ensure APC wins.</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ht-tab-wrap">
                            <div class="row">
                                <div class="col-12 text-center wow move-up">
                                    <ul class="nav justify-content-center ht-tab-menu" role="tablist">
                                        <li class="tab__item nav-item active">
                                            <a class="nav-link active" id="nav-tab1" data-toggle="tab" href="#history-tab" role="tab" aria-selected="true">Goal</a>
                                        </li>
                                        <li class="tab__item nav-item">
                                            <a class="nav-link" id="nav-tab2" data-toggle="tab" href="#mission-tab" role="tab" aria-selected="false">Mission</a>
                                        </li>
                                        <li class="tab__item nav-item">
                                            <a class="nav-link" id="nav-tab3" data-toggle="tab" href="#support-tab" role="tab" aria-selected="false">Vision</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-content ht-tab__content">

                                <div class="tab-pane fade show active wow move-up" id="history-tab" role="tabpanel">
                                    <div class="tab-history-wrap section-space--mt_80">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <div class="tab-history-image">
                                                    <img src="{{asset('front-assets/images/banners/aeroland-tab-content-image-04.png')}}" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                 <div class="tab-content-inner">

                                                    <h4 class="font-weight--light" style="">Our Goal</h4>


                                                        <p class="dec section-space--mt_40 section-space--mb_40">{{$basic->goal}} </p>

                                                        <div class="tab-button section-space--mb_40">
                                                            <a href="{{route('login')}}" class="ht-btn ht-btn-md">Learn more </a>
                                                        </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade wow move-up" id="mission-tab" role="tabpanel">
                                    <div class="tab-mission-wrap section-space--mt_60">
                                        <div class="row align-items-center">
                                            <div class="col-lg-7">
                                                <div class="tab-mission-image">
                                                    <img src="{{asset('front-assets/images/banners/aeroland-tab-content-image-05.png')}}" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="tab-content-inner">

                                                    <h4 class="font-weight--light" style="">Our Mission</h4>


                                                        <p class="dec section-space--mt_40 section-space--mb_40">{{$basic->mission}} </p>

                                                         <div class="tab-button section-space--mb_40">
                                                            <a href="{{route('login')}}" class="ht-btn ht-btn-md">Learn more </a>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade wow move-up" id="support-tab" role="tabpanel">
                                    <div class="tab-mission-wrap section-space--mt_80">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6">
                                                <div class="tab-mission-image">
                                                    <img src="{{asset('front-assets/images/banners/aeroland-tab-content-image-06.png')}}" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                 <div class="tab-content-inner">

                                                    <h4 class="font-weight--light" style="">Our Goal</h4>


                                                        <p class="dec section-space--mt_40 section-space--mb_40">{{$basic->goal}} </p>
                                                        <div class="tab-button section-space--mb_40">
                                                            <a href="{{route('login')}}" class="ht-btn ht-btn-md">Learn more </a>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>











@endsection


