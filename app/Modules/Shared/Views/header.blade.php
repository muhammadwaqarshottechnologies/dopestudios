<header class="topbar">
	<nav class="navbar top-navbar navbar-expand-md navbar-dark">
		<div class="navbar-header">
			<a class="navbar-brand" href="{{ route('main.index') }}">
				<span>
					<img alt="homepage" class="light-logo" src="{{ asset('assets/images/logo/logo-icon.png') }}">
				</span>
			</a>
		</div>
		<div class="navbar-collapse">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item hidden-sm-up">
					<a class="nav-link nav-toggler waves-effect waves-light" href="javascript:void(0)">
						<i class="ti-menu"></i>
					</a>
				</li>
				<li class="nav-item dropdown">
					<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle waves-effect waves-dark" data-toggle="dropdown" href="javascript:void(0)" id="2">
						<i class="icon-note"></i>
						<div class="notify">
							<span class="heartbit"></span>
							<span class="point"></span>
						</div>
					</a>
					<div aria-labelledby="2" class="dropdown-menu mailbox animated bounceInDown">
						<span class="with-arrow">
							<span class="bg-danger"></span>
						</span>
						<ul>
							<li>
								<div class="drop-title text-white bg-danger">
									<h4 class="m-b-0 m-t-5">5 New</h4>
									<span class="font-light">Messages</span>
								</div>
							</li>
							<li>
								<div class="message-center ps-container ps-theme-default" data-ps-id="ea183f97-7bcf-ba63-f637-df50b927166c">
									<!-- Message -->
									<a href="javascript:void(0)">
										<div class="user-img">
											<img alt="user" class="img-circle" src="{{ asset('assets/images/ClientsImgs/clientimg01.jpg') }}">
											<span class="profile-status online float-right"></span>
										</div>
										<div class="mail-contnet">
											<h5>Pavan kumar</h5>
											<span class="mail-desc">Just see the my admin!</span>
											<span class="time">9:30 AM</span>
										</div>
									</a>
									<!-- Message -->
									<a href="javascript:void(0)">
										<div class="user-img">
											<img alt="user" class="img-circle" src="{{ asset('assets/images/ClientsImgs/clientimg02.jpg') }}">
											<span class="profile-status busy float-right"></span>
										</div>
										<div class="mail-contnet">
											<h5>Sonu Nigam</h5>
											<span class="mail-desc">I've sung a song! See you at</span>
											<span class="time">9:10 AM</span>
										</div>
									</a>
									<!-- Message -->
									<a href="javascript:void(0)">
										<div class="user-img">
											<img alt="user" class="img-circle" src="{{ asset('assets/images/ClientsImgs/clientimg03.jpg') }}">
											<span class="profile-status away float-right"></span>
										</div>
										<div class="mail-contnet">
											<h5>Arijit Sinh</h5>
											<span class="mail-desc">I am a singer!</span>
											<span class="time">9:08 AM</span>
										</div>
									</a>
									<!-- Message -->
									<a href="javascript:void(0)">
										<div class="user-img">
											<img alt="user" class="img-circle" src="{{ asset('assets/images/ClientsImgs/clientimg04.jpg') }}">
											<span class="profile-status offline float-right"></span>
										</div>
										<div class="mail-contnet">
											<h5>Pavan kumar</h5>
											<span class="mail-desc">Just see the my admin!</span>
											<span class="time">9:02 AM</span>
										</div>
									</a>
									<div class="ps-scrollbar-x-rail" style="left: 0; bottom: 0">
										<div class="ps-scrollbar-x" style="left: 0; width: 0" tabindex="0"></div>
									</div>
									<div class="ps-scrollbar-y-rail" style="top: 0; right: 3px">
										<div class="ps-scrollbar-y" style="top: 0; height: 0" tabindex="0"></div>
									</div>
								</div>
							</li>
							<li>
								<a class="nav-link text-center link m-b-5" href="javascript:void(0)">
									<b>See all e-Mails</b>
									<i class="fa fa-angle-right"></i>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item search-box">
					<a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
						<i class="ti-search"></i>
					</a>
					<form class="app-search">
						<label for="site-search"></label>
						<input class="form-control" id="site-search" placeholder="Search &amp; enter" type="text">
						<a class="srh-btn">
							<i class="ti-close"></i>
						</a>
					</form>
				</li>
			</ul>
			<ul class="navbar-nav my-lg-0">
				<li class="nav-item dropdown show">
					<a aria-expanded="true" aria-haspopup="true" class="nav-link dropdown-toggle text-muted waves-effect waves-dark" data-toggle="dropdown" href="javascript:void(0)">
						<img alt="user" class="img-circle" src="{{ asset('assets/images/ClientsImgs/clientimg03.jpg') }}" width="30">
					</a>
					<div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
						<span class="with-arrow">
							<span class="bg-primary"></span>
						</span>
						<div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
							<div class="">
								<img alt="user" class="img-circle" src="{{ asset('assets/images/ClientsImgs/clientimg03.jpg') }}" width="60">
							</div>
							<div class="m-l-10">
								<h4 class="m-b-0">Lorem Ipsum</h4>
								<p class=" m-b-0">Lorem Ipsum@gmail.com</p>
							</div>
						</div>
						<a class="dropdown-item" href="javascript:void(0)">
							<i class="ti-user m-r-5 m-l-5"></i>
							My Profile
						</a>
						<a class="dropdown-item" href="javascript:void(0)">
							<i class="ti-wallet m-r-5 m-l-5"></i>
							My Balance
						</a>
						<a class="dropdown-item" href="javascript:void(0)">
							<i class="ti-email m-r-5 m-l-5"></i>
							Inbox
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="{{ route('settings.index') }}">
							<i class="ti-settings m-r-5 m-l-5"></i>
							Account Setting
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="javascript:void(0)">
							<i class="fa fa-power-off m-r-5 m-l-5"></i>
							Logout
						</a>
						<div class="dropdown-divider"></div>
						<div class="p-l-30 p-10">
							<a class="btn btn-sm btn-success btn-rounded" href="javascript:void(0)">View Profile</a>
						</div>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle waves-effect waves-dark" data-toggle="dropdown" href="javascript:void(0)">
						<i class="fas fa-bell"></i>
						<div class="notify">
							<span class="heartbit"></span>
							<span class="point"></span>
						</div>
					</a>
					<div class="mailbox dropdown-menu dropdown-menu-right user-dd animated flipInY">
						<span class="with-arrow">
							<span class="bg-primary"></span>
						</span>
						<ul>
							<li>
								<div class="drop-title bg-primary text-white">
									<h4 class="m-b-0 m-t-5">4 New</h4>
									<span class="font-light">Notifications</span>
								</div>
							</li>
							<li>
								<div class="message-center">
									<!-- Message -->
									<a href="javascript:void(0)">
										<div class="btn btn-danger btn-circle">
											<i class="fa fa-link"></i>
										</div>
										<div class="mail-contnet">
											<h5>Luanch Admin</h5>
											<span class="mail-desc">Just see the my new admin!</span>
											<span class="time">9:30 AM</span>
										</div>
									</a>
									<!-- Message -->
									<a href="javascript:void(0)">
										<div class="btn btn-success btn-circle">
											<i class="ti-calendar"></i>
										</div>
										<div class="mail-contnet">
											<h5>Event today</h5>
											<span class="mail-desc">Just a reminder that you have event</span>
											<span class="time">9:10 AM</span>
										</div>
									</a>
									<!-- Message -->
									<a href="javascript:void(0)">
										<div class="btn btn-info btn-circle">
											<i class="ti-settings"></i>
										</div>
										<div class="mail-contnet">
											<h5>Settings</h5>
											<span class="mail-desc">You can customize this template as you want</span>
											<span class="time">9:08 AM</span>
										</div>
									</a>
									<!-- Message -->
									<a href="javascript:void(0)">
										<div class="btn btn-primary btn-circle">
											<i class="ti-user"></i>
										</div>
										<div class="mail-contnet">
											<h5>Pavan kumar</h5>
											<span class="mail-desc">Just see the my admin!</span>
											<span class="time">9:02 AM</span>
										</div>
									</a>
								</div>
							</li>
							<li>
								<a class="nav-link text-center m-b-5" href="javascript:void(0)">
									<strong>Check all notifications</strong>
									<i class="fa fa-angle-right"></i>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item right-side-toggle">
					<a class="nav-link  waves-effect waves-light" href="javascript:void(0)">
						<i class="ti-settings"></i>
					</a>
				</li>
			</ul>
		</div>
	</nav>
</header>
