@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Dynamic Table
            </header>
            <div class="panel-body">
                <div class="adv-table">
                    <table  class="display table table-bordered table-striped" id="example">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Service</th>
                            <th>Content</th>
                            <th class="hidden-phone">Featured Image</th>
                            <th class="hidden-phone">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if($services)
                                @foreach($services as $i=>$service)
                                    <tr>
                                        <td>{{ ++$i  }}</td>
                                        <td>{{ $service->name }}</td>
                                        <td>{{ $service->content }}</td>
                                        <td>
                                            <img style="max-width:60%" src="{{ asset('images/services/'.$service->featured_image) }}" alt=""/>
                                        </td>
                                        <td>
                                            <div class="pull-right hidden-phone">
                                                <a href="{{ route('edit_service', ['id'=>$service->id]) }}" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a>
                                                <a href="{{ route('destroy_service', ['id'=>$service->id]) }}" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>S/N</th>
                            <th>Service</th>
                            <th>Content</th>
                            <th class="hidden-phone">Featured Image</th>
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