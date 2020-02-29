@extends('layouts.main')

@section('title', 'Moving CRM Study Guide')

@section('description', 'Moving CRM Study Guide. Learn Everything about MovingCRM.')

@section('keywords',  ' ')

@section('customcss')

@stop

@section('content')
@include ('sections.header.feature')
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
            <li class="list-group-item" style="font-size:1.35em; color:#999;"><i class="material-icons">description</i><a href="/features/{{ $feature->slug }}" class="features_list_a" style=" color:#000;">{{$feature -> title}}</a></li>
            @endforeach
          </ul>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <div class="container">
    @include('sections.support')
  </div>
</div>
@include('sections.chat')

@stop
