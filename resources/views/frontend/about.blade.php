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
        <div class="description">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id nisl neque. Proin tincidunt porttitor vestibulum. Ut dictum vel tellus ac semper. In leo lectus, malesuada sed feugiat quis, placerat et mauris.</p>

          <p>Nam non nisl fermentum, fringilla orci sit amet, ullamcorper urna. Aenean viverra pellentesque luctus. Donec a aliquam libero. Curabitur eu felis arcu. Pellentesque sed leo in turpis volutpat laoreet at id sapien. Phasellus ac euismod orci, in tristique dolor.</p>

          <p>Curabitur eu felis arcu. Pellentesque sed leo in turpis volutpat laoreet at id sapien. Phasellus ac euismod orci, in tristique dolor. </p>

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
        <img class="img-fluid" src="images/services/370x220/featured-services-01.jpg" alt="Transport">
        <div class="content">
          <p>
           To provide the highest quality technology-based services, in the most cost-effective manner, to povide the most suitable technology in teaching, learning, and community service
          </p>
          <p>To meet this mission we will</p>
          <ul class="list-unstyled">
            <li class="list-item-icon"><i class="fa fa-arrow-right"></i> Lead with humility and respect.</li>
            <li class="list-item-icon"><i class="fa fa-arrow-right"></i> Earn trust through authenticity and accountability./li>
            <li class="list-item-icon"><i class="fa fa-arrow-right"></i> Cultivate mutually beneficial partnerships with customers, associates and suppliers.</li>
            <li class="list-item-icon"><i class="fa fa-arrow-right"></i> Practice servant leadership and demand the highest standards.</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="custom-heading part-heading three-slashes">
          <h2>OUR VISION</h2>
        </div>
        <img class="img-fluid" src="images/services/370x220/featured-services-02.jpg" alt="Transport">
        <div class="content">
          <p>The following principles reflect our values, define our culture, and guide our actions:</p>

          <ul class="list-unstyled">
            <li class="list-item-icon"><i class="fa fa-arrow-right"></i> Lead with humility and respect.</li>
            <li class="list-item-icon"><i class="fa fa-arrow-right"></i> Earn trust through authenticity and accountability./li>
            <li class="list-item-icon"><i class="fa fa-arrow-right"></i> Cultivate mutually beneficial partnerships with customers, associates and suppliers.</li>
            <li class="list-item-icon"><i class="fa fa-arrow-right"></i> Practice servant leadership and demand the highest standards.</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="custom-heading part-heading three-slashes">
          <h2>EXPANDING GOAL</h2>
        </div>
        <img class="img-fluid" src="images/services/370x220/featured-services-03.jpg" alt="Transport">
        <div class="content">
          <p>The following principles reflect our values, define our culture, and guide our actions:</p>

          <ul class="list-unstyled">
            <li class="list-item-icon"><i class="fa fa-arrow-right"></i> Lead with humility and respect.</li>
            <li class="list-item-icon"><i class="fa fa-arrow-right"></i> Earn trust through authenticity and accountability./li>
            <li class="list-item-icon"><i class="fa fa-arrow-right"></i> Cultivate mutually beneficial partnerships with customers, associates and suppliers.</li>
            <li class="list-item-icon"><i class="fa fa-arrow-right"></i> Practice servant leadership and demand the highest standards.</li>
          </ul>
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
        <div class="col-lg-3">
          <img class="img-fluid" src="images/members/m1.jpg" alt="Transport">
          <div class="content">
            <h3>SAINTMOSES EROMOSELE</h3>
            <h5>Founder & CEO Givitec Ltd.,</h5>
            <p>She is charged with determining the best ways for us to visually represent our...</p>
          </div>
        </div>
        <div class="col-lg-3">
          <img class="img-fluid" src="images/members/m2.jpg" alt="Transport">
          <div class="content">
            <h3>GORGINA EROMOSELE</h3>
            <h5>Director of Administration,</h5>
            <p>He is charged with determining the best ways for us to visually represent our...</p>
          </div>
        </div>
        <div class="col-lg-3">
          <img class="img-fluid" src="images/members/m3.jpg" alt="Transport">
          <div class="content">
            <h3>IYOBOSA AIREHENBUWA</h3>
            <h5>IT/TECHNICAL MANAGER,</h5>
            <p>He is charged with determining the best ways for us to visually represent our...</p>
          </div>
        </div>
        <div class="col-lg-3">
          <img class="img-fluid" src="images/members/m4.jpg" alt="Transport">
          <div class="content">
            <h3>OSARUGUE IDEMUDIA</h3>
            <h5>Company Secretary,</h5>
            <p>He is charged with determining the best ways for us to visually represent our...</p>
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
        <a href="{{ route('contact') }}" class="btn btn-primary">CONTACT US<i class="fa fa-map-marker"></i></a>
      </div>
    </div>
  </div>
</section>

@endsection