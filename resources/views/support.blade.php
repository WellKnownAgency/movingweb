@extends('layouts.support')

@section('title', 'Moving CRM Customer Support')

@section('description', 'Customer Support 24/7 Moving CRM. Get Answers on all your questions about Moving CRM. Contact us now.')

@section('keywords', '')

@section ('content')

	<div class="main main-raised">
    <div class="container">
      <div class="section text-center">

				<div class="row">
				  <div class="col-md-4">
						<a href="/features">
				    <div class="card support_card">
				      <div class="card-body">
	              <div class="info">
	                <div class="icon icon-info">
	                  <i class="material-icons">description</i>
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
					    <div class="card support_card">
					      <div class="card-body">
		              <div class="info">
		                <div class="icon icon-danger">
		                  <i class="material-icons">contact_support</i>
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
				    <div class="card support_card">
				      <div class="card-body">
	              <div class="info">
	                <div class="icon icon-success">
	                  <i class="material-icons">phone_in_talk</i>
	                </div>
	                <h4 class="info-title">Call Us</h4>
	                <p><span style="color:#000;">(856) 534-9988</span> be free to ask any questions.</p>
	              	</div>
	            	</div>
				    	</div>
						</a>
				  </div>
				</div>

      </div>
		</div>

    <div class="container">
			@include('sections.support')
		</div>
		<div class="container">
			@include('sections.posts')
		</div>
  </div>
	@include('sections.chat')
@stop
