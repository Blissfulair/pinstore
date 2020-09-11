@extends('include.admindashboard')

@section('body')
  <div class="page-header"><div class="container"><div class="row justify-content-center"><div class="col-lg-8 col-xl-7 text-center"><h5 class="page-title">Merchant Settings</h5></div></div></div><!-- .container --></div><div class="page-content"><div class="container"><div class="row">

<div class="col-lg-12"><div class="content-area card"><div class="card-innr card-innr-fix"><div class="card-head"><h6 class="card-title">Merchant Settings</h6></div><div class="gaps-1x"></div><!-- .gaps --><form role="form" method="POST" enctype="multipart/form-data" action="">
                        {{ csrf_field() }}

<div class="row"><div class="col-md-6"><div class="input-item input-with-label"><label class="input-item-label text-exlight">Merchant API</label><input class="input-bordered" type="text" value="{{$general->merchantkey}}"
                                           name="merchantkey"><span class="input-note">Clubkonnect API</span></div></div><div class="col-md-6"><div class="input-item input-with-label"><label class="input-item-label text-exlight">Merchant User ID</label><input  value="{{$general->merchantid}}" name="merchantid" class="input-bordered" type="text"><span class="input-note">Clubkonnect User ID</span></div></div>

<div class="col-md-6"><div class="input-item input-with-label"><label class="input-item-label text-exlight">Airtime Discount</label><input class="input-bordered" type="text" value="{{$general->airtimediscount}}"
                                           name="airtimediscount"><span class="input-note">Airtime Recharge Discount</span></div></div>

<div class="col-md-6"><div class="input-item input-with-label"><label class="input-item-label text-exlight">Internet Data Discount</label><input  value="{{$general->datadiscount}}" name="datadiscount" class="input-bordered" type="text"><span class="input-note">Data Subscription Discount</span></div></div>

<div class="col-md-6"><div class="input-item input-with-label"><label class="input-item-label text-exlight">Decoder Discount</label><input class="input-bordered" type="text" value="{{$general->decoderdiscount}}"
                                           name="decoderdiscount"><span class="input-note">Cable TV Subscription Discount</span></div></div>


<div class="col-md-6"><div class="input-item input-with-label"><label class="input-item-label text-exlight">Electricity Bills Discount</label><input  value="{{$general->powerdiscount}}" name="powerdiscount" class="input-bordered" type="text"><span class="input-note">Electricity Bills Payment  Discount</span></div></div>








                                           </div>




<div class="col-md-12"><label class="input-item-label ucap text-exlight">Merchant Features</label><ul class="d-flex flex-wrap checkbox-list"><li><div class="input-item text-left"><input  class="input-checkbox input-checkbox-sm" type="checkbox"
                               id="cma-enot1"        name="merchant" {{ $general->merchant == "1" ? 'checked' : '' }}><label for="cma-enot1">Merchant Feature</label></div></li>

                               <li><div class="input-item text-left"><input  class="input-checkbox input-checkbox-sm" type="checkbox"
                               id="cma-enot1g"        name="internet" {{ $general->internet == "1" ? 'checked' : '' }}><label for="cma-enot1g">Internet Data</label></div></li>

                               <li><div class="input-item text-left"><input
                       id="cma-enot"     class="input-checkbox input-checkbox-sm"             type="checkbox"
                                       name="phonecall" {{$general->phonecall == "1" ? 'checked' : ''}}><label for="cma-enot">Phone Recharge</label></div></li><li><div class="input-item text-left"><input   class="input-checkbox input-checkbox-sm"     id="pma-cash"          data-width="100%" type="checkbox"
                                       name="electric" {{ $general->electric == "1" ? 'checked' : '' }}><label for="pma-cash">Electricity</label></div></li>


<li><div class="input-item text-left"><input   class="input-checkbox input-checkbox-sm"     id="pma-casha"          data-width="100%" type="checkbox"
                                       name="television" {{ $general->television == "1" ? 'checked' : '' }}><label for="pma-casha">Cable TV</label></div></li>

<li><div class="input-item text-left"><input   class="input-checkbox input-checkbox-sm"     id="pma-cashak"          data-width="100%" type="checkbox"
                                       name="airtimeswap" {{ $general->airtimeswap == "1" ? 'checked' : '' }}><label for="pma-cashak">Airtime Conversion</label></div></li>



</ul></div>



 <div class="gaps-1x"></div><button class="btn btn-primary" type="submit">Submit</button></form></div><!-- .card-innr --></div><!-- .card --></div> <!-- .card --></div></div></div><!-- .container --></div><!-- .page-content -->
@endsection

@section('script')

@stop
