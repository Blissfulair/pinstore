<aside class="widget widget_text">
        <h3 class="widget-title">Recent Posts</h3>
        <div class="textwidget">
          <div class="recent-posts type_1">
            @foreach($posts as $p)
            <div class="recent-posts-item">
              <div class="recent-posts-thumb">
                <a href="{{ route('post', ['name'=>$p->title]) }}">
                  <img width="120" height="90" src="{{ asset('images/posts/'.$p->featured_image) }}" class="attachment-small-thumb wp-post-image" alt="{{ $p->featured_image }}">											</a>
              </div>
              <a href="{{ route('post', ['name'=>$p->title]) }}">{{ $p->title }}</a>
            </div>
            @endforeach
          </div>
        </div>
      </aside>

      <aside class="widget widget_meta">
        <h3 class="widget-title">CUSTOM LINKS</h3>
        <ul class="list-group">
          <li class="list-group-item"><a href="{{ route('trainings') }}">Tranings and Certification</a></li>
          <li class="list-group-item"><a href="#">Policy</a></li>
          <li class="list-group-item"><a href="{{ route('services') }}">Services</a></li>
          <li class="list-group-item"><a href="{{ route('contact') }}">Contact Us</a></li>
        </ul>
      </aside>
