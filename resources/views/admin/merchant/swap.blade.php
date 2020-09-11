@extends('include.admindashboard')

@section('body')
 <div class="page-content">
    <div class="container">
     	<div class="gaps-1x mgb-0-5x d-lg-none d-none d-sm-block"></div>


        <div class="card content-area">
            <div class="card-innr">
                <div class="card-head d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">Available Airtime Swap</h4>
                </div>
                <div class="gaps-1-5x"></div>
                <div class="row guttar-vr-30px">

                        @foreach($network as $data)
                        <div class="col-xl-4 col-md-6">
                        <div class="stage-item stage-card stage-item-actived">
                            <div class="stage-head">
                                <div class="stage-title">
                                    <h6>Status
                @if($data->swap == 1)
                <span class="badge badge-success">Active</span>
                @else
                <span class="badge badge-danger">Inactive</span>
                @endif

                                </div>

                                <div class="stage-action">
                                    <a href="#" class="toggle-tigger rotate"><em class="ti ti-more-alt"></em></a>
                                    <div class="toggle-class dropdown-content dropdown-content-top-left">
                                        <ul class="dropdown-list">
                                            <li><a href="{{route('admin.swapview', $data->id)}}"  >Overview</a></li>
                                            @if($data->swap == 1)
                                            <li><a href="{{route('admin.swapdisable', $data->id)}}">Disable</a></li>

                                            @else <li><a href="{{route('admin.swapenable', $data->id)}}">Enable</a></li>
                                            @endif


                                                                                                                                </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="stage-info stage-info-status">
                                <div class="stage-info-graph">
                                                                        <img src="{{asset($data->image)}} " width="60"
                             alt="Avatar">
                                                                    </div>
                                <div class="stage-info-txt">

                                    <span class="stage-info-total h2">{{$data->name}}</span>
                                    <div class="stage-info-count"><span>{{$data->slogan}}</span>  </div>
                                </div>
                            </div>
                            <div class="stage-info">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="stage-info-txt">
                                            <h6>Swap Rate</h6>
                                            <div class="h2 stage-info-number">{{$data->rate}}%</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="stage-info-txt">
                                            <h6>Swap Number</h6>
                                            <div class="h2 stage-info-number">{{$data->number}}<small></small></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="stage-date">
                                <div class="row">
                                    <div class="col-6">
                                        <h6>Date Created</h6>
                                        <h5>{!! date(' d M,Y', strtotime($data->created_at)) !!} <small><br>{{ Carbon\Carbon::parse($data->created_at)->diffForHumans() }}</small></h5>
                                    </div>
                                    <div class="col-6">
                                        <h6>Last Updated</h6>
                                        <h5>{!! date(' d M,Y', strtotime($data->updated_at)) !!} <small><br>{{ Carbon\Carbon::parse($data->updated_at)->diffForHumans() }}</small></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
                <div class="gaps-0-5x"></div>
            </div>
        </div>
    </div>
</div>

@stop


