@extends('layouts.mainBlog')

@section('title', 'Moving CRM Blog')

@section('description', 'Moving CRM blog. Articles about moving industry.')

@section('keywords',  ' ')

@section('customcss')

@stop

@section('content')
<div class="main main-raised">
  <div class="container">
    <div class= "row">
      @foreach($posts as $post)
      <div class= "col-md-4" style="padding-top:30px;">
        <div class="card card-blog">
          <div class="card-header card-header-image">
              <a href="/blog/{{ $post->slug }}">
                  <img class="img" src="/images/blog/{{ $post->image }}">
                  <div class="card-title">
                      {{ $post->title }}
                  </div>
              </a>
          </div>
          <div class="card-body">
              <!--<h6 class="card-category text-info">Fashion</h6>-->
              <p class="card-description">
                {{ $post->dscr }}
              </p>
              <a href="/blog/{{ $post->slug }}" class="btn btn-round btn-blog" >
                read more
              </a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@include('sections.chat')

@stop
