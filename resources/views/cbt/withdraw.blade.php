@extends('include.cbt')


@section('content')
     <div class="nk-content nk-content-fluid">
                        <div class="container-xl wide-lg">
                            <div class="nk-content-body">
                                <div class="buysell  ">
                                    <div class="buysell-nav text-center">

                                    </div>
                                    <div class="buysell-title text-center"><h4 class="title">Withdraw</h4></div>
                                    <div class="buysell-block">

                                        <form method="post"  class="buysell-form" action="{{route('cbt-saveWithdraw')}}">
                                        @csrf

                                            <div class="buysell-field form-group">
                                                <div class="form-label-group"><label class="form-label">Choose what you want to get</label></div>

  
                                                <div class="form-pm-group">
                                                    <ul class="buysell-pm-list">
                                                        <li class="buysell-pm-item">
                                                            
                                                            <input class="buysell-pm-control" type="radio" checked id="pm-1" />
                                                            <label class="buysell-pm-label" for="pm-1">
                                                                <span class="pm-name">Bank Transfer</span><span class="pm-icon"><em class="icon ni ni-process"></em></span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <input id="gate" name="method_id" value="3" hidden>
                                            <div class="buysell-field form-group">
                                                <div class="form-label-group"><label class="form-label" for="buysell-amount">Amount</label></div>
                                                <div class="form-control-group">
                                                    <input type="number" class="form-control form-control-lg form-control-number" name="amount" placeholder=" 0.00" id="mySelect3" onkeyup="myFunction1()" />
                                                    <div class="form-dropdown">

                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-indicator-caret" data-toggle="dropdown" data-offset="0,2">{{$basic->currency}}</a>

                                                        </div>
                                                    </div>
                                                </div>
                                                 </div>
                                                 
                                                 
                                            <div class="buysell-field form-action"><button  type="submit" class="btn btn-lg btn-block btn-primary" >Withdraw</button></div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@stop
