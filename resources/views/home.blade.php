@extends('include.dashboard')
@section('content')


@php
$ip = \App\UserLogin::whereUser_id(Auth::user()->id)->latest()->take(1)->first();
 $ncount = \App\Message::whereUser_id(Auth::user()->id)->whereAdmin(1)->whereStatus(0)->count();

@endphp
@if($ncount > 0)

@endif
<?php 
//$lastref = \App\User::whereReference(Auth::user()->id)->first();
?>
 <div class="nk-content nk-content-fluid">




                        <div class="container-xl wide-lg">





                        @if($ncount > 0)
                        <div class="alert alert-primary">
                                        <div class="alert-cta flex-wrap flex-md-nowrap">
                                            <div class="alert-text"><p> {{Auth::User()->username}}!, You have <a href="#" class="link link-primary"> {{$ncount}}</a>  unread message(s) in your inbox</p> </div>
                                            <ul class="alert-actions gx-3 mt-3 mb-1 my-md-0">
                                                <li class="order-md-last"><a href="#" class="btn btn-sm btn-warning" type="button" class="close" data-dismiss="alert" aria-label="Close">Close</a></li>
                                                <li class="order-md-last"><a href="{{route('inbox')}}" class="btn btn-sm btn-primary" type="button"   aria-label="Close">View</a></li>

                                            </ul>

                                        </div>
                                    </div>
                        @endif



  <div class="nk-block-head nk-block-head-sm">
                                        <div class="nk-block-between">
                                            <div class="nk-block-head-content">
                                                <h3 class="nk-block-title page-title">Dashboard</h3>
                                                <div class="nk-block-des text-soft"><p><?php
    /* This sets the $time variable to the current hour in the 24 hour clock format */
    $time = date("H");
    /* Set the $timezone variable to become the current timezone */
    $timezone = date("e");
    /* If the time is less than 1200 hours, show good morning */
    if ($time < "12") {
        echo "Good morning";
    } else
    /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
    if ($time >= "12" && $time < "17") {
        echo "Good afternoon";
    } else
    /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
    if ($time >= "17" && $time < "19") {
        echo "Good evening";
    } else
    /* Finally, show good night if the time is greater than or equal to 1900 hours */
    if ($time >= "19") {
        echo "Good night";
    }
    ?>, {{Auth::User()->fname}} {{Auth::User()->lname}}</p></div>
                                            </div>
                                            <div class="nk-block-head-content">
                                                <div class="toggle-wrap nk-block-tools-toggle">
                                                    <!-- <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                    <div class="toggle-expand-content" data-content="pageMenu">
                                                        <ul class="nk-block-tools g-3">
                                                            <li>
                                                                <a href="#"  data-toggle="modal" data-target="#modalbonus"  class="btn btn-white btn-dim btn-outline-primary"><em class="icon ni ni-gift"></em><span>Earn Bonus</span></a>
                                                            </li>

                                                            <li class="nk-block-tools-opt">

                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            <div class="nk-content-body">
<br>





                                <div class="nk-block">
                                    <div class="row gy-gs">




                                         <div class="col-lg-5 col-xl-6">
                                            <div class="nk-block">
                                                <div class="nk-block-head-xs">
                                                    <div class="nk-block-head-content"><h5 class="nk-block-title title">Wallet</h5></div>
                                                </div>
                                                <div class="nk-block">
                                                    <div class="card card-bordered text-light is-dark h-100">
                                                        <div class="card-inner">
                                                            <div class="nk-wg7">
                                                                <div class="nk-wg7-stats">
                                                                    <div class="nk-wg7-title">Balance</div>
                                                                    <div class="number-lg amount">{{number_format($user->balance,2)}} </div>
                                                                </div>
                                                                <div class="nk-wg7-stats-group">
                                                                    <div class="nk-wg7-stats w-50">
                                                                        <div class="nk-wg7-title">Total</div>
                                                                        <div class="number">{{number_format($total_funded,2)}} </div>
                                                                    </div>
                                                                    <div class="nk-wg7-stats w-50">
                                                                        <div class="nk-wg7-title">Used</div>
                                                                        <div class="number">{{number_format($used,2)}} </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-5 col-xl-6">
                                            <div class="nk-block">
                                                <div class="nk-block-head-xs">
                                                    <div class="nk-block-head-content"><h5 class="nk-block-title title">Requests</h5></div>
                                                </div>
                                                <div class="nk-block">
                                                    <div class="card card-bordered text-light is-dark h-100">
                                                        <div class="card-inner">
                                                            <div class="nk-wg7">
                                                                <div class="nk-wg7-stats">
                                                                    <div class="nk-wg7-title">Active Request</div>
                                                                    <div class="number-lg amount">{{number_format($active_jobs, 0)}}  </div>





                                                                </div>
                                                                <div class="nk-wg7-stats-group">
                                                                    <div class="nk-wg7-stats w-50">
                                                                        <div class="nk-wg7-title">Pending</div>
                                                                        <div class="number">{{number_format($pending, 0)}} </div>
                                                                    </div>
                                                                    <div class="nk-wg7-stats w-50">
                                                                        <div class="nk-wg7-title">Completed</div>
                                                                        <div class="number">{{number_format($completed, 0)}}</div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="col-lg-7 col-xl-12">
                                            <div class="nk-block">
                                                <div class="nk-block-head-xs">
                                                    <div class="nk-block-between-md g-2">
                                                        <div class="nk-block-head-content"><h6 class="nk-block-title title">Our Top Services</h6></div>

                                                    </div>
                                                </div>
                                                <div class="row g-2">
                                                    <div class="col-sm-4 col-6">
                                                        <div class="card bg-primary-dim">
                                                            <div class="nk-wgw sm">
                                                                <a class="nk-wgw-inner" href="{{route('user.depositLog')}}">
                                                                    <div class="nk-wgw-name">
                                                                        <div class="nk-wgw-icon bg-primary "><em class="icon ni ni-upload"></em></div>
                                                                        <h5 class="nk-wgw-title title">JAMB upload of O-Level/A-Level results</h5>
                                                                    </div>
                                                                    <div class="nk-wgw-balance">
                                                                        <div class="sub-text">We offer upload of O-Level and A-Level results to JAMB profile without stress</div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 col-6">
                                                        <div class="card bg-primary-dim">
                                                            <div class="nk-wgw sm">
                                                                <a class="nk-wgw-inner" href="{{ route('depositfiat') }}">
                                                                    <div class="nk-wgw-name">
                                                                        <div class="nk-wgw-icon bg-primary "><em class="icon ni ni-download"></em></div>
                                                                        <h5 class="nk-wgw-title title">JAMB Change of Institution/Course</h5>
                                                                    </div>
                                                                    <div class="nk-wgw-balance">
                                                                        <div class="sub-text">You can change institution or course on pinstore </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 col-6">
                                                        <div class="card bg-primary-dim">
                                                            <div class="nk-wgw sm">
                                                                <a class="nk-wgw-inner" href="{{route('waecCard')}}">
                                                                    <div class="nk-wgw-name">
                                                                        <div class="nk-wgw-icon bg-primary "><em class="icon ni ni-cards"></em></div>
                                                                        <h5 class="nk-wgw-title title">WAEC Scratch Card</h5>
                                                                    </div>
                                                                    <div class="nk-wgw-balance">
                                                                        <div class="sub-text">We sell WAEC scratch cards </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 col-6">
                                                        <div class="card bg-primary-dim">
                                                            <div class="nk-wgw sm">
                                                                <a class="nk-wgw-inner" href="{{route('necoCard')}}">
                                                                    <div class="nk-wgw-name">
                                                                        <div class="nk-wgw-icon bg-primary "><em class="icon ni ni-mobile"></em></div>
                                                                        <h5 class="nk-wgw-title title">NECO Scratch Card</h5>
                                                                    </div>
                                                                    <div class="nk-wgw-balance">
                                                                        <div class="sub-text">NECO scratch cards also on sale at pinstore </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 col-6">
                                                        <div class="card bg-primary-dim">
                                                            <div class="nk-wgw sm">
                                                                <a class="nk-wgw-inner" href="{{route('nabtebCard')}}">
                                                                    <div class="nk-wgw-name">
                                                                        <div class="nk-wgw-icon bg-primary "><em class="icon ni ni-mobile"></em></div>
                                                                        <h5 class="nk-wgw-title title">NABTEB Scratch Card</h5>
                                                                    </div>
                                                                    <div class="nk-wgw-balance">
                                                                        <div class="sub-text">Buy NABTEB scratch cards Now</div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-sm-4 col-12">
                                                        <div class="card bg-primary-dim">
                                                            <div class="nk-wgw sm">
                                                                <a class="nk-wgw-inner" href="#">
                                                                    <div class="nk-wgw-name">
                                                                        <div class="nk-wgw-icon bg-primary "><em class="icon ni ni-bulb"></em></div>
                                                                        <h5 class="nk-wgw-title title">Mathematics Teacher</h5>
                                                                    </div>
                                                                    <div class="nk-wgw-balance">
                                                                        <div class="sub-text">Edo College</div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>




                                        </div>
                                    </div>
                                </div>
                                <br><br>

                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-inner card-inner-lg">
                                            <div class="align-center flex-wrap flex-md-nowrap g-4">
                                                <div class="nk-block-image w-120px flex-shrink-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 118">
                                                        <path
                                                            d="M8.916,94.745C-.318,79.153-2.164,58.569,2.382,40.578,7.155,21.69,19.045,9.451,35.162,4.32,46.609.676,58.716.331,70.456,1.845,84.683,3.68,99.57,8.694,108.892,21.408c10.03,13.679,12.071,34.71,10.747,52.054-1.173,15.359-7.441,27.489-19.231,34.494-10.689,6.351-22.92,8.733-34.715,10.331-16.181,2.192-34.195-.336-47.6-12.281A47.243,47.243,0,0,1,8.916,94.745Z"
                                                            transform="translate(0 -1)"
                                                            fill="#f6faff"
                                                        />
                                                        <rect x="18" y="32" width="84" height="50" rx="4" ry="4" fill="#fff" />
                                                        <rect x="26" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                                        <rect x="50" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                                        <rect x="74" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                                        <rect x="38" y="60" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                                        <rect x="62" y="60" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                                        <path
                                                            d="M98,32H22a5.006,5.006,0,0,0-5,5V79a5.006,5.006,0,0,0,5,5H52v8H45a2,2,0,0,0-2,2v4a2,2,0,0,0,2,2H73a2,2,0,0,0,2-2V94a2,2,0,0,0-2-2H66V84H98a5.006,5.006,0,0,0,5-5V37A5.006,5.006,0,0,0,98,32ZM73,94v4H45V94Zm-9-2H54V84H64Zm37-13a3,3,0,0,1-3,3H22a3,3,0,0,1-3-3V37a3,3,0,0,1,3-3H98a3,3,0,0,1,3,3Z"
                                                            transform="translate(0 -1)"
                                                            fill="#798bff"
                                                        />
                                                        <path d="M61.444,41H40.111L33,48.143V19.7A3.632,3.632,0,0,1,36.556,16H61.444A3.632,3.632,0,0,1,65,19.7V37.3A3.632,3.632,0,0,1,61.444,41Z" transform="translate(0 -1)" fill="#6576ff" />
                                                        <path
                                                            d="M61.444,41H40.111L33,48.143V19.7A3.632,3.632,0,0,1,36.556,16H61.444A3.632,3.632,0,0,1,65,19.7V37.3A3.632,3.632,0,0,1,61.444,41Z"
                                                            transform="translate(0 -1)"
                                                            fill="none"
                                                            stroke="#6576ff"
                                                            stroke-miterlimit="10"
                                                            stroke-width="2"
                                                        />
                                                        <line x1="40" y1="22" x2="57" y2="22" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                        <line x1="40" y1="27" x2="57" y2="27" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                        <line x1="40" y1="32" x2="50" y2="32" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                        <line x1="30.5" y1="87.5" x2="30.5" y2="91.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                                        <line x1="28.5" y1="89.5" x2="32.5" y2="89.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                                        <line x1="79.5" y1="22.5" x2="79.5" y2="26.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                                        <line x1="77.5" y1="24.5" x2="81.5" y2="24.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                                        <circle cx="90.5" cy="97.5" r="3" fill="none" stroke="#9cabff" stroke-miterlimit="10" />
                                                        <circle cx="24" cy="23" r="2.5" fill="none" stroke="#9cabff" stroke-miterlimit="10" />
                                                    </svg>
                                                </div>
                                                <div class="nk-block-content">
                                                    <div class="nk-block-content-head px-lg-4">
                                                        <h5>We’re here to help you!</h5>
                                                        <p class="text-soft">Ask a question or file a support ticket, manage request, report an issue. Our support team will get back to you by email.</p>
                                                    </div>
                                                </div>
                                                <div class="nk-block-content flex-shrink-0"><a href="#" data-toggle="modal" data-target="#compose-mail" class="btn btn-lg btn-outline-primary">Get Support Now</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>






                    <div class="modal fade" tabindex="-1" role="dialog" id="compose-mail"><div class="modal-dialog modal-lg" role="document"><div class="modal-content"><div class="modal-header"><h6 class="modal-title">Create New Ticket</h6><a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a></div><div class="modal-body p-0"><div class="nk-reply-form-header">

<form action="{{route('post.ticket')}}" method="post" enctype="multipart/form-data">
@csrf

 </div><div class="nk-reply-form-editor">



 <div class="nk-reply-form-editor">
 <div class="nk-reply-form-field"><input type="text" name="subject" class="form-control form-control-simple" placeholder="Subject"></div><div class="nk-reply-form-field"><textarea name="body"  class="form-control form-control-simple no-resize ex-large" id="temp" placeholder="Hello"></textarea></div></div>


  <select required  class="form-control" placeholder="Hello" name="desk"><div class="coin-icon" id="icon1"><em class="icon ni ni-sign-usdc-alt" ></em></div>
<option> Select Desk</option>
<option   value="Abuse">Abuse </option>
<option  value="Complaint">Complaint </option>
<option  value="Request">Request </option>
<option  value="Sales">Sales </option>
<option  value="Support">Support </option>

</select>
</div>

 <div class="nk-reply-form-tools"><ul class="nk-reply-form-actions g-1"><li class="mr-2"><button class="btn btn-primary" type="submit">Create/Send</button></li><li><div class="dropdown"><a class="btn btn-icon btn-sm btn-tooltip" data-toggle="dropdown" title="Templates" href="#"><em class="icon ni ni-hash"></em></a><div class="dropdown-menu"><ul class="link-list-opt no-bdr link-list-template"><li class="opt-head"><span>Quick Insert</span></li>
  <script type="text/javascript">

function goDoSomething2(identifier){

                                     document.getElementById("temp").value = $(identifier).data('temp');

                                              }

                                        </script>

  <li><a href="#" onclick="goDoSomething2(this);"  data-temp="Hello admin, please i need assistance from you"><span>Assistance</span></a></li><li><a href="#" onclick="goDoSomething2(this);"  data-temp="Thank you for the response"><span>Thank you message</span></a></li></ul></div></div></li><li><a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Upload Attachment" href="#"><em class="icon ni ni-clip-v"></em></a></li> </ul> </div></div></div></div></div></div>

@endsection
