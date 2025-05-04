<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Fruitkha - Slider Version</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="{{asset('fe2/img/favicon.png')}}">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{asset('fe2/css/all.min.css')}}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{asset('fe2/bootstrap/css/bootstrap.min.css')}}">
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{asset('fe2/css/owl.carousel.css')}}">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{asset('fe2/css/magnific-popup.css')}}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{asset('fe2/css/animate.css')}}">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{asset('fe2/css/meanmenu.min.css')}}">
	<!-- main style -->
	<link rel="stylesheet" href="{{asset('fe2/css/main.css')}}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{asset('fe2/css/responsive.css')}}">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	@if (!in_array($title, ['Login', 'Registration']))
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="#">
								<img src="{{asset('fe2/img/logo.png')}}" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li @if ($title === 'Home') class="current-list-item" @endif><a href="/">Home</a></li>
								<li @if ($title === 'About') class="current-list-item" @endif><a href="about">About</a></li>
								<li @if ($title === 'News') class="current-list-item" @endif><a href="news">News</a></li>
								<li @if ($title === 'Wisata') class="current-list-item" @endif><a href="wisata">Wisata</a></li>
								<li @if ($title === 'shop') class="current-list-item" @endif><a href="reservation">Reservation</a></li>
								<li @if ($title === 'Contact') class="current-list-item" @endif><a href="contact">Contact</a></li>
								<li>
									
									<ul class="header-icons">
									@guest
									<li><a href="{{ route('register-pelanggan') }}">Register/Login</a></li>
									@endguest

									@auth
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" id="navbarUser" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											<!-- ngecek apakah user yang sedang login memiliki relasi ke data pelanggan berdasarkan hasOne di model User -->
											 <!-- Mengecek apakah pelanggan tersebut memiliki foto yang tersimpan di database (biasanya seperti pelanggan/nama_file.jpg). --->
											 <!-- Tanda ? : ini adalah ternary operator untuk perbanding benar : salah -->
											<img src="{{ Auth::user()->pelanggan && Auth::user()->pelanggan->foto 
														? asset('storage/' . Auth::user()->pelanggan->foto) 
														: asset('default-user.png') }}" 
												alt="User Photo" 
												style="width: 30px; height: 30px; border-radius: 50%;">
												<span class="text-white">
													 &nbsp;{{ Auth::user()->pelanggan && Auth::user()->pelanggan->nama_lengkap ? Auth::user()->pelanggan->nama_lengkap : 'User' }}
												</span>
										</a>
										<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarUser">
												<form action="{{ route('logout') }}" method="POST" class="text-left">
														@csrf
														<button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt me-2"></i>Logout</button>									
												</form>
										</ul>
									</li>
									@endauth
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endif
	<!-- end header -->
	
	@if ($title === 'Home')
	<!-- home page slider -->
<div class="homepage-slider">
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-1">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Pusat Budaya, Alam Eksotis, dan Petualangan Menarik</p>
								<h1>Desa Wisata Penglipuran Bali</h1>
								<div class="hero-btns">
									<a href="wisata" class="boxed-btn">Paket Wisata</a>
									<a href="contact" class="bordered-btn">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-center">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Nikmati Liburan Tenang dengan Udara Segar</p>
								<h1>Desa Wisata Penglipuran Bali</h1>
								<div class="hero-btns">
									<a href="wisata" class="boxed-btn">Paket wisata</a>
									<a href="contact" class="bordered-btn">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-right">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Mega Sale!</p>
								<h1>Dapatkan Diskon Menarik</h1>
								<div class="hero-btns">
									<a href="wisata" class="boxed-btn">Paket wisata</a>
									<a href="contact" class="bordered-btn">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end home page slider -->
	@endif



	@if ($title !== 'Home' && !in_array($title, ['Login', 'Registration']))
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Rencanakan Liburan Anda Sekarang!</p>
						@if ($title === 'About')<h1>About</h1>@endif
						@if ($title === 'News')<h1>News</h1>@endif
						@if ($title === 'Contact') <h1>Contact</h1>@endif
						@if ($title === 'Wisata')<h1>Wisata</h1>@endif
						@if ($title === 'Reservation')<h1>Reservation</h1>@endif
						@if ($title === 'News-Detail')<h1>News Detail</h1>@endif
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->
	@endif
	
	@if ($title === 'Home')
        @yield('paket-wisata')
		@yield('berita')
		@yield('diskon')
		@yield('testimoni')
    @endif
	@if ($title === 'About')
		@yield('about')
	@endif
	@if ($title === 'News')
		@yield('berita')
	@endif
	@if ($title === 'Contact')
		@yield('contact')
	@endif
	@if ($title === 'Reservation')
		@yield('reservation')
	@endif
	@if ($title === 'Login')
		@yield('login')
	@endif
	@if ($title === 'Registration')
		@yield('registration')
	@endif
	@if ($title === 'Wisata')
		@yield('wisata')
	@endif

	@if (!in_array($title, ['Login', 'Registration']))
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2019 - <a>Dinedinesahurrrr</a>,  All Rights Reserved.<br>
						Distributed By - <a>Themewagon</a>
					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	@endif
	<!-- jquery -->
	<script src="{{asset('fe2/js/jquery-1.11.3.min.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{asset('fe2/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- count down -->
	<script src="{{asset('fe2/js/jquery.countdown.js')}}"></script>
	<!-- isotope -->
	<script src="{{asset('fe2/js/jquery.isotope-3.0.6.min.js')}}"></script>
	<!-- waypoints -->
	<script src="{{asset('fe2/js/waypoints.js')}}"></script>
	<!-- owl carousel -->
	<script src="{{asset('fe2/js/owl.carousel.min.js')}}"></script>
	<!-- magnific popup -->
	<script src="{{asset('fe2/js/jquery.magnific-popup.min.js')}}"></script>
	<!-- mean menu -->
	<script src="{{asset('fe2/js/jquery.meanmenu.min.js')}}"></script>
	<!-- sticker js -->
	<script src="{{asset('fe2/js/sticker.js')}}"></script>
	<!-- main js -->
	<script src="{{asset('fe2/js/main.js')}}"></script>
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="fe/js/isotope.min.js"></script>
	<script src="fe/js/owl-carousel.js"></script>
	<script src="fe/js/counter.js"></script>
	<script src="fe/js/custom.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

	

</body>
</html>