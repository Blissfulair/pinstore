@extends('layouts.admin')
@section('title')
 || Setting
@endsection
@section('content')
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-6 col-lg-offset-3">
                      <section class="panel">
                          <header class="panel-heading">
                              Setting
                          </header>
                          <div class="panel-body">
                              <form method="post" action="{{ $setting? route('update.setting') : route('save.setting') }}" class="form-horizontal" role="form" enctype="multipart/form-data">
                                  <div class="form-group">
                                      <label for="phone" class="col-lg-2 col-sm-2 control-label">Phone Number</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" id="phone" value="{{ $setting? ($setting->number? $setting->number: '') : old('number') }}" name="number" placeholder="e.g 0803 267 9999">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="email" class="col-lg-2 col-sm-2 control-label">Email</label>
                                      <div class="col-lg-10">
                                          <input type="email" class="form-control"  value="{{ $setting? ($setting->email? $setting->email: '') : old('email') }}"name="email" id="email" placeholder="Email">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="address" class="col-lg-2 col-sm-2 control-label">Address</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" value="{{ $setting? ($setting->address? $setting->address: '') : old('address') }}" name="address" id="address" placeholder="Street Address">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="facebook" class="col-lg-2 col-sm-2 control-label">Facebook</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" name="facebook" value="{{ $setting? ($setting->facebook? $setting->facebook: '') : old('facebook') }}" id="facebook" placeholder="Facebook">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="twitter" class="col-lg-2 col-sm-2 control-label">Twitter</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" value="{{ $setting? ($setting->twitter? $setting->twitter: '') : old('twitter') }}" name="twitter" id="twitter" placeholder="Twitter">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="gplus" class="col-lg-2 col-sm-2 control-label">Google Plus</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" value="{{ $setting? ($setting->gplus? $setting->gplus: '') : old('gplus') }}" name="gplus" id="gplus" placeholder="Google Plus">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="youtube" class="col-lg-2 col-sm-2 control-label">Youtube</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" name="youtube" value="{{ $setting? ($setting->youtube? $setting->youtube: '') : old('youtube') }}" id="youtube" placeholder="Youtube">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="foursquare" class="col-lg-2 col-sm-2 control-label">Foursquare</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" name="foursquare" value="{{ $setting? ($setting->foursquare? $setting->foursquare: '') : old('foursquare') }}" id="foursquare" placeholder="Foursquare">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="feed" class="col-lg-2 col-sm-2 control-label">Feed</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" value="{{ $setting? ($setting->feed? $setting->feed: '') : old('feed') }}" name="feed" id="feed" placeholder="Feed">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="about" class="col-lg-2 col-sm-2 control-label">About us</label>
                                      <div class="col-lg-10">
                                          <textarea class="form-control" rows="10" cols="40" name="about" id="about" placeholder="Brief Summary not more than 250 charaters">{{ $setting? ($setting->about? $setting->about: '') :  old('about')}}</textarea>
                                      </div>
                                  </div>
                                  <div class="form-group last">
                                          <label class="control-label col-md-3">Logo</label>
                                          <div class="col-md-9">
                                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                                  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                      <img style="width:100%;height:100%" src="{{ $setting? ($setting->logo? asset('images/logo/'.$setting->logo): '') : 'http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image' }}" alt="" />
                                                  </div>
                                                  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                  <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="icon-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                                   <input type="file" name="logo" class="default" />
                                                   </span>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <input type="hidden" name="_token" value="{{ Session::token() }}">
                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button type="submit" class="btn btn-danger">Submit</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </section>
                  </div>
                </div>
            </div>
@endsection