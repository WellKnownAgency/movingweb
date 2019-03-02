<!DOCTYPE html>
<html lang="en">
	<head>
	@include('partials/_head')
	@yield('customcss')
	</head>
	<body class="index-page">
		<script>
		  window.fbAsyncInit = function() {
		    FB.init({
		      appId            : '131016570928938',
		      autoLogAppEvents : true,
		      xfbml            : true,
		      version          : 'v2.11'
		    });
		  };

		  (function(d, s, id){
		     var js, fjs = d.getElementsByTagName(s)[0];
		     if (d.getElementById(id)) {return;}
		     js = d.createElement(s); js.id = id;
		     js.src = "https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
		     fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));
		</script>
		<div class="fb-customerchat"
		 page_id="153425045259276">
		</div>
		@include('partials/_nav')
		<!-- Page Content -->
		<div id="app" class="presentation-page">
			@yield('content')
			@include('partials/_upfooter')
			@include('partials/_footer')
		</div>
		<div itemprop="organization" itemscope itemtype="http://schema.org/Organization" style="display:none;">
			<div itemprop="name" display:none;>WellKnown Agency</div>
			<div itemprop="address" display:none; itemscope itemtype="http://schema.org/PostalAddress">
				<span display:none; itemprop="streetAddress">
					358 Commonwealth avenu
				</span>
				<span display:none; itemprop="addressLocality">Boston</span>,
				<span display:none; itemprop="addressRegion">MA</span>
				<span display:none; itemprop="postalCode">02115</span>
			</div>
			<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" display:none;>
	        <meta itemprop="itemReviewed" content="WellKnown Agency" />
	        <meta itemprop="ratingValue" content="5" />
	        <meta itemprop="reviewCount" content="5" />
	    </div>
			<span itemprop="telephone" display:none; content="+13395450956">(339)545-0956</span>
			<span itemprop="email" display:none; content="info@wknown.com">info@wknown.com</a>
			<span itemprop="legalName" display:none; content="WellKnown Agency LLC"></span>
    </div>

		@include('partials/_js')
		@yield('customjs')
	</body>
</html>
