<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<meta content="width=device-width, initial-scale=1" name="viewport">
		<meta content="noindex,nofollow" name="robots">
		<title>Analytics || Log In</title>
		<link href="{{ asset('favicon.ico') }}" rel="icon" sizes="16x16" type="image/png">
		<link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet">
	</head>

	<body>
		<div class="container-fluid p-0">
			<div class="row">
				<div class="col-lg-6">
					<div class="loginForm">
						<div class="logincontainer">
							<div class="col-3 m-auto">
								<img alt class="w-75 m-auto d-block" src="{{  asset('assets/images/logo/logo-icon.png') }}"/>
							</div>
							<div class="col-lg-12 m-auto text-center">
								<h2 class="text-warning">Hey, Welcome to Dope Studios!</h2>
							</div>
							<div class="col-lg-6 m-auto">
								<form action="{{ route('authentication.login.attempt') }}" class="g-3 needs-validation" method="POST" enctype="multipart/form-data">
									@csrf
									<div class="col-12 mt-5 mb-5">
										<div class="p-2">
											<div>
												<label class="form-label text-left" for="user_email">Email</label>
												<input class="form-control" id="user_email" name="user_email" placeholder="abc@example.com" required type="email">
											</div>
											@error('user_email')
											<small class="text-danger font-12">{{ $message }}</small>@enderror
											@error('loginError')
											<small class="text-danger font-12">{{ $message }}</small>@enderror
										</div>
										<div class="p-2">
											<div>
												<label class="form-label text-left" for="user_password">Password</label>
												<input class="form-control" id="user_password" name="user_password" placeholder="********" required type="password">
											</div>
											@error('password')
											<small class="text-danger font-12">{{ $message }}</small>@enderror
										</div>
									</div>
									<div class="col-12">
										<button class="btn btn-warning m-auto d-block w-50" id="login-button" type="submit">
											<span class="font-normal font-18">Login</span>
										</button>
									</div>
									<div class="col-12 mt-2 text-center">
										<span>OR</span>
									</div>
									<div class="col-12 mt-2">
										<a class="btn btn-warning m-auto d-block w-50" href="{{ route('authentication.register.show') }}">
											<span class="font-18 font-normal">Register</span>
										</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 m-auto loginCardsMobileHide">
					<div>
						<div class="col-lg-6 ml-5 shadow">
							<div class="card bg-warning text-left mb-0">
								<div class="card-body">
									<div class="mainCardOne">
										<h2>
											<span>$</span>
											2,824
										</h2>
									</div>
									<div class="row">
										<div class="col-7">
											<div class="mainCardOne">
												<h5>Total Spent</h5>
											</div>
										</div>
										<div class="col-5">
											<div class="values">
												<img alt src="{{ asset('assets/images/icons/icon01.png') }}">
												<span>+ $245</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 m-auto shadow">
							<div class="card bg-success text-left loginCard mb-0">
								<div class="card-body">
									<div class="mainCardTwo">
										<h2>
											<span>#</span>
											2,824
										</h2>
									</div>
									<div class="row">
										<div class="col-7">
											<div class="mainCardTwo">
												<h5>Total Spent</h5>
											</div>
										</div>
										<div class="col-5">
											<div class="values">
												<img alt src="{{ asset('assets/images/icons/icon01.png') }}">
												<span>+22</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 ml-3 shadow">
							<div class="card bg-danger loginCard text-left">
								<div class="card-body">
									<div class="mainCardThree">
										<h2>
											<span>#</span>
											2,824
										</h2>
									</div>
									<div class="row">
										<div class="col-7">
											<div class="mainCardThree">
												<h5>Total Spent</h5>
											</div>
										</div>
										<div class="col-5">
											<div class="values">
												<img alt src="{{ asset('assets/images/icons/icon02.png') }}">
												<span class="text-danger">-12</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
