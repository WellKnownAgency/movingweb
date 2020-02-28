@extends('layouts.mainWebsites')

@section('title', 'Websites for Moving Companies - Get leads with professionally designed websites')

@section('description', '')

@section('keywords', '')

@section ('content')

	<div class="main main-raised">
      <div class="section text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">Why MovingCRM?</h2>
            <h5 class="description"></h5>
          </div>
        </div>
				<div class="row">
          <div class="col-md-7">
            <div class="row" style="margin-left: 0px; margin-right:0px;">
              <div class="info" style="padding: 30px 0px;">
                <div class="icon icon-info">
                  <i class="material-icons">question_answer</i>
                </div>
                <h4 class="info-title">24/7 Customer Service</h4>
                <p>MovingCRM team pays special attention to our client support. Whether you have questions regarding the software work or share your ideas on how we can improve the CRM, feel free to contact us any day at any time.</p>
              </div>
							<div class="info" style="padding: 30px 0px;">
								<div class="icon icon-success">
									<i class="material-icons">verified_user</i>
								</div>
								<h4 class="info-title">Protected Database</h4>
								<p>MovingCRM use <a href="https://www.digitalocean.com/" target="_blank">Digital Ocean</a> cloud servers, which provide one of the safest places to store your data with constant security monitoring and data backup.</p>
							</div>
            </div>
						<div class="row" style="margin-left: 0px; margin-right:0px;">
              <div class="info" style="padding: 30px 0px;">
                <div class="icon icon-info">
                  <i class="material-icons">question_answer</i>
                </div>
                <h4 class="info-title">24/7 Customer Service</h4>
                <p>MovingCRM team pays special attention to our client support. Whether you have questions regarding the software work or share your ideas on how we can improve the CRM, feel free to contact us any day at any time.</p>
              </div>
							<div class="info" style="padding: 30px 0px;">
								<div class="icon icon-success">
									<i class="material-icons">verified_user</i>
								</div>
								<h4 class="info-title">Protected Database</h4>
								<p>MovingCRM use <a href="https://www.digitalocean.com/" target="_blank">Digital Ocean</a> cloud servers, which provide one of the safest places to store your data with constant security monitoring and data backup.</p>
							</div>
            </div>
          </div>
					<div class="col-md-5">
						<div class="container">
							<img src="/images/svg_web_des.svg" alt="web-design" height="auto" width="100%">
						</div>
					</div>
        </div>
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
