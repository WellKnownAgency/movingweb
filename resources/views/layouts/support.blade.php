<!DOCTYPE html>
<html lang="en">
	<head>
	@include('partials/head')
	@yield('customcss')
	</head>
	<body class="landing-page sidebar-collapse" data-gr-c-s-loaded="true" cz-shortcut-listen="true">
		@include('partials.nav')
		@include ('sections.header-support')
		@yield('content')
		@include('partials.footer')
		@include('partials/js')
	</body>
</html>
