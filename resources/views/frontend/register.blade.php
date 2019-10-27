@extends('layouts.app')
@section('content')
<div class="page-title" style="background-image: url('images/title/bg1.png')">
  <div class="container">
    <h1 class="entry-title"></h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="active">Training</li>
    </ol>
  </div>
</div>
<section class="container">
    <div id="accordion" class="accordion" role="tablist" aria-multiselectable="false">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="">
        <h4 class="panel-title">
            <a data-toggle="collapse"   aria-expanded="true" >
            <i class="fa fa-arrow-right"></i> <span>Registration Form</span>
            </a>
        </h4>
        </div>
        <div class="panel-collapse" role="tabpanel" >
        <div class="panel-content">
           <p style="font-size:16px;"><div class="alert alert-warning" >Online Registration is ongoing...</div></p>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- SERVICES VERTICAL LIST
================================================== -->
<section class="featured-services service-img-list">
  <div class="container">
    
    <form id="form" action="" method="post" enctype="multipart/form-data">
        <div class="row justify-content-center">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="form-group">
                    <select name="program" id="program" class="form-control">
                        <option value="">Select Programme</option>
                        <option {{ $program == "Desktop Publishing"?'selected':'' }} value="Desktop Publishing">Desktop Publishing</option>
                        <option {{ $program == "Graphics"?'selected':'' }} value="Web Designing">Graphics</option>
                        <option {{ $program == "Mobile App Development"?'selected':'' }} value="Mobile App Development">Mobile App Development</option>
                        <option {{ $program == "Python"?'selected':'' }} value="Python">Python</option>
                        <option {{ $program == "Laravel"?'selected':'' }} value="Laravel">Laravel</option>
                        <option {{ $program == "Java"?'selected':'' }} value="Java">Java</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" id="fname" name="first_name" value="{{ old('first_name') }}" class="form-control" placeholder="First Name">
                </div>
                <div class="form-group">
                <input type="text" id="name" name="last_name" value="{{ old('last_name') }}"class="form-control" placeholder="Last Name">
                </div>
                <div class="form-group">
                <input type="text" id="email" name="email"  value="{{ old('email') }}" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                <input type="text" id="phone" name="phone_num" value="{{ old('phone_num') }}" class="form-control" placeholder="Phone Number">
                </div>

                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-11 col-md-offset-1">
            <div class="form-group">
                    <button type="submit" id="submit" class="btn btn-info">Submit Application</button>
                </div>
            </div>
        </div>
    </form>
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
        var  fname = $('#fname').val();
        var  program = $('#program').val();

        var error = [];
       if(name == ''){
          error.push('Your name is required');
       }
       if(email == ''){
         error.push('Your email is required'); 
       }
       if(phone == ''){
         error.push('Your phone number is required'); 
       }
       if(fname == ''){
        error.push('Your registration number is required'); 
       }
       if(program == ''){
        error.push('Your programme is required'); 
       }

      $.ajax({
        url: '{{ route('training_register') }}',
        data: new FormData($('#form')[0]),
        dataType:'json',
      async:false,
      type:'post',
      processData: false,
      contentType: false, 
        success: function(response){
          console.log('hi')
          if(response['status'] == 'sent'){
            $('#form').prepend(`<div class="alert alert-success text-center fade in">
                              <button data-dismiss="alert" class="close close-sm" type="button">
                                  <i class="icon-remove"></i>
                              </button>
                              Thank you for applying to Givitec Academy.
                          </div>`);
          }else{
            $('#form').prepend(`<div class="alert alert-danger text-center fade in">
                              <button data-dismiss="alert" class="close close-sm" type="button">
                                  <i class="icon-remove"></i>
                              </button>
                              There was error(s) with the form, please check the form and try again.
                          </div>`);
          }
          $("#name, #email, #program, #fname, #phone").val('');

          setTimeout(function(){
            $(document).find('.alert').css('display', 'none');
          },2500)
        },
        error: function(response){
          $.each(JSON.parse(response.responseText).errors, function(index,value){
            $('#form').prepend(`<div class="alert alert-danger text-center fade in">
                              <button data-dismiss="alert" class="close close-sm" type="button">
                                  <i class="icon-remove"></i>
                              </button>
                              `+value[0]+`
                          </div>`);
          })
        }
      });
     });
  });
</script>
<style>


</style>
@endsection
