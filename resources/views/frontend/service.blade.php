@extends('layouts.app')
@section('title')
  || Services
@endsection
@section('content')
<div class="page-title" style="background-image: url('images/title/bg01.jpg')">
  <div class="container">
    <h1 class="entry-title">Our Services</h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="active">Our Services</li>
    </ol>
  </div>
</div>

<!-- SERVICES VERTICAL LIST
================================================== -->
<section class="featured-services service-img-list">
  <div class="container">
    <div class="row">
      @if($services)
        @foreach($services as $service)
          <div class="col-lg-4">
            <div class="service-item">
              <img class="img-fluid" src="{{ asset('images/services/'.$service->featured_image) }}" alt="Transport">
              <div class="content">
                <div class="type"><i class="fa fa-{{ $service->icon }}"></i></div>
                <h5>{{ strtoupper($service->name) }}</h5>
                <p>{{ $service->content }}</p>
                <a href="{{ route('service', ['name'=>$service->name]) }}" class="btn btn-primary">READ MORE<i class="fa fa-arrow-right"></i></a>
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
@endsection