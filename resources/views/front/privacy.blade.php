@extends('include.frontend')
@section('content')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area gradient--secondary">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">Privacy, T&C </h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active">Privacy, Policy, T&</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->





    <div class="site-wrapper-reveal">
        <!--========== Call to Action Area Start ============-->
        <div class="cta-image-area_one section-space--ptb_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cta-image cta-image-bg">
                            <div class="row align-items-center">
                                <div class="col-lg-6 order-2 order-lg-1  wow move-up">
                                    <div class="cta-image__content">
                                        <h4 class="cta-image__title text-white mb-20">Provacy</h4>
                                        <div class="cta-image__text text-white mb-20">{{$basic->privacy}}</div>

                                    </div>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2  wow move-up">
                                    <div class="cta-image__media">
                                        <img src="{{asset('assets/images/privacy.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== Call to Action Area End ============-->

        <!--========== Call to Action Area Start ============-->
        <div class="cta-image-area_two cta-image-bg-03 section-space--ptb_90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cta-image__content text-center">
                            <h3 class="cta-image__title mb-20  wow move-up">Terms & Condition</h3>
                            <div class="cta-image__text mb-40  wow move-up">{{$basic->terms}}</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== Call to Action Area End ============-->

        <!--========== Call to Action Area Start ============-->
        <div class="cta-image-area cta-image-bg_02">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cta-image">
                            <div class="row align-items-center">
                                <div class="col-lg-6 order-2 order-lg-1">
                                    <div class="cta-image__content">
                                        <h4 class="cta-image__title text-white mb-20 wow move-up">Policy</h4>
                                        <div class="cta-image__text text-white mb-20 wow move-up">{{$basic->policy}}</div>

                                    </div>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2 wow move-up">
                                    <div class="cta-image_two section-space--mt_60">
                                        <img src="{{asset('assets/images/policy.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== Call to Action Area End ============-->
    </div>

@endsection


