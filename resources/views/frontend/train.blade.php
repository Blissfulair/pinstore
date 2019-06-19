@extends('layouts.app')
@section('content')
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap-reset.css') }}" rel="stylesheet">
    <!--external css-->
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet" />

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
           <p style="font-size:16px;">APPLY HERE FOR THE GIVITEC ACADEMY COMPUTER TRAINING COURSE, HOLDING AT 192 MM WAY, BENIN CITY - 08079436049, 09016659733</p>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- SERVICES VERTICAL LIST
================================================== -->
<section class="featured-services service-img-list">
  <div class="container">
            <div class="row justify-content-center">
            <div class="col-md-1"></div>
            <div class="col-md-10">
            <div class="row product-list">
                          <div class="col-md-4">
                              <section class="panel advert-items">
                                  <div style="background-image:url('images/training/desktop_publishing.png');" class="custom-center"></div>
                                  <div class="panel-body text-center">
                                      <h6 style="text-align:center;color:green;font-size:18px;font-weight:500" class="price">
                                              Desktop Publishing
                                      </h6>
                                      <div class="amount">
                                        <span style="text-align:center;margin-left:10px; font-size: 26px;color: white;">&#8358;3000/ </span> <del style="color: white;font-size: 18px;">&#8358;30000</del><span style="float: right;margin-right: 10px;margin-top: 11px;" class="badge"> -90%</span>
                                      </div>
                                  </div>
                                 <div style="width:100%">
                                    <form action="{{ route('register_training') }}" method="post">
                                        <button class="btn btn-info" style="width:60%; margin:0 20%">APPLY</button>
                                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                                        <input type="hidden" name="program" value="Desktop Publishing">
                                    </form>
                                 </div>
                              </section>
                          </div>
                          <div class="col-md-4">
                              <section class="panel advert-items">
                                  <div style="background-image:url('images/training/webdesigning.jpg');" class="custom-center"></div>
                                  <div class="panel-body text-center">
                                      <h6 style="text-align:center;color:green;font-size:18px;font-weight:500" class="price">
                                              Web Designing
                                      </h6>
                                      <div class="amount">
                                        <span style="text-align:center;margin-left:10px; font-size: 26px;color: white;">&#8358;4000/ </span> <del style="color: white;font-size: 18px;">&#8358;40000</del><span style="float: right;margin-right: 10px;margin-top: 11px;" class="badge"> -90%</span>
                                      </div>
                                  </div>
                                 <div style="width:100%">
                                 <form action="{{ route('register_training') }}" method="post">
                                        <button class="btn btn-info" style="width:60%; margin:0 20%">APPLY</button>
                                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                                        <input type="hidden" name="program" value="Web Designing">
                                    </form>
                                </div>
                              </section>
                          </div>
                          <div class="col-md-4">
                              <section class="panel advert-items">
                                  <div style="background-image:url('images/training/ionic.png');" class="custom-center"></div>
                                  <div class="panel-body text-center">
                                      <h6 style="text-align:center;color:green;font-size:18px;font-weight:500" class="price">
                                              Mobile App Development
                                      </h6>
                                      <div class="amount">
                                        <span style="text-align:center;margin-left:10px; font-size: 26px;color: white;">&#8358;4000/ </span> <del style="color: white;font-size: 18px;">&#8358;40000</del><span style="float: right;margin-right: 10px;margin-top: 11px;" class="badge"> -90%</span>
                                      </div>
                                  </div>
                                 <div style="width:100%">
                                 <form action="{{ route('register_training') }}" method="post">
                                        <button class="btn btn-info" style="width:60%; margin:0 20%">APPLY</button>
                                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                                        <input type="hidden" name="program" value="Mobile App Development">
                                    </form>
                                 </div>
                              </section>
                          </div>
                          <div class="col-md-4">
                              <section class="panel advert-items">
                                  <div style="background-image:url('images/training/python.jpg');" class="custom-center"></div>
                                  <div class="panel-body text-center">
                                      <h6 style="text-align:center;color:green;font-size:18px;font-weight:500" class="price">
                                              Python
                                      </h6>
                                      <div class="amount">
                                        <span style="text-align:center;margin-left:10px; font-size: 26px;color: white;">&#8358;4000/ </span> <del style="color: white;font-size: 18px;">&#8358;60000</del><span style="float: right;margin-right: 10px;margin-top: 11px;" class="badge"> -93.33%</span>
                                      </div>
                                  </div>
                                 <div style="width:100%">
                                 <form action="{{ route('register_training') }}" method="post">
                                 <button class="btn btn-info" style="width:60%; margin:0 20%">APPLY</button>
                                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                                        <input type="hidden" name="program" value="Python">
                                    </form>
                                 </div>
                              </section>
                          </div>
                          <div class="col-md-4">
                              <section class="panel advert-items">
                                  <div style="background-image:url('images/training/laravel.jpg');" class="custom-center"></div>
                                  <div class="panel-body text-center">
                                      <h6 style="text-align:center;color:green;font-size:18px;font-weight:500" class="price">
                                              Laravel
                                      </h6>
                                      <div class="amount">
                                        <span style="text-align:center;margin-left:10px; font-size: 24px;color: white;">&#8358;10000/ </span> <del style="color: white;font-size: 16px;">&#8358;100,000</del><span style="float: right;margin-right: 10px;margin-top: 11px;" class="badge"> -90%</span>
                                      </div>
                                  </div>
                                 <div style="width:100%">
                                 <form action="{{ route('register_training') }}" method="post">
                                 <button class="btn btn-info" style="width:60%; margin:0 20%">APPLY</button>
                                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                                        <input type="hidden" name="program" value="Laravel">
                                    </form>
                                 </div>
                              </section>
                          </div>
                          <div class="col-md-4">
                              <section class="panel advert-items">
                                  <div style="background-image:url('images/training/java.jpg');" class="custom-center"></div>
                                  <div class="panel-body text-center">
                                      <h6 style="text-align:center;color:green;font-size:18px;font-weight:500" class="price">
                                              Java
                                      </h6>
                                      <div class="amount">
                                        <span style="text-align:center;margin-left:10px; font-size: 24px;color: white;">&#8358;10000/ </span> <del style="color: white;font-size: 14px;">&#8358;120000</del><span style="float: right;margin-right: 10px;margin-top: 11px;" class="badge"> -91.66%</span>
                                      </div>
                                  </div>
                                 <div style="width:100%">
                                 <form action="{{ route('register_training') }}" method="post">
                                 <button class="btn btn-info" style="width:60%; margin:0 20%">APPLY</button>
                                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                                        <input type="hidden" name="program" value="Java">
                                    </form>
                                 </div>
                              </section>
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
        var  image = $('#file').val();
        var subject = [];
        for(var i=1; i < 16; i++){
            if($('#subject'+i).prop('checked') === true){
                subject.push(i);
                
            }
        }
        var  reg_number = $('#reg_number').val();
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
       if(subject.length < 4){
         error.push('You are to select four subjects'); 
       }
       if(reg_number == ''){
        error.push('Your registration number is required'); 
       }
       if(image == ''){
        error.push('Your passport is required'); 
       }
       if(error.length != 0 ){
          error.forEach(function(value){
            $('#form').prepend(`<div class="alert alert-danger text-center fade in">
                              <button data-dismiss="alert" class="close close-sm" type="button">
                                  <i class="icon-remove"></i>
                              </button>
                             `+value+`
                          </div>`);
          })

            return;
       }

      $.ajax({
        url: '{{ route('save_scholarship') }}',
        data: new FormData($('#form')[0]),
        dataType:'json',
      async:false,
      type:'post',
      processData: false,
      contentType: false, 
        success: function(response){
            console.log(response)
    // $('.fileupload-preview').find('img').attr('src', '')
    //    $('.fileupload-new').css('display', 'block')
        $('span').find('.fileupload-exists').css('display', 'none');
          if(response['success'] == 'sent'){
            $('#form').prepend(`<div class="alert alert-success text-center fade in">
                              <button data-dismiss="alert" class="close close-sm" type="button">
                                  <i class="icon-remove"></i>
                              </button>
                              Your application has been sent successfully, Thank you!.
                          </div>`);
          }else{
            $('#form').prepend(`<div class="alert alert-danger text-center fade in">
                              <button data-dismiss="alert" class="close close-sm" type="button">
                                  <i class="icon-remove"></i>
                              </button>
                              Your message could not be sent, please check the form and submit again.
                          </div>`);
          }
          $("#name, #email, #file, #reg_number, #phone").val('');

            $('.subject').prop('checked', false);
            $('#subject1').prop('checked', true);

          setTimeout(function(){
            $(document).find('.alert').css('display', 'none');
          },2500)
        }
      });
     });
  });
</script>
<style>
.breadcrumb{
    background-color:#232331 !important;
}

</style>
@endsection
