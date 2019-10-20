@extends('layouts.app')
@section('content')
<div class="page-title" style="background-image: url('images/title/bg1.png')">
  <div class="container">
    <h1 class="entry-title"></h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="active">Careers</li>
    </ol>
  </div>
</div>

<section class="">
  <div class="container">
    <div class="ui-quote with-image">
      <div class="row row-xs-center">

        <div class="hidden-sm-down col-md-3 col-md-offset-1">
          <img src="{{ asset('images/members/team.jpg') }}" class="img-fluid" alt="img01">
        </div>
        <div class="col-xs-push-2 col-xs-10 col-md-push-0 col-md-7">
          <q>Do you think you have what it takes to join our team of professionals? then send your CV with an application letter for any career listed below to <a href="mailto:info@givitec.com">info@givitec.com</a> or click on the career to apply. Look foward to working with you.</q>
          <cite class="author">
            <span>Saintmoses Eromosele</span>
            <span class="title">Founder &amp; CEO Givitec Ltd.,</span>
            <!--/.title-->
          </cite>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="service-icon-list">
  <div class="container">
    <div class="row">
      @if($careers)
        @foreach($careers as $career)
        <div class="col-lg-6">
          <a href="{{ route('career', ['name'=>$career->name]) }}">
            <div class="content">
              <div class="row">
                <div class="col-md-3">
                  <div class="type">
                    <i class="fa fa-{{$career->icon}}"></i>
                  </div>
                </div>
                <div class="col-md-9">
                  <h3>{{ strtoupper($career->name) }}</h3>
                  <p>{{ str_limit($career->content, 100,'...') }}</p>
                </div>
              </div>
            </div>
          </a>
        </div>
        @endforeach
      @endif
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

@endsection