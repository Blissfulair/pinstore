@extends('include.admindashboard')

@section('body')

<div class="page-header"><div class="container"><div class="row justify-content-center"> </div></div><!-- .container --><center><div class="col-lg-8 col-xl-7 text-center"><h4 class="page-title">Matrix Width & Hight </h4></div></center></div><div class="page-content"><div class="container"><div class="row">


<div class="col-lg-12">

 <form role="form" method="POST" action="{{route('matrix.update')}}">
                        {{ csrf_field() }}

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <strong>@lang('Matrix Height') <small>(@lang('Should Be Numeric'))</small></strong>
                                <input type="text" class="form-control custom-size input-lg" value="{{$basic->matrix_height}}" name="matrix_height">
                            </div>

                            <div class="form-group col-md-12">
                                <strong>@lang('Matrix Width') <small>(@lang('Should Be Numeric'))</small></strong>
                                <input type="text" class="form-control custom-size input-lg" value="{{$basic->matrix_width}}" name="matrix_width">
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">@lang('Update')</button>
                        </div>
                    </form></div><!-- .card-innr --></div><!-- .card --></div> <!-- .col --></div><!-- .row --></div><!-- .container --></div>


@endsection
