@extends('include.admindashboard')

@section('body')
<script>
function goBack() {
  window.history.back();
}
</script>
<script type="text/javascript">
    if (window.performance && window.performance.navigation.type == window.performance.navigation.TYPE_BACK_FORWARD) {
        location.reload();
    }
</script>
 <div class="page-content">
    <div class="container">
        <div class="card content-area">
            <div class="card-innr">
                <div class="card-head d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">{{$network->name}}</h4>
                    <a href="#" onclick="goBack()" class="btn btn-sm btn-auto btn-outline btn-primary d-sm-inline-block"><em class="fas fa-arrow-left"></em><span class="d-none d-sm-inline-block">Back</span></a>
                </div>
                <div class="gaps-1x"></div>
                <div class="card-text">
                    <p>Please fill the form below to update your {{$network->name}} bouquet</p>
                </div>
                <div class="gaps-2x"></div>
                <div class="row">
                    <div class="col-12">
                        <form role="form" method="POST" enctype="multipart/form-data" action="{{route('admin.cabletvplanpost',$network->id)}}">
                        {{ csrf_field() }}
                            <div class="gaps-1x"></div>
                            <div class="row">
                            <div class="col-md-6">
                                    <div class="input-item input-with-label">
                                        <label class="input-item-label">Decoder Name</label>
                                        <div class="input-wrap">
                                            <input class="input-bordered" value="{{$decoder->name}}" readonly placeholder="Enter Decoder Name" type="text" name="details">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-with-label">
                                        <label class="input-item-label">Bouquet Name</label>
                                        <div class="input-wrap">
                                            <input class="input-bordered" value="{{$network->name}}" type="text" name="name" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="sap"></div>
                                </div>
                            </div>
                            <div class="bank-details pt-3">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">Plan Price</label>
                                            <div class="input-wrap">
                                                <input class="input-bordered required" name="fee" value="{{$network->cost}}" type="text" placeholder="Enter Plan Price" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">Plan Code</label>
                                            <div class="input-wrap">
                                                <input class="input-bordered required number" name="plan" value="{{$network->plan}}" type="number" placeholder="Enter Plan Code" required>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="gaps-1x"></div>
                            <div class="d-flex pb-1">
                                <button class="btn btn-md btn-primary" type="submit">UPDATE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop


