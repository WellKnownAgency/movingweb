@extends('layouts.blog')

@section('title', "$post->title")

@section('description', "$post->dscr")

@section('keywords', '')

@section('preload')
<link rel="preload" href="/images/blog/{{ $post->image }}" as="image">
@stop

@section('customcss')
<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="{{ $post->title }}">
<meta itemprop="description" content="{{ $post->dscr }}">
<meta itemprop="image" content=" ">

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@WKnownMarketing">
<meta name="twitter:title" content="{{ $post->title }}">
<meta name="twitter:description" content="{{ $post->dscr }}">
<meta name="twitter:creator" content="@taras_kim">
<!-- Twitter summary card with large image must be at least 280x150px -->
<meta name="twitter:image:src" content=" ">

<!-- Open Graph data -->
<meta property="og:title" content="{{ $post->title }}" />
<meta property="og:type" content="article" />
<meta property="og:url" content=" "/>
<meta property="og:image" content=" "/>
<meta property="og:description" content="{{ $post->dscr }}" />
<meta property="og:site_name" content="MovingCRM" />
<meta property="article:published_time" content="" />
<meta property="article:modified_time" content=" " />
<meta property="article:section" content="Article Section" />
<meta property="article:tag" content="Moving Software" />
<meta property="fb:admins" content="153425045259276" />


@stop

@section('content')
@include ('sections.header.blog')
<div class="page-header page-header-blog darkend" data-parallax="true" style="background-image: url(/images/blog/{{ $post->image }});">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="title">{{ $post->title }}</h1>
        <br>
              <a href="#contact" class="btn btn-success btn-round text-muted">
                 Free Online Demo
              </a>
              <a id="shareb" href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}" class="btn btn-icon btn-twitter btn-round">
                  <i class="fab fa-twitter"></i>
              </a>
              <a id="shareb" href="https://www.facebook.com/sharer.php?u={{ urlencode(Request::fullUrl()) }}" class="btn btn-icon btn-facebook btn-round">
                  <i class="fab fa-facebook-square"></i>
              </a>
              <a id="shareb" href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(Request::fullUrl()) }}" class="btn btn-icon btn-linkedin btn-round">
                  <i class="fab fa-linkedin"></i>
              </a>
      </div>
    </div>
  </div>
</div>

<div class="main main-raised">
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 ml-auto mr-auto posts-p">
          {!! $post->body !!}
        </div>
      </div>
    </div>
  </div>
  @include('sections.action')
	<div class="container">
		@include('sections.contact')
	</div>
  <div class="container">
    @include('sections.posts')
  </div>

</div>


@include('sections.chat')

@stop
@section('customjs')
<script>

   var popupSize = {
       width: 550,
       height: 550
   };

   $(document).on('click', '#shareb', function(e){

       var
           verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
           horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);

       var popup = window.open($(this).prop('href'), 'social',
           'width='+popupSize.width+',height='+popupSize.height+
           ',left='+verticalPos+',top='+horisontalPos+
           ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

       if (popup) {
           popup.focus();
           e.preventDefault();
       }

   });
</script>
@stop
