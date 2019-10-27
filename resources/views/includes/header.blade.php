<nav id="mobile-menu" style="display:none">
    <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ route('services') }}">Services</a></li>
        <li><a href="{{ route('careers') }}">Careers</a></li>
        <li><a href="{{ route('about') }}">About us</a></li>
        <li><a href="{{ route('trainings') }}">Scholarship</a></li>
        <li><a href="{{ route('train') }}">Training</a></li>
        <li><a href="{{ route('bulletins') }}">Bulletins</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
</nav>
    <?php $setting =  \App\Setting::find(1); ?>
 <header class="site-header style-1">
      <div class="container">
        <div class="row">
          <div class="col-xs-10 col-lg-2 site-branding">
            <a href="{{ url('/') }}" rel="home">
              <img src="{{ asset('images/logo/'.$setting->logo) }}" alt="">
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
                          <a href="https://facebook.com/{{ $setting?$setting->facebook:'' }}"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="menu-item">
                          <a href="http://plus.google.com/{{ $setting?$setting->gplus:'' }}"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li class="menu-item">
                          <a href="http://twitter.com/{{ $setting?$setting->twitter:'' }}"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="menu-item">
                          <a href="http://youtube.com/{{ $setting?$setting->youtube:'' }}"><i class="fa fa-youtube-play"></i></a></li>
                        <li id="menu-item680" class="menu-item">
                          <a href="http://foursquare.com/{{ $setting?$setting->foursquare:'' }}"><i class="fa fa-vimeo-square"></i></a></li>
                        <li id="menu-item681" class="menu-item">
                          <a href="/feed/{{ $setting?$setting->feed:'' }}"><i class="fa fa-dribbble"></i></a>
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
                          <h3>{{ $setting?$setting->number:'' }}</h3>
                          <span>{{ $setting?$setting->email:'' }}</span>
                        </div>
                        <div class="col-md-4">
                          <i class="fa fa-home"></i>
                          <h3>{{ $setting?$setting->address:'' }}</h3>
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
      </li>

      <li class="nav-item  mega-fw">
        <a class="nav-link" role="button" aria-haspopup="true" aria-expanded="false" href="{{ route('services') }}">SERVICES</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link" href="{{ route('careers') }}">CAREER</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link" href="{{ route('about') }}">ABOUT US</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link" href="{{ route('trainings') }}">SCHOLARSHIP</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="{{ route('train') }}">TRAINING</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="{{ route('bulletins') }}">BULLETINS</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('contact') }}">CONTACT US</a>
      </li>

    </ul>

  </div>
</nav>
</header>