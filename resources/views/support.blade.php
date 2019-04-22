@extends('layouts.support')

@section('title', 'Digital Agency - Advertising | Marketing | Web Design - WellKnown ')

@section('description', 'WellKnown Digital Agency provides Advertising , Marketing and Webdesign Services for your Business. Years of experience working with small Businesses give us an opportunity to guaranty you great results. Call now and get Free Consultation.')

@section('keywords', 'Digital Agency, Online marketing, online advertising, marketing Agency, Advertising Agency, Web design agency, web development')

@section ('content')

	<div class="main main-raised">
    <div class="container">
      <div class="section text-center">

				<div class="row">
				  <div class="col-md-4">
						<a href="/faq">
				    <div class="card">
				      <div class="card-body">
	              <div class="info">
	                <div class="icon icon-info">
	                  <i class="material-icons">chat</i>
	                </div>
	                <h4 class="info-title">Study Guide</h4>
	                <p>Your full MovingCRM instruction.</p>
	              </div>
	            </div>
				    </div>
					</a>
				  </div>
					<div class="col-md-4">
						<a href="/faq">
					    <div class="card">
					      <div class="card-body">
		              <div class="info">
		                <div class="icon icon-info">
		                  <i class="material-icons">chat</i>
		                </div>
		                <h4 class="info-title">F.A.Q.</h4>
		                <p>You might find your answer here.</p>
		              </div>
		            </div>
					    </div>
						</a>
				  </div>
					<div class="col-md-4">
						<a href="tel:3395450956">
				    <div class="card">
				      <div class="card-body">
	              <div class="info">
	                <div class="icon icon-info">
	                  <i class="material-icons">chat</i>
	                </div>
	                <h4 class="info-title">Call Us</h4>
	                <p><b>(856) 534-9988</b> be free to ask any questions.</p>
	              	</div>
	            	</div>
				    	</div>
						</a>
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
