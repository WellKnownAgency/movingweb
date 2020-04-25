@extends('layouts.main')

@section('title', 'Websites for Moving Companies')

@section('description', 'We create fast and responsive websites for moving companies to catch and convert new leads into repeated customers. We do not use CMS to build moving websites.')

@section('keywords', '')

@section ('content')
@include ('sections.header.websites')
	<div class="main main-raised">
      <div class="section text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">Our Services</h2>
            <h5 class="description"></h5>
          </div>
        </div>
				<div class="row">
          <div class="col-md-7">
            <div class="row" style="margin-left: 0px; margin-right:0px;">
              <div class="info" style="padding: 30px 0px;">
                <div class="icon icon-danger">
                  <i class="material-icons">palette</i>
                </div>
                <h4 class="info-title">Website Design</h4>
                <p>
                  Our team of professional Designers will create Website Design, so your brand can stand out from the crowd!
                </p>
              </div>
							<div class="info" style="padding: 30px 0px;">
								<div class="icon icon-info">
									<i class="material-icons">devices</i>
								</div>
								<h4 class="info-title">Website Development</h4>
	                <p>
                    Our Developers build a fast loading and responsive websites, so your potential clients will always get what they want.
                  </p>
							</div>
            </div>
						<div class="row" style="margin-left: 0px; margin-right:0px;">
              <div class="info" style="padding: 30px 0px;">
                <div class="icon icon-primary">
                  <i class="material-icons">language</i>
                </div>
                <h4 class="info-title">Online Advertising</h4>
                <p>
                  Our Advertisers will help you to setup any type of Ad Campaign - Search, Social or Remarketing to reach your potential clients.
                </p>
              </div>
							<div class="info" style="padding: 30px 0px;">
								<div class="icon icon-success">
									<i class="material-icons">verified_user</i>
								</div>
								<h4 class="info-title">Online Marketing</h4>
								<p>
                  Search Engine optimization, Content Marketing Marketing Consultation - we will help you to build a right strategy to reach your potential clients.
                </p>
							</div>
            </div>
          </div>
					<div class="col-md-5 my-auto">
						<div class="container">
							<img src="/images/website.svg" alt="web-design" height="auto" width="100%">
						</div>
					</div>
        </div>
			</div>
		@include('sections.action.websites')
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
                <p>We understand, that sometimes something can go wrong with our application, thats why we have a special trained team to help you asap</p>
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

  </div>
	@include('sections.chat')
@stop
