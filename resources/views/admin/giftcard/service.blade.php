@extends('include.admindashboard')

@section('body')
    <div class="page-content"><div class="container"><div class="card content-area"><div class="card-innr"><div class="card-head"><h4 class="card-title">Service List</h4></div><table class="data-table dt-init user-list"><thead><tr class="data-item data-head"><th class="data-col dt-user">Service</th> <th class="data-col dt-token">Price</th> </th><th class="data-col"></th></tr></thead><tbody>
<a href="#" data-toggle="modal" data-target="#createcoin" class="btn btn-sm btn-primary btn-outline"><em class="ti ti-giftcard"></em>Add New Service</a>
 


 @foreach($currency as $k=>$data)
<tr class="data-item"><td class="data-col dt-user"><span class="lead user-name">{{$data->type == 1?'Change Of Institution/Course':($data->type == 2?'Upload of O-Level/A-Level':($data->type ==3?'WAEC':($data->type == 4?'NECO':'NABTEB'))) }}</span><span class="sub user-id"></span></td> 
<td class="data-col dt-token"><span class="lead lead-btoken">{{$data->amount}}</span></td>
<td class="data-col dt-status">


</td><td class="data-col text-right"><div class="relative d-inline-block"><a href="#" class="btn btn-light-alt btn-xs btn-icon toggle-tigger"><em class="ti ti-more-alt"></em></a><div class="toggle-class dropdown-content dropdown-content-top-left"><ul class="dropdown-list"><li><a href="{{route('admin.edit-service',$data->id)}}"><em class="ti ti-eye"></em> View Details</a></li>

<li><a href="{{route('deletecard',$data->id)}}"><em class="ti ti-trash"></em> Delete</a></li></ul></div></div></td></tr>
@endforeach

<!-- .data-item --></tbody></table></div><!-- .card-innr --></div><!-- .card --></div><!-- .container --></div><!-- .page-content -->





<!-- .modal-dialog --></div><!-- Modal End --><div class="modal fade" id="createcoin2" tabindex="-1"><div class="modal-dialog modal-dialog-md modal-dialog-centered"><div class="modal-content"><div class="popup-body"><h4 class="popup-title">Add scratch card</h4> <p>Fill the form below to create a new giftcard for the system..</p>

<div class="input-item input-with-label">

<form role="form" method="POST" action="{{route('storecard')}}" name="editForm" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="input-item-label text-exlight">Pin:</label>
                                        <div class="input-group">
                                            <input type="text" class="input-bordered" placeholder="Pin" value="{{old('pin')}}"
                                                   name="pin">

                                        </div>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="input-item-label text-exlight"> Serial No:</label>
                                        <input type="text"class="input-bordered"  placeholder="Serial No" value="{{old('serial_no')}}"
                                               name="serial_no">


                                    </div>

                                </div>
                                <div class="row">

                                    <div class="form-group col-md-12">
                                        <label class="input-item-label text-exlight">Giftcard Charge:</label>
                                        <div class="input-group">

                                            <input type="text" name="buy"  value="{{old('price')}}" class="input-bordered">
                                        </div>

                                    </div>






                                </div>




                            </div><!-- .input-item --><ul class="d-flex flex-wrap align-items-center guttar-30px"><li><button type="submit" class="btn btn-primary">Create Giftcard</button></form></li><li class="pdt-1x pdb-1x"><a href="#" data-dismiss="modal" data-toggle="modal" data-target="#pay-online" class="link link-primary">Cancel</a></li></ul><div class="gaps-2x"></div><div class="gaps-1x d-none d-sm-block"></div></div></div><!-- .modal-content --></div><!-- .modal-dialog --></div><!-- Modal End -->
                            
                            
                            
                            
                            
                            <!-- .modal-dialog --></div><!-- Modal End --><div class="modal fade" id="createcoin" tabindex="-1"><div class="modal-dialog modal-dialog-md modal-dialog-centered"><div class="modal-content"><div class="popup-body"><h4 class="popup-title">Add Service Price</h4> <p>Fill the form below to create a new giftcard for the system..</p>

<div class="input-item input-with-label">

<form role="form" method="POST" action="{{route('saveService')}}" name="editForm" >
                                {{ csrf_field() }}

                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="input-item-label text-exlight">Service:</label>
                                        <div class="input-group">
                                            <select type="text" class="input-bordered" value="{{old('pin')}}"
                                                   name="type">
                                                   <option value="">Select Service</option>
                                                   <option value="1">Change of Institution/Course</option>
                                                   <option value="2">Upload of O-Level/A-Level Result</option>
                                                   <option value="3">WAEC Scratch Card</option>
                                                   <option value="4">NEC0 Scratch Card</option>
                                                   <option value="5">NABTEB Scratch Card</option>
                                            </select>

                                        </div>

                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="input-item-label text-exlight">Price:</label>
                                        <div class="input-group">
                                            <input type="text" class="input-bordered" placeholder="Amount" value="{{old('amount')}}"
                                                   name="amount">

                                        </div>

                                    </div>

                                </div> 




                            </div><!-- .input-item --><ul class="d-flex flex-wrap align-items-center guttar-30px"><li><button type="submit" class="btn btn-primary">Add Scratch Card</button></form></li><li class="pdt-1x pdb-1x"><a href="#" data-dismiss="modal" data-toggle="modal" data-target="#pay-online" class="link link-primary">Cancel</a></li></ul><div class="gaps-2x"></div><div class="gaps-1x d-none d-sm-block"></div></div></div><!-- .modal-content --></div><!-- .modal-dialog --></div><!-- Modal End -->
@endsection
