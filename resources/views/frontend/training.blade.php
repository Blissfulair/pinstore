@extends('layouts.app')
@section('content')
<div class="page-title" style="background-image: url('images/title/bg01.jpg')">
  <div class="container">
    <h1 class="entry-title">Scholarship Application</h1>
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
           Are you a jambite seeking admission in Nigerian universites, take advantage of this opportunity by applying for Givitec scholarship which will take care of your first year school fees. Application fee is #1000 only.
           <br><strong>NOTE:</strong> Successfully applied candidates will be contacted for examination on their selected subjects.
        </div>
        </div>
    </div>
    </div>
</section>
<!-- SERVICES VERTICAL LIST
================================================== -->
<section class="featured-services service-img-list">
  <div class="container">
    @include('includes.message')
    <div class="row justify-content-center">
        <div class="col-md-1"></div>
        <div class="col-md-8">
            <form action="{{ route('save_scholarship') }}" method="post">
                <div class="form-group">
                    <input type="text" name="reg_number" value="{{ old('reg_number') }}" class="form-control" placeholder="Reg Number">
                </div>
                <div class="form-group">
                <input type="text" name="name" value="{{ old('name') }}"class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                <input type="text" name="email"  value="{{ old('email') }}" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                <input type="text" name="phone_num" value="{{ old('phone_num') }}" class="form-control" placeholder="Phone Number">
                </div>
                <div class="row">
                @foreach($subjects as $subject)
                    <div class="col-md-3">
                        <label for="{{ $subject->id }}">
                            <input type="checkbox" id="{{ $subject->id }}"  value="{{ $subject->id }}" {{ $subject->id == 1 ? 'checked disabled' : '' }} name="subject[]" > {{ App\Subject::subject($subject->id) }}
                        </label>
                    </div>
                @endforeach
                </div>

                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Submit Application</button>
                </div>
            </form>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <div class="col-md-12">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                        <label for="file">
                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px; border: 1px solid">
                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                            </div>
                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                            <div>
                        </label>
                        <span class="btn btn-white btn-file">
                        <span id="file" class="fileupload-new btn btn-success"><i class="fa fa-clips"></i> Select Passport</span>
                        <span class="fileupload-exists btn btn-success"><i class="fa fa-undo"></i> Change</span>
                        <input type="file" name="featured_image"  class="defaults">
                        </span>
                    </div>
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
      <a href="{{ route('contact') }}" class="btn btn-primary">CONTACT US<i class="fa fa-map-marker"></i></a>      </div>
    </div>
  </div>
</section>
@endsection
