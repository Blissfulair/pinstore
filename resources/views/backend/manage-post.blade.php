@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Posts
            </header>
            <div class="panel-body">
                <div class="adv-table">
                    <table  class="display table table-bordered table-striped" id="example">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Post Title</th>
                            <th>Post Content</th>
                            <th class="hidden-phone">Featured Image</th>
                            <th class="hidden-phone">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if($posts)
                                @foreach($posts as $i=>$post)
                                    <tr>
                                        <td>{{ ++$i  }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{!! str_limit(strip_tags($post->content), 200, '...') !!}</td>
                                        <td>
                                            <img style="max-width:60%" src="{{ route('display_image', ['filename'=>$post->featured_image]) }}" alt=""/>
                                        </td>
                                        <td>
                                            <div class="pull-right hidden-phone">
                                                <a href="{{ route('edit_post', ['id'=>$post->id]) }}" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a>
                                                <a href="{{ route('destroy_post', ['id'=>$post->id]) }}" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>S/N</th>
                            <th>Post title</th>
                            <th>Post Content</th>
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