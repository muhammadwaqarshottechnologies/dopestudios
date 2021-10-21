@extends('Shared::main')

@section('content')
	<div class="page-wrapper">
		<div class="container-fluid mt-5 pt-3">
			<div class="row">
				<div class="col-lg-7">

					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Revenue of the Site</h5>
							<div class="d-flex m-t-30 m-b-20 no-block align-items-center">
								<span class="display-5 text-success">
									<i class="icon-wallet"></i>
								</span>
								<span class="display-6 ml-auto">
									<sup class="font-20 text-success">$</sup>
									117k
								</span>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Lorem Ipsum</h5>
							</div>
							<div class="card-body">
								<div class="row text-center">
									<div class="col-4 border-right">
										<h6>TOTAL</h6>
										<h5 class="text-danger m-b-0">18465</h5>
									</div>
									<div class="col-4 border-right">
										<h6>TODAY</h6>
										<h5 class="text-danger m-b-0">1547</h5>
									</div>
									<div class="col-4">
										<h6>WEEK</h6>
										<h5 class="text-danger m-b-0">6045</h5>
									</div>
								</div>
							</div>
							<div class="m-t-30" id="sparkline15"></div>
						</div>
					</div>
				</div>
				<!-- Column -->
				<div class="col-lg-5">
					<div class="row">
						<!-- Column -->
						<div class="col-lg-6">
							<div class="card bg-success text-white text-center">
								<div class="card-body">
									<small>Visit</small>
									<h3>284</h3>
									<div class="m-t-10" id="sparkline11"></div>
								</div>
							</div>
						</div>
						<!-- Column -->
						<!-- Column -->
						<div class="col-lg-6">
							<div class="card bg-info text-white text-center">
								<div class="card-body">
									<small>Page Views</small>
									<h3>8284</h3>
									<div class="m-t-10" id="sparkline12"></div>
								</div>
							</div>
						</div>
						<!-- Column -->
						<!-- Column -->
						<div class="col-lg-6">
							<div class="card bg-primary text-white text-center">
								<div class="card-body">
									<small>Unique visitors</small>
									<h3>284</h3>
									<div class="m-t-10" id="sparkline13"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card bg-danger text-white text-center">
								<div class="card-body">
									<small>Bounce Rate</small>
									<h3>28%</h3>
									<div class="m-t-10" id="sparkline14"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-12">

							<div class="card-body bg-light">
								<div class="row text-center">
									<div class="col-lg-4 border-right">
										<div class="m-b-10" id="sparkline8"></div>
										<h6>My Balance</h6>
										<b>$14,146</b>
									</div>
									<div class="col-lg-4 border-right">
										<div class="m-b-10" id="sparkline9"></div>
										<h6>New Orders</h6>
										<b>$4567</b>
									</div>
									<div class="col-lg-4">
										<div class="m-b-10" id="sparkline10"></div>
										<h6>Overall Views</h6>
										<b>4328</b>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="card earning-widget">
						<div class="card-body p-b-0">
							<div class="card-title">
								<div class="d-flex">
									<span>
										<h4 class="card-title m-b-0">Total Earning</h4>
										<h2 class="m-t-0 text-success">$586</h2>
									</span>
									<select class="form-control w-25 ml-auto">
										<option selected="">Today</option>
										<option value="1">Weekly</option>
									</select>
								</div>
							</div>
						</div>
						<div class="border-top">
							<table class="table v-middle no-border">
								<tbody>
									<tr>
										<td style="width:40px">
											<img alt="logo" class="img-circle" src="{{ asset('assets/images/ClientsImgs/clientimg01.jpg') }}" width="50">
										</td>
										<td>Lorem Ipsum</td>
										<td>
											<span class="label label-info">$2300</span>
										</td>
									</tr>
									<tr>
										<td>
											<img alt="logo" class="img-circle" src="{{ asset('assets/images/ClientsImgs/clientimg02.jpg') }}" width="50">
										</td>
										<td>Lorem Ipsum</td>
										<td>
											<span class="label label-success">$3300</span>
										</td>
									</tr>
									<tr>
										<td>
											<img alt="logo" class="img-circle" src="{{ asset('assets/images/ClientsImgs/clientimg03.jpg') }}" width="50">
										</td>
										<td>Lorem Ipsum</td>
										<td>
											<span class="label label-primary">$4300</span>
										</td>
									</tr>
									<tr>
										<td>
											<img alt="logo" class="img-circle" src="{{ asset('assets/images/ClientsImgs/clientimg04.jpg') }}" width="50">
										</td>
										<td>Lorem Ipsum</td>
										<td>
											<span class="label label-warning">$5300</span>
										</td>
									</tr>
									<tr>
										<td>
											<img alt="logo" class="img-circle" src="{{ asset('assets/images/ClientsImgs/clientimg05.jpg') }}" width="50">
										</td>
										<td>Lorem Ipsum</td>
										<td>
											<span class="label label-danger">$4567</span>
										</td>
									</tr>
									<tr>
										<td>
											<img alt="logo" class="img-circle" src="{{ asset('assets/images/ClientsImgs/clientimg06.jpg') }}" width="50">
										</td>
										<td>Lorem Ipsum</td>
										<td>
											<span class="label label-megna">$7889</span>
										</td>
									</tr>
									<tr>
										<td>
											<img alt="logo" class="img-circle" src="{{ asset('assets/images/ClientsImgs/clientimg02.jpg') }}" width="50">
										</td>
										<td>Lorem Ipsum</td>
										<td>
											<span class="label label-success">$3300</span>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="card">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<h4 class="card-title">Lorem Ipsum</h4>
								<select class="form-control w-25 ml-auto">
									<option selected="">January</option>
									<option value="1">February</option>
									<option value="2">March</option>
									<option value="3">April</option>
								</select>
							</div>
							<div class="table-responsive m-t-30">
								<table class="table stylish-table">
									<thead>
										<tr>
											<th colspan="2">Assigned</th>
											<th>Name</th>
											<th>Priority</th>
											<th>Budget</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td style="width:50px;">
												<span class="round">S</span>
											</td>
											<td>
												<h6>Lorem Ipsum</h6>
												<small class="text-muted">dummy text</small>
											</td>
											<td>Lorem Ipsum</td>
											<td>
												<span class="label label-success">Low</span>
											</td>
											<td>$3.9K</td>
										</tr>
										<tr class="active">
											<td style="width:50px;">
												<span class="round">A</span>
											</td>
											<td>
												<h6>Lorem Ipsum</h6>
												<small class="text-muted">dummy text</small>
											</td>
											<td>Lorem Ipsum</td>
											<td>
												<span class="label label-info">Medium</span>
											</td>
											<td>$23.9K</td>
										</tr>
										<tr>
											<td>
												<span class="round round-success">B</span>
											</td>
											<td>
												<h6>Lorem Ipsum</h6>
												<small class="text-muted">dummy text</small>
											</td>
											<td>Lorem Ipsum</td>
											<td>
												<span class="label label-danger">High</span>
											</td>
											<td>$12.9K</td>
										</tr>
										<tr>
											<td>
												<span class="round round-primary">N</span>
											</td>
											<td>
												<h6>Lorem Ipsum</h6>
												<small class="text-muted">dummy text</small>
											</td>
											<td>Lorem Ipsum</td>
											<td>
												<span class="label label-success">Low</span>
											</td>
											<td>$10.9K</td>
										</tr>
										<tr>
											<td>
												<span class="round round-warning">M</span>
											</td>
											<td>
												<h6>Lorem Ipsum</h6>
												<small class="text-muted">dummy text</small>
											</td>
											<td>Lorem Ipsum</td>
											<td>
												<span class="label label-danger">High</span>
											</td>
											<td>$12.9K</td>
										</tr>
										<tr>
											<td>
												<span class="round round-danger">N</span>
											</td>
											<td>
												<h6>Lorem Ipsum</h6>
												<small class="text-muted">dummy text</small>
											</td>
											<td>Lorem Ipsum</td>
											<td>
												<span class="label label-danger">High</span>
											</td>
											<td>$2.6K</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
