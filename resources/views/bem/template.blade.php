<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	
	<link rel="icon" sizes="192x192" href="{{asset('asset/img/touch-icon.png')}}" /> 
	<link rel="apple-touch-icon" href="{{asset('asset/img/touch-icon-iphone.png')}}" /> 
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('asset/img/touch-icon-ipad.png')}}" /> 
	<link rel="apple-touch-icon" sizes="120x120" href="{{asset('asset/img/touch-icon-iphone-retina.png')}}" />
	<link rel="apple-touch-icon" sizes="152x152" href="{{asset('asset/img/touch-icon-ipad-retina.png')}}" />
	
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('asset/img/favicon.ico')}}" />

	<link rel="stylesheet" type="text/css" href="{{asset ('asset/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('asset/css/main.css')}}">
	
	<!-- Pixeden Icon Fonts -->
	<link rel="stylesheet" type="text/css" href="{{asset('asset/css/pe-icon-7-filled.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('asset/css/pe-icon-7-stroke.css')}}">
</head>
<body class="">
	<div id="loading">
		<div class="loader loader-light loader-large"></div>
	</div>
	<!-- Top bar -->
		<header class="top-bar">
		
		<ul class="profile"> 
			<li>
			<img src="{{asset('landing/img/logo.png')}}" width="120px" height="70px">
			</li>
			<li>
				<a href="{{ route('logout') }}"
					onclick="event.preventDefault();
					document.getElementById('logout-form').submit();" onclick="return true;" class="btn-circle btn-sm">
					<i class="pe-7f-power"></i>
				</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					{{ csrf_field() }}
				</form>
			</li>
		</ul>

		<div class="main-search">
			<input type="text" placeholder="Search ..." id="msearch">
			<label for="msearch">
				<i class="pe-7s-search"></i>
			</label>
			
		</div> 
		
		<div class="main-brand">
			<div class="main-brand__container">
				<div class="main-logo"><img src="{{asset('asset/img/logodj.png')}}"></div>
			</div>
		</div>
		
	</header>
	<!-- /top-bar -->


	<div class="wrapper">

		<aside class="sidebar">
			
			<div class="user-info">
					<figure class="rounded-image profile__img">
						<img class="media-object" src="{{asset('asset/img/logoUkm/darmajaya.png')}}" width="120px" height="120px">
					</figure>
					<h2 class="user-info__name">{{Auth::user()->name}}</h2>
					<h3 class="user-info__role">Admin</h3>
					<ul class="user-info__numbers">
						
					</ul>
			</div> <!-- /user-info -->

			<ul class="main-nav">
				<li class="main-nav--active">
						<a class="main-nav__link" href="{{route('bem.home')}}">
							<span class="main-nav__icon"><i class="pe-7f-home"></i></span>
							Dashboard
						</a>
					</li>
					
					<li class="main-nav--collapsible">
						<a class="main-nav__link" href="#" onclick="return false;">
							<span class="main-nav__icon"><i class="pe-7f-bookmarks"></i></span>
							UKM Darmajaya <span class="badge badge--line badge--blue">4</span>
						</a>
						<ul class="main-nav__submenu">
							<li ><a href=" {{url('bem/bahasa')}} "><span>UKM Bahasa</span></a></li>
							<li ><a href=" {{route('bem.dcfc.index')}} "><span>UKM Dcfc</span></a></li>
							<li ><a href=" {{route('bem.musik.index')}} "><span>UKM Musik</span></a></li>
							<li ><a href=" {{route('bem.psdj.index')}} "><span>UKM Psdj</span></a></li>
						</ul>
					</li>
					<li class="main-nav--collapsible">
						<a class="main-nav__link" href="#" onclick="return false;">
							<span class="main-nav__icon"><i class="pe-7f-disk"></i></span>
							Arsip Proposal <span class="badge badge--line badge--blue">4</span>
						</a>
						<ul class="main-nav__submenu">
							<li><a href=" {{route('bem.Bahasa.arsipBhs')}} "><span>Arsip Bahasa</span></a></li>
							<li><a href=" {{route('bem.dcfc.arsipDcfc')}} "><span>Arsip Dcfc</span></a> </li>
							<li><a href=" {{route('bem.musik.arsipMusik')}} "><span>Arsip Musik</span></a></li>
							<li><a href=" {{route('bem.psdj.arsipPsdj')}} "><span>Arsip Psdj</span></a></li>
						</ul>
					</li>
					
					{{-- <li>
						<a class="main-nav__link" href="tables.html">
							<span class="main-nav__icon"><i class="pe-7f-folder"></i></span>
							Galery
						</a>
					</li> --}}
			</ul> <!-- /main-nav -->
			
		</aside> <!-- /sidebar -->
		
		<section class="content">
			<header class="main-header">
				@yield('header')
			</header> <!-- /main-header -->

				<div class="row">
                    @yield('isi')
				</div> <!-- /row -->

			<footer class="footer-brand">
				<img src="{{asset('landing/img/logo.png')}}" width="120px" height="50px">
			</footer>
		</section> <!-- /content -->

	</div>
	<script type="text/javascript" src="{{asset('asset/js/main.js')}}"></script>
	<script type="text/javascript" src="{{asset('asset/js/amcharts/amcharts.js')}}"></script>
	<script type="text/javascript" src="{{asset('asset/js/amcharts/serial.js')}}"></script>
	<script type="text/javascript" src="{{asset('asset/js/amcharts/pie.js')}}"></script>
	<script type="text/javascript" src="{{asset('asset/js/chart.js')}}"></script>
</body>
</html>