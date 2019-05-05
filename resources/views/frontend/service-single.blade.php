@extends('layouts.app')
@section('content')
<div class="page-title" style="background-image: url('images/title/bg01.jpg')">
  <div class="container">
    <h1 class="entry-title">Our Services 02</h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="active">Our Services 02</li>
    </ol>
  </div>
</div>

<div class="container">
  <div class="row">
    <aside class="col-md-3 sidebar">
      <section class="widget service-icon-list service-menu">
        <div>
          <div class="content">
            <div class="row">
              <div class="col-md-3">
                <div class="type">
                  <i class="fa fa-fighter-jet"></i>
                </div>
              </div>
              <div class="col-md-9">
                <h3>LOGISTIC SERVICE</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="active">
          <div class="content">
            <div class="row">
              <div class="col-md-3">
                <div class="type">
                  <i class="fa fa-truck"></i>
                </div>
              </div>
              <div class="col-md-9">
                <h3>GROUND TRANSPORT</h3>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="content">
            <div class="row">
              <div class="col-md-3">
                <div class="type">
                  <i class="fa fa-codepen"></i>
                </div>
              </div>
              <div class="col-md-9">
                <h3>WAREHOUSING</h3>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="content">
            <div class="row">
              <div class="col-md-3">
                <div class="type">
                  <i class="fa fa-dropbox"></i>
                </div>
              </div>
              <div class="col-md-9">
                <h3>PACKAGING AND STORAGE</h3>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="content">
            <div class="row">
              <div class="col-md-3">
                <div class="type">
                  <i class="fa fa-fighter-jet"></i>
                </div>
              </div>
              <div class="col-md-9">
                <h3>LOGISTIC SERVICE</h3>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="content">
            <div class="row">
              <div class="col-md-3">
                <div class="type">
                  <i class="fa fa-fighter-jet"></i>
                </div>
              </div>
              <div class="col-md-9">
                <h3>LOGISTIC SERVICE</h3>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="widget">
        <div class="custom-heading part-heading three-slashes">
          <h2>CONTACT</h2>
        </div>
        <div class="office">
          <p><i class="fa fa-map-marker"></i> 14 Tottenham Road, London, England.
          </p>
          <p><i class="fa fa-phone"></i> (102) 6666 8888 </p>
          <p><i class="fa fa-envelope"></i> info@thememove.com </p>
          <p><i class="fa fa-fax"></i> (102) 8888 9999 </p>
          <p><i class="fa fa-clock-o"></i> Mon - Sat: 9:00 - 18:00</p>
        </div>
      </section>

      <section class="widget">
        <div class="custom-heading part-heading three-slashes">
          <h2>BROCHURES</h2>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-download"><i class="fa fa-file-pdf-o"></i> Download.PDF</button>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-download"><i class="fa fa-file-word-o"></i> Download.DOC</button>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-download"><i class="fa fa-file-powerpoint-o"></i> Download.PPT</button>
        </div>
      </section>
    </aside>

    <main class="col-md-9">
      <section>
        <div class="carousel slide hidden-lg-down">
          <!-- Indicators -->
          <ol class="carousel-indicators left-bottom-indicators">
          </ol>
              <img src="{{ route('display_image', ['filename'=>$service->featured_image]) }}" alt="Transport Image" class="img-fluid">
        </div>
      </section>

      <section>
        <div class="custom-heading part-heading three-slashes">
          <h2>{{ $service->name }}</h2>
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
            <h2>WHAT IS INCLUDE</h2>
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
                  With over 60 years of providing world class service to their customers on the asset side, a need to provide a one stop shop for a” true customer service logistic solution” was introduced. By adding this dimension to an already dynamic and customer centric asset based provider, we feel we bring a total solution.
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
        </section>
        <div class="col-md-6">
          <section class="service-brochure highlight-part">
            <div class="custom-heading part-heading three-slashes">
              <h2>SERVICE BROCHURE</h2>
            </div>
            <img style="max-width:100%" src="images/brochure/brochure.jpg" alt="Transport">
            <div class="form-inline clearfix">
              <button style="font-size:80%" type="submit" class="btn btn-download pull-left"><i class="fa fa-file-pdf-o"></i> Download.PDF</button>
              <button style="font-size:80%" type="submit" class="btn btn-download pull-right"><i class="fa fa-file-word-o"></i> Download.DOC</button>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id nisl neque. Proin tincidunt porttitor vestibulum. Ut dictum vel tellus ac semper. In leo lectus, malesuada sed feugiat quis.
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