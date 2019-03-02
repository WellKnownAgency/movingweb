<!DOCTYPE html>
<html lang="en">
	<head>
	@include('partials/head')
	@yield('customcss')
	</head>
	<body>
		@include('partials/nav')
		<div id="app" >
			@yield('content')
		</div>
		@include('partials/js')
	</body>
</html>
