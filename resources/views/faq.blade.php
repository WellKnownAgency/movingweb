@extends('layouts.faq')

@section('title', 'Moving CRM F.A.Q.')

@section('description', 'Frequently Asked Questions about Moving CRM.')

@section('keywords', '')

@section ('content')

		<div class="main main-raised">
      <div class="section text-center" style="padding-top:0px;">
				<div class="section">
					<div class="col-md-12 ml-auto mr-auto">
						<div class="container">
						<h2 class="title" style="padding-bottom:30px;">F.A.Q. About MovingCRM
						</h2>
						<div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse">
								<div class="row">
									<div class="card card-plain col-md-6 faq_card">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											<div class="card-header faq_card_header" role="tab" id="headingOne">
													What is MovingCRM?
													<i class="now-ui-icons arrows-1_minimal-down"></i>
											</div>
										</a>
										<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
											<div class="card-body">
												<blockquote class="blockquote faq_blockquote" style="padding-bottom:0;">
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</blockquote>
											</div>
										</div>
									</div>
									<div class="card card-plain col-md-6 faq_card">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="text-transform: uppercase;">
										<div class="card-header faq_card_header" role="tab" id="headingTwo">
												Second?
												<i class="now-ui-icons arrows-1_minimal-down"></i>
										</div>
									</a>
									<div id="collapseTwo" class="collapse show" role="tabpanel" aria-labelledby="headingTwo">
										<div class="card-body">
											<blockquote class="blockquote faq_blockquote" style="padding-bottom:0;">
												<p>
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
												</p>
											</blockquote>
										</div>
									</div>
								</div>
							</div>
						<div class="row">
							<div class="card card-plain col-md-6 faq_card">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree" style="text-transform: uppercase;">
									<div class="card-header faq_card_header" role="tab" id="headingThree">
										third?
										<i class="now-ui-icons arrows-1_minimal-down"></i>
									</div>
								</a>
								<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="card-body">
										<blockquote class="blockquote faq_blockquote" style="padding-bottom:0;">
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
											</p>
										</blockquote>
									</div>
								</div>
							</div>

							<div class="card col-md-6 card-plain faq_card">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour" style="text-transform: uppercase;">
									<div class="card-header faq_card_header" role="tab" id="headingFour">
										fourth?
										<i class="now-ui-icons arrows-1_minimal-down"></i>
									</div>
								</a>
								<div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
									<div class="card-body">
										<blockquote class="blockquote faq_blockquote" style="padding-bottom:0;">
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
											</p>
										</blockquote>
									</div>
								</div>
							</div>
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
