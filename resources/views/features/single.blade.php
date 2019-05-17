@extends('layouts.blog')

@section('description', "$feature->dscr")

@section('keywords', '')

@section('customcss')
<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="{{ $feature->title }}">
<meta itemprop="description" content="{{ $feature->dscr }}">
<meta itemprop="image" content=" ">

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@WKnownMarketing">
<meta name="twitter:title" content="{{ $feature->title }}">
<meta name="twitter:description" content="{{ $feature->dscr }}">
<meta name="twitter:creator" content="@taras_kim">
<!-- Twitter summary card with large image must be at least 280x150px -->
<meta name="twitter:image:src" content=" ">

<!-- Open Graph data -->
<meta property="og:title" content="{{ $feature->title }}" />
<meta property="og:type" content="article" />
<meta property="og:url" content=" "/>
<meta property="og:image" content=" "/>
<meta property="og:description" content="{{ $feature->dscr }}" />
<meta property="og:site_name" content="WellKnown Agency" />
<meta property="article:published_time" content="" />
<meta property="article:modified_time" content=" " />
<meta property="article:section" content="Article Section" />
<meta property="article:tag" content="Marketing" />
<meta property="fb:admins" content="153425045259276" />


@stop

@section('content')
<div class="page-header page-header-blog" data-parallax="true" style="background:linear-gradient(135deg,#65b2b8,#91ab6d);">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1 class="title">{{ $feature->title }}</h1>
        <br>
              <a href="#contact" class="btn btn-success btn-round btn-lg text-muted">
                 Free Online Demo
              </a>
              <a id="shareb" href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}" class="btn btn-icon btn-lg btn-twitter btn-round">
                  <i class="fab fa-twitter"></i>
              </a>
              <a id="shareb" href="https://www.facebook.com/sharer.php?u={{ urlencode(Request::fullUrl()) }}" class="btn btn-icon btn-lg btn-facebook btn-round">
                  <i class="fab fa-facebook-square"></i>
              </a>
              <a id="shareb" href="https://plus.google.com/share?url={{ urlencode(Request::fullUrl()) }}" class="btn btn-icon btn-lg btn-google btn-round">
                  <i class="fab fa-google"></i>
              </a>
      </div>
			<div class="col-md-6 text-center" style="position: relative;">
				<img src="/images/main_banner_image.png" class="main-media" style="position: relative;"/>
					<a href="#" class="btn btn-primary btn-round my-auto" style="position: absolute; top: 120px; right: 240px;">
						<i class="fa fa-play"></i>
					</a>
      </div>
    </div>
  </div>
</div>

<div class="main main-raised">
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 ml-auto mr-auto">
          {!! $feature->body !!}
        </div>
      </div>
    </div>
  </div>
  @include('sections.action')

  <div class="container">
    @include('sections.contact')
  </div>

</div>


@include('sections.chat')

@stop
