@extends('include.frontend')
@section('content')







    <div class="site-wrapper-reveal">

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area gradient--secondary">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">FAQs</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="{{url('/about')}}">Home</a></li>
                            <li class="breadcrumb-item active">FAQs </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->







        <!--====================  Accordion area Start ====================-->
        <div class="software-accordion-wrapper section-space--pt_120 section-space--pb_60 gray-gradient" id="faq-section">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrapper text-center section-space--mb_60">
                            <h2 class="section-title font-weight--light mb-10 wow move-up">Frequently Asked Questions</h2>
                            <span class="section-text wow move-up">It’s our pleasure to answer any questions you have</span>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 wow move-up">
                        <div class="faq-wrapper section-space--mb_30">
                            <div id="accordion">
                            @foreach($faq as $data)
                                <div class="card">

                                    <div class="card-header" id="heading__{{$data->id}}">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#collapse__{{$data->id}}" aria-expanded="false" aria-controls="collapse__{{$data->id}}">
                                                {{$data->title}}<span> <i class="fas fa-plus-circle"></i>
                                            <i class="fas fa-minus-circle"></i> </span>
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapse__{{$data->id}}" class="collapse" aria-labelledby="heading__{{$data->id}}" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>{!! $data->description !!}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>

                        </div>
                    </div>


                        </div>
                    </div>
                    <div class="col-lg-12 wow move-up">
                        <h5 class="sub-heading text-center section-space--mt_30">Still have further questions? <a href="#" class="hover-style-link hover-style-link--green">Contact us </a>
                        </h5>
                    </div>
                </div>
            </div>
        </div>


    </div>



@endsection


