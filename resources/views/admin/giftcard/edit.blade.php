@extends('include.admindashboard')

@section('body')
  <div class="page-header"><div class="container"><div class="row justify-content-center"><div class="col-lg-8 col-xl-7 text-center"><h2 class="page-title">View Card</h2></div></div></div><!-- .container --></div><div class="page-content"><div class="container"><div class="row"> <div class="col-lg-12"><div class="content-area card"><div class="card-innr card-innr-fix2"><div class="card-head"><h6 class="card-title">Update Card</h6></div><div class="gaps-1x"></div><!-- .gaps -->

  <form role="form" method="POST" action="{{route('postcard' )}}"
     name="editForm" >
    {{ csrf_field() }}
  <div class="row">



  <div class="col-xl-12 col-sm-12"><div class="input-item input-with-label"><label class="input-item-label ucap text-exlight">Card Type</label>
  <select type="text" class="input-bordered" 
                                                   name="type">
                                                   <option value="">Select Scratch Card Type</option>
                                                   <option {{$giftcard->type==3?'selected':''}} value="3">WEAC</option>
                                                   <option {{$giftcard->type==4?'selected':''}} value="4">NECO</option>
                                                   <option {{$giftcard->type==5?'selected':''}} value="5">NABTEB</option>
                                                   <option {{$giftcard->type==6?'selected':''}} value="6">WAEC Verification</option>
                                            </select>

                                                   </div></div><div class="col-xl-12 col-sm-12"><div class="input-item input-with-label"><label class="input-item-label ucap text-exlight">Pin</label> 
                                                   <input type="text" class="input-bordered" value="{{$giftcard->pin}}"
                                               name="pin"></div>
                                               </div><div class="col-xl-12 col-sm-12"><div class="input-item input-with-label"><label class="input-item-label ucap text-exlight">Serial No</label> 
                                                   <input type="text" class="input-bordered" value="{{$giftcard->serial_no}}"
                                               name="serial_no"></div>

                                               </div>
                                               
                                               
                                               
                                               <input type="hidden" name="id" value="{{$giftcard->id}}" >
                                               </div>  </div><!-- .card-innr -->

    <div class="form-group col-md-12 ">
                                        <button class="btn btn-primary btn-lg">Update Card</button></form>
                                    </div>
</div><!-- .card -->

                                                   </div> </div><!-- .card-innr --></div><!-- .card --></div></div></div><!-- .container --></div>
@stop
