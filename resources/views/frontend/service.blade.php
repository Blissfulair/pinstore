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
      <div class="col-lg-4">
        <div class="service-item">
          <img class="img-fluid" src="images/services/370x220/service_01.jpg" alt="Transport">
          <div class="content">
            <div class="type"><i class="fa fa-cube"></i></div>
            <h5>GROUND TRANSPORT</h5>
            <p>Transport specializes in the safe transportation of office, computer, and medical related equipment. From a single laptop to an...</p>
            <a href="{{ route('service') }}" class="btn btn-primary">READ MORE<i class="fa fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="service-item">
          <img class="img-fluid" src="images/services/370x220/service_02.jpg" alt="Transport">
          <div class="content">
            <div class="type"><i class="fa fa-link"></i></div>
            <h5>LOGISTIC SERVICE</h5>
            <p>Transport offers a host of logistic management services and supply chain solutions. We provide innovative solutions with the best...</p>
            <button type="button" class="btn btn-primary">READ MORE<i class="fa fa-arrow-right"></i></button>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
      <div class="service-item">
        <img class="img-fluid" src="images/services/370x220/service_03.jpg" alt="Transport">
        <div class="content">
          <div class="type"><i class="fa fa-road"></i></div>
          <h5>TRUCKING SERVICE</h5>
          <p>Transport has access to over a ten million square feet of storage space in strategic partnership locations throughout the...</p>
          <button type="button" class="btn btn-primary">READ MORE<i class="fa fa-arrow-right"></i></button>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="service-item">
        <img class="img-fluid" src="images/services/370x220/service_04.jpg" alt="Transport">
        <div class="content">
          <div class="type"><i class="fa fa-home"></i></div>
          <h5>WAREHOUSING</h5>
          <p>Transport has access to over a ten million square feet of storage space in strategic partnership locations throughout the...</p>
          <button type="button" class="btn btn-primary">READ MORE<i class="fa fa-arrow-right"></i></button>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="service-item">
        <img class="img-fluid" src="images/services/370x220/service_05.jpg" alt="Transport">
        <div class="content">
          <div class="type"><i class="fa fa-wrench"></i></div>
          <h5>CARGO</h5>
          <p>Transport has access to over a ten million square feet of storage space in strategic partnership locations throughout the...</p>
          <button type="button" class="btn btn-primary">READ MORE<i class="fa fa-arrow-right"></i></button>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="service-item">
        <img class="img-fluid" src="images/services/370x220/service_06.jpg" alt="Transport">
        <div class="content">
          <div class="type"><i class="fa fa-clipboard"></i></div>
          <h5>STORAGE</h5>
          <p>Transport has access to over a ten million square feet of storage space in strategic partnership locations throughout the...</p>
          <button type="button" class="btn btn-primary">READ MORE<i class="fa fa-arrow-right"></i></button>
        </div>
      </div>
    </div>
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
        <button type="button" class="btn btn-primary">CONTACT US<i class="fa fa-map-marker"></i></button>
      </div>
    </div>
  </div>
</section>
@endsection