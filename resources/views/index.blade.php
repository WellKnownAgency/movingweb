@extends('layouts.main')

@section('title', 'MovingCRM - Moving Company Software')

@section('description', 'MovingCRM is Moving Company Software to simplify managing processes of the moving company. Get Requests, Schedule and manage your working crew. All these and more with simple and intuitive design.')

@section('keywords', '')

@section ('content')
@include ('sections.header.index')
	<div class="main main-raised">
    @include('sections.tabs')
		@include('sections.action.index')
    <div class="container">
      <div class="section text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">Why MovingCRM?</h2>
            <h5 class="description"></h5>
          </div>
        </div>
        <div class="features">
          <div class="row">
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-info">
                  <i class="material-icons">question_answer</i>
                </div>
                <h4 class="info-title">24/7 Customer Service</h4>
                <p>MovingCRM team pays special attention to our client support. Whether you have questions regarding the software work or share your ideas on how we can improve the CRM, feel free to contact us any day at any time.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-success">
                  <i class="material-icons">verified_user</i>
                </div>
                <h4 class="info-title">Protected Database</h4>
                <p>MovingCRM use <a href="https://www.digitalocean.com/" target="_blank">Digital Ocean</a> cloud servers, which provide one of the safest places to store your data with constant security monitoring and data backup.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-danger">
                  <i class="material-icons">school</i>
                </div>
                <h4 class="info-title">Newest Technologies</h4>
                <p>MovingCRM is developed with the newest and best technologies in the digital world. Our developers made a special focus not only on a smooth app work but also on the speed of the software and safety.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
		</div>
		@include('sections.getstarted')

    <div class="container">
			@include('sections.contact')
		</div>
		<div class="container">
			@include('sections.posts')
		</div>
  </div>
	@include('sections.chat')
@stop
