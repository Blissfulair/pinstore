@extends('include.cbt')
@section('content')
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                <form role="form" method="POST" action="{{ route('cbt-updateUpload') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{$jamb->id}}" />
                            <div class="kyc-app wide-ssm m-autso">
                                    <div class="nk-block-head-content ">
                                        <h2 class="nk-block-title fw-normal">Upload of O-Level/A-Level Result</h2>
                                        <div class="nk-block-des">
                                            <p>Please follow the information provided carefully. You will be responsible for any mistake from you make.</p>
                                        </div>
                                    </div>
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="nk-kycfm">

                                          <div class="nk-kycfm-head">
                                                <div class="nk-kycfm-count">01</div>
                                                <div class="nk-kycfm-title">
                                                    <h5 class="title">Personal Details</h5>
                                                </div>
                                            </div><!-- nk-kycfm-head -->
                                            <div class="nk-kycfm-content">
                                                <div class="row g-4">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <p class="form-label">First Name</p>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <p class="form-label">{{$jamb->fname}}</p>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->

             
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <p class="form-label">Last Name</p>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <p class="form-label">{{$jamb->lname}}</p>
                                                            </div>

                                                        </div>
                                                    </div><!-- .col -->

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <p class="form-label">Profile Code</p>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <p class="form-label">{{$jamb->profile_code}}</p>
                                                            </div>

                                                        </div>
                                                    </div><!-- .col -->
                                                </div><!-- .row -->
                                            </div><!-- nk-kycfm-content -->
                                            <div class="nk-kycfm-head">
                                                <div class="nk-kycfm-count">02</div>
                                                <div class="nk-kycfm-title">
                                                    <h5 class="title">Results</h5>
                                                    <p class="sub-title">Download the photos</p>
                                                </div>
                                            </div><!-- nk-kycfm-head -->
                                            <div class="nk-kycfm-content">
                                                <div class="row g-4">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <p class="form-label">First Setting </p>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                                <a href="{{asset('kyc').'/'.$jamb->olevel1}}" download="{{$jamb->fname.'_'.$jamb->lname.'_first_setting.jpg'}}" >
                                                                    <img style="height:300px" src="{{asset('kyc').'/'.$jamb->olevel1}}" alt="first sitting">
                                                                </a>
                                                        </div>
                                                    </div><!-- .col -->

                                                    @if($jamb->olevel2)
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <p class="form-label">Second Setting </p>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                                <a href="{{asset('kyc').'/'.$jamb->olevel2}}" download="{{$jamb->fname.'_'.$jamb->lname.'_second_setting.jpg'}}" >
                                                                    <img style="height:300px" src="{{asset('kyc').'/'.$jamb->olevel2}}" alt="Second sitting">
                                                                </a>
                                                        </div>
                                                    </div><!-- .col -->
                                                    @endif
                                                    @if($jamb->alevel)
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <p class="form-label">A Level Result </p>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                                <a href="{{asset('kyc').'/'.$jamb->alevel}}" download="{{$jamb->fname.'_'.$jamb->lname.'_alevel.jpg'}}">
                                                                    <img style="height:300px" src="{{asset('kyc').'/'.$jamb->alevel}}" alt="A level">
                                                                </a>
                                                        </div>
                                                    </div><!-- .col -->
                                                    @endif
                                                </div><!-- .row -->
                                            </div><!-- nk-kycfm-content -->
                                            <div class="nk-kycfm-head">
                                                <div class="nk-kycfm-count">03</div>
                                                <div class="nk-kycfm-title">
                                                    <h5 class="title">Remarks</h5>
                                                    <p class="sub-title">Give your remark here.</p>
                                                </div>
                                            </div><!-- nk-kycfm-head -->
                                            <div class="nk-kycfm-content">
                                                <div class="row g-4">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Comment</label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <textarea type="text" class="form-control form-control-lg" name="comment"></textarea>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Status <span class="text-danger">*</span></label>
                                                                <div class="form-pm-group">
                                                                    <ul class="buysell-pm-list">
                                                                        <li class="buysell-pm-item">
                                                                            
                                                                            <input class="buysell-pm-control" type="radio" {{ $jamb->status == 1?'checked':''}} value="1" name="status" id="pm-1" />
                                                                            <label class="buysell-pm-label" for="pm-1">
                                                                                <span class="pm-name">Completed</span><span class="pm-icon"><em class="icon ni ni-process"></em></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="buysell-pm-item">
                                                                            <input class="buysell-pm-control" type="radio" value="-1" {{ $jamb->status == -1?'checked':''}} name="status" id="pm-2" />
                                                                            <label class="buysell-pm-label" for="pm-2">
                                                                                <span class="pm-name">Resend</span><span class="pm-icon"><em class="icon ni ni-query"></em></span>
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div><!-- .col -->
                                                        <div class="col-md-6">
                                                        <label class="form-label">Proof of upload <span class="text-danger">*</span></label>
                                                            <div class="nk-kycfm-upload-box">
                                                                <div class="upload-zone">
                                                                     <div class="custom-file">
                                                                        <input type="file" onchange="uploadImage(this)" class="custom-file-input" name="proof"  >
                                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 d-none d-sm-block">
                                                            <div class="mx-md-4">
                                                                <img  src="{{$jamb->proof?asset('kyc').'/'.$jamb->proof:asset('dash-assets/images/icon-national-id.png')}}" alt="first sitting">
                                                            </div>
                                                        </div>
                                                    
                                                </div><!-- .row -->
                                            </div><!-- nk-kycfm-content -->
                                            <div class="nk-kycfm-footer">


                                                <div class="nk-kycfm-action pt-2">
                                                    <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                                                </div>
                                            </div><!-- nk-kycfm-footer -->
                                        </div><!-- nk-kycfm -->
                                    </div><!-- .card -->
                                </div><!-- nk-block -->
                            </div><!-- .kyc-app -->
                            </form>

                </div>
            </div>
        </div>
    </div>
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
