

@extends('include.frontend')
@section('content')
   <div class="site-wrapper-reveal">
        <div class="payment-hero__slider payment-hero--bg__images  position-relative  section-space--pt_120 section-space--pb_120">
            <div class="container-fluid container-fluid--cp-150 ">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="payment-hero-hero__content  section-space--mt_30">
                            <div class="row">
                                <div class="col-lg-5 wow move-up">
                                    <div class="payment-hero__text">
                                        <h1>{{$basic->htitle}}</h1>
                                        <p class="text-hero section-space--mb_40">{{$basic->hstitle}}</p>
                                        <div class="hero-btn-wrap">
                                            <a href="{{route('register')}}" class="btn btn--green">Get started</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-7 wow move-up">
                                    <div class="payment-hero--images__midea">
                                        <!-- <img src="{{asset('assets/images/headerimg.jpg')}}" alt="" class="img-fluid"> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--============= payment-feature Start =================-->

        <div class="payment-feature-warpper section-space--pb_120 position-relative" id="about-section">


            <div class="wavify-wrapper payment_feature ">
                <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <defs></defs>
                    <path id="ht-wavify-lg" d="M 0 121.212 C 317.16666666666663 98.656 317.16666666666663 98.656 634.3333333333333 109.935 C 951.4999999999999 121.212 951.4999999999999 121.212 1268.6666666666665 135.48 C 1585.833333333333 149.741 1585.833333333333 149.741 1903 118.9 L 1903 623 L 0 623 Z" fill="#f6f5f9"></path>
                </svg>
            </div>

            <div class="payment-feature">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center section-space--mb_60">
                                <h2 class="font-weight--bold mb-15 wow move-up">Our Jobs</h2>
                                <span class="section-text wow move-up">You’ll need these advantages to take the lead.</span>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <a href="/register" class="col-lg-6 col-md-12 mb-25  wow move-up">
                            <!-- Service Grid Start -->
                            <div class="ht-service-box--three">
                                <div class="service-box-wrap">
                                    <div class="image__media">
                                        <img src="{{asset('front-assets/images/education.jpg')}}" width="200" height="150" class="img-fluid" alt="aeroland-payment-box-icon-01">
                                    </div>
                                    <div class="content">
                                        <h5 class="heading font-weight--light">
                                            Education
                                        </h5>
                                        <div class="service_text">For teaching and non teaching staff in schools and other educational institution and facilities</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Service Grid End -->
                        </a>
                        <a href="/register" class="col-lg-6 col-md-12 mb-25  wow move-up">
                            <!-- Service Grid Start -->
                            <div class="ht-service-box--three">
                                <div class="service-box-wrap">
                                    <div class="image__media">
                                        <img src="{{asset('front-assets/images/healthcare.png')}}" width="200" height="150" alt="aeroland-payment-box-icon-02">
                                    </div>
                                    <div class="content">
                                        <h5 class="heading font-weight--light">
                                            Health
                                        </h5>
                                        <div class="service_text">For health workers, doctors, pharmacists, scientists, administrators, accountants, nurses and other healthcare professionals and auxiliaries.</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Service Grid End -->
                        </a>
                        <a href="/register" class="col-lg-6 col-md-12 mb-25 wow move-up">
                            <!-- Service Grid Start -->
                            <div class="ht-service-box--three">
                                <div class="service-box-wrap">
                                    <div class="image__media">
                                        <img src="{{asset('front-assets/images/electricity.jpg')}}" width="200" height="150" class="img-fluid" alt="aeroland-payment-box-icon-03">
                                    </div>
                                    <div class="content">
                                        <h5 class="heading font-weight--light">
                                            Power/Electricity
                                        </h5>
                                        <div class="service_text">For prower and electricity generation distribution and management professionals</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Service Grid End -->
                        </a>
                        <a href="/register" class="col-lg-6 col-md-12 mb-25 wow move-up">
                            <!-- Service Grid Start -->
                            <div class="ht-service-box--three">
                                <div class="service-box-wrap">
                                    <div class="image__media">
                                        <img src="{{asset('front-assets/images/icons/aeroland-payment-box-icon-04.png')}}" class="img-fluid" alt="aeroland-payment-box-icon-04">
                                    </div>
                                    <div class="content">
                                        <h5 class="heading font-weight--light">
                                           Information Technology
                                        </h5>
                                        <div class="service_text">For Jobs in ICT and telecommunication or new technologies</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Service Grid End -->
                        </a>
                        <a href="/register" class="col-lg-6 col-md-12 mb-25 wow move-up">
                            <!-- Service Grid Start -->
                            <div class="ht-service-box--three">
                                <div class="service-box-wrap">
                                    <div class="image__media">
                                        <img src="{{asset('front-assets/images/creative.jpeg')}}" width="200" height="150" class="img-fluid" alt="aeroland-payment-box-icon-03">
                                    </div>
                                    <div class="content">
                                        <h5 class="heading font-weight--light">
                                            Creative Industry
                                        </h5>
                                        <div class="service_text">For persons with or without formal education qualification or certification, but with proven skills or talents.</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Service Grid End -->
                        </a>
                        <a href="/register" class="col-lg-6 col-md-12 mb-25 wow move-up">
                            <!-- Service Grid Start -->
                            <div class="ht-service-box--three">
                                <div class="service-box-wrap">
                                    <div class="image__media">
                                        <img src="{{asset('front-assets/images/government.jpg')}}" height="150" width="200" class="img-fluid" alt="aeroland-payment-box-icon-04">
                                    </div>
                                    <div class="content">
                                        <h5 class="heading font-weight--light">
                                            Govenment  Jobs
                                        </h5>
                                        <div class="service_text">For all government or public service Jobs.</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Service Grid End -->
                        </a>
                        <a href="/register" class="col-lg-6 col-md-12 mb-25 wow move-up">
                            <!-- Service Grid Start -->
                            <div class="ht-service-box--three">
                                <div class="service-box-wrap">
                                    <div class="image__media">
                                        <img src="{{asset('front-assets/images/private.jpg')}}" height="150" width="200" class="img-fluid" alt="aeroland-payment-box-icon-04">
                                    </div>
                                    <div class="content">
                                        <h5 class="heading font-weight--light">
                                            Private Companies
                                        </h5>
                                        <div class="service_text">For all other jobs i the private sector.</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Service Grid End -->
                        </a>
                        <a href="/register" class="col-lg-6 col-md-12 mb-25 wow move-up">
                            <!-- Service Grid Start -->
                            <div class="ht-service-box--three">
                                <div class="service-box-wrap">
                                    <div class="image__media">
                                        <img src="{{asset('front-assets/images/icons/aeroland-payment-box-icon-06.png')}}" class="img-fluid" alt="aeroland-payment-box-icon-04">
                                    </div>
                                    <div class="content">
                                        <h5 class="heading font-weight--light">
                                            Other
                                        </h5>
                                        <div class="service_text">For all government or public service Jobs.</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Service Grid End -->
                        </a>
                    </div>
                </div>
            </div>


            <div class="payment_feature_svg vc_row-separator tilt_left bottom"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="none" viewBox="0 0 4 0.266661">
                    <linearGradient id="svg-fill-5d3a79b9bb254">
                        <stop offset="0%" stop-color="#5e61e7"></stop>
                        <stop offset="100%" stop-color="#9c7af2"></stop>
                    </linearGradient>
                    <polygon points="4,0 4,0.266661 -0,0.266661" fill="url( #svg-fill-5d3a79b9bb254 )"></polygon>
                </svg>
            </div>


        </div>

        <!--============= payment-feature End =================-->




        <!--============= payment-staps-way Start =================-->
        <div class="payment-typed-text-wrap" id="sevice-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12  wow move-up">
                        <div class="section-title text-center">
                            <div class="typed-text-wrap ">
                                <h4 class="cd-headline letters type">
                                    <span>Application</span>
                                    <span class="cd-words-wrapper waiting">
                                <b class="is-visible"> Auto Process.</b>
                                <b>Online Forms.</b>
                                <b>In Progress.</b>
                            </span>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============= payment-staps-way End =================-->

        <!--============= payment-staps-way Start =================-->

        <div class="payment-staps-way">

            <div class="payment_feature_svg vc_row-separator tilt_right top"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="none" viewBox="0 0 4 0.266661">
                    <linearGradient id="svg-fill-5d3a79b9beb1f">
                        <stop offset="0%" stop-color="#9c7af2"></stop>
                        <stop offset="100%" stop-color="#5e61e7"></stop>
                    </linearGradient>
                    <polygon points="4,0 4,0.266661 -0,0.266661" fill="url( #svg-fill-5d3a79b9beb1f )"></polygon>
                </svg>
            </div>

            <div class="payment-staps-way-wrap section-space--pt_60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">

                            <!-- payment Process Step One Start -->
                            <div class="payment-process-step__one wow move-up">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="payment-process-step__media text-center">
                                            <img src="{{asset('front-assets/images/poi1.png')}}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="payment-process-step__content float-md-right">
                                            <div class="payment-process__inner">
                                                <h4 class="font-weight--blod section-space--mb_40">Apply for {{$basic->sitename}}
                                                    <sup>01</sup>
                                                </h4>
                                                <div class="sub-text section-space--mb_40">
                                                    When APC forms a govenment, by the grace of God and your votes, come November 12, 2020, ten thousand jobs would be made available within the first 100 days.  The first ten thousand persons to apply here would be considered first.
                                                </div>
                                                <div class="payment-process-btn section-space--mb_40">
                                                    <a href="/register" class="ht-btn ht-btn-md"> Apply Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- payment Process Step One End -->

                            <!-- payment Process Step Two Start -->
                            <!-- <div class="payment-process-step__two section-space--pt_60 wow move-up">
                                <div class="row align-items-center">
                                    <div class="col-lg-5 order-2 order-lg-1">
                                        <div class="payment-process-step__content float-md-left">
                                            <div class="payment-process__inner">
                                                <h4 class="font-weight--blod section-space--mb_40">Secure payment
                                                    <sup>02</sup>
                                                </h4>

                                                <ul class="check-list green-check-list section-space--mt_30">
                                                    <li class="list-item">User-friendly, modern and intuitive</li>
                                                    <li class="list-item">Updated mobile design & features </li>
                                                    <li class="list-item">Beautiful icons, typography and images </li>
                                                    <li class="list-item">Extendable premium customer support </li>
                                                </ul>

                                                <div class="payment-process-btn section-space--mt_40">
                                                    <a href="#" class="ht-btn ht-btn-md"> Find out more <i class="far fa-long-arrow-right ml-2"></i></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 order-1 order-lg-2">
                                        <div class="app-showcase-process-step__media text-center">
                                            <img src="{{asset('front-assets/images/features/aeroland-payment-image-02.png')}}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- payment Process Step End Start -->
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!--============= payment-staps-way End =================-->
        <div class="payment-staps-pricing_wrapper payment-pricing-table-bg" id="pricing-section">
            <div class="position-relative section-space--pb_120">
                <div class="payment-staps-way-last_wrap section-space--pt_60">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- payment Process Step Start -->
                                <div class="payment-process-step__three section-space--ptb_60">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-12  wow move-up">
                                            <div class="payment-process-step__media text-center">
                                                <img src="{{asset('front-assets/images/private.jpg')}}" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12  wow move-up">
                                            <div class="payment-process-step__content float-md-right">
                                                <div class="payment-process__inner">
                                                    <h4 class="font-weight--blod section-space--mb_40">Available Jobs on {{$basic->sitename}}
                                                        <sup>03</sup>
                                                    </h4>
                                                    <div class="sub-text section-space--mb_40">
                                                        Sign up with one set of details for multiple job applications.
                                                    </div>

                                                    <div class="payment-conters section-space--mb_40">
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="fun-fact--three ">
                                                                    <span class="fun-fact__count odometer number-suffix" data-count="17"></span>
                                                                    <h6 class="fun-fact__text">Accounts created</h6>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="fun-fact--three">
                                                                    <span class="fun-fact__count odometer" data-count="491"></span>
                                                                    <h6 class="fun-fact__text">Jobs</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="payment-process-btn section-space--mb_40">
                                                        <a href="#" class="image-btn"><img src="{{asset('front-assets/images/icons/aeroland-black-button-google-play.jpg')}}" alt=""></a>
                                                        <a href="#" class="image-btn"><img src="{{asset('front-assets/images/icons/aeroland-black-button-google-play.jpg')}}" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- payment Process Step End -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-spartor_svg_02  vc_row-separator tilt_left bottom"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="none" viewBox="0 0 4 0.266661">
                        <linearGradient id="svg-fill-5d3ab43082011">
                            <stop offset="0%" stop-color="#8481ec"></stop>
                            <stop offset="100%" stop-color="#a890f2"></stop>
                        </linearGradient>
                        <polygon points="4,0 4,0.266661 -0,0.266661" fill="url( #svg-fill-5d3ab43082011 )"></polygon>
                    </svg>
                </div>
            </div>

            <!--========= Pricing  Table Area ===========-->
            <!-- <div class="pricing-table-area section-space--pb_120 position-relative ">


                <div class="pricing-table-title-area position-relative section-table_gradeient">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title-wrapper text-center section-space--mb_60">
                                    <h2 class="section-title text-white font-width-light mb-15  wow move-up">Affordable for everyone!</h2>
                                    <p class="text-white wow move-up">Choose a suitable package for your wallet</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-spartor_svg_02 vc_row-separator tilt_right top"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="none" viewBox="0 0 4 0.266661">
                        <linearGradient id="svg-fill-5d3ab430835b4">
                            <stop offset="0%" stop-color="#a890f2"></stop>
                            <stop offset="100%" stop-color="#8481ec"></stop>
                        </linearGradient>
                        <polygon points="4,0 4,0.266661 -0,0.266661" fill="url( #svg-fill-5d3ab430835b4 )"></polygon>
                    </svg>
                </div>

                <div class="pricing-table-content-area">
                    <div class="container">
                        <div class="row pricing-table-two">
                            <div class="col-12 col-md-6 col-lg-6 col-xl-4 pricing-table wow move-up">
                                <div class="pricing-table__inner">
                                    <div class="pricing-table__header">
                                        <div class="pricing-table__image">
                                            <img src="{{asset('front-assets/images/pricing/aeroland-pricing-image-06.png')}}" class="img-fluid" alt="">
                                        </div>
                                        <h5 class="pricing-table__title">Free</h5>
                                        <div class="pricing-table__price-wrap">
                                            <h6 class="price">$0</h6>
                                        </div>
                                    </div>
                                    <div class="pricing-table__body">
                                        <div class="pricing-table__footer">
                                            <a href="#" class="ht-btn ht-btn-default">Get started</a>
                                        </div>
                                        <ul class="pricing-table__list text-left">
                                            <li>03 projects</li>
                                            <li>Quality &amp; Customer Experience</li>
                                            <li><span class="featured">Try for free, forever!</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 col-xl-4 pricing-table pricing-table--popular wow move-up">
                                <div class="pricing-table__inner">
                                    <div class="pricing-table__feature-mark">
                                        <span>Popular Choice</span>
                                    </div>
                                    <div class="pricing-table__header">
                                        <div class="pricing-table__image">
                                            <img src="{{asset('front-assets/images/pricing/aeroland-pricing-image-05.png')}}" class="img-fluid" alt="">
                                        </div>
                                        <h5 class="pricing-table__title">Personal</h5>
                                        <div class="pricing-table__price-wrap">
                                            <h6 class="price">$59</h6>
                                        </div>
                                    </div>
                                    <div class="pricing-table__body">
                                        <div class="pricing-table__footer">
                                            <a href="#" class="ht-btn btn--green ht-btn-default">Get started</a>
                                        </div>
                                        <ul class="pricing-table__list text-left">
                                            <li>Unlimited project</li>
                                            <li>Power And Predictive Dialing</li>
                                            <li>Quality &amp; Customer Experience</li>
                                            <li>24/7 phone and email support</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 col-xl-4 pricing-table wow move-up">
                                <div class="pricing-table__inner">
                                    <div class="pricing-table__header">
                                        <div class="pricing-table__image">
                                            <img src="{{asset('front-assets/images/pricing/aeroland-pricing-image-07.png')}}" class="img-fluid" alt="">
                                        </div>
                                        <h5 class="pricing-table__title">Group</h5>
                                        <div class="pricing-table__price-wrap">
                                            <h6 class="price">$29</h6>
                                        </div>
                                    </div>
                                    <div class="pricing-table__body">
                                        <div class="pricing-table__footer">
                                            <a href="#" class="ht-btn ht-btn-default">Get started</a>
                                        </div>
                                        <ul class="pricing-table__list text-left">
                                            <li>10 projects</li>
                                            <li>Quality &amp; Customer Experience</li>
                                            <li>24/7 phone and email support</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> -->
            <!--========= Pricing  Table End ===========-->
        </div>


        <!--============ Newsletter Section Start  =========== -->
        <div class="newsletter-section section-space--pb_120" id="clients-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 ml-auto mr-auto">
                        <div class="section-title-wrapper text-center section-space--mb_50">
                            <h2 class="section-title font-width-bold wow move-up">Subscribe to receive updates on Jobs application</h2>
                        </div>
                        <!-- newsletter form -->
                        <div class="newsletter-form--two section-space--mb_40 text-center wow move-up">
                            <form action="#">
                                <input type="text" placeholder="Your name">
                                <input type="email" placeholder="Email">
                                <button class="ht-btn ht-btn-md">Subscribe</button>
                            </form>
                        </div>

                        <!-- newsletter text -->
                        <h6 class="sub-heading text-center wow move-up">What’s next in {{$basic->sitename}}? <a href="#" class="hover-style-link hover-style-link--green">Learn more</a></h6>
                    </div>
                </div>
            </div>
        </div>

        <!--============ Newsletter Section End  =========== -->








@endsection


