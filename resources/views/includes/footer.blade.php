<?php $setting =  \App\Setting::find(1); ?>
<footer class="site-footer">
        <div class="container">
            <div class="row">
            <div class="col-md-4">
                <aside class="widget widget_text"><h3 class="widget-title"><span>About Us</span></h3>
                <div class="textwidget">
                    <p>
                    <img alt="Givitec logo" src="{{ asset('images/logo/'. $setting->logo ) }}"><br>
                        {{ $setting?$setting->about:'' }}
                    </p>
                </div>
                </aside>
                <div class="social-menu">
                    <ul id="social-menu-footer" class="menu">
                    <li class="menu-item">
                        <a href="https://facebook.com/{{ $setting?$setting->facebook:'' }}"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="menu-item">
                        <a href="http://plus.google.com/{{ $setting?$setting->gplus:'' }}"><i class="fa fa-google-plus"></i></a>
                    </li>
                    <li class="menu-item">
                        <a href="https://twitter.com/{{ $setting?$setting->twitter:'' }}"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li class="menu-item">
                        <a href="http://youtube.com/{{ $setting?$setting->youtube:'' }}"><i class="fa fa-youtube-play"></i></a></li>
                    <li class="menu-item">
                        <a href="http://foursquare.com/{{$setting?$setting->foursquare:''}}"><i class="fa fa-vimeo-square"></i></a></li>
                    <li class="menu-item">
                        <a href="/feed"><i class="fa fa-dribbble"></i></a>
                    </li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <aside id="better-menu-widget-2" class="widget better-menu-widget">
                <h3 class="widget-title"><span>Information</span></h3>
                <div class="menu-information-container">
                    <ul id="menu-information" class="menu">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li><a href="{{ route('careers') }}">Career</a></li>
                    <li><a href="{{ route('trainings') }}">Trainings</a></li>
                    <li><a href="{{ route('trainings') }}">Certifications</a></li>
                    <li><a href="#">Policy</a></li>
                    <li><a href="{{ route('about') }}">About us</a></li>
                    <li><a href="{{ route('contact') }}">Contact us</a></li>
                    <li><a target="_blank" href="http://givitec.com/webmail">Webmail</a></li>
                    <li><a href="{{ route('bulletins') }}">Givitec Updates</a></li>
                    </ul>
                </div>
                </aside>
            </div>
            <div class="col-sm-6 col-md-4">
                <aside class="widget widget_text">
                <h3 class="widget-title"><span>Office Location</span></h3>
                <div class="textwidget">
                    <div class="office">
                    <p><i class="fa fa-map-marker"></i> 192 MM Way, Benin City, Nigeria.
                    </p>
                    <p><i class="fa fa-phone"></i> (+234)807 943 6049 </p>
                    <p><i class="fa fa-envelope"></i> info@givitec.com </p>
                    <p><i class="fa fa-fax"></i> (+234)807 943 6049 </p>
                    <p><i class="fa fa-clock-o"></i> Mon - Sat: 8:00 - 18:00</p>
                    </div>
                </div>
                </aside>
            </div>
            </div>
        </div>
</footer>

<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-4 left">
                Designed by Givitec Ltd</a>.
            </div>
            <div class="col-md-8">
                <div class="right">
                © Copyrights {{ date('Y') }} Givitec Ltd. All rights reserved.
                </div>
            </div>
        </div>
    </div>
</div>