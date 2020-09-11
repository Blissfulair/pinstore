@extends('include.admindashboard')

@section('body')
                  <!-- content @s -->
                <div class="nk-content ">
                    <div class="container wide-xl">
                        <div class="nk-content-inner">

                            <div class="nk-content-body">
                                <div class="nk-content-wrap">
                                    <div class="nk-block-head nk-block-head-lg">

                                          <div class="caption font-dark float-right">
                                        <i class="icon-settings font-dark"></i>
                                        <a href="{{route('plan.create')}}" class="btn btn-primary bold"><i class="fa fa-plus"></i> @lang('Add New') </a>
                                    </div>
                                        <div class="nk-block-between-md g-4">
                                            <div class="nk-block-head-content">
                                                <h2 class="nk-block-title fw-normal"> @lang($page_title)</h2>
                                                <div class="nk-block-des">
                                                    <p>You can change or manage system multilevel plans here</p>
                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- .nk-block-head -->




                                    <div class="nk-block">
                                        <div class="row g-gs">
                                        @foreach($plan as $data)
                                            <div class="col-md-4">
                                                <div class="price-plan card card-bordered text-center">
                                                    <div class="card-inner">
                                                        <div class="price-plan-media">
                                                            <img src="{{asset('core-img/plan.svg')}}" width="100" alt="">
                                                        </div>
                                                          @if($data->status == 1)
                                                                <span class="badge badge-success">@lang('Active')</span>
                                                                @else
                                                                <span class="badge badge-danger">@lang('Deactive')</span>
                                                            @endif

                                                        <div class="price-plan-info">
                                                            <h5 class="title">{{$data->name}}</h5>

                                                        </div>
                                                        <div class="price-plan-amount">
                                                            <div class="amount">Price: {{$data->price}} {{$basic->currency}}</div>
                                                            <span class="bill">Ref Bonus: {{$data->ref_bonus}} {{$basic->currency}}</span>
                                                        </div>

                                                            <div class="price-plan-action">
                                                            <a href="{{route('plan.edit', $data->id)}}" class="btn btn-primary">@lang('Edit')</a>
                                                        </div>
                                                    </div>
                                                </div><!-- .price-item -->
                                            </div><!-- .col -->




                                        @endforeach
                                        </div><!-- .row -->
                                    </div><!-- .nk-block -->
                                    <div class="nk-block">
                                        <div class="card card-bordered">
                                            <table class="table table-features">
                                                <thead class="tb-ftr-head thead-light">
                                                    <tr class="tb-ftr-item">
                                                        <th class="tb-ftr-info">Name</th>
                                                        <th class="tb-ftr-plan">Price</th>
                                                        <th class="tb-ftr-plan">Subscribers</th>
                                                        <th class="tb-ftr-plan">Commission</th>
                                                    </tr><!-- .tb-ftr-item -->
                                                </thead>
                                                <tbody class="tb-ftr-body">
                                                  @foreach($plan as $data)
                                                    <tr class="tb-ftr-item">
                                                        <td class="tb-ftr-info">{{$data->name}}</td>
                                                        <td class="tb-ftr-plan"><em class="icon ni ni-check-thick"></em> <span class="plan-name">{{$basic->currency_sym}} {{$data->price}} </span></td>
                                                        <td class="tb-ftr-plan"><em class="icon ni ni-check-thick"></em> <span class="plan-name">{{App\User::wherePlan_id($data->id)->count()}} User(s)</span></td>
                                                        <td class="tb-ftr-plan"><em class="icon ni ni-check-thick"></em> <span class="plan-name"><a href="#levComModal{{$data->id}}" data-toggle="modal" class="badge badge-info btn-sm">
                                                            </i>View @lang('Level Commission')
                                                        </a></span></td>
                                                    </tr><!-- .tb-ftr-item -->






                                             <div class="modal fade" id="levComModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel"> @lang($data->name.' Level Commissions')</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <ul  class="list-group">
                                            @foreach($data->plan_level as $lv)
                                                <li class="list-group-item">
                                                    <p class="text-center">@lang('Level '){{$lv->level}} : {{$lv->amount}} {{$basic->currency}}</p>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> @lang('Close')</button>
                                    </div>
                                </div>
                            </div>
                        </div>@endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!-- .nk-block -->
                                </div>
@endsection
