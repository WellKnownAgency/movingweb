@extends('layouts.main')

@section('title', 'MovingCRM Pricing - Pick the best plan for your Moving Company')

@section('description', 'MovingCRM provides different pricing plans for different mvign company size. Do not overpay and choose the right price for your Moving company.')

@section('keywords', '')

@section ('content')
@include ('sections.header.pricing')
	<div class="main main-raised">
		<div class="container">
      @include('sections.prices-table')
		</div>
		@include('sections.action.index')
    <div class="container">
      <div class="text-center">
        <div >
          <div class="row">
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-info">
                  <i class="material-icons">monetization_on</i>
                </div>
                <h4 class="info-title">Price Efficient</h4>
                <p>We are always open in our desire to meet our clients requests and provide price that works best for your Moving Company</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-success">
                  <i class="material-icons">phone_in_talk</i>
                </div>
                <h4 class="info-title">Customer Serivce</h4>
                <p>We understand, that sometimes something can go wrong with our application, that's why we have a special trained team to help you asap</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-danger">
                  <i class="material-icons">fingerprint</i>
                </div>
                <h4 class="info-title">Secured</h4>
                <p>All information about your customers is stored and protected with Secured Technologies and we can quaranty you efficient and continues work</p>
              </div>
            </div>
          </div>
        </div>
      </div>
		</div>

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
    var myVideo = document.getElementById("video1"); 

    function playPause() { 
      var element = document.getElementById("playButton");
      element.classList.add("display-none");
      
      if (myVideo.paused) 
        myVideo.play();
      else 
        myVideo.pause();
    } 
    </script>
@stop
