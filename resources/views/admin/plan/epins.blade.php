@extends('include.admindashboard')

@section('body')


<div class="page-content"><div class="container"><div class="content-area card"><div class="card-innr"><div class="card-head"><h4 class="card-title">{{$page_title}}</h4></div>
 <br><a href="#createEpinModal" card data-toggle="modal" class="btn btn-primary btn-sm float-right">@lang('Generate E-Pin')</a>

   <table class="data-table dt-filter-init admin-tnx"><thead><tr class="data-item data-head"><th class="data-col dt-tnxno">E=Pin Owner</th><th class="data-col dt-token">Amount</th><th class="data-col dt-token">Pin</th>  <th class="data-col dt-type"><div class="dt-type-text">Status</div></th><th class="data-col"></th></tr></thead><tbody>

@foreach($epin as $data)
<tr class="data-item"><td class="data-col dt-tnxno"><div class="d-flex align-items-center">@if($data->status == 1)
<div class="data-state data-state-approved">
@elseif($data->status == 2)
<div class="data-state data-state-canceled">
@endif</div><div class="fake-class"><span class="lead tnx-id"><a href="{{route('user.single',$data->user_id)}}">

{{isset(App\User::whereId($data->user_id)->first()->username) ? App\User::whereId($data->user_id)->first()->username : 'Admin'}}

                                        </a></span><span class="sub sub-date">{{$data->created_at}}</span></div></div></td><td class="data-col dt-token"><span class="lead token-amount">{!! number_format($data->amount, $basic->decimal)  !!}</span><span class="sub sub-symbol">{{$basic->currency}}</span></td><td class="data-col dt-token"><span class="lead amount-pay">{{$data->pin}} </span><span class="sub sub-symbol">Pin <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="E-Pin Voucher"></em></span></td><td class="data-col dt-type">
@if($data->status == 1)
<span class="dt-type-md badge badge-outline badge-success badge-md">Unused</span><span class="dt-type-sm badge badge-sq badge-outline badge-success badge-md">A</span>
@else
<span class="dt-type-md badge badge-outline badge-danger badge-md">Used</span><span class="dt-type-sm badge badge-sq badge-outline badge-danger badge-md">U</span>
@endif

</td> </tr><!-- .data-item -->
@endforeach

<!-- .data-item --></tbody></table>

   </div></div></div></div></div>





                 <div class="modal fade" id="createEpinModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"> @lang('Create New Pin')</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <form  method="post" action="{{route('adminpingenerate')}}">
                    @csrf
                    <div class="modal-body text-center">

                        <strong class="text-center">@lang('Amount')</strong>
                        <div class="input-group">
                            <input type="text" class="form-control input-lg" name="amount">
                            <div class="input-group-append">
                            <span class="input-group-text">
                                {{__($basic->currency_sym)}}
                            </span>
                            </div>

                        </div>
                        <small class="text-center text-info">You can give this e-pin to user to use as voucher for crediting their wallet balance</small>
                    </div>
                    <div class="modal-footer">
                        <button type="submit"  class="btn btn-primary bold uppercase"><i class="fa fa-send"></i> @lang('Generate')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
