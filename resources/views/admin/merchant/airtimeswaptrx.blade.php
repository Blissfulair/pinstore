@extends('include.admindashboard')

@section('body')
 <div class="page-content">
    <div class="container">
 	<div class="gaps-1x mgb-0-5x d-lg-none d-none d-sm-block"></div>


        <div class="card content-area content-area-mh ">
            <div class="card-innr">
                <div class="card-head has-aside">
                    <h4 class="card-title">All Conversions</h4>
                    <div class="card-opt">
                        <ul class="btn-grp btn-grp-block guttar-20px">

                        </ul>
                    </div>
                </div>

                <div class="page-nav-wrap ">
                    <div class="page-nav-bar justify-content-between bg-lighter">
                        <div class="page-nav w-100 w-lg-auto">
                            <ul class="nav">
                             @foreach($network as $k=>$data)
                                <li class="nav-item"><a class="nav-link" href="{{route('admin.airtimeswapind', $data->code)}}">{{$data->name}}</a></li>
                             @endforeach
                                    <li class="nav-item"><a class="nav-link" href="{{route('admin.airtimeswap')}}">All</a></li>

                            </ul>
                        </div>
                        <div class="search flex-grow-1 pl-lg-4 w-100 w-sm-auto">
                            <form action="{{route('admin.airtimeswapsearch')}}" method="POST" autocomplete="off">
                            {{ csrf_field() }}
                                <div class="input-wrap">
                                    <span class="input-icon input-icon-left"><em class="ti ti-search"></em></span>
                                    <input type="search" class="input-solid input-transparent" placeholder="Tranx ID to quick search" value="" name="trx">
                                </div>
                            </form>
                        </div>
                                            </div>

                                    </div>

              <div class="table-responsive">
                <table class="data-table admin-tnx ">
                    <thead>
                        <tr class="data-item data-head">
                            <th class="data-col tnx-status dt-tnxno">Tranx ID</th>
                            <th class="data-col dt-token">Network</th>
                            <th class="data-col dt-token">Phone Number</th>
                            <th class="data-col dt-token">Amount</th>
                            <th class="data-col pm-gateway dt-token">Pay From</th>
                            <th class="data-col dt-type tnx-type">View User</th>
                            <th class="data-col"></th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(count($trx) >0)
                    @foreach($trx as $k=>$data)
                        <tr class="data-item" id="tnx-item-2">
                            <td class="data-col dt-tnxno">
                                <div class="d-flex align-items-center">
                                    <div id="ds-2" data-toggle="tooltip" data-placement="top" title="Canceled" class="data-state @if($data->status == 1) data-state-approved @elseif($data->status == 0) data-state-pending @else data-state-canceled @endif">
                                        <span class="d-none">Canceled</span>
                                    </div>
                                    <div class="fake-class">
                                        <span class="lead tnx-id">{{$data->trx}}</span>
                                        <span class="sub sub-date">{!! date('D, d/M, Y: h:m A', strtotime($data->created_at)) !!}</span>
                                    </div>
                                </div>
                            </td>
                            <td class="data-col dt-token">
                                <span class="lead token-amount">{{App\Internet::whereCode($data->network)->first()->name}}</span>
                                 <span class="sub sub-symbol">Network</span>

                            </td>
                            <td class="data-col dt-token">

                                <span class="lead amount-pay">{{$data->phone}}</span>
                                <span class="sub sub-symbol">{{App\Internet::whereCode($data->network)->first()->name}} <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="Network Name"></em></span>
                                                            </td>
                            <td class="data-col dt-token">

                                <span class="lead amount-receive">{{number_format($data->amount, $basic->decimal)}}</span>
                                <span class="sub sub-symbol">{{$basic->currency}} </span>
                                                            </td>
                            <td class="data-col dt-token">
                                <span class="sub sub-s2 pay-with">
                                                                          {{isset(App\User::whereId($data->user_id)->first()->id ) ? App\User::whereId($data->user_id)->first()->username  : 'N/A'}}
                                                                                                            </span>
                                                                    <span class="sub sub-email">{{ Carbon\Carbon::parse($data->updated_at)->diffForHumans() }} </span>
                                                            </td>
                            <td class="data-col data-type">
                            <a href="{{route('user.single', App\User::whereId($data->user_id)->first()->id)}}">
                                <span class="dt-type-md badge badge-outline badge-md badge-2 badge-success">View Customer</span>
                                <span class="dt-type-sm badge badge-sq badge-outline badge-md badge-2 badge-success">V</span></a>
                            </td>
                             <td class="data-col text-right">
                                 
                                <div class="relative d-inline-block">
                                    <a href="#" class="btn btn-light-alt btn-xs btn-icon toggle-tigger"><em class="ti ti-more-alt"></em></a>
                                    <div class="toggle-class dropdown-content dropdown-content-top-left">
                                        <ul id="more-menu-2" class="dropdown-list">
                                            @if($data->status == 0)
                                            <li><a href="{{route('admin.airtimeswapapp', $data->id)}}">
                                                <em class="ti ti-check"></em> Approve</a></li>
                                               <li><a href="{{route('admin.airtimeswaprej', $data->id)}}">
                                                <em class="ti ti-close"></em> Reject</a></li>
                                                @endif
                                                                                                                                                                                                                                                                                                                    </ul>
                                    </div>
                                </div>
                                                            </td>

                        </tr>
                        @endforeach
                        @else
                        No Transaction Record Yet
                        @endif

                                            </tbody>
                </table>
                </div>

                            </div>
        </div>
    </div>
</div>
@stop


