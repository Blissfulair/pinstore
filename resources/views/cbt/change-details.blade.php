@extends('include.cbt')
@section('content')
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                <form role="form" method="POST" action="{{ route('cbt-updateChangeOfCourse') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{$jamb->id}}" />
                            <div class="kyc-app wide-ssm m-autso">
                                    <div class="nk-block-head-content ">
                                        <h2 class="nk-block-title fw-normal">Change of Course/Institution</h2>
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
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <p class="form-label">OTP</p>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <p class="form-label">{{$jamb->otp}}</p>
                                                            </div>

                                                        </div>
                                                    </div><!-- .col -->
                                                </div><!-- .row -->
                                            </div><!-- nk-kycfm-content -->
                                            <div class="nk-kycfm-head">
                                                <div class="nk-kycfm-count">02</div>
                                                <div class="nk-kycfm-title">
                                                    <h5 class="title">New Institutions and Courses</h5>
                                                    <p class="sub-title">Institutions and courses to change to.</p>
                                                </div>
                                            </div><!-- nk-kycfm-head -->
                                            <div class="nk-kycfm-content">
                                                <div class="row g-4">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <p class="form-label">First Choice Institution </p>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <p class="form-label">{{$jamb->institute1}}</p>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <p class="form-label">First Choice Course </p>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <p class="form-label">{{$jamb->course1}}</p>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    @if($jamb->institute2)
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <p class="form-label">Second Choice Institution </p>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <p class="form-label">{{$jamb->institute2}}</p>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <p class="form-label">Second Choice Course </p>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <p class="form-label">{{$jamb->course2}}</p>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    @endif
                                                    @if($jamb->institute3)
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <p class="form-label">Third Choice Institution </p>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <p class="form-label">{{$jamb->institute3}}</p>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <p class="form-label">Third Choice Course </p>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <p class="form-label">{{$jamb->course3}}</p>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    @endif
                                                </div><!-- .row -->
                                            </div><!-- nk-kycfm-content -->
                                            @if($jamb->status != 1)
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
                                                    
                                                </div><!-- .row -->
                                            </div><!-- nk-kycfm-content -->
                                            <div class="nk-kycfm-footer">


                                                <div class="nk-kycfm-action pt-2">
                                                    <button type="submit" class="btn btn-lg btn-primary">Submit</button>
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
    </div>@stop
