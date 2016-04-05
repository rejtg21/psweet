<!Doctype html>
<html lang="en">
	<head>
		<meta charset = "utf8">
		<meta http-equiv= "X-UA-Compatible" content = "IE=edge">
		<meta name ="viewport" content = "width= device-width, initial-scale=1">
		<title> Perfectly Sweets - @yield('title')</title>
		{!! Html::style('../node_modules/bootstrap/dist/css/bootstrap.min.css') !!}
		{!! Html::style('../node_modules/bootstrap/dist/css/bootstrap-theme.min.css') !!}
		<!-- Use for view port ie-->
		{!! Html::style('../node_modules/bootstrap/docs/assets/css/ie10-viewport-bug-workaround.css') !!}
		@yield('css')
	</head>
	<body>
		@yield('body')
	</body>
	<!-- Use for view port ie -->
	{!! Html::script('../node_modules/bootstrap/docs/assets/js/ie10-viewport-bug-workaround.js') !!}
	{!! Html::script('../node_modules/angular/angular.min.js') !!}
	{!! Html::script('../node_modules/angular-ui-bootstrap/dist/ui-bootstrap-tpls.js') !!}
	@yield('script')
</html>
