@extends('include.frontend')
@section('content')

  <!-- breadcrumb-area start -->
     <div class="payment-hero__slider payment-hero--bg__images  position-relative  section-space--pt_120 section-space--pb_120">
           <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">Jobs </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->












    <div class="site-wrapper-reveal">







        <!--====================  Blog Area Start ====================-->
        <div class="blog-pages-wrapper section-space--ptb_100">
            <div class="container">
                <div class="row">
                @foreach($blogs as $data)
                    <div class="col-lg-4 col-md-6  mb-30 wow move-up">
                        <!--======= Single Blog Item Start ========-->
                        <div class="single-blog-item blog-grid">
                            <!-- Post Feature Start -->
                            <div class="post-feature blog-thumbnail">
                                <a href="{{route('blogview',$data->id)}}">
                                 @if( file_exists($data->image))
                                                 <img src="{{asset($data->image)}}" class="img-fluid" alt="author">
                                            @else
                                                <img src="{{asset('frontend/img/author-avatar-4.png')}}"  class="img-fluid" alt="author">
                                            @endif
                                  </a>
                            </div>
                            <!-- Post Feature End -->

                            <!-- Post info Start -->
                            <div class="post-info lg-blog-post-info">
                                <div class="post-categories">
                                    <a href="#">{{$data->category->name}}</a>
                                </div>

                                <h5 class="post-title font-weight--bold">
                                    <a href="#">{{$data->job_title}}</a>
                                </h5>

                                <div class="post-meta  pt-30">
                                    <div class="post-author">
                                        <a href="#">
                                            <img class="img-fluid avatar-96" src="{{asset('assets/images/logo/logo.png')}}" alt="">Admin
                                        </a>
                                    </div>
                                    <div class="post-date">
                                        <span class="far fa-calendar meta-icon"></span>
                                        {{ Carbon\Carbon::parse($data->created_at)->diffForHumans() }}
                                    </div>
                                </div>
                            </div>
                            <!-- Post info End -->
                        </div>
                        <!--===== Single Blog Item End =========-->

                    </div>
                    @endforeach



                    <div class="col-lg-12 wow move-up">
                        <div class="ht-pagination mt-30 pagination justify-content-center">
                            <div class="pagination-wrapper">

                                <ul class="page-pagination">
                                     {{ $blogs->links() }}
                                </ul>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--====================  Blog Area End  ====================-->
























    </div>
@endsection


