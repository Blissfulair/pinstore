@extends('layouts.admin')
@section('content')
<div class="mail-box">
    <aside class="sm-side">
        <div class="user-head">
            <a href="javascript:;" class="inbox-avatar">
                <img style="width:64px;height:60px;" src="{{ $user->image?asset('images/profile/'.$user->image):asset('images/logo/givitec.png') }}" alt="">
            </a>
            <div class="user-name">
                <h5><a href="#">{{ $user->name }}</a></h5>
                <span><a href="#">{{ $user->email }}</a></span>
            </div>
            <a href="javascript:;" class="mail-dropdown pull-right">
                <i class="icon-chevron-down"></i>
            </a>
        </div>
        <div class="inbox-body">
            <a class="btn btn-compose" data-toggle="modal" href="#myModal">
                Compose
            </a>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Compose</h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label  class="col-lg-2 control-label">To</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="inputEmail1" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-lg-2 control-label">Cc / Bcc</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="cc" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Subject</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="inputPassword1" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Message</label>
                                    <div class="col-lg-10">
                                        <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <span class="btn green fileinput-button">
                                        <i class="icon-plus icon-white"></i>
                                        <span>Attachment</span>
                                        <input type="file" multiple=""  name="files[]">
                                        </span>
                                        <button type="submit" class="btn btn-send">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
        <ul class="inbox-nav inbox-divider">
            <li class="active">
                <a href="#"><i class="icon-inbox"></i> Inbox <span class="label label-danger pull-right">2</span></a>

            </li>
            <li>
                <a href="#"><i class="icon-envelope-alt"></i> Sent Mail</a>
            </li>
            <li>
                <a href="#"><i class="icon-bookmark-empty"></i> Important</a>
            </li>
            <li>
                <a href="#"><i class=" icon-external-link"></i> Drafts <span class="label label-info pull-right">30</span></a>
            </li>
            <li>
                <a href="#"><i class=" icon-trash"></i> Trash</a>
            </li>
        </ul>
        <ul class="nav nav-pills nav-stacked labels-info inbox-divider">
            <li> <h4>Labels</h4> </li>
            <li> <a href="#"> <i class=" icon-sign-blank text-danger"></i> Work </a> </li>
            <li> <a href="#"> <i class=" icon-sign-blank text-success"></i> Design </a> </li>
            <li> <a href="#"> <i class=" icon-sign-blank text-info "></i> Family </a>
            <li> <a href="#"> <i class=" icon-sign-blank text-warning "></i> Friends </a>
            <li> <a href="#"> <i class=" icon-sign-blank text-primary "></i> Office </a>
            </li>
        </ul>
        <ul class="nav nav-pills nav-stacked labels-info ">
            <li> <h4>Buddy online</h4> </li>
            <li> <a href="#"> <i class=" icon-circle text-success"></i> Jhone Doe <p>I do not think</p></a>  </li>
            <li> <a href="#"> <i class=" icon-circle text-danger"></i> Sumon <p>Busy with coding</p></a> </li>
            <li> <a href="#"> <i class=" icon-circle text-muted "></i> Anjelina Joli <p>I out of control</p></a>
            <li> <a href="#"> <i class=" icon-circle text-muted "></i> Jonathan Smith <p>I am not here</p></a>
            <li> <a href="#"> <i class=" icon-circle text-muted "></i> Tawseef <p>I do not think</p></a>
            </li>
        </ul>

        <div class="inbox-body text-center">
            <div class="btn-group">
                <a href="javascript:;" class="btn mini btn-primary">
                    <i class="icon-plus"></i>
                </a>
            </div>
            <div class="btn-group">
                <a href="javascript:;" class="btn mini btn-success">
                    <i class="icon-phone"></i>
                </a>
            </div>
            <div class="btn-group">
                <a href="javascript:;" class="btn mini btn-info">
                    <i class="icon-cog"></i>
                </a>
            </div>
        </div>

    </aside>
    <aside class="lg-side">
        <div class="inbox-head">
            <h3>Inbox</h3>
            <form class="pull-right position" action="#">
                <div class="input-append">
                    <input type="text"  placeholder="Search Mail" class="sr-input">
                    <button type="button" class="btn sr-btn"><i class="icon-search"></i></button>
                </div>
            </form>
        </div>
        <div class="inbox-body">
            <div class="mail-option">
                <div class="chk-all">
                    <input type="checkbox" class="mail-checkbox mail-group-checkbox">
                    <div class="btn-group" >
                        <a class="btn mini all" href="#" data-toggle="dropdown">
                            All
                            <i class="icon-angle-down "></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#"> None</a></li>
                            <li><a href="#"> Read</a></li>
                            <li><a href="#"> Unread</a></li>
                        </ul>
                    </div>
                </div>

                <div class="btn-group">
                    <a class="btn mini tooltips" href="#" data-toggle="dropdown" data-placement="top" data-original-title="Refresh">
                        <i class=" icon-refresh"></i>
                    </a>
                </div>
                <div class="btn-group hidden-phone">
                    <a class="btn mini blue" href="#" data-toggle="dropdown">
                        More
                        <i class="icon-angle-down "></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="icon-pencil"></i> Mark as Read</a></li>
                        <li><a href="#"><i class="icon-ban-circle"></i> Spam</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
                    </ul>
                </div>
                <div class="btn-group">
                    <a class="btn mini blue" href="#" data-toggle="dropdown">
                        Move to
                        <i class="icon-angle-down "></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="icon-pencil"></i> Mark as Read</a></li>
                        <li><a href="#"><i class="icon-ban-circle"></i> Spam</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
                    </ul>
                </div>

                <ul class="unstyled inbox-pagination">
                    <li><span>1-50 of 234</span></li>
                    <li>
                        <a href="#" class="np-btn"><i class="icon-angle-left  pagination-left"></i></a>
                    </li>
                    <li>
                        <a href="#" class="np-btn"><i class="icon-angle-right pagination-right"></i></a>
                    </li>
                </ul>
            </div>
            <table class="table table-inbox table-hover">
            <tbody>
                @if($mails)
                    @foreach($mails as $mail)
                <tr class="unread">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="icon-star"></i></td>
                    <td class="view-message  dont-show">{{ $mail->name }}</td>
                    <td class="view-message ">{{ $mail->message }}</td>
                    <td class="view-message  inbox-small-cells"><i class="icon-paper-clip"></i></td>
                    <td class="view-message  text-right">{{ $mail->created_at }}</td>
                </tr>
                    @endforeach
                @endif
            </tbody>
            </table>
        </div>
    </aside>
</div>
@endsection