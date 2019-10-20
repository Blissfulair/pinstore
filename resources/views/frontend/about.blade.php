@extends('layouts.app')
@section('content')
<div class="page-title" style="background-image: url('images/title/bg1.png')">
  <div class="container">
    <h1 class="entry-title"></h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="active">About Us</li>
    </ol>
  </div>
</div>

<section class="our-company">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="custom-heading part-heading three-slashes">
          <h2>OUR COMPANY</h2>
        </div>
        <div class="description text-justify">
          <p>{!! $aboutus->about_us !!}</p>
        </div>
        <button type="button" class="btn btn-primary">OUR LOCATION <i class="fa fa-map-marker"></i> </button>
      </div>
      <div class="col-lg-6">
        <div class="custom-heading part-heading three-slashes">
          <h2>OUR SKILL</h2>
        </div>
        <section id="skills">
          <p>WEBSITES AND WEB APP<span>90%</span></p>
          <progress class="ui-progress" value="90" max="100"></progress>

          <p>MOBILE APP</p><span>85%</span>
          <progress class="ui-progress" value="85" max="100"></progress>

          <p>CCTV INSTALLATION</p><span>80%</span>
          <progress class="ui-progress" value="80" max="100"></progress>

          <p>COMPUTER BASED TEST(CBT)</p><span>99%</span>
          <progress class="ui-progress" value="99" max="100"></progress>
          <p>GRAPHIC DESIGNS</p><span>98%</span>
          <progress class="ui-progress" value="98" max="100"></progress>
          <p>COMPUTER NETWORKING</p><span>80%</span>
          <progress class="ui-progress" value="80" max="100"></progress>
        </section>
      </div>
    </div>
  </div>
</section>

<section class="our-mission about-img-list">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="custom-heading part-heading three-slashes">
          <h2>OUR MISSION</h2>
        </div>
        <div class="text-justify">
          <p>
            {{ $aboutus->mission }}
          </p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="custom-heading part-heading three-slashes">
          <h2>OUR VISION</h2>
        </div>
        <div class="text-justify">
          <p>{{ $aboutus->vision }}</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="custom-heading part-heading three-slashes">
          <h2>EXPANDING GOAL</h2>
        </div>
        <div class="text-justify">
          <p>{{ $aboutus->expanding_goal }}</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="our-member">
  <div class="members-grid">
    <div class="container">
      <div class="custom-heading section-heading three-slashes">
        <h2>OUR MEMBERS</h2>
      </div>
      <div class="row">
        @if($teams)
          @foreach($teams as $team)
            <div class="col-lg-3">
              <img class="img-fluid" src="{{ asset('images/members/'.$team->image) }}" alt="{{ $team->position }}">
              <div class="content">
                <h3>{{ strtoupper($team->name)}},</h3>
                <h5>{{ $team->position }},</h5>
                <p>{{ $team->about }}</p>
              </div>
            </div>
          @endforeach
        @endif
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
        <a href="{{ route('contact') }}" class="btn btn-primary">CONTACT US<i class="fa fa-map-marker"></i></a>
      </div>
    </div>
  </div>
</section>

@endsection