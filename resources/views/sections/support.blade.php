<div class="section section-contacts" id="contact">
	<div class="row">
		<div class="col-md-8 ml-auto mr-auto">
			<h2 class="text-center title">Create a Support Ticket</h2>
			<h4 class="text-center description">Have Problems? Create a Support ticket and our team will contact you asap to resolve the issue.</h4>
			<form class="contact-form" method="post" action="{{ url('support-ticket') }}">
				{{ csrf_field() }}
				<!-- Personal Info -->
				<div class="row">
					<div class="col-md-6">
						<div class="form-group bmd-form-group">
							<label class="bmd-label-floating">Your First Name</label>
							<input type="text" name="first_name" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group bmd-form-group">
							<label class="bmd-label-floating">Your Last Name</label>
							<input type="text" name="last_name" class="form-control">
						</div>
					</div>
				</div>
				<!-- Company Info -->
				<div class="row">
					<div class="col-md-6">
						<div class="form-group bmd-form-group">
							<label class="bmd-label-floating">Company Name</label>
							<input type="text" name="company_name" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group bmd-form-group">
							<label class="bmd-label-floating">Website URL</label>
							<input type="text" name="company_website" class="form-control">
						</div>
					</div>
				</div>
				<!-- Contact Info -->
				<div class="row">
					<div class="col-md-6">
						<div class="form-group bmd-form-group">
							<label class="bmd-label-floating">Phone</label>
							<input type="number" name="phone" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group bmd-form-group">
							<label class="bmd-label-floating">Email</label>
							<input type="email" name="email" class="form-control">
						</div>
					</div>
				</div>
				<!-- input with datetimepicker -->
				<div class="form-group">
				    <label class="label-control">Issue (Detailed)</label>
				    <textarea type="text" name="body" rows="5" class="form-control"></textarea>
				</div>
				<div class="row">
					<div class="col-md-4 ml-auto mr-auto text-center">
						<button type="submit" class="btn btn-primary btn-raised">
							Send Message
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
