@extends('layouts.app')
@section('content')
<div class="page-title" style="background-image: url('images/title/bg1.png')">
  <div class="container">
    <h1 class="entry-title"></h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="active">Scholarship</li>
    </ol>
  </div>
</div>
<section class="container">
    <div id="accordion" class="accordion" role="tablist" aria-multiselectable="false">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="">
        <h4 class="panel-title">
            <a data-toggle="collapse"   aria-expanded="true" >
            <i class="fa fa-arrow-right"></i> <span>Scholarship Application</span>
            </a>
        </h4>
        </div>
        <div class="panel-collapse" role="tabpanel" >
        <div class="panel-content">
           <p style="font-size:16px;">Are you a JAMBITE seeking admission into any Nigerian university - whatever your UTME score is? Do you need Scholarship for yourself or a loved one? <br><br>
            Take advantage of this opportunity by applying for <b>The GIVITEC Scholarship 2019</b> which will take care of your First Year School Fees.
            <br>
            Application form is free, online - Apply NOW.
           <br><br><strong>NOTE:</strong> Successful applicants will be contacted and posted to an accredited CBT Centre for the Aptitude Test. CBT Centres are not allowed to charge more than One Thousand Naira for administering the exam.</p>
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
            <div class="col-md-8">
                <div class="form-group">
                    <input type="text" id="reg_number" name="reg_number" value="{{ old('reg_number') }}" class="form-control" placeholder="Reg Number">
                </div>
                <div class="form-group">
                <input type="text" id="name" name="name" value="{{ old('name') }}"class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                <input type="text" id="email" name="email"  value="{{ old('email') }}" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                <input type="text" id="phone" name="phone_num" value="{{ old('phone_num') }}" class="form-control" placeholder="Phone Number">
                </div>
                <div class="row">
                @foreach($subjects as $subject)
                    <div class="col-md-3">
                        <label for="{{ $subject->id }}">
                            <input type="checkbox" class="subject" id="subject{{ $subject->id }}"  value="{{ $subject->id }}" {{ $subject->id == 1 ? 'checked disabled' : '' }} name="subject[]" > {{ App\Subject::subject($subject->id) }}
                        </label>
                    </div>
                @endforeach
                </div>

                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="form-group">
                    <button type="submit" id="submit" class="btn btn-info">Submit Application</button>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <label for="file">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px; border: 1px solid">
                                    <img id="image1" src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                            </label>
                            <span class="btn btn-white btn-file">
                            <span  class="fileupload-new btn btn-success"><i class="fa fa-clips"></i> Select Passport</span>
                            <span class="fileupload-exists btn btn-success"><i class="fa fa-undo"></i> Change</span>
                            <input id="file" type="file" name="image"  class="defaults">
                            </span>
                        </div>
                    </div>
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
    $('.fileupload-preview').find('img').attr('src', '')
       $('.fileupload-new').css('display', 'block')
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
@endsection
