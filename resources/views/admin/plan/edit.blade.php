@extends('include.admindashboard')

@section('body')

 <div class="page-header"><div class="container"><div class="row justify-content-center"><div class="col-lg-8 col-xl-7 text-center"><h2 class="page-title">Update Plan</h2></div></div></div><!-- .container --></div><div class="page-content"><div class="container"><div class="row">

<div class="col-lg-12"><div class="content-area card"><div class="card-innr card-innr-fix"><div class="card-head"><h6 class="card-title">Update MLM Plan</h6></div>
   <form id="frmProducts" method="post" action="{{route('plan.update', $plan->id)}}">
                    @csrf
                    @method('put')
                    <div class="card-bsody table-resposnsive">
                        <div class="form-group">
                            <div class="row pb-5">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>@lang('Plan Name'): </strong>
                                        <input type="text" class="form-control form-control-lg" value="{{$plan->name}}"
                                               name="name" placeholder="Name" required>
                                    </div>
                                </div>
                                <input name="id" value="{{$plan->id}}" hidden>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>@lang('Status'): ({{$plan->status == 1? "Active":"Deactive"}})</strong>
                                        <select name="status" class="form-control form-control-lg">
                                            <option {{$plan->status == 1? 'selected':''}} value="1">@lang('Active')</option>
                                            <option {{$plan->status == 0? 'selected':''}} value="0">@lang('Inactive')</option>
                                        </select>

                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>@lang('Plan Price'):</strong>
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-lg" id="plan_price" value="{{$plan->price}}" name="price"
                                                   placeholder="@lang('Plan Price')" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text">{{$basic->currency_sym}}</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>@lang('Referral Bonus'):</strong>
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-lg " value="{{$plan->ref_bonus}}" onkeyup="testcalc()"  name="ref_bonus"
                                                   placeholder="@lang('Referral Bonus')" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text">{{$basic->currency_sym}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12 pb-4"><h4>Level Commissions</h4></div>


                                @for($i = 1; $i <= intval($basic->matrix_height); $i++)
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <strong>@lang('Level') {{ $i }}:</strong>
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-lg planamountsum" onkeyup="testcalc()" name="amount[]"
                                                       placeholder="@lang('Commission Amount')"
                                                       value="{{@$plan->plan_level->where('level',$i)[$i-1]['amount']}}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">{{$basic->currency_sym}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor


                            </div>
                        </div>
                    </div>
                    <div class="cards-footer">
                        <button type="submit" class="btn btn-primary   bold uppercase"><i
                                    class="fa fa-send"></i> @lang('Save')</button>
                    </div>
                </form></div><!-- .card-innr --></div><!-- .card --></div> <!-- .card --></div></div></div><!-- .container --></div><!-- .page-content -->
@stop
@push('script')


<div class="col-md-6">
            <div class="card bg-dark">
                <h3 class="card-header text-white">@lang('Profit/Loss Calculation')</h3>
               <div class="card-body">
                   <div class="row  mt-50">
                       <div class="col-md-12">
                           <div class="alert alert-secondary text-center" id="giveStatus">
                               <h2><strong>@lang('Plan Price') : {{$basic->currency_sym}}</strong><strong id="planPrice"></strong></h2>
                               <h2><strong>@lang('Referral Commission') : {{$basic->currency_sym}}</strong><strong id="refCom"></strong></h2>
                               <h2><strong>@lang('Total Level Commission') : {{$basic->currency_sym}}</strong><strong id="totalLvlCom"></strong></h2>
                               <h1 id="profitORLoss"></h1>
                           </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>



    <script>

        $('#plan_price').keyup(function(){
           $('#planPrice').text($(this).val());
        });

        $('input[name=ref_bonus]').keyup(function(){
            $('#refCom').text($(this).val());
        });


        $('#profitORLoss').val();



        function testcalc(){
            var x=0;
            var planPrice   = $('#plan_price').val();
            var refBonus    = $('input[name=ref_bonus]').val();

            $('.planamountsum').each(function(e){
                if($(this).val()!=''){
                    x += +$(this).val();
                }
            })

            var totalLvlCom = $('#totalLvlCom');


            totalLvlCom.text(x);

            var total = x + Number(refBonus);

            var finalAmount = planPrice - total;

            if(planPrice > total){
                $('#giveStatus').removeClass().addClass('alert alert-success text-center')
                $('#profitORLoss').html('<strong>Admin Profit : ' + finalAmount + '{{$basic->cur_sym}}' + '</strong>')

            }else {
                $('#giveStatus').addClass('alert alert-danger text-center')
                $('#profitORLoss').html('<strong>Admin Loss : ' + finalAmount + '{{$basic->cur_sym}}' + '</strong>')
            }




        };
    </script>


@endpush
