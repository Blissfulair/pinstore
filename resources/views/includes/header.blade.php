<nav id="mobile-menu" style="display:none">
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#about">About us</a>
            <ul>
            <li><a href="#about/history">History</a></li>
            <li><a href="#about/team">The team</a>
                <ul>
                <li><a href="#about/team/management">Management</a></li>
                <li><a href="#about/team/sales">Sales</a></li>
                <li><a href="#about/team/development">Development</a></li>
                </ul>
            </li>
            <li><a href="#about/address">Our address</a></li>
            </ul>
        </li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</nav>
    
 <header class="site-header style-1">
      <div class="container">
        <div class="row">
          <div class="col-xs-10 col-lg-2 site-branding">
            <a href="{{ url('/') }}" rel="home">
              <img src="{{ asset('images/logo/givitec.png') }}" alt="">
            </a>
          </div>
          <div class="col-lg-10 hidden-md-down">
            <div class="site-info">
              <div class="top-menu-bar">
                <div class="row">
                  <div class="col-md-8 col-xl-9">
                    <div class="top-menu">
                      <ul id="top-menu" class="menu">
                        <li class="menu-item menu-item-has-children">
                          <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="menu-item"><a href="#">Policy</a></li>
                        <li class="menu-item"><a target="_blank" href="http://www.givitec.com/webmail">Webmail</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-4 col-xl-3">
                    <div class="social-menu">
                      <ul id="social-menu-top" class="menu">
                        <li class="menu-item">
                          <a href="http://facebook.com"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="menu-item">
                          <a href="http://twitter.com"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li class="menu-item">
                          <a href="http://plus.google.com"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="menu-item">
                          <a href="http://linkedin.com"><i class="fa fa-youtube-play"></i></a></li>
                        <li id="menu-item680" class="menu-item">
                          <a href="http://foursquare.com"><i class="fa fa-vimeo-square"></i></a></li>
                        <li id="menu-item681" class="menu-item">
                          <a href="/feed"><i class="fa fa-dribbble"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="contact-bar">
                <div class="row">
                  <div class="col-lg-10 col-xl-11">
                    <div class="contact-detail">
                      <div class="row">
                        <div class="col-md-4 col-xl-3 col-xl-offset-1">
                          <i class="fa fa-phone"></i>
                          <h3>0807 943 6049</h3>
                          <span>info@givitec.com</span>
                        </div>
                        <div class="col-md-4">
                          <i class="fa fa-home"></i>
                          <h3>192 MM Way</h3>
                          <span>Benin City, Nigeria.</span>
                        </div>
                        <div class="col-md-4">
                          <i class="fa fa-clock-o"></i>
                          <h3>Mon - Sat : 8AM - 6PM</h3>
                          <span>Opening Time</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-1 hidden-xs hidden-sm hidden-md search-box">
                    <a href="#search"><i class="fa fa-search"></i></a>
                  </div>
                  <div class="col-xs-2 col-lg-1 hidden-xl-up">
                    <a class="trigger-menu" href="#mobile-menu"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-2 col-lg-1 hidden-lg-up">
            <a class="trigger-menu" href="#mobile-menu"></a>
          </div>
        </div>
      </div>
      
<div id="search">
  <button type="button" class="close">×</button>
  <form>
    <input type="search" value="" placeholder="type keyword(s) here" />
    <button type="submit" class="btn btn-primary">SEARCH</button>
  </form>
</div>

<nav class="navbar mega navbar-dark bg-dark hidden-lg-down">
  <div class="container">
    <ul class="nav navbar-nav">

      <li class="nav-item dropdown active">
        <a class="nav-link" href="{{ url('/') }}" role="button" aria-haspopup="true" aria-expanded="false">HOME <span class="sr-only">(current)</span></a>
        <ul class="dropdown-menu">
          <li class="dropdown-item">
            <a tabindex="-1" href="index.html"> HOME 1 </a>
          </li>
          <li class="dropdown-item">
            <a tabindex="-1" href="index_2.html"> HOME 2 </a>
          </li>
          <li class="dropdown-item">
            <a tabindex="-1" href="index_3.html"> HOME 3 </a>
          </li>
          <li class="dropdown-item">
            <a tabindex="-1" href="index_4.html"> HOME 4 </a>
          </li>
          <li class="dropdown-item">
            <a tabindex="-1" href="index_5.html"> HOME 5 </a>
          </li>
          <li class="dropdown-item">
            <a tabindex="-1" href="index_6.html"> HOME 6 </a>
          </li>
          <li class="dropdown-item">
            <a tabindex="-1" href="index_7.html"> HOME 7 </a>
          </li>
        </ul>
      </li>

      <li class="nav-item dropdown mega-fw">
        <a class="nav-link" role="button" aria-haspopup="true" aria-expanded="false" href="{{ route('services') }}">SERVICES</a>
        <div class="dropdown-menu">
          <div class="mega-content">
            <div class="row">

              <img class="mega-menu-img" src="images/menu/menu-img.png" alt="Transport Menu Image">

              <ul class="col-sm-3 col-sm-offset-3  list-unstyled">
                <li class="feature-list-item"><h6 class="feature-list-title"><a href="#"><i class="feature-list-icon fa fa-cubes"></i>  Page Builder ($28 saved)</a></h6></li>
                <li class="feature-list-item"><h6 class="feature-list-title"><a href="#"><i class="feature-list-icon fa fa-picture-o"></i>  Revolution Slider ($18 saved)</a></h6></li>
                <li class="feature-list-item"><h6 class="feature-list-title"><a href="#"><i class="feature-list-icon fa fa-th-large"></i> Essential Grid ($25 saved)</a></h6></li>
                <li class="feature-list-item"><h6 class="feature-list-title"><a href="#"><i class="feature-list-icon fa fa-puzzle-piece"></i>  Templatera ($11 saved)</a></h6></li>
                <li class="feature-list-item"><h6 class="feature-list-title"><a href="#"><i class="feature-list-icon fa fa-space-shuttle"></i>  Blazing Fast Loading Speed</a></h6></li>
                <li class="feature-list-item"><h6 class="feature-list-title"><a href="#"><i class="feature-list-icon fa fa-hand-o-up"></i> feature-list-icon One-Click Sample Data</a></h6></li>
                <li class="feature-list-item"><h6 class="feature-list-title"><a href="#"><i class="feature-list-icon fa fa-desktop"></i>Live Customizer</a></h6></li>
              </ul>
              <ul class="col-sm-3 list-unstyled">
                <li class="feature-list-item"><h6 class="feature-list-title"><a href="#"><i class="feature-list-icon fa fa-sitemap"></i>Mega Menu Supported</a></h6></li>
                <li class="feature-list-item"><h6 class="feature-list-title"><a href="#"><i class="feature-list-icon fa fa-laptop"></i>Responsive & Retina</a></h6></li>
                <li class="feature-list-item"><h6 class="feature-list-title"><a href="#"><i class="feature-list-icon fa fa-minus"></i>Sticky Header</a></h6></li>
                <li class="feature-list-item"><h6 class="feature-list-title"><a href="#"><i class="feature-list-icon fa fa-css3"></i>Smooth CSS3 Animation</a></h6></li>
                <li class="feature-list-item"><h6 class="feature-list-title"><a href="#"><i class="feature-list-icon fa fa-arrows-v"></i>Parallax Sections</a></h6></li>
                <li class="feature-list-item"><h6 class="feature-list-title"><a href="#"><i class="feature-list-icon fa fa-google"></i>600+ Google Fonts</a></h6></li>
                <li class="feature-list-item"><h6 class="feature-list-title"><a href="#"><i class="feature-list-icon fa fa-language"></i>WPML Supported</a></h6></li>
              </ul>
              <ul class="col-sm-3 list-unstyled">
                <li class="feature-list-item"><h6 class="feature-list-title"><a href="#"><i class="feature-list-icon fa fa-html5"></i>  Bootstrap 3.x Based</a></h6></li>
                <li class="feature-list-item"><h6 class="feature-list-title"><a href="#"><i class="feature-list-icon fa fa fa-shopping-cart"></i>WooCommerce Compatible</a></h6></li>
                <li class="feature-list-item"><h6 class="feature-list-title"><a href="#"><i class="feature-list-icon fa fa-map-marker"></i>Contact Form 7 Support</a></h6></li>
                <li class="feature-list-item"><h6 class="feature-list-title"><a href="#"><i class="feature-list-icon fa fa-home"></i>5+ Homepage Options</a></h6></li>
                <li class="feature-list-item"><h6 class="feature-list-title"><a href="#"><i class="feature-list-icon fa fa-th"></i>2+ Services Page Layouts</a></h6></li>
                <li class="feature-list-item"><h6 class="feature-list-title"><a href="#"><i class="feature-list-icon fa fa-font"></i>Font Awesome Icons</a></h6></li>
                <li class="feature-list-item"><h6 class="feature-list-title"><a href="#"><i class="feature-list-icon fa fa-magic"></i>Unlimited Color</a></h6></li>
              </ul>

            </div>
          </div>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link" href="{{ route('careers') }}">CAREER</a>
        <ul class="dropdown-menu">
          <li class="dropdown-item">
            <a tabindex="-1" href="our-services.html"> LAYOUT 1 </a>
          </li>
          <li class="dropdown-item">
            <a tabindex="-1" href="our-services-02.html"> LAYOUT 2 </a>
          </li>
          <li class="dropdown-item">
            <a tabindex="-1" href="cargo.html"> CARGO </a>
          </li>
          <li class="dropdown-item">
            <a tabindex="-1" href="ware-housing.html"> WAREHOUSING </a>
          </li>
          <li class="dropdown-item">
            <a tabindex="-1" href="storage.html"> STORAGE </a>
          </li>
          <li class="dropdown-item">
            <a tabindex="-1" href="trucking-service.html"> TRUCKING SERVICES </a>
          </li>
          <li class="dropdown-item">
            <a tabindex="-1" href="logistic-service.html"> LOGISTIC SERVICES </a>
          </li>
          <li class="dropdown-item">
            <a tabindex="-1" href="ground-transport.html"> GROUND TRANSPORT </a>
          </li>
        </ul>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link" href="{{ route('about') }}">ABOUT US</a>
        <ul class="dropdown-menu">
          <li class="dropdown-item">
            <a tabindex="-1" href="about-basic.html"> ABOUT BASIC </a>
          </li>
          <li class="dropdown-item">
            <a tabindex="-1" href="core-value.html"> CORE VALUE </a>
          </li>
          <li class="dropdown-item">
            <a tabindex="-1" href="our-team.html"> OUR TEAM </a>
          </li>
          <li class="dropdown-item">
            <a tabindex="-1" href="cetifications.html"> CERTIFICATIONS </a>
          </li>
          <li class="dropdown-item">
            <a tabindex="-1" href="faq.html"> F.A.Q </a>
          </li>
          <li class="dropdown-item">
            <a tabindex="-1" href="pricing.html"> PRICING </a>
          </li>
        </ul>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link" href="{{ route('trainings') }}">TRAININGS</a>
        <ul class="dropdown-menu">
          <li class="dropdown-item">
            <a tabindex="-1" href="shopping-cart.html"> CART </a>
          </li>
          <li class="dropdown-item">
            <a tabindex="-1" href="checkout.html"> CHECKOUT </a>
          </li>
        </ul>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link" href="{{ route('bulletins') }}">BULLETINS</a>
        <ul class="dropdown-menu">
          <li class="dropdown-item">
            <a tabindex="-1" href="blog-grid-style-1.html"> BLOG STYLE 1 </a>
          </li>
          <li class="dropdown-item">
            <a tabindex="-1" href="blog-grid-style-2.html"> BLOG STYLE 2 </a>
          </li>
          <li class="dropdown-item">
            <a tabindex="-1" href="blog-magazine-style.html"> BLOG MAGAZINE STYLE </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('contact') }}">CONTACT US</a>
      </li>

    </ul>

  </div>
</nav>
</header>