<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | {{ $title }}</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="DashboardKit is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
    <meta name="keywords" content="DashboardKit, Dashboard Kit, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Free Bootstrap Admin Template">
    <meta name="author" content=". ">


    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('assets/img/logo/SILAMAS.png') }}" type="image/x-icon">

    <!-- font css -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main-style-link">
    {{-- Chart Js --}}


</head>

<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ Mobile header ] start -->
	<div class="pc-mob-header pc-header">
		<div class="pcm-logo">
			<img src=" {{ asset('assets/img/logo/SILAMAS.png') }}" alt="" class="logo logo-lg">
		</div>
		<div class="pcm-toolbar">
			<a href="#!" class="pc-head-link" id="mobile-collapse">
				<div class="hamburger hamburger--arrowturn">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
			</a>
			<a href="#!" class="pc-head-link" id="headerdrp-collapse">
				<i data-feather="align-right"></i>
			</a>
			<a href="#!" class="pc-head-link" id="header-collapse">
				<i data-feather="more-vertical"></i>
			</a>
		</div>
	</div>
	<!-- [ Mobile header ] End -->

	<!-- [ navigation menu ] start -->
	<nav class="pc-sidebar ">
		<div class="navbar-wrapper">
			<div class="m-header">
				<a href="index.html" class="b-brand">
					<!-- ========   change your logo hear   ============ -->
					<img src=" {{ asset('assets/img/logo/logo.png') }}" width="40%" alt="" class="logo logo-lg"> SILAMAS
					<img src=" {{ asset('assets/img/logo/SILAMAS.png') }}" alt="" class="logo logo-sm">
				</a>
			</div>
			<div class="navbar-content">
				<ul class="pc-navbar">
					<li class="pc-item pc-caption">
						<label>Navigation</label>
					</li>
					<li class="pc-item">
						<a href="{{ route('dashboard') }}" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">home</i></span><span class="pc-mtext">Dashboard</span></a>
					</li>
					<li class="pc-item pc-caption">
						<label>Forms</label>
					</li>
					<li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">edit</i></span><span class="pc-mtext">Main Forms</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="{{ url('admin/user') }}">Form User</a></li>
							<li class="pc-item"><a class="pc-link" href="{{ url('admin/laporan') }}">Form Laporan</a></li>
							<li class="pc-item"><a class="pc-link" href="{{ url('admin/tanggapan') }}">Form Tanggapan</a></li>
							<li class="pc-item"><a class="pc-link" href="form2_radio.html">Form Petugas</a></li>
						</ul>
					</li><hr>
                    <li class="pc-item">
                        <a href="{{ route('index') }}" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">search</i></span><span class="pc-mtext">Search</span></a>
                    </li>

				</ul>
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="pc-header ">
		<div class="header-wrapper">
			<div class="mr-auto pc-mob-drp">
				<ul class="list-unstyled">
					<li class="dropdown pc-h-item">
						<a class="pc-head-link active dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
							Settings
						</a>
						<div class="dropdown-menu pc-h-dropdown">
							<a href="#!" class="dropdown-item">
								<i class="material-icons-two-tone">account_circle</i>
								<span>My Account</span>
							</a>
							<div class="pc-level-menu">
								<a href="#!" class="dropdown-item">
									<i class="material-icons-two-tone">list_alt</i>
									<span class="float-right"><i data-feather="chevron-right" class="mr-0"></i></span>
									<span>Level2.1</span>
								</a>
								<div class="dropdown-menu pc-h-dropdown">
									<a href="#!" class="dropdown-item">
										<i class="fas fa-circle"></i>
										<span>My Account</span>
									</a>
									<a href="#!" class="dropdown-item">
										<i class="fas fa-circle"></i>
										<span>Settings</span>
									</a>
									<a href="#!" class="dropdown-item">
										<i class="fas fa-circle"></i>
										<span>Support</span>
									</a>
									<a href="#!" class="dropdown-item">
										<i class="fas fa-circle"></i>
										<span>Lock Screen</span>
									</a>
									<a href="#!" class="dropdown-item">
										<i class="fas fa-circle"></i>
										<span>Logout</span>
									</a>
								</div>
							</div>
							<a href="#!" class="dropdown-item">
								<i class="material-icons-two-tone">settings</i>
								<span>Settings</span>
							</a>
							<a href="#!" class="dropdown-item">
								<i class="material-icons-two-tone">support</i>
								<span>Support</span>
							</a>
							<a href="#!" class="dropdown-item">
								<i class="material-icons-two-tone">https</i>
								<span>Lock Screen</span>
							</a>
							<a href="#!" class="dropdown-item">
								<i class="material-icons-two-tone">chrome_reader_mode</i>
								<span>Logout</span>
							</a>
						</div>
					</li>
				</ul>
			</div>
			<div class="ml-auto">
				<ul class="list-unstyled">
					<li class="dropdown pc-h-item">
						<a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
							<i class="material-icons-two-tone">search</i>
						</a>
						<div class="dropdown-menu dropdown-menu-right pc-h-dropdown drp-search">
							<form class="px-3">
								<div class="form-group mb-0 d-flex align-items-center">
									<i data-feather="search"></i>
									<input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . .">
								</div>
							</form>
						</div>
					</li>
					<li class="dropdown pc-h-item">
						<a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
							<img src=" {{ asset('assets/images/user/avatar-2.jpg') }}" alt="user-image" class="user-avtar">
							<span>
								<span class="user-name">{{ auth()->user()->name }}</span>
								<span class="user-desc">{{ auth()->user()->roles }}</span>
							</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right pc-h-dropdown">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="material-icons-two-tone">chrome_reader_mode</i>
                                    <span>Logout</span>
                                </button>
                            </form>
						</div>
					</li>
				</ul>
			</div>

		</div>
	</header>
	<!-- [ Header ] end -->

<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item">{{ $title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        @yield('section-main')
    </div>
</div>
<!-- [ Main Content ] end -->
    <!-- Required Js -->
    <script src=" {{ asset('assets/js/vendor-all.min.js') }}"></script>
    <script src=" {{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src=" {{ asset('assets/js/plugins/feather.min.js') }}"></script>
    <script src=" {{ asset('assets/js/pcoded.min.js') }}"></script>


<!-- Apex Chart -->
<script src=" {{ asset('assets/js/plugins/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/chart-apex.js') }}"></script>

<!-- custom-chart js -->
<script src=" {{ asset('assets/js/pages/dashboard-sale.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
<script src=" {{ asset('assets/js/chart.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>

</body>

</html>
