@extends('Shared::main')

@section('content')
	<!--suppress HtmlFormInputWithoutLabel -->
	<div class="page-wrapper">
		<div class="container-fluid">
			<div class="row mt-5">
				<div class="col-lg-10 m-auto">
					<h2>Users</h2>
					<div class="col-lg-12 pl-0">
						<div class="card">
							<div class="card-body pt-0">
								<div class="table-responsive m-t-30 scrollBarTable">
									<table class="table stylish-table">
										<thead>
											<tr>
												<th>ID</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Username</th>
												<th>Email</th>
												<th>Profile Picture</th>
												<th>Active Status</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($users as $user)
												<tr>
													<td>{{ $user->user_id }}</td>
													<td>{{ $user->user_first_name }}</td>
													<td>{{ $user->user_last_name }}</td>
													<td>{{ $user->user_username }}</td>
													<td>{{ $user->user_email }}</td>
													<td>
														<img alt="" src="{{ asset($user->user_profile_picture ?? 'images/1620974914.jpeg') }}" style="height: 50px; width: auto">
													</td>
													<td>
														<input type="checkbox" @if ($user->user_is_active) checked @endif>
													</td>
													<td>
														<a data-target="#exampleModalCenter" data-toggle="modal" href="javascript:void(0)">
															<i class="text-white ml-2 fas fa-lg fa-pencil-alt"></i>
															@include('Shared::modal')
														</a>
														<a href="javascript:void(0)">
															<i class="text-danger ml-2 fas fa-lg fa-trash-alt"></i>
														</a>
													</td>
												</tr>
											@endforeach()
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
