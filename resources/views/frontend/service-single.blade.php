@extends('layouts.app')
@section('content')
<div class="page-title" style="background-image: url({{asset('images/title/bg1.png') }}">
  <div class="container">
    <h1 class="entry-title"></h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="active">{{ ucwords($service->name) }}</li>
    </ol>
  </div>
</div>

<div class="container">
  <div class="row">
    <aside class="col-md-3 sidebar">
      <section class="widget service-icon-list service-menu">
        @foreach($services as $serve)
          <a href="{{ route('service', ['name'=>$serve->name]) }}">
            <div class="{{ $serve->id == $service->id ? 'active': '' }}">
              <div class="content">
                <div class="row">
                  <div class="col-md-3">
                    <div class="type">
                      <i class="fa fa-{{ $serve->icon }}"></i>
                    </div>
                  </div>
                  <div class="col-md-9">
                    <h3>{{ strtoupper($serve->name) }}</h3>
                  </div>
                </div>
              </div>
            </div>
          </a>
        @endforeach
      </section>

      <section class="widget">
        <div class="custom-heading part-heading three-slashes">
          <h2>CONTACT</h2>
        </div>
        <div class="office">
          <p><i class="fa fa-map-marker"></i> 192 MM Way, Benin City, Nigeria.
          </p>
          <p><i class="fa fa-phone"></i> (+234)807 943 6049 </p>
          <p><i class="fa fa-envelope"></i> info@givitec.com </p>
          <p><i class="fa fa-fax"></i> (+234)807 943 6049 </p>
          <p><i class="fa fa-clock-o"></i> Mon - Sat: 8:00 - 18:00</p>
        </div>
      </section>

      <section class="widget">
        <div class="custom-heading part-heading three-slashes">
          <h2>SERVICE DOCUMENT</h2>
        </div>
        <div class="form-group">
          <a type="submit" href="{{ asset('images/brochure/service.docx') }}" class="btn btn-download"><i class="fa fa-file-pdf-o"></i> Download.PDF</a>
        </div>
        <div class="form-group">
          <a href="{{ asset('images/brochure/service.docx') }}" type="submit" class="btn btn-download"><i class="fa fa-file-word-o"></i> Download.DOC</a>
        </div>
      </section>
    </aside>

    <main class="col-md-9">
      <section>
        <div class="carousel slide hidden-lg-down">
          <!-- Indicators -->
          <ol class="carousel-indicators left-bottom-indicators">
          </ol>
              <img src="{{ asset('images/services/'.$service->featured_image) }}" alt="{{ $service->featured_image }}" class="img-fluid">
        </div>
      </section>

      <section>
        <div class="custom-heading part-heading three-slashes">
          <h2>{{ strtoupper($service->name) }}</h2>
        </div>
        <div class="row">
          <div class="col-md-12"><p style="column-count:2; column-gap:40%;">
              {{ $service->content }}
          </p></div>
        </div>
      </section>



      <div class="row">
        <section class="col-md-6">
          <section>
            <div class="ui-quote">
              <q>{{ $service->quote }}</q>
            </div>
          </section>
          <div class="custom-heading section-heading three-slashes">
            <h2>WHAT IS INCLUDED</h2>
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
                With over 2years of innovative works or designs with both private and government enterprises, we deliver our services with professionalism and precision. 
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
                We have a reputation for honesty, and because of our integrity over the years our clients know that we are dependable to do the job we are contracted to do.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <i class="fa fa-arrow-down"></i> <span>We Are Always Improving</span>
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-content">
We know that great jobs are actually improvements from previous good jobs, that is why we are constantly in the habit of improving on our good jobs, even also on our great jobs.
              </div>
            </div>
          </div>
        </section>
        <div class="col-md-6">
          <section class="service-brochure highlight-part">
            <div class="custom-heading part-heading three-slashes">
              <h2>GETTING STARTED WITH YOUR WEBSITE PROJECT DOCUMENT</h2>
            </div>
            <img style="max-width:100%" src="{{ asset('images/brochure/brochure.jpg') }}" alt="Transport">
            <div class="form-inline clearfix">
              <a href="{{ asset('images/brochure/gettingstarted.pdf') }}" style="font-size:80%" type="submit" class="btn btn-download pull-left"><i class="fa fa-file-pdf-o"></i> Download.PDF</a>
              <a style="font-size:80%" href="{{ asset('images/brochure/gettingstarted.docx') }}" type="submit" class="btn btn-download pull-right"><i class="fa fa-file-word-o"></i> Download.DOC</a>
            </div>
            <p>
                Download the Getting Started With Your Website Project and Service Document, fill and send to info@givitec.com 
            </p>
          </section>
        </div>

      </div>

    </main>
  </div>
</div>
<!-- ADVISORY
================================================== -->
<section class="advisory">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h2>Not sure which solution fits you business needs?</h2>
      </div>
      <div class="col-md-2">
        <button type="button" class="btn btn-primary">CONTACT US<i class="fa fa-map-marker"></i></button>
      </div>
    </div>
  </div>
</section>

@endsection