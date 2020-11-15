@extends('include.dashboard')
@section('content')
 <!-- .topbar-wrap --><div class="page-content"><div class="container"><div class="row"><div class="main-content col-lg-12"><div class="page-header page-header-kyc"><div class="container"><div class="row justify-content-center"><div class="col-lg-8 col-xl-7 text-center"><h2 class="page-title">Account Verification</h2><p class="large">Identity verification makes you eligible for coin purchase, promos and offers</p></div></div></div><!-- .container --></div><!-- .page-header -->




  <!-- content @s -->
            <div class="nk-content nk-content-lg nk-content-fluid">
                <div class="container-xl wide-lg">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="kyc-app wide-ssm m-autso">
                                <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">

                                </div><!-- nk-block -->
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="nk-kycfm">

                                          <div class="nk-kycfm-head">
                                                <div class="nk-kycfm-count">01</div>
                                                <div class="nk-kycfm-title">
                                                    <h5 class="title">Fund Wallet</h5>
                                                    <p class="sub-title">This amount will be added to your wallet for your next transaction</p>
                                                </div>
                                            </div><!-- nk-kycfm-head -->

                                        <form id="myform"  action="{{route('fund-wallet')}}" method="post">
                                            <div class="nk-kycfm-content">
                                                <div class="row g-4">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Amount <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text" class="form-control form-control-lg" id="funded_amount" name="amount">
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                </div><!-- .row -->
                                            </div><!-- nk-kycfm-content -->
                                                                                      <div class="nk-kycfm-footer">

                                                <div class="nk-kycfm-action pt-2">

                                        {{csrf_field()}}
                                        <button type="submit"  class="btn btn-lg btn-primary">Proceed to Payment</button>
                                        </div>
                                                </div>
                                            </div><!-- nk-kycfm-footer -->
                                            </form>
                                        </div><!-- nk-kycfm -->
                                    </div><!-- .card -->
                                </div><!-- nk-block -->
                            </div><!-- .kyc-app -->





                        </div>
                    </div>
                </div>
            </div>     </div>
            <!-- content @e -->


@stop
