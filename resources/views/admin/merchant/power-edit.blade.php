@extends('include.admindashboard')

@section('body')
<script>
function goBack() {
  window.history.back();
}
</script>
 <div class="page-content">
    <div class="container">
        <div class="card content-area">
            <div class="card-innr">
                <div class="card-head d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">{{$power->name}}</h4>
                    <a href="#" onclick="goBack()" class="btn btn-sm btn-auto btn-outline btn-primary d-sm-inline-block"><em class="fas fa-arrow-left"></em><span class="d-none d-sm-inline-block">Back</span></a>
                </div>
                <div class="gaps-1x"></div>
                <div class="card-text">
                    <p>Please fill the form below to update {{$power->name}} Company</p>
                </div>
                <div class="gaps-2x"></div>
                <div class="row">
                    <div class="col-12">
                        <form role="form" method="POST" enctype="multipart/form-data" action="{{route('admin.powerpost',$power->id)}}">
                        {{ csrf_field() }}
                            <div class="gaps-1x"></div>
                            <div class="row">
                            <div class="col-md-6">
                                    <div class="input-item input-with-label">
                                        <label class="input-item-label">Company Name</label>
                                        <div class="input-wrap">
                                            <input class="input-bordered" value="{{$power->name}}"   placeholder="Enter Company Name" type="text" name="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-with-label">
                                        <label class="input-item-label">Company Slogan</label>
                                        <div class="input-wrap">
                                            <input class="input-bordered" value="{{$power->slogan}}" type="text" name="slogan" required>
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
                                            <label class="input-item-label">TRX Fee</label>
                                            <div class="input-wrap">
                                                <input class="input-bordered required" name="fee" value="{{$power->fee}}" type="text" placeholder="Enter Transaction Fee" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">Company Code</label>
                                            <div class="input-wrap">
                                                <input class="input-bordered required number" name="code" value="{{$power->code}}" type="number" placeholder="Enter Company Code" required>
                                           <small>Be cautious with this as any wrong code here will prevent smooth running of system</small>
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


