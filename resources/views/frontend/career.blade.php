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
          <q>Do you think you have what it takes to join our team of professionals? then send your CV with an application letter for any career listed below to <a href="mailto:info@givitec.com">info@givitec.com</a>. Look foward to working with you.</q>
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
      <div class="col-lg-6">
        <div class="content">
          <div class="row">
            <div class="col-md-3">
              <div class="type">
                <i class="fa fa-globe"></i>
              </div>
            </div>
            <div class="col-md-9">
              <h3>WEB DEVELOPER</h3>
              <p>Transport began providing transportation solutions to Transport’s contract warehousing customers in the 1980s.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="content">
          <div class="row">
            <div class="col-md-3">
              <div class="type">
                <i class="fa fa-mobile"></i>
              </div>
            </div>
            <div class="col-md-9">
              <h3>MOBILE APP DEVELOPER</h3>
              <p>Transport provides warehousing, fulfillment services, and transportation management across North America.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="content">
          <div class="row">
            <div class="col-md-3">
              <div class="type">
                <i class="fa fa-camera"></i>
              </div>
            </div>
            <div class="col-md-9">
              <h3>CCTV INSTALLER</h3>
              <p>Transport offers complete, customized solutions for all of your business storage needs.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="content">
          <div class="row">
            <div class="col-md-3">
              <div class="type">
                <i class="fa fa-wifi"></i>
              </div>
            </div>
            <div class="col-md-9">
              <h3>NETWORK ENGINEER</h3>
              <p>Transport offers a host of logistic management services and supply chain solutions.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="content">
          <div class="row">
            <div class="col-md-3">
              <div class="type">
                <i class="fa fa-pencil"></i>
              </div>
            </div>
            <div class="col-md-9">
              <h3>GRAPHIC DESIGNER</h3>
              <p>Transport began providing transportation solutions to Transport’s contract warehousing customers in the 1980s.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="content">
          <div class="row">
            <div class="col-md-3">
              <div class="type">
                <i class="fa fa-briefcase"></i>
              </div>
            </div>
            <div class="col-md-9">
              <h3>MARKETER</h3>
              <p>Transport provides warehousing, fulfillment services, and transportation management across North America.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="content">
          <div class="row">
            <div class="col-md-3">
              <div class="type">
                <i class="fa fa-desktop"></i>
              </div>
            </div>
            <div class="col-md-9">
              <h3>COMPUTER OPERATOR</h3>
              <p>Transport offers complete, customized solutions for all of your business storage needs.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="content">
          <div class="row">
            <div class="col-md-3">
              <div class="type">
                <i class="fa fa-edit"></i>
              </div>
            </div>
            <div class="col-md-9">
              <h3>BUSINESS DEVELOPER</h3>
              <p>Transport offers a host of logistic management services and supply chain solutions.</p>
            </div>
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
      <a href="{{ route('contact') }}" class="btn btn-primary">CONTACT US<i class="fa fa-map-marker"></i></a>      </div>
    </div>
  </div>
</section>

@endsection