<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">
		<meta content="ie=edge" http-equiv="X-UA-Compatible">
		<link href="{{ asset('assets/css/500.css') }}" rel="stylesheet">
		<title>Oops!</title>
	</head>
	<body>
		<div class="full-screen">
			<div class="container">
				<span class="error-num">5</span>
				<div class="eye"></div>
				<div class="eye"></div>
				<p class="sub-text">Oh eyeballs! Something went wrong. We're looking to see what happened.</p>
				<a href="{{ route('dashboard.home') }}">Go back</a>
			</div>
		</div>
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/js/500.js') }}"></script>
	</body>
</html>
