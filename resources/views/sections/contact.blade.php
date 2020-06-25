<div class="section section-contacts" id="contact">
	<div class="row">
		<div class="col-md-8 ml-auto mr-auto">
			<h2 class="text-center title">Book a Free Online Demo</h2>
			<h4 class="text-center description">Leave your information and we will contact you to confirm date and time for online demo with MovingCRM.</h4>
			<form class="contact-form" method="post" action="{{ url('contact-us') }}">
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
				    <label class="label-control">Choose date and time</label>
				    <input type="text" name="date_time" class="form-control datetimepicker">
				</div>
				<div class="row">
					<div class="col-md-4 ml-auto mr-auto text-center">
						<button type="submit" class="btn btn-primary btn-raised" id="gtag-send-message">
							Send request
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
