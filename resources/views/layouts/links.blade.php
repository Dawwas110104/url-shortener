<!DOCTYPE html>
<html>
<head>
	<title>urlShortener</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- CSS only -->
	<link rel="stylesheet" href="{{ asset('klorofil/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('klorofil/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('klorofil/assets/vendor/linearicons/style.css') }}">
	<link rel="stylesheet" href="{{ asset('klorofil/assets/vendor/chartist/css/chartist-custom.css') }}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{ asset('klorofil/assets/css/main.css') }}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{ asset('klorofil/assets/css/demo.css') }}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('klorofil/assets/img/apple-icon.png') }}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('klorofil/assets/img/favicon.png') }}">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<!-- <div class="brand">
				<a href="index.html"><img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div> -->
			<div class="container-fluid">
				@yield('sidebar')
				<!-- <form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form> -->
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<!-- <li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								<span class="badge bg-danger">5</span>
							</a>
							<ul class="dropdown-menu notifications">
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
								<li><a href="#" class="more">See all notifications</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Basic Use</a></li>
								<li><a href="#">Working With Data</a></li>
								<li><a href="#">Security</a></li>
								<li><a href="#">Troubleshooting</a></li>
							</ul>
						</li> -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-user"><span> {{ Auth::user()->name }}</span></i></a>
							<ul class="dropdown-menu">
								<li>
									@if (Route::has('login'))
							            @auth
							                <a class="dropdown-toggle" href="{{ route('welcome') }}"><span>Home</span></a>
		                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
		                                        @csrf
		                                    </form>
							            @else
							                <a href="{{ route('login') }}">Login</a>
							                @if (Route::has('register'))
							                    <a href="{{ route('register') }}">Register</a>
							                @endif
							            @endauth
								    @endif
		                    	</li>
								<li>
									<a href="{{ route('logout') }}"
					                    onclick="event.preventDefault();
				                            document.getElementById('logout-form').submit();">
			                            {{ __('Logout') }}
		                        	</a>
		                    	</li>  
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->


		@yield('content')



		<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<script src="{{ asset('klorofil/assets/vendor/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('klorofil/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('klorofil/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
	<script src="{{ asset('klorofil/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
	<script src="{{ asset('klorofil/assets/vendor/chartist/js/chartist.min.js') }}"></script>
	<script src="{{ asset('klorofil/assets/scripts/klorofil-common.js') }}"></script>

	
</body>
</html>