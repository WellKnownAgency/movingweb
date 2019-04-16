@extends('layouts.mainPricing')

@section('title', 'Moving CRM Pricing - Pick the best plan for your Moving Company')

@section('description', '')

@section('keywords', '')

@section ('content')

	<div class="main main-raised">
		<div class="container">
      @include('sections.prices-table')
		</div>
		@include('sections.action')
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
                <h4 class="info-title">Fingerprint</h4>
                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
		</div>
		<div class="container">
      @include('sections.reviews')
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
