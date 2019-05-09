@extends('layouts.app')
@section('content')
<div class="page-title" style="background-image: url('images/title/bg1.png')">
  <div class="container">
    <h1 class="entry-title"></h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="active">Contact</li>
    </ol>
  </div>
</div>

<div id="map-canvas" class="thememove-gmaps" data-address="40.7590615,-73.969231" data-height="480" data-width="100%" data-zoom_enable="" data-zoom="16" data-map_type="roadmap" data-map_style="style1"></div>


<section class="info-contact">
  <div class="container">
    <div class="row">

      <div class="col-lg-3">

        <div class="custom-heading part-heading three-slashes">
          <h2>CONTACT</h2>
        </div>
        <div class="office">
          <p><i class="fa fa-map-marker"></i> 192 MM Way, Benin City, Nigeria.
          </p>
          <p><i class="fa fa-phone"></i> (+234)807 943 6049</p>
          <p><i class="fa fa-envelope"></i> info@givitec.com </p>
          <p><i class="fa fa-fax"></i> (+234)807 943 6049 </p>
          <p><i class="fa fa-clock-o"></i> Mon - Sat: 8:00 - 18:00</p>
        </div>
      </div>
      <div class="contact-content col-lg-9">

        <div class="custom-heading part-heading three-slashes">
          <h2>FILL CONTACT FORM</h2>
        </div>
        <p id="contact">{{ 'Talk to a customer care agent, your satisfaction is our goal...' }}</p>
        
        <div class="contact-form">
          <form action="#" id="form" method="post" novalidate="novalidate">
            <div class="row">
              <div class="col-lg-6">
                <input class="form-control" id="name" type="text" name="name" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Your name here">
              </div>
              <div class="col-lg-6">
                <input class="form-control" id="email" type="email" name="email" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Your email">
              </div>
              <div class="col-lg-6">
                <input class="form-control" id="subject" type="text" name="subject" value="" size="40" aria-invalid="false" placeholder="Subject">
              </div>

              <div class="col-lg-6">
                <input class="form-control" id="phone" type="text" name="phone" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Phone">
              </div>
              <div class="col-xs-12">
                <textarea class="form-control" id="message" name="message" cols="40" rows="4" aria-invalid="false" placeholder="Your message"></textarea>
              </div>
              <div class="col-xs-12">
                <input class="btn btn-primary" id="submit" type="submit" value="SEND MESSAGE">
              </div>
              @csrf()
            </div>
          </form>

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
<script>
  jQuery(document).ready(function($){
    $('#submit').on('click', function(e){
       e.preventDefault();
       $(document).find('.alert').css('display', 'none')
        var name = $('#name').val();
        var email = $('#email').val();
        var  phone = $('#phone').val();
        var  subject = $('#subject').val();
        var  message = $('#message').val();
        var error = [];
       if(name == ''){
          error[0] = 'Your name is required';
       }
       if(email == ''){
         error[1] = 'Your email is required'
       }
       if(phone == ''){
         error[2] = 'Your phone number is required'
       }
       if(subject == ''){
         error[3] = 'The subject is required'
       }
       if(message == ''){
        error[4] = 'The message is required'
       }
       if(error.length != 0 ){
          error.forEach(function(value){
            $('#contact').append(`<div class="alert alert-danger text-center fade in">
                              <button data-dismiss="alert" class="close close-sm" type="button">
                                  <i class="icon-remove"></i>
                              </button>
                             `+value+`
                          </div>`);
          })

            return;
       }

      $.ajax({
        type: 'POST',
        url: '{{ route('contact_form') }}',
        data: {
          _token: '{{ Session::token() }}',
          name :$('#name').val(),
          email :$('#email').val(),
          phone :$('#phone').val(),
          subject :$('#subject').val(),
          message :$('#message').val(),
        }, 
        success: function(response){
          if(response['status'] == 'sent'){
            $('#contact').append(`<div class="alert alert-success text-center fade in">
                              <button data-dismiss="alert" class="close close-sm" type="button">
                                  <i class="icon-remove"></i>
                              </button>
                              Your message has been sent successfully, Thank you for contacting us.
                          </div>`);
          }else{
            $('#contact').append(`<div class="alert alert-danger text-center fade in">
                              <button data-dismiss="alert" class="close close-sm" type="button">
                                  <i class="icon-remove"></i>
                              </button>
                              Your message could not be sent, please check the form and submit again.
                          </div>`);
          }
          setTimeout(function(){
            $(document).find('.alert').css('display', 'none');
          },2500)
        }
      });
     });
  });
</script>
@endsection