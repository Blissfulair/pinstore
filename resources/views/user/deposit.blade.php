@extends('include.dashboard')
@section('content')
  <div class="nk-content nk-content-fluid">
                        <div class="container-xl wide-lg">
                            <div class="nk-content-body">
                                <div class="buysell  ">

                                    <div class="buysell-title"><h4 class="title">Fund Wallet</h4></div>
                                    <div class="buysell-block">
                                        <form method="post" class="buysell-form" action="{{route('saveDirectDeposit')}}" enctype="multipart/form-data">
                                         @csrf
                                            </div>
                                            <div class="buysell-field form-group">
                                                <div class="card">
                                                <div class="card-text"><p class="text-warning">Make Payment To Any Of The Following Account Numbers. Use your username as Depositor's name </p></div>
                                                    <?php $bank = DB::table('banks')->orderBy('name','asc')->get(); ?>
                                                    <div class="gaps-3x"></div></div></div></div>
                                                    @foreach($bank as $gate)

                                                    <div class="schedule-item"><div class="row"><div class="col-xl-5 col-md-5 col-lg-6"><div class="pdb-1x"><h5 class="schedule-title"><span>Bank Name</span></h5><span>{{$gate->name}}</span></div></div><div class="col-xl-4 col-md col-lg-6"><div class="pdb-1x"><h5 class="schedule-title"><span>Account Details</span></h5><span>{{$gate->account}}</span></div></div>
                                                    </div></div>

                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="buysell-field form-group">
                                                <div class="form-label-group"><label class="form-label" for="buysell-amount">Amount</label></div>
                                                <div class="form-control-group">
                                                    <input type="number" class="form-control form-control-lg form-control-number" id="buysell-amount" name="amount"  placeholder="0.00" />

                                                    <div class="form-dropdown">
                                                           <div class="dropdown">
                                                            <a href="#" class="dropdown-indicator-caret" data-toggle="dropdown" data-offset="0,2">{{$basic->currency}}</a>
                                                            <div class="dropdown-menu dropdown-menu-xxs dropdown-menu-right text-center">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="buysell-field form-group">
                                                <div class="form-label-group"><label class="form-label" for="buysell-amount">Transaction Reference</label></div>
                                                <div class="form-control-group">
                                                    <input type="text" class="form-control form-control-lg form-control-number" name="ref"  placeholder="E.g Teller number or reference number" />
                                                </div>
                                            </div>
                                            <div class="input-item input-with-label text-left"><label class="input-item-label text-exlight">Attachment Upload</label><div class="relative"><em class="input-file-icon fas fa-upload"></em><input type="file" name="proof" class="form-control" id="file-01"><label for="file-01">Choose a file</label>
                                            </div>
                                            <small> (Please attach a screenshot of your bank transfer of payment slip)</small>
                                            </div>

                                            <div class="buysell-field form-action"><button type="submit" class="btn btn-lg btn-block btn-primary">Proceed</button></div>
                                            <div class="form-note text-base text-center">* Payment gateway company may charge you a <a href="#">processing fee.</a>.</div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>@stop
