@extends('include.admindashboard')

@section('body')
 <div class="page-content">
    <div class="container">
      	<div class="gaps-1x mgb-0-5x d-lg-none d-none d-sm-block"></div>


        <div class="card content-area">
            <div class="card-innr">
                <div class="card-head d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">{{$decoder->name}} Bouquets </h4>
                 </div>
                                <div class="gaps-1x"></div>
                <div class="row guttar-vr-30px">

@foreach($network as $data)
                                        <div class="col-xl-4 col-md-6">
                        <div class="payment-card">
    <div class="payment-head">
        <div class="payment-logo">
            <img src="{{asset($decoder->image)}}" width="100" alt="Manual">
        </div>
        <div class="payment-action">
            <a href="javascript:void(0)" class="toggle-tigger rotate"><em class="ti ti-more-alt"></em></a>
            <div class="toggle-class dropdown-content dropdown-content-top-left">
                <ul class="dropdown-list">
                    <li><a href="{{route('admin.cabletvplanview',$data->id)}}">Update</a></li>
                    @if($data->status == 1)
                    <li><a href="{{route('admin.cabletvplandisable',$data->id)}}">Disable</a></li>
                    @else
                    <li><a href="{{route('admin.cabletvplanenable',$data->id)}}">Enabled</a></li>
                    @endif
                </ul>

            </div>
        </div>
    </div>
    <div class="payment-body">
        <h5 class="payment-title">{{$data->name}}</h5>
        <p class="payment-text">{{$decoder->slogan}}</p>
        @if($data->status == 1)
        <div class="payment-status payment-status-connected">
            <span class="payment-status-icon"><em class="ti ti-check"></em></span>
            <div class="payment-status-text">Plan Is Active</div>
        </div>
        @else
        <div class="payment-status payment-status-disabled">
            <span class="payment-status-icon"><em class="ti ti-close"></em></span>
            <div class="payment-status-text">Plan is Inactive</div>
        </div>

        @endif
            </div>
    <div class="payment-footer">
                <span class="payment-id-title">Price</span>
        <span class="payment-id"> {{$basic->currency}}{{$data->cost}} </span>
            </div>
</div>
                    </div>
                                      @endforeach
                                    </div>
                <div class="gaps-0x"></div>
            </div>
        </div>
    </div>
</div>

@stop


