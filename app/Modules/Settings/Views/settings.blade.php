@extends('Shared::main')

@section('content')
	<div class="page-wrapper">
		<div class="container-fluid">
			<div class="row mt-5">
				<div class="col-lg-6">
					<div class="card scrollBar">
						<div class="card-body">
							<div class="d-flex">
								<h4 class="card-title mb-0">License Key</h4>
								<a class="text-danger Clear ml-auto" href="javascript:void(0)">Log Out</a>
							</div>
						</div>
						<ul class="feeds p-b-20">
							<li>
								<div class="text-success">
									<div class="row">
										<div class="selectBox col-2 m-auto">
											<div class="form-check">
												<input class="w-100" id="flexCheckDefault" type="checkbox" value="">
											</div>
										</div>
										<div class="selectBox col-10">
											<h4>License Key</h4>
											<div class="text-white d-flex justify-content-between LicenseKey" for="flexCheckDefault">
												<input id="Text" readonly type="text" value="XXXXX-XXXXX-XXXXX-XXXXX">
												<a class="text-white" href="javascript:void(0)">Copy text</a>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="text-success">
									<div class="row">
										<div class="selectBox col-2 m-auto">
											<div class="form-check">
												<input class="w-100" id="flexCheckDefault" type="checkbox" value="">
											</div>
										</div>
										<div class="selectBox col-10">
											<h4>License Key</h4>
											<div class="text-white d-flex justify-content-between LicenseKey" for="flexCheckDefault">
												<input id="Text" readonly type="text" value="Monthly Subscription">
												<a class="text-white" href="javascript:void(0)">Copy text</a>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="text-success">
									<div class="row">
										<div class="selectBox col-2 m-auto">
											<div class="form-check">
												<input class="w-100" id="flexCheckDefault" type="checkbox" value="">
											</div>
										</div>
										<div class="selectBox col-10">
											<h4>Price</h4>
											<div class="text-white d-flex justify-content-between LicenseKey" for="flexCheckDefault">
												<input id="Text" readonly type="text" value="20$/Month ">
												<a class="text-white" href="javascript:void(0)">Copy text</a>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="text-success">
									<div class="row">
										<div class="selectBox col-2 m-auto">
											<div class="form-check">
												<input class="w-100" id="flexCheckDefault" type="checkbox" value="">
											</div>
										</div>
										<div class="selectBox col-10">
											<h4>Next Charge</h4>
											<div class="text-white d-flex justify-content-between LicenseKey" for="flexCheckDefault">
												<input id="Text" readonly type="text" value="DD.MM.YY">
												<a class="text-white" href="javascript:void(0)">Copy text</a>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="card scrollBar pb-4">
						<div class="card-body">
							<div class="d-flex">
								<h4 class="card-title mb-0">Webhook</h4>
								<a class="text-success Clear ml-auto" href="javascript:void(0)">Test Webhooks</a>
							</div>
						</div>
						<ul class="feeds pl-5 pr-5">
							<li>
								<div class="col-12">
									<h4 class="mb-0">License Key</h4>
								</div>
							</li>
							<li>
								<div class="col-12">
									<h4 class="mb-0">Success Webhook</h4>
								</div>
							</li>
						</ul>

						<div class="card-body">
							<div class="d-flex">
								<h4 class="card-title mb-0">Delays</h4>
							</div>
						</div>
						<ul class="feeds pl-5 pr-5">
							<li>
								<div class="col-12">
									<h4 class="mb-0">Error Delay</h4>
								</div>
							</li>
							<li>
								<div class="col-12">
									<h4 class="mb-0">Retry Delay</h4>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="card p-5">
					<div class="card-title">
						<h3>Bot Statistics</h3>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-lg-4">
								<div class="card p-5">
									<h4 class="text-success">Running Since</h4>
									<h5>3 hours 12 minutes</h5>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card p-5">
									<h4 class="text-success">CPU Usage</h4>
									<h5>13%</h5>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card p-5">
									<h4 class="text-success">RAM Usage</h4>
									<h5>13%</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection