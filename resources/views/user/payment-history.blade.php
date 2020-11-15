@extends('include.dashboard')
@section('content')
    <div class="nk-content">
                        <div class="container-fluid">
                            <div class="nk-content-inner">
                                <div class="nk-content-body">
                                    <div class="nk-block-head nk-block-head-sm">
                                        <div class="nk-block-between g-3">
                                            <div class="nk-block-head-content">
                                                <h3 class="nk-block-title page-title">My Histories</h3>
                                                @php
                                                 $count = \App\Bill::whereUser_id(Auth::user()->id)->count();
                                                 @endphp
                                                <div class="nk-block-des text-soft"><p>You have a total of {{$count}} {{$count==1?'history':'histories'}}</p></div>
                                            </div>
                                            <div class="nk-block-head-content">
                                                <div class="toggle-wrap nk-block-tools-toggle">
                                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-block">
                                        <div class="card card-bordered card-stretch">
                                            <div class="card-inner-group">
                                                <div class="card-inner">
                                                    <div class="card-title-group">
                                                        <div class="card-title"><h5 class="title">All Histories</h5></div>
                                                        <div class="card-tools mr-n1">
                                                            <ul class="btn-toolbar gx-1">
                                                                <li>
                                                                    <a href="#" class="search-toggle toggle-search btn btn-icon" data-target="search"><em class="icon ni ni-search"></em></a>
                                                                </li>
                                                                <li class="btn-toolbar-sep"></li>

                                                            </ul>
                                                        </div>
                                                        <div class="card-search search-wrap" data-search="search">
                                                            <div class="search-content">
                                                                <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                                <input type="text" class="form-control border-transparent form-focus-none" placeholder="Quick search by transaction" />
                                                                <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-inner p-0">
                                                    <div class="nk-tb-list nk-tb-tnx">
                                                        <div class="nk-tb-item nk-tb-head">
                                                            <div class="nk-tb-col"><span>Service</span></div>
                                                            <div class="nk-tb-col tb-col-xxl"><span>Source</span></div>
                                                            <div class="nk-tb-col"><span>Transaction ID</span></div>
                                                            <div class="nk-tb-col text-right"><span>Amount</span></div>
                                                            <div class="nk-tb-col text-right tb-col-sm"><span>Date</span></div>
                                                            <div class="nk-tb-col nk-tb-col-status"><span class="sub-text d-none d-md-block">Status</span></div>
                                                            <div class="nk-tb-col nk-tb-col-tools"></div>
                                                        </div>
                                                        @if(count($histories) >0)
                                                         @foreach($histories as $k=>$data)
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col">
                                                                <div class="nk-tnx-type">
                                                                    @if($data->status == 1)
                                                                   <div class="nk-tnx-type-icon bg-success-dim text-success">
                                                                    @elseif($data->status == 0)
                                                                    <div class="nk-tnx-type-icon bg-warning-dim text-warning">
                                                                    @elseif($data->status == -2)
                                                                    <div class="nk-tnx-type-icon bg-danger-dim text-danger">
                                                                    @endif

                                                                    <em class="icon ni ni-wallet"></em></div>
                                                                    <div class="nk-tnx-type-text"><span class="tb-lead" style="text-transform:capitalize">{{$data->plan}}</span></div>
                                                                </div>
                                                            </div>
                                                             <div class="nk-tb-col tb-col-dlg"><span class="tb-lead">{{isset($data->trx ) ? $data->trx  : 'N/A'}}</span></div>
                                                            <div class="nk-tb-col text-right">
                                                                <span class="tb-amount">{{$data->amount}} <span>{{$basic->currency}}</span></span>
                                                            </div>
                                                            <div class="nk-tb-col text-right tb-col-sm">
                                                                <span class="tb-amount">{{ Carbon\Carbon::parse($data->updated_at)->diffForHumans() }} <span></span></span><span class="tb-amount-sm">{{$data->updated_at}}</span>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-status">
                                                                <div class="dot dot-success d-md-none"></div>
                                                                 @if($data->status == 1)
                                                                   <span class="badge badge-sm badge-dim badge-outline-success d-none d-md-inline-flex">Completed</span>
                                                                    @elseif($data->status == 0)
                                                                    <span class="badge badge-sm badge-dim badge-outline-warning d-none d-md-inline-flex">Pending</span>
                                                                    @elseif($data->status == -2)
                                                                    <span class="badge badge-sm badge-dim badge-outline-danger d-none d-md-inline-flex">Declined</span>
                                                                    @endif



                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                <ul class="nk-tb-actions gx-2">

                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="#tranxDetails{{$data->id}}" data-toggle="modal" class="bg-white btn btn-sm btn-outline-light btn-icon btn-tooltip" title="Details"><em class="icon ni ni-eye"></em></a>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>






  


                                                         @endforeach
                                                         @else
                                                         No Deposit
                                                         @endif


                                                    </div>
                                                </div>
                                                <div class="card-inner">
                                                    <ul class="pagination justify-content-center justify-content-md-start">
                                                       {{ $histories->links() }}
                                                    </ul>
                                                </div>







                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>@stop
