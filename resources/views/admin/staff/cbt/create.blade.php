@extends('include.admindashboard')

@section('body')
  <div class="page-header"><div class="container"><div class="row justify-content-center"><div class="col-lg-8 col-xl-7 text-center"><h2 class="page-title">Create CBT user</h2></div></div></div><!-- .container --></div><div class="page-content"><div class="container"><div class="row">

<div class="col-lg-12"><div class="content-area card"><div class="card-innr card-innr-fix"><div class="card-head"><h6 class="card-title">Add New CBT User</h6></div><div class="gaps-1x"></div><!-- .gaps -->

<form role="form" method="POST" enctype="multipart/form-data" action="{{route('createnewCbt')}}">
                        {{ csrf_field() }}

<div class="row"><div class="col-md-6"><div class="input-item input-with-label"><label class="input-item-label text-exlight">Staff Full Name</label><input class="input-bordered" type="text"             name="name"><span class="input-note">Please enter staff name</span></div></div><div class="col-md-6"><div class="input-item input-with-label"><label class="input-item-label text-exlight">Username</label><input name="username" class="input-bordered" type="text"><span class="input-note">CBT Login Username</span></div></div></div>


<div class="row"><div class="col-md-6"><div class="input-item input-with-label"><label class="input-item-label text-exlight">Email Address</label><div class="relative"> </span><input  name="email" class="input-bordered" type="text"></div><span class="input-note"><small><code> The default staff login password is: cbt123456</code></small></span></div></div><div class="col-md-6"><div class="input-item input-with-label"><label class="input-item-label text-exlight">Mobile Phone</label><input  name="phone" class="input-bordered" type="text"><span class="input-note">Phone Number. </span></div></div>



<input  name="password" hidden class="input-bordered" value="$2y$10$Qy4nl2uhuwEierJJDYLYce7QxrHJ3DkTsHVwUBinKqfnkc2bahKlu">
</div>




<button class="btn btn-primary" type="submit">Create CBT</button></form></div><!-- .card-innr --></div><!-- .card --></div> <!-- .card --></div></div></div><!-- .container --></div><!-- .page-content -->
@endsection

@section('script')

@stop
