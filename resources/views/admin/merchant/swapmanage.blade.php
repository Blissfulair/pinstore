@extends('include.admindashboard')

@section('body')
  <div class="page-header"><div class="container"><div class="row justify-content-center"><div class="col-lg-8 col-xl-7 text-center"><h5 class="page-title">Manage Airtome Swap</h5></div></div></div><!-- .container --></div><div class="page-content"><div class="container"><div class="row"> <div class="col-lg-12"><div class="content-area card"><div class="card-innr card-innr-fix2"><div class="card-head"><h6 class="card-title">Update Airtime Swap</h6></div><div class="gaps-1x"></div><!-- .gaps -->

  <form role="form" method="POST" action="{{route('admin.airtimeswapmanagepost' )}}"
     >
    {{ csrf_field() }}
  <div class="row">



  <div class="col-xl-6 col-sm-6"><div class="input-item input-with-label"><label class="input-item-label ucap text-exlight">Network Name</label><input type="text" class="input-bordered"
                                           name="name"        placeholder="Network Name" value="{{$network->name}}">
<input hidden name="id" value="{{$network->id}}">

                                                   </div></div><div class="col-xl-6 col-sm-6"><div class="input-item input-with-label"><label class="input-item-label ucap text-exlight">Network Number</label> <input  required  type="text" class="input-bordered"
                                               placeholder="Network Number" value="{{$network->number}}"
                                               name="number"></div></div> </div><div class="row"> <div class="col-md-12"><div class="input-item input-with-label"><label class="input-item-label ucap text-exlight">Network Swap Charge (%)</label> <input type="text" required name="rate" value="{{$network->rate}}"
                                                   class="input-bordered"
                                                   placeholder="0.00"
                                                   ></div></div></div> </div><!-- .card-innr -->

    <div class="form-group col-md-12 ">
                                        <button class="btn btn-primary btn-lg">Update</button></form>
                                    </div>
</div><!-- .card -->

                                                   </div> </div><!-- .card-innr --></div><!-- .card --></div></div></div><!-- .container --></div>
@stop
