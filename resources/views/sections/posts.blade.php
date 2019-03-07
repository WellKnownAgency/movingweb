
<div class="row">
  <div class="col-md-10 ml-auto mr-auto">
    <h2 class="title text-center">Related Posts</h2>
    <br>
    <div class="row">
      @foreach ($posts as $post)
      <div class="col-md-4">
        <div class="card card-plain card-blog">
          <div class="card-header card-header-image">
            <a href="/blog/{{ $post->slug }}">
              <img class="img img-raised" src="/images/blog/{{ $post->image }}">
            </a>
          <div class="colored-shadow" style="background-image: url(https://demos.creative-tim.com/material-kit-pro/assets/img/examples/card-blog4.jpg); opacity: 1;"></div></div>
          <div class="card-body">
            <h4 class="card-title">
              <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
            </h4>
            <p class="card-description">
              {{ $post->dscr }}
              <a href="/blog/{{ $post->slug }}"> Read More </a>
            </p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
