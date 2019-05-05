@extends('layouts.app')
@section('content')
<div class="page-title" style="background-image: url('images/title/bg01.jpg')">
  <div class="container">
    <h1 class="entry-title">Single Post</h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><a href="#">Blog</a></li>
      <li class="active">Single Post</li>
    </ol>
  </div>
</div>
<div class="container">
  <div class="row">
    <main id="content" class="col-lg-9" role="main">

      <article class="post has-post-thumbnail hentry">
        <div class="post-image">
          <div class="dates">
            <span class="month">{{ date('F', strtotime($post->created_at)) }}</span>
            <span class="date">{{ date('j', strtotime($post->created_at)) }}</span>
            <span class="year">{{ date('Y', strtotime($post->created_at)) }}</span>
          </div>
          <img class="img-fluid  attachment-post-thumbnail" src="{{ route('display_image', ['filename'=>$post->featured_image]) }}" alt="hero-bg">
        </div>
        <!-- post-image -->

        <header class="entry-header">
          <h3 class="entry-title"><a href="{{ route('post', ['name'=>$post->title]) }}">{{ $post->title }}</a></h3>

          <div class="post-details">
            <i class="fa fa-user"></i>  Posted by <a href="#" >admin</a>
            <i class="fa fa-folder"></i> in <a href="#" rel="category tag">Blog </a>
            <i class="fa fa-comments"></i><a href="#"> 3 Comments</a>
          </div>
          <!-- post-details -->

        </header>
        <!-- .entry-header -->


        <div class="post-body">
          <p>{!! $post->content !!}</p>
        </div>

        <footer class="entry-footer">
          <div class="row">

            <div class="col-xs-6">
              <i class="fa fa-tags"></i>
              Tags: <a href="http://transport.thememove.com/tag/projects/" rel="tag">projects</a>,
              <a href="http://transport.thememove.com/tag/services/" rel="tag">services</a>,
              <a href="http://transport.thememove.com/tag/transport/" rel="tag">transport</a>
            </div>
            <div class="col-xs-6 hidden-xs-down hidden-sm end">
              <div class="share">
                <span><i class="fa fa-share-alt"></i> Share: </span>
                <span><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></span>
                <span><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></span>
                <span><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></span>
              </div>
            </div>
          </div>
        </footer>

      </article>
      <!-- #post-## -->
      @if($comments)
          <section class="comment-list">
            <div class="custom-heading part-heading three-slashes">
              <h2>{{ count($comments) == 1?count($comments).' COMMENT':  count($comments).' COMMENTS' }}</h2>
            </div>
            <!-- First Comment -->
            @foreach($comments as $comment)
            <article class="row">
              <div class="col-md-2 col-sm-2 hidden-xs-down">
                <figure class="thumbnail">
                  <img class="img-fluid" src="http://www.keita-gaming.com/assets/profile/default-avatar-c5d8ec086224cb6fc4e395f4ba3018c2.jpg">
                  <figcaption class="text-center">username</figcaption>
                </figure>
              </div>
              <div class="col-md-10 col-sm-10">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <header class="text-left">
                      <div class="comment-user"><i class="fa fa-user"></i> {{$comment->name? $comment->name: 'Anymimous' }}</div>
                      <span class="comment-date"><i class="fa fa-clock-o"></i> {{ date('M j, Y', strtotime($comment->created_at)) }}</span>
                    </header>
                    <div class="comment-post">
                      <p>
                        {{ $comment->comment }}
                      </p>
                    </div>
                    <!-- <p class="text-xs-right"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> reply</a></p> -->
                  </div>
                </div>
              </div>
            </article>
            <!-- Second Comment Reply -->
{{--           <!-- @if($comment->replies())
            {{ dd($comment->replies()) }}
              @foreach($comment->replies() as $reply)
                <article class="row">
                  <div class="col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-0 hidden-xs-down">
                    <figure class="thumbnail">
                      <img class="img-fluid" src="http://www.keita-gaming.com/assets/profile/default-avatar-c5d8ec086224cb6fc4e395f4ba3018c2.jpg">
                      <figcaption class="text-center">username</figcaption>
                    </figure>
                  </div>
                  <div class="col-md-9 col-sm-9">
                    <div class="panel panel-default">
                      <div class="panel-heading right">Reply</div>
                      <div class="panel-body">
                        <header class="text-left">
                          <div class="comment-user"><i class="fa fa-user"></i> {{ (reply->name) ? (reply->name) : 'Anymimous' }}</div>
                          <span class="comment-date"><i class="fa fa-clock-o"></i> {{ date('F j, Y', strtotime(reply->created_at))}}</span>
                        </header>
                        <div class="comment-post">
                          <p>
                            {{ reply->reply }}
                          </p>
                        </div>
                        <p class="text-xs-right"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> reply</a></p>
                      </div>
                    </div>
                  </div>
                </article>
              @endforeach
            @endif --> --}}
          @endforeach
          </section>
      @endif
      <section class="write-comment">
        <div class="custom-heading part-heading three-slashes">
          <h2>WRITE A COMMENT</h2>
        </div>
        <form id="comment" action="{{ route('create_comment') }}" method="post">
          <fieldset class="form-group">
            <div class="row">
              <div class="col-md-4">
                <input type="text" class="form-control" name="name" placeholder="Name">
              </div>
              <div class="col-md-4">
                <input type="text" class="form-control" name="email" placeholder="Email">
              </div>
              <div class="col-md-4">
                <input type="text" class="form-control" name="url" placeholder="Website">
              </div>
            </div>
          </fieldset>
          <fieldset class="form-group">
            <textarea class="form-control"  name="comment" rows="5"></textarea>
          </fieldset>
          <input type="hidden" name="post_id" value="{{ $post->id }}">
          @csrf
          <button type="submit" class="btn btn-primary">POST COMMENT</button>
        </form>
      </section>

    </main>

    <aside class="col-lg-3 sidebar">

      <!-- SEARCH -->
      <aside class="widget widget_search">
        <div class="input-group">
          <input type="search" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-secondary search-submit" type="button"><i class="fa fa-search"></i></button>
          </span>
        </div>
      </aside>

      <!-- RECENT POSTS -->
      <aside class="widget widget_text">
        <h3 class="widget-title">Recent Posts</h3>
        <div class="textwidget">
          <div class="recent-posts type_1">
            <div class="recent-posts-item">
              <div class="recent-posts-thumb">
                <a href="http://transport.thememove.com/2015/06/26/freight-transport-in-alaska-the-haul-of-the-wild/">
                  <img width="120" height="90" src="http://transport.thememove.com/wp-content/uploads/2015/07/image_900x600_06-120x90.jpg" class="attachment-small-thumb wp-post-image" alt="image_900x600_06">											</a>
              </div>
              <a href="http://transport.thememove.com/2015/06/26/freight-transport-in-alaska-the-haul-of-the-wild/">Freight Transport in Alaska: The Haul of the Wild</a>
            </div>
            <div class="recent-posts-item">
              <div class="recent-posts-thumb">
                <a href="http://transport.thememove.com/2015/06/26/reducing-freight-costs/">
                  <img width="120" height="90" src="http://transport.thememove.com/wp-content/uploads/2015/07/image_900x600_07-120x90.jpg" class="attachment-small-thumb wp-post-image" alt="image_900x600_07">											</a>
              </div>
              <a href="http://transport.thememove.com/2015/06/26/reducing-freight-costs/">Reducing Freight Costs</a>
            </div>
            <div class="recent-posts-item">
              <div class="recent-posts-thumb">
                <a href="http://transport.thememove.com/2015/06/23/perishable-logistics-cold-chain-on-a-plane/">
                  <img width="120" height="90" src="http://transport.thememove.com/wp-content/uploads/2015/07/image_900x600_05-120x90.jpg" class="attachment-small-thumb wp-post-image" alt="image_900x600_05">											</a>
              </div>
              <a href="http://transport.thememove.com/2015/06/23/perishable-logistics-cold-chain-on-a-plane/">Perishable Logistics: Cold Chain on a Plane</a>
            </div>
          </div>
        </div>
      </aside>

      <aside class="widget widget_meta">
        <h3 class="widget-title">CUSTOM LINKS</h3>
        <ul class="list-group">
          <li class="list-group-item"><a href="#">Log in</a></li>
          <li class="list-group-item"><a href="#">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
          <li class="list-group-item"><a href="#">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
          <li class="list-group-item"><a href="#" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress.org</a></li>
        </ul>
      </aside>

    </aside>
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