@extends('include.admindashboard')

@section('body')
  <div class="page-header"><div class="container"><div class="row justify-content-center"><div class="col-lg-8 col-xl-7 text-center"><h2 class="page-title">View Service</h2></div></div></div><!-- .container --></div><div class="page-content"><div class="container"><div class="row"> <div class="col-lg-12"><div class="content-area card"><div class="card-innr card-innr-fix2"><div class="card-head"><h6 class="card-title">Update Service</h6></div><div class="gaps-1x"></div><!-- .gaps -->

  <form role="form" method="POST" action="{{route('updateService' )}}"
     name="editForm" >
    {{ csrf_field() }}
  <div class="row">



  <div class="col-xl-12 col-sm-12"><div class="input-item input-with-label"><label class="input-item-label ucap text-exlight">Service</label>
  <select type="text" class="input-bordered" 
                                                   name="type">
                                                   <option value="">Select Service</option>
                                                   <option {{$giftcard->type==1?'selected':''}} value="1">Change of Institution/Course</option>
                                                   <option {{$giftcard->type==2?'selected':''}} value="2">Upload of O-Level/A-Level</option>
                                                   <option {{$giftcard->type==3?'selected':''}} value="3">WEAC</option>
                                                   <option {{$giftcard->type==4?'selected':''}} value="4">NECO</option>
                                                   <option {{$giftcard->type==5?'selected':''}} value="5">NABTEB</option>
                                            </select>

                                                   </div></div><div class="col-xl-12 col-sm-12"><div class="input-item input-with-label"><label class="input-item-label ucap text-exlight">Amount</label> 
                                                   <input type="text" class="input-bordered" value="{{$giftcard->amount}}"
                                               name="amount"></div>
                                               </div>

                                               </div>
                                               
                                               
                                               
                                               <input type="hidden" name="id" value="{{$giftcard->id}}" >
                                               </div>  </div><!-- .card-innr -->

    <div class="form-group col-md-12 ">
                                        <button class="btn btn-primary btn-lg">Update Card</button></form>
                                    </div>
</div><!-- .card -->

                                                   </div> </div><!-- .card-innr --></div><!-- .card --></div></div></div><!-- .container --></div>
@stop
