@extends('layouts.main')

@section('title', 'Moving CRM F.A.Q.')

@section('description', 'Frequently Asked Questions about Moving CRM.')

@section('keywords', '')

@section ('content')
@include ('sections.header.faq')
		<div class="main main-raised">
      <div class="section text-center" style="padding-top:30px; padding-bottom:30px;">
					<div class="col-md-12 ml-auto mr-auto">
						<div class="container">
						<h2 class="title" style="padding-bottom:30px;">F.A.Q. About MovingCRM
						</h2>
						<div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse">
							<div class="row">
								<div class="column">
									<div class="card card-plain faq_card">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-transform: uppercase;">
											<div class="card-header faq_card_header" role="tab" id="headingOne">
													What is MovingCRM?
													<i class="now-ui-icons arrows-1_minimal-down"></i>
											</div>
										</a>
										<div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
											<div class="card-body">
												<blockquote class="blockquote faq_blockquote" style="padding-bottom:0;">
													<p>MovingCRM is a cloud-based software for moving companies that do not require installation on workstations. An owner pays for the selected plan, connects the necessary number of employees and branches, and a company starts working. The main purpose of the system is to record current move requests and customers, to make schedules by trucks and crews, to help company owners with marketing automation. The system can store any information about new and regular customers - addresses, phone number, e-mail.
													Working in MovingCRM, an administrator sees and manages:
														<ul class="ul_faq">
															<li>How many move requests were acquired today, this week, this month or in a total of a particular period;</li>
															<li>Schedule for trucks and crews;</li>
															<li>Quote Calculator, to involve the potential customer in getting a fast quote;</li>
															<li>Customer’s account which is providing full quote info to a client;</li>
															<li>Interactive calendar, where you can manage your prices depending on season, holidays or discount period;</li>
															<li>Email Marketing Automation, which helps moving companies to get reviews and to make their customers be a regular;</li>
													</ul>
												</p>
												</blockquote>
											</div>
										</div>
									</div>
									<div class="card card-plain faq_card">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="text-transform: uppercase;">
										<div class="card-header faq_card_header" role="tab" id="headingTwo">
											Why MovingCRM?
												<i class="now-ui-icons arrows-1_minimal-down"></i>
										</div>
									</a>
									<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
										<div class="card-body">
											<blockquote class="blockquote faq_blockquote" style="padding-bottom:0;">
												<p>
													MovingCRM is the software which is built by movers for movers. We absorbed moving experience during the years,
													and it is expressed in the software, which is developed to make your life easier, and your clients happier.
													Moreover, the software was developed regarding the highest and newest technologies existing in the programming world.
													Our developers made a special focus not only on a smooth app work but also on the speed of the software.
												</p>
											</blockquote>
										</div>
									</div>
								</div>
								<div class="card card-plain  faq_card">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree" style="text-transform: uppercase;">
										<div class="card-header faq_card_header" role="tab" id="headingThree">
											How do I control moving rates?
											<i class="now-ui-icons arrows-1_minimal-down"></i>
										</div>
									</a>
									<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
										<div class="card-body">
											<blockquote class="blockquote faq_blockquote" style="padding-bottom:0;">
												<p>
													MovingCRM provides you 5 types of rates: discount, regular, subpeak, peak, and highpeak, so that you can set up the price for each type. Therefore, you want to work with an interactive calendar and distribute the rates over the calendar regarding your needs.
												</p>
											</blockquote>
										</div>
									</div>
								</div>
							</div>
							<div class="column">
								<div class="card card-plain faq_card">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour" style="text-transform: uppercase;">
										<div class="card-header faq_card_header" role="tab" id="headingFour">
											How long does software installation take?
											<i class="now-ui-icons arrows-1_minimal-down"></i>
										</div>
									</a>
									<div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
										<div class="card-body">
											<blockquote class="blockquote faq_blockquote" style="padding-bottom:0;">
												<p>
													Usually, we complete the installation within 2 - 3 working days.
												</p>
											</blockquote>
										</div>
									</div>
								</div>

								<div class="card card-plain  faq_card">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive" style="text-transform: uppercase;">
										<div class="card-header faq_card_header" role="tab" id="headingFive">
											How to get started using MovingCRM?
											<i class="now-ui-icons arrows-1_minimal-down"></i>
										</div>
									</a>
									<div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
										<div class="card-body">
											<blockquote class="blockquote faq_blockquote" style="padding-bottom:0;">
												<p>
													It is as simple as 2 x 2. Fill up the form, and we will get back to you ASAP. Then we are going to suggest you a trial version of the application with a complete study guide, where you will get access to all CRM features, so you can try and convince if MovingCRM is the best solution for your moving company.											</p>
											</blockquote>
										</div>
									</div>
								</div>

								<div class="card card-plain faq_card">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix" style="text-transform: uppercase;">
										<div class="card-header faq_card_header" role="tab" id="headingSix">
											Where is my database stored?
											<i class="now-ui-icons arrows-1_minimal-down"></i>
										</div>
									</a>
									<div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix">
										<div class="card-body">
											<blockquote class="blockquote faq_blockquote" style="padding-bottom:0;">
												<p>
													To provide constant access, we securely store all of our customer information on fully trusted Digital Ocean cloud servers. Our servers automatically perform backups, so you can be sure your data to be safe with us.
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