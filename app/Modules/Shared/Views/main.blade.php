<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<meta content="width=device-width, initial-scale=1" name="viewport">
		<meta content="noindex,nofollow" name="robots">
		<title>DopeStudios || Dashboard</title>
		<link href="{{ asset('favicon.ico') }}" rel="icon" sizes="16x16" type="image/png">

		@include('Shared::styles')
	</head>

	<body class="skin-default-dark fixed-layout">
		<div class="preloader">
			<div class="loader">
				<div class="loader__figure"></div>
				<p class="loader__label">DopeStudios</p>
			</div>
		</div>
		<div id="main-wrapper">
			@include('Shared::header')

			@include('Shared::left-sidebar')

			@yield('content')

			@include('Shared::right-sidebar')
		</div>

		@include('Shared::scripts')
	</body>

</html>
