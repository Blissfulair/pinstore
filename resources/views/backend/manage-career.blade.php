@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                careers
            </header>
            <div class="panel-body">
                <div class="adv-table">
                    <table  class="display table table-bordered table-striped" id="example">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>career</th>
                            <th>Content</th>
                            <th class="hidden-phone">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if($careers)
                                @foreach($careers as $i=>$career)
                                    <tr>
                                        <td>{{ ++$i  }}</td>
                                        <td>{{ $career->name }}</td>
                                        <td>{{ $career->content }}</td>
                                        <td>
                                            <div class="pull-right hidden-phone">
                                                <a href="{{ route('edit_career', ['id'=>$career->id]) }}" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a>
                                                <a data-toggle="modal" href="#myModal{{$i}}" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal{{$i}}" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title">Notice!</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure you want to delete this entry?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="{{ route('destroy_career', ['id'=>$career->id]) }}" class="btn btn-danger" >Delete</a>
                                                    <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- modal -->
                                @endforeach
                            @endif
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>S/N</th>
                            <th>career</th>
                            <th>Content</th>
                            <th class="hidden-phone">Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection