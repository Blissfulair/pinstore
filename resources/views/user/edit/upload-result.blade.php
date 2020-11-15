@extends('include.dashboard')
@section('content')
 <!-- .topbar-wrap --><div class="page-content"><div class="container"><div class="row"><div class="main-content col-lg-12"><div class="page-header page-header-kyc"><div class="container"><div class="row justify-content-center"><div class="col-lg-8 col-xl-7 text-center"><h2 class="page-title">Account Verification</h2><p class="large">Identity verification makes you eligible for coin purchase, promos and offers</p></div></div></div><!-- .container --></div><!-- .page-header -->




  <!-- content @s -->
            <div class="nk-content nk-content-lg nk-content-fluid">
                <div class="container-xl wide-lg">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                        <form role="form" method="POST" action="{{ route('updateUpload') }}" enctype="multipart/form-data">
{{ csrf_field() }}
                            <div class="kyc-app wide-ssm m-autso">
                                <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
                                    <div class="nk-block-head-content text-center">
                                        <h2 class="nk-block-title fw-normal">Upload of O-Level/A-Level Results</h2>
                                        <div class="nk-block-des">
                                            <p>Please ensure all information are correct and properly entered </p>
                                        </div>
                                    </div>
                                </div><!-- nk-block -->
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="nk-kycfm">

                                        <div class="nk-kycfm-head">
                                                <div class="nk-kycfm-count">01</div>
                                                <div class="nk-kycfm-title">
                                                    <h5 class="title">Profile Details</h5>
                                                    <p class="sub-title">Please profile JAMB E-facility profile details</p>
                                                </div>
                                            </div><!-- nk-kycfm-head -->
                                            <div class="nk-kycfm-content">
                                                <div class="row g-4">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">First Name <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text" class="form-control form-control-lg" name="fname" value="{{$service->fname?$service->fname:old('fname')}}">
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Last Name <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input name="lname" type="text" class="form-control form-control-lg" value="{{$service->lname?$service->lname:old('lname')}}">
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Profile Code <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text"  class="form-control form-control-lg" value="{{$service->profile_code}}"  name="profile_code">
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <input type="hidden" name="id" value="{{$service->id}}" />
                                                </div><!-- .row -->
                                            </div><!-- nk-kycfm-content -->



                                            <div class="nk-kycfm-head">
                                                <div class="nk-kycfm-count">02</div>
                                                <div class="nk-kycfm-title">
                                                    <h5 class="title">Document Upload</h5>
                                                    <p class="sub-title">To verify your identity, please upload any of your document.</p>
                                                </div>
                                            </div><!-- nk-kycfm-head -->
                                            <div class="nk-kycfm-content">
                                
                                                <div class="nk-kycfm-upload">
                                                    <h6 class="title nk-kycfm-upload-title">Upload Here Your First Sitting WAEC or NECO results</h6>
                                                    <div class="row align-items-center">
                                                        <div class="col-sm-8">
                                                            <div class="nk-kycfm-upload-box">
                                                                <div class="upload-zone">
                                                                     <div class="custom-file">
                                                                        <input type="file" onchange="uploadImage(this)" class="custom-file-input" name="photo1"  >
                                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4 d-none d-sm-block">
                                                            <div class="mx-md-4">
                                                                <img  src="{{$service->olevel1?asset('kyc').'/'.$service->olevel1:asset('dash-assets/images/icon-national-id.png')}}" alt="first sitting">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="nk-kycfm-upload">
                                                    <h6 class="title nk-kycfm-upload-title">Upload Here Your Second Sitting WAEC or NECO results</h6>
                                                    <div class="row align-items-center">
                                                        <div class="col-sm-8">
                                                            <div class="nk-kycfm-upload-box">
                                                                <div class="upload-zone">
                                                                     <div class="custom-file">
                                                                        <input type="file" onchange="uploadImage(this)" class="custom-file-input" name="photo2" >
                                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4 d-none d-sm-block">
                                                            <div class="mx-md-4">
                                                                <img  src="{{$service->olevel2?asset('kyc').'/'.$service->olevel2:asset('dash-assets/images/icon-national-id.png')}}" alt="second sitting">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    
                                                    <h6 class="title nk-kycfm-upload-title">Upload Here Your A-Level Result</h6>
                                                    <div class="row align-items-center">
                                                        <div class="col-sm-8">
                                                            <div class="nk-kycfm-upload-box">
                                                                <div class="upload-zone">
                                                                     <div class="custom-file">
                                                                        <input type="file" onchange="uploadImage(this)" class="custom-file-input" name="photo3" >
                                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4 d-none d-sm-block">
                                                            <div class="mx-md-4">
                                                                <img src="{{$service->alevel?asset('kyc').'/'.$service->alevel:asset('dash-assets/images/icon-national-id.png')}}" alt="A level">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- nk-kycfm-upload -->
                                            </div><!-- nk-kycfm-content -->
                                            @if($service->comment || $service->cbt_id != 0)
                                            <div class="nk-kycfm-head">
                                                <div class="nk-kycfm-count">03</div>
                                                <div class="nk-kycfm-title">
                                                    <h5 class="title">Comments and Remarks</h5>
                                                    <p class="sub-title">Please read the comment and apply</p>
                                                </div>
                                            </div><!-- nk-kycfm-head -->
                                            <div class="nk-kycfm-footer">
                                                @if($service->cbt_id != 0)
                                                <p class="form-label"><span class="text-success">{{$service->cbt->fname}} {{ $service->cbt->lname }}</span> is currently working on it. Please be patient...</p>
                                                @endif
                                                @if($service->comment)
                                                <p class="form-label text-warning">{{$service->comment}}</p>
                                                @endif
                                            </div><!-- nk-kycfm-footer -->
                                            @endif
                                            @if($service->status != 1)
                                            <div class="nk-kycfm-footer">


                                                <div class="form-group">
                                                    <div class="custom-control custom-control-xs custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" required id="tc-agree">
                                                        <label class="custom-control-label" for="tc-agree">I Have Read The <a href="#">Terms Of Condition</a> And <a href="#">Privacy Policy</a></label>
                                                    </div>
                                                </div>






                                                <div class="form-group">
                                                    <div class="custom-control custom-control-xs custom-checkbox">
                                                        <input required type="checkbox" class="custom-control-input" id="info-assure">
                                                        <label class="custom-control-label" for="info-assure">All The Personal Information I Have Entered Is Correct.</label>
                                                    </div>
                                                </div>
                                                <div class="nk-kycfm-action pt-2">
                                                    <button type="submit" class="btn btn-lg btn-primary">Update</button>
                                                </div>
                                            </div><!-- nk-kycfm-footer -->
                                            @endif
                                        </div><!-- nk-kycfm -->
                                    </div><!-- .card -->
                                </div><!-- nk-block -->
                            </div><!-- .kyc-app -->
                            </form>
                         
                        </div>
                    </div>
                </div>
            </div>     </div>
            <!-- content @e -->
<script>

const uploadImage = (e)=>{
        let image = e.files[0];
        let imageDom = e.parentElement.parentElement.parentElement.parentElement.nextElementSibling
        let reader = new FileReader();
        reader.readAsDataURL(image);
        reader.onload = (e)=>{
            imageDom.querySelector('img').setAttribute('src', reader.result);
            
        }
    }
</script>

@stop
