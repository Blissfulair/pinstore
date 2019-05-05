@extends('layouts.app')
@section('content')
<div class="page-title" >
  <div class="container">
    <h1 class="entry-title">About Us</h1>
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
          <p>GROUND TRANSPORT<span>90%</span></p>
          <progress class="ui-progress" value="90" max="100"></progress>

          <p>CARGO</p><span>65%</span>
          <progress class="ui-progress" value="65" max="100"></progress>

          <p>WAREHOUSING</p><span>80%</span>
          <progress class="ui-progress" value="60" max="100"></progress>

          <p>LOGISTIC SERVICES</p><span>70%</span>
          <progress class="ui-progress" value="70" max="100"></progress>

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

<section class="service-icon-list">
  <div class="container">
    <div class="custom-heading section-heading three-slashes">
      <h2>CERTIFICATIONS</h2>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="content">
          <div class="row">
            <div class="col-md-3">
              <div class="type">
                <i class="fa fa-truck"></i>
              </div>
            </div>
            <div class="col-md-9">
              <h3>GROUND TRANSPORT</h3>
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
                <i class="fa fa-codepen"></i>
              </div>
            </div>
            <div class="col-md-9">
              <h3>WAREHOUSING</h3>
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
                <i class="fa fa-dropbox"></i>
              </div>
            </div>
            <div class="col-md-9">
              <h3>PACKAGING AND STORAGE</h3>
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
                <i class="fa fa-fighter-jet"></i>
              </div>
            </div>
            <div class="col-md-9">
              <h3>LOGISTIC SERVICE</h3>
              <p>Transport offers a host of logistic management services and supply chain solutions.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
    <div class="col-lg-8">
      <div class="custom-heading part-heading three-slashes">
        <h2>THE HISTORY</h2>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <article class="post history-post has-post-thumbnail hentry">
            <div class="post-image">
              <div class="dates">
                <span class="year">2015</span>
              </div>
              <img class="img-fluid" src="images/posts/370x220/post-image_01.jpg" alt="hero-bg">
            </div>
            <!-- post-image -->

            <header class="entry-header">
              <h3 class="entry-title"><a href="#">STRUCTURE WAS FOUNDED</a></h3>
            </header>
            <!-- .entry-header -->
          </article>
        </div>
        <div class="col-lg-3">
          <article class="post history-post has-post-thumbnail hentry">
            <div class="post-image">
              <div class="dates">
                <span class="year">2015</span>
              </div>
              <img class="img-fluid" src="images/posts/370x220/post-image_02.jpg" alt="hero-bg">
            </div>
            <!-- post-image -->

            <header class="entry-header">
              <h3 class="entry-title"><a href="#">STRUCTURE IS GROWING</a></h3>
            </header>
            <!-- .entry-header -->
          </article>
        </div>
        <div class="col-lg-3">
          <article class="post history-post has-post-thumbnail hentry">
            <div class="post-image">
              <div class="dates">
                <span class="year">2015</span>
              </div>
              <img class="img-fluid" src="images/posts/370x220/post-image_03.jpg" alt="hero-bg">
            </div>
            <!-- post-image -->

            <header class="entry-header">
              <h3 class="entry-title"><a href="#">BECOME THE LEADING</a></h3>
            </header>
            <!-- .entry-header -->
          </article>
        </div>
        <div class="col-lg-3">
          <article class="post history-post has-post-thumbnail hentry">
            <div class="post-image">
              <div class="dates">
                <span class="year">2015</span>
              </div>
              <img class="img-fluid" src="images/posts/370x220/post-image_04.jpg" alt="hero-bg">
            </div>
            <!-- post-image -->

            <header class="entry-header">
              <h3 class="entry-title"><a href="#">PIONEERING THE USE OF STEEL-REINFORCED CONCRETE</a></h3>
            </header>
            <!-- .entry-header -->
          </article>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="talking">
        <div class="custom-heading part-heading three-slashes">
          <h2>THEY’RE TALKING</h2>
        </div>
        <div class="owl-carousel owl-theme ui-carousel talking-carousel">
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
            <h3>DUFFY MORE</h3>
            <h5>Founder & CEO ThemeMove Ltd.,</h5>
            <p>She is charged with determining the best ways for us to visually represent our...</p>
          </div>
        </div>
        <div class="col-lg-3">
          <img class="img-fluid" src="images/members/m2.jpg" alt="Transport">
          <div class="content">
            <h3>JEREMY DUN</h3>
            <h5>Founder & CEO ThemeMove Ltd.,</h5>
            <p>He is charged with determining the best ways for us to visually represent our...</p>
          </div>
        </div>
        <div class="col-lg-3">
          <img class="img-fluid" src="images/members/m3.jpg" alt="Transport">
          <div class="content">
            <h3>LOLITA BURN</h3>
            <h5>Founder & CEO ThemeMove Ltd.,</h5>
            <p>He is charged with determining the best ways for us to visually represent our...</p>
          </div>
        </div>
        <div class="col-lg-3">
          <img class="img-fluid" src="images/members/m4.jpg" alt="Transport">
          <div class="content">
            <h3>JOHNNY CHO</h3>
            <h5>Founder & CEO ThemeMove Ltd.,</h5>
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