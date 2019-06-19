@extends('layouts.app')
@section('content')
<div class="page-title" style="background-image: url({{asset('images/title/bg1.png') }}">
  <div class="container">
    <h1 class="entry-title"></h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="active">{{ ucwords($career->name) }}</li>
    </ol>
  </div>
</div>

<div class="container">
  <div class="row">
    <main class="col-md-6">

      <section>
        <div class="custom-heading part-heading three-slashes">
          <h2>{{ strtoupper($career->name) }}</h2>
        </div>
        <div class="row">
          <div class="col-md-12"><p>
              {{ $career->content }}
          </p></div>
        </div>
      </section>
    </main>
    <section class="col-md-6">
        <div id="accordion" class="accordion" role="tablist" aria-multiselectable="false">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <i class="fa fa-arrow-down"></i> <span>Requirements</span>
                </a>
            </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-content">
                With over 60 years of providing world class service to their customers on the asset side, a need to provide a one stop shop for a” true customer service logistic solution” was introduced. By adding this dimension to an already dynamic and customer centric asset based provider, we feel we bring a total solution.
            </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <i class="fa fa-arrow-down"></i> <span>Function</span>
                </a>
            </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-content">
                I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
            </div>
            </div>
        </div>

    </section>
  </div>
</div>
<!-- ADVISORY
================================================== -->
<section class="advisory">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h2>If interested this role, apply now</h2>
      </div>
      <div class="col-md-2">
        <button type="button" class="btn btn-info">Apply<i class="fa fa-paper"></i></button>
      </div>
    </div>
  </div>
</section>

@endsection