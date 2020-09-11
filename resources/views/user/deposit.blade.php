@extends('include.dashboard')
@section('content')
  <div class="nk-content nk-content-fluid">
                        <div class="container-xl wide-lg">
                            <div class="nk-content-body">
                                <div class="buysell  ">

                                    <div class="buysell-title text-center"><h4 class="title">Jobs Available</h4></div>
                                    <div class="buysell-block">
                                        <form method="post" class="buysell-form" action="{{route('jobapply')}}">
                                         @csrf
                                         <script type="text/javascript">

function goDoSomething(identifier){

document.getElementById("gateway").innerHTML = $(identifier).data('id');
document.getElementById("gate").value = $(identifier).data('id4');
document.getElementById("icon").src = $(identifier).data('id3');
document.getElementById("slogan").innerHTML = $(identifier).data('id2');
  }

</script>
<div class="buysell-field form-group">
    <div class="form-label-group"><label class="form-label">Choose what you want to get</label></div>

    <div class="dropdown buysell-cc-dropdown">
        <a href="#" class="buysell-cc-choosen dropdown-indicator" data-toggle="dropdown">
            <div class="coin-item coin-btc">
                <div class="coin-icon"><img width="40" height="40" id="icon" src="http://localhost:8000/assets/images/post/job1599646323.jpg"></div>
                <div class="coin-info"><span class="coin-name" id="gateway">Available Jobs</span><span class="coin-text" id="slogan">Select Payment Method</span></div>
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-auto dropdown-menu-mxh">
            <ul class="buysell-cc-list">
            @foreach($jobs as $job)
             <li class="buysell-cc-item"  onclick="goDoSomething(this);"  data-id="{{$job->job_title}}" data-id4="{{$job->id}}"  data-id3="{{asset($job->image)}}" data-id2="{{$job->location}}">
                    <a href="#" class="buysell-cc-opt" data-currency="eth">
                        <div class="coin-item coin-eth">
                            <div class="coin-icon"><img width="40" height="40" src="{{asset($job->image)}}"></div>
                            <div class="coin-info"><span class="coin-name">{{$job->job_title}}</span><span class="coin-text">{{$job->location}}</span></div>
                        </div>
                    </a>
                </li>
            @endforeach


            </ul>
        </div>
    </div>
</div>
<input id="gate" name="job_id" hidden>
                                            <div class="buysell-field form-action"><button type="submit" class="btn btn-lg btn-block btn-primary">Proceed</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>@stop
