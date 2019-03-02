<!DOCTYPE html>
<html lang="en">
	<head>
	@include('partials/head')
	@yield('customcss')
	</head>
	<body class="index-page sidebar-collapse" data-gr-c-s-loaded="true" cz-shortcut-listen="true">
		@include('partials/nav')
		<div id="app" >
			@yield('content')
		</div>
		@include('partials/js')
	</body>
</html>
