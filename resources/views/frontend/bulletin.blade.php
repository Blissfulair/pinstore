@extends('layouts.app')
@section('content')
<div class="page-title" style="background-image: url('images/title/bg01.jpg')">
  <div class="container">
    <h1 class="entry-title">Givitec Bulletins</h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="active"><a href="#">Givitec Bulletins</a></li>
    </ol>
  </div>
</div>

<div class="blog-grid">
  <div class="container">

    <div class="row">
    @if($posts)
      @foreach($posts as $post)
        <div class="col-lg-4">
            <article class="post has-post-thumbnail hentry">
              <div class="post-image">
                <div class="dates">
                  <span class="month">{{ date('F', strtotime($post->created_at)) }}</span>
                  <span class="date">{{ date('j', strtotime($post->created_at)) }}</span>
                  <span class="year">{{ date('Y', strtotime($post->created_at)) }}</span>
                </div>
                <img class="img-fluid" src="{{ route('display_image', ['filename'=>$post->featured_image]) }}" alt="hero-bg">
              </div>
              <!-- post-image -->

              <header class="entry-header">
                <h3 class="entry-title"><a href="{{ route('post', ['name'=>$post->title]) }}">{{ $post->title }}</a></h3>

                <div class="post-details">
                  <i class="fa fa-user"></i>  Posted by <a href="#" >admin</a>
                  <i class="fa fa-folder-open"></i> in <a href="#" rel="category tag">Blog </a>

                </div>
                <!-- post-details -->

              </header>
              <!-- .entry-header -->

              <div class="post-excerpt">
                <p>{!! $post->content !!}</p>
              </div><!-- post-excerpt -->


              <a class="read-more" href="{{ route('post', ['name'=>$post->title]) }}"><span>READ MORE</span><i class="fa fa-arrow-right"></i></a>

            </article>
        </div>
      @endforeach
    @endif
    </div>

    <nav>
      <ul class="pagination">
        <li class="page-item">
          <a class="page-link nav-text nav-text-prev" href="#" aria-label="Previous">
            <span aria-hidden="true"><i class="fa fa-arrow-left"></i></span>
            <span>PREVIOUS</span>
          </a>
        </li>
        <li class="page-item active">
          <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
        </li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">5</a></li>
        <li class="page-item">
          <a class="page-link nav-text nav-text-next" href="#" aria-label="NEXT">
            <span>NEXT</span>
            <span aria-hidden="true"><i class="fa fa-arrow-right"></i></span>
          </a>
        </li>
      </ul>
    </nav>

  </div>
</div>

<!-- ADVISORY
================================================== -->
<section class="advisory">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h2>Not sure which solution fits you business needs?</h2>
      </div>
      <div class="col-md-2">
        <button type="button" class="btn btn-primary">CONTACT US<i class="fa fa-map-marker"></i></button>
      </div>
    </div>
  </div>
</section>
@endsection