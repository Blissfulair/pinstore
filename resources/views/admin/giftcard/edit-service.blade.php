@extends('include.admindashboard')

@section('body')
  <div class="page-header"><div class="container"><div class="row justify-content-center"><div class="col-lg-8 col-xl-7 text-center"><h2 class="page-title">View Service</h2></div></div></div><!-- .container --></div><div class="page-content"><div class="container"><div class="row"> <div class="col-lg-12"><div class="content-area card"><div class="card-innr card-innr-fix2"><div class="card-head"><h6 class="card-title">Update Service</h6></div><div class="gaps-1x"></div><!-- .gaps -->

  <form role="form" method="POST" action="{{route('updateService' )}}"
     name="editForm"  enctype="multipart/form-data">
    {{ csrf_field() }}
  <div class="row">
  <div class="col-xl-12 col-sm-12">
      <div class="input-item input-with-label">
        <label class="input-item-label ucap text-exlight">Name</label> 
            <input type="text" class="input-bordered" value="{{$giftcard->name}}"
              name="name">
              </div>
          </div>



  <div class="col-xl-12 col-sm-12"><div class="input-item input-with-label"><label class="input-item-label ucap text-exlight">Service Type</label>
  <select type="text" class="input-bordered" 
                                                   name="service_type">
                                                   <option value="">Select Service</option>
                                                   <option {{$giftcard->service_type==1?'selected':''}} value="1">Others</option>
                                                   <option {{$giftcard->service_type==2?'selected':''}} value="2">JAMB</option>
                                            </select>

                                                   </div></div>

<div class="col-xl-12 col-sm-12"><div class="input-item input-with-label"><label class="input-item-label ucap text-exlight">Service Category</label>
  <select type="text" class="input-bordered" 
                          name="type">
                          <option value="">Select Service</option>
                          <option {{$giftcard->type==1?'selected':''}} value="1">Change of Institution/Course</option>
                          <option {{$giftcard->type==2?'selected':''}} value="2">Upload of O-Level/A-Level Result</option>
                          <option {{$giftcard->type==3?'selected':''}} value="3">Scratch Cards</option>
                          <option {{$giftcard->type==4?'selected':''}} value="4">Others</option>
                  </select>

                          </div>
                        </div>
                                                   
                                                   
                                                   <div class="col-xl-12 col-sm-12"><div class="input-item input-with-label"><label class="input-item-label ucap text-exlight">Amount</label> 
                                                   <input type="text" class="input-bordered" value="{{$giftcard->amount}}"
                                               name="amount"></div>
                                               </div>

                                <div class="col-xl-12 col-sm-12">

                                        <div class="input-item input-with-label">
                                        <label class="input-item-label text-exlight">Description:</label>
                                            <textarea  class="input-bordered" placeholder="Description" 
                                                   name="description">
                                                   {{$giftcard->description}}
                                                   </textarea>

                                        </div>

                                    </div>

                          <div class="col-xl-12 col-sm-12"><div class="input-item input-with-label"><label class="input-item-label ucap text-exlight">Image</label> 
                              <input type="file" class="input-bordered" 
                          name="image"></div>
                          </div>

                                               
                                               
                                               
                                               <input type="hidden" name="id" value="{{$giftcard->id}}" >
                                               </div>  </div><!-- .card-innr -->

    <div class="form-group col-md-12 ">
                                        <button class="btn btn-primary btn-lg">Update Card</button></form>
                                    </div>
</div><!-- .card -->

                                                   </div> </div><!-- .card-innr --></div><!-- .card --></div></div></div><!-- .container --></div>
@stop
