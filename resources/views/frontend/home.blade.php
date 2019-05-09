@extends('layouts.app')
@section('content')
  @include('includes.revo-slider')
<!-- FEATURED SERVICES
================================================== -->
<section class="featured-services service-img-list">
  <div class="container">
    <div class="row">
    @if($activities)
      @foreach($activities as $activity)
      <div class="col-lg-4">
        <div class="service-item">
          <img class="img-fluid" src="{{ asset('images/services/'.$activity->featured_image) }}" alt="Transport">
          <div class="content">
            <div class="type"><i class="fa fa-{{ $activity->icon }}"></i></div>
            <h5>{{ strtoupper($activity->name) }}</h5>
            <p>{{ str_limit($activity->content, 150, '...') }}</p>
            <a href="{{ route('service', ['name'=>$activity->name]) }}" class="btn btn-primary">READ MORE<i class="fa fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
      @endforeach
      @endif
</section>

<!-- REQUEST
================================================== -->
<section class="request parallax-window" data-parallax="scroll" data-image-src="images/request/request_bg.png">
  <div class="container">
    <div class="row">
      <div class="request-content col-xl-6 col-xl-offset-6">
        <div class="custom-heading part-heading">
          <h2>TALK TO GIVITEC</h2>
        </div>

        <p>We love to listen and we are eagerly waiting to talk to you regarding your project. Get in touch with us if you have any queries and we will get back to you as soon as possible.</p>
        @include('includes.message')
        <div class="request-form container">
          <form action="{{ route('contact_form') }}" method="post" novalidate="novalidate">
          <div class="row">
            <div class="col-lg-6">
                <input class="form-control" type="text" name="name" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Your name here">
            </div>
            <div class="col-lg-6">
              <input class="form-control" type="email" name="email" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Your email">
            </div>
            <div class="col-lg-6">
                <input class="form-control" type="text" name="subject" value="" size="40" aria-invalid="false" placeholder="Subject">
            </div>

            <div class="col-lg-6">
                <input class="form-control" type="text" name="phone" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Phone">
            </div>
            <div class="col-xs-12">
              <textarea class="form-control" name="message" cols="40" rows="4" aria-invalid="false" placeholder="Your message"></textarea>
            </div>
            @csrf()
            <div class="col-xs-12">
              <input class="btn btn-primary" type="submit" value="SEND MESSAGE">
            </div>
          </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- OUR SERVICES
================================================== -->
<section class="our-services service-icon-list">
  <div class="container">
      <div class="custom-heading section-heading">
        <h1>SERVICES</h1>
      </div>
      <div class="row">
        @if($services)
          @foreach($services as $service)
            <div class="col-lg-6">
              <div class="content">
                <div class="row">
                  <div class="col-md-3">
                    <div class="type">
                      <i class="fa fa-{{ $service->icon }}"></i>
                    </div>
                  </div>
                  <div class="col-md-9">
                    <h3>{{ strtoupper($service->name) }}</h3>
                    <p>{{ str_limit($service->content, 100, '...') }}</p>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        @endif
      </div>
    </div>
</section>

<!-- ADVISORY
================================================== -->
<section class="advisory">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h2>Not sure which solution fits you business needs?</h2>
      </div>
      <div class="col-md-2">
      <a href="{{ route('contact') }}" class="btn btn-primary">CONTACT US<i class="fa fa-map-marker"></i></a>      </div>
    </div>
  </div>
</section>

<!-- WHY CHOOSE US & LASTEST NEWS
================================================== -->
<section class="info-news">
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <div class="why-us">
        <div class="custom-heading part-heading">
          <h2>WHY CHOOSE US</h2>
        </div>
        <div id="accordion" class="accordion" role="tablist" aria-multiselectable="false">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <i class="fa fa-arrow-down"></i> <span>We Are Creative & Professional</span>
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-content">
                With over 2years of innovative works or designs with both private and government enterprises, we deliver our services with professionalism. 
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <i class="fa fa-arrow-down"></i> <span>Honest And Dependable</span>
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-content">
                I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
              <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <i class="fa fa-arrow-down"></i> <span>Quality Commitment</span>
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-content">
                I am text block. Click edit button to change this text. Lorem ipsum dolor sit
                amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
              </div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFour">
              <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                  <i class="fa fa-arrow-down"></i> <span>We Are Always Improving</span>
                </a>
              </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-content">I am text block. Click edit button to change this text. Lorem ipsum dolor sit
                amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- LATEST NEWS -->
    <div class="col-lg-6">
      <div class="custom-heading part-heading">
        <h2>LATEST NEWS</h2>
      </div>
      <div class="latest-news">
        @if($posts)
          @foreach($posts as $post)
            <div class="item">
              <div class="thumb">
                <a href="{{ route('post', ['name'=>$post->title]) }}">
                  <img width="120" height="90" src="{{ asset('images/posts/'.$post->featured_image) }}" class="attachment-small-thumb wp-post-image" alt="image_900x600_06">
                </a>
              </div>

              <h3><a href="{{ route('post', ['name'=>$post->title]) }}">{{ $post->title }}</a></h3>

              <div class="post-meta">
                <span class="author"><i class="fa fa-user"></i> admin</span>
                <span class="post-date"><i class="fa fa-clock-o"></i> {{ date('F, j Y', strtotime($post->created_at)) }}</span>
                <span class="post-com"><i class="fa fa-comments"></i> 2 responses</span>
              </div>
            </div>
          @endforeach
        @endif
      </div>
    </div>
  </div>
</div>
</section>

<!-- TESTIMONIALS
================================================== -->
<section class="testimonials parallax-window" data-parallax="scroll" data-image-src="images/testimonials_bg.jpg">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="custom-heading section-heading">
          <h1>TESTIMONIALS</h1>
        </div>
        <div class="owl-carousel owl-theme ui-carousel testimonials-carousel">
          <div class="item">
            <div class="quote last no-image">
              <blockquote class="testimonials-text">
                <p>I’ve been happy with the services provided by Construction LLC. Scooter Libby has been wonderful! He has returned my calls quickly, and he answered all my questions</p>
              </blockquote>
              <cite class="author">
                <span>Frankie Kao</span>
                <span class="title">Fouder &amp; CEO ThemeMove Ltd.,</span>
                <!--/.title-->
              </cite>
              <!--/.author-->
            </div>
          </div>
          <div class="item">
            <div class="quote">
              <blockquote class="testimonials-text">
                <p>I have always received good service from Transport. Timing and quality have always met my expectations and everything is communicated in a professional and timely manner.</p>
              </blockquote>
              <cite class="author">
                <span>Johny Vu</span>
                <span class="title">CEO Transport Ltd.,</span>
                <!--/.title-->
              </cite>
              <!--/.author-->
            </div>
          </div>
          <div class="item">
            <div class="quote first no-image">
              <blockquote class="testimonials-text">
              <p>I’ve been happy with the services provided by Transport. Scooter Libby has been wonderful! He has returned my calls quickly, and he answered all my questions</p>
              </blockquote>
              <cite class="author">
                <span>John Doe</span>
                <span class="title">CEO Transport Ltd.,</span>
                <!--/.title-->
              </cite><!--/.author-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- OUR CLIENTS
================================================== -->
<section class="our-clients">
  <div class="container">
    <div class="custom-heading section-heading">
      <h1>OUR CLIENTS</h1>
    </div>
    <div class="row">
      <div class="col-lg-2 col-sm-4 col-xs-6">
        <a href="#">
          <img src="images/clients/jasmot.jpeg" alt="Jasemont" title="Jasemot Foundation" class="thumbnail img-fluid">
        </a>
      </div>
      <div class="col-lg-2 col-sm-4 col-xs-6">
        <a href="#">
          <img src="images/clients/agbaka.png" alt="Agbaka News" title="Agbaka News" class="thumbnail img-fluid">
        </a>
      </div>
      <div class="col-lg-2 col-sm-4 col-xs-6">
        <a href="#">
          <img src="images/clients/winrose.jpg" alt="Winrose logo" title="Winrose Schools" class="thumbnail img-fluid">
        </a>
      </div>
      <div class="col-lg-2 col-sm-4 col-xs-6">
        <a href="#">
          <img src="images/clients/jamb.png" alt="Jamb" title="JAMB" class="thumbnail img-fluid">
        </a>
      </div>
      <div class="col-lg-2 col-sm-4 col-xs-6">
        <a href="#">
          <img src="images/clients/kugbe.png" alt="kugbe Radio" title="Kugbe Radio" class="thumbnail img-fluid">
        </a>
      </div>
      <div class="col-lg-2 col-sm-4 col-xs-6">
        <a href="#">
          <img src="images/clients/kenjons.png" alt="Ken Jon's" title="Ken Jon's" class="thumbnail img-fluid">
        </a>
      </div>
    </div>
  </div>
</section>

@endsection
