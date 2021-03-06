@if($service->service_type == 2)
    @if($service->type == 2)


  <!-- content @s -->
  <div class="nk-content nk-content-lg nk-content-fluid">
                <div class="container-xl wide-lg">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                        @if($payment)
                        <form role="form" method="POST" action="{{ route('saveUpload') }}" enctype="multipart/form-data">
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
                                                                <input type="text" class="form-control form-control-lg" name="fname">
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Last Name <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input name="lname" type="text" class="form-control form-control-lg">
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Profile Code <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text"  class="form-control form-control-lg"  name="profile_code">
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <input type="hidden" name="bill" value="{{$payment->id}}" />
                                                    <input type="hidden" name="type" value="2" />
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
                                                                <img  src="{{asset('dash-assets/images/icon-national-id.png')}}" alt="ID Front">
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
                                                                <img  src="{{asset('dash-assets/images/icon-national-id.png')}}" alt="ID Front">
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
                                                                        <input type="file" class="custom-file-input" name="photo3" >
                                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4 d-none d-sm-block">
                                                            <div class="mx-md-4">
                                                                <img src="{{asset('dash-assets/images/icon-national-id.png')}}" alt="ID Front">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- nk-kycfm-upload -->
                                            </div><!-- nk-kycfm-content -->
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
                                                    <button type="submit" class="btn btn-lg btn-primary">Submit Profile</button>
                                                </div>
                                            </div><!-- nk-kycfm-footer -->
                                        </div><!-- nk-kycfm -->
                                    </div><!-- .card -->
                                </div><!-- nk-block -->
                            </div><!-- .kyc-app -->
                            </form>
                            @else
                            <div class="kyc-app wide-ssm m-autso">
                                <div>
                                <div class="nk-block">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <img style="width:70%;margin-bottom:30px;height:300px;border-radius:30px" src="{{asset('kyc').'/'.$service->image}}" >
                                            <h5 class="nk-block-title">Make payment to proceed with upload of O-Level/A-Level result</h5>
                                            <div class="nk-block-des"><p>To continue, you must have at least {{$service->amount}} in your wallet to or make payment directly with your debit card.</p></div>
                                        </div>
                                    </div>
                                    <div class="card card-bordered">
                                        <div class="card-inner-group">
                                            <div class="card-inner">
                                                <div class="between-center flex-wrap flex-md-nowrap g-3">
                                                    <div class="nk-block-text">
                                                        <h6>Pay from Wallet</h6>
                                                        <p>Your wallet must have at least {{$service->amount}} to make this transaction</p>
                                                    </div>
                                                    <div class="nk-block-actions flex-shrink-sm-0">
                                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-3 gy-2">
                                                        <form method="post" action="{{ route('wallet-payment') }}">
                                                            {{csrf_field()}}
                                                                <input type="hidden" name="amount"  value="{{$service->amount}}" />
                                                                <input type="hidden" name="type"  value="{{$service->type}}" />
                                                            <li class="order-md-last"><button type="submit" class="btn btn-primary">Proceed</button></li>
                                                            </form>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="card-inner">
                                                <div class="between-center flex-wrap flex-md-nowrap g-3">
                                                    <div class="nk-block-text">
                                                        <h6>Fund Wallet With Online Payment</h6>
                                                        <p>
                                                            Make payment with paystack to proceed
                                                        </p>
                                                    </div>
                                                    <div class="nk-block-actions">

                                        <a  href="{{route('fund-wallet')}}" class="btn btn-primary">Proceed to Online Payment</a>
                                        </div>
                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                </div>
                            </div><!-- .kyc-app -->

                            @endif

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

    @endif
@endif