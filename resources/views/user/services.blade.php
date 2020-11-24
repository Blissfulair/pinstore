@extends('include.dashboard')
@section('content')
 <!-- .topbar-wrap --><div class="page-content"><div class="container"><div class="row"><div class="main-content col-lg-12"><div class="page-header page-header-kyc"><div class="container"><div class="row justify-content-center"><div class="col-lg-8 col-xl-7 text-center"><h2 class="page-title">Account Verification</h2><p class="large">Identity verification makes you eligible for coin purchase, promos and offers</p></div></div></div><!-- .container --></div><!-- .page-header -->




  <!-- content @s -->
  @if($service->service_type == 1)
            <div class="nk-content nk-content-lg nk-content-fluid">
                <div class="container-xl wide-lg">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                        <img style="max-width:70%;margin-bottom:30px;height:300px;border-radius:30px" src="{{asset('kyc').'/'.$service->image}}" >
                        
                        @if($card)
                            <div class="kyc-app wide-ssm m-autso">
                                <div>
                                <div class="nk-block">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h5 class="nk-block-title">Make payment to proceed</h5>
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
                                                        <form method="post" action="{{ route('user.buyService') }}">
                                                            {{csrf_field()}}
                                                                <input type="hidden" name="amount"  value="{{$service->amount}}" />
                                                                <input type="hidden" name="type"  value="{{$service->id}}" />
                                                            <li class="order-md-last"><button type="submit" class="btn btn-primary">Proceed</button></li>
                                                            </form>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="card-inner">
                                                <div class="between-center flex-wrap flex-md-nowrap g-3">
                                                    <div class="nk-block-text">
                                                        <h6>Fund Wallet With Paystack</h6>
                                                        <p>
                                                            Make payment with paystack to proceed
                                                        </p>
                                                    </div>
                                                    <div class="nk-block-actions">
                                                    <a  href="{{route('fund-wallet')}}" class="btn btn-primary">Proceed to Fund Wallet</a>
                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                </div>
                            </div><!-- .kyc-app -->
                            @else
                            <div class="kyc-app wide-ssm m-autso">
                                <div>
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-inner-group">
                                            <div class="card-inner">
                                                <div class="between-center flex-wrap flex-md-nowrap g-3">
                                                    <div class="nk-block-text">
                                                        <h6>{{$service->name}} are currently out of stock</h6>
                                                        <p>Please check back later</p>
                                                    </div>
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



                        </div>
                    </div>
                </div>
            </div>     </div>
            @elseif($service->service_type == 2)
                @if($service->type == 1)
                    @include('include.change')
                @elseif($service->type == 2)
                    @include('include.result')
                @endif
            @endif
            <!-- content @e -->

@stop
