<aside class="left-sidebar">
	<div class="d-flex no-block nav-text-box align-items-center">
		<span>
			<img alt="" class="sideBarLogo" src="{{ asset('assets/images/favicon/favicon.png') }}">
		</span>
		<h4 class="light-logo ml-2 mt-1 text-white">DopeStudios</h4>
		<a class="nav-lock waves-effect waves-dark ml-auto hidden-md-down" href="javascript:void(0)">
			<i class="fas fa-toggle-on"></i>
		</a>

		<a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)">
			<i class="fas fa-times"></i>
		</a>
	</div>
	<div class="scroll-sidebar">
		<nav class="sidebar-nav">
			<ul id="sidebarnav">
				<li>
					<a class="waves-effect" href="{{ route('main.index') }}">
						<i class="fas fa-tachometer-alt"></i>
						<span class="hide-menu">Dashboard</span>
					</a>
				</li>
				<li>
					<a class="waves-effect" href="{{ route('user.index') }}">
						<i class="fas fa-users"></i>
						<span class="hide-menu">Users</span>
					</a>
				</li>
				<li>
					<a class="waves-effect" href="{{ route('music.index') }}">
						<i class="fas fa-music"></i>
						<span class="hide-menu">Music</span>
					</a>
				</li>
				<li>
					<a class="waves-effect" href="{{ route('bidding.index') }}">
						<i class="fas fa-bold"></i>
						<span class="hide-menu">Current Bidding</span>
					</a>
				</li>
			</ul>
			<ul>
				<li class="logoutButton">
					<a class="waves-effect" href="javascript:void(0)" onclick="document.getElementById('logout-form').submit()">
						<form method="POST" action="{{ route('authentication.logout.attempt') }}" id="logout-form">@csrf</form>
						<i class="fas fa-power-off"></i>
						<span class="hide-menu">Logout</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>
</aside>
