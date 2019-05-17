@extends('layouts.mainblog')

@section('title', 'Moving CRM Blog')

@section('description', 'Moving CRM blog. Articles about moving industry.')

@section('keywords',  ' ')

@section('customcss')

@stop

@section('content')
<div class="main main-raised">
  <div class="container">
    <div class= "row">
      @foreach($categories as $category)
      <div class="col-md-6" style="margin-top:50px;">
        <div class="card card-nav-tabs">
          <div class="card-header  faq_card_header" style="text-transform: uppercase;">
            {{$category -> name}}
          </div>
          <ul class="list-group list-group-flush">
            @foreach($category->features as $feature)
            <li class="list-group-item" style="font-size:1.35em; color:#999;"><i class="now-ui-icons outline-library_books"></i><a href="/features/{{ $feature->slug }}" class="features_list_a" style=" color:#000;">{{$feature -> title}}</a></li>
            @endforeach
          </ul>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@include('sections.chat')

@stop
