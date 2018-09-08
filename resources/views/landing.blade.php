<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<html lang="en">
<head>
	<meta charset="utf-8" />
    <title>Welcome to E-Prop - IBI DARMAJAYA</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="landing/plugins/bootstrap3/css/bootstrap.min.css" rel="stylesheet" />
	<link href="landing/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="landing/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="landing/css/one-page-parallax/style.css" rel="stylesheet" />
	<link href="landing/css/one-page-parallax/style-responsive.min.css" rel="stylesheet" />
	<link href="landing/css/one-page-parallax/theme/default.css" id="theme" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="landing/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body data-spy="scroll" data-target="#header-navbar" data-offset="51">
    <!-- begin #page-container -->
    <div id="page-container" class="fade">
        <!-- begin #header -->
        <div id="header" class="header navbar navbar-inverse navbar-fixed-top">
            <!-- begin container -->
            <div class="container">
                <!-- begin navbar-header -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="" class="navbar-brand">
                        <span class="brand-logo"></span>
                        <span class="brand-text">
                            <span class="text-theme">E-Prop</span>
                        </span>
                    </a>
                </div>
                <!-- end navbar-header -->
                <!-- begin navbar-collapse -->
                <div class="collapse navbar-collapse" id="header-navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="" data-click="scroll-to-target">Dasboard</a></li>
                        <li class="active dropdown">
                            <a href="" data-click="scroll-to-target" data-toggle="dropdown">UKM Darmajaya
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-left animated fadeInDown">
                                <li>
                                    <a href=" {{route('bahasa.login')}} ">UKM Bahasa</a>
                                </li>
                                <li>
                                    <a href="{{route('dcfc.login')}}">UKM DCFC</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- end navbar-collapse -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #header -->
        
        <!-- begin #home -->
        <div id="home" class="content has-bg home">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="landing/img/bg/bg.jpg" width="1863px" height="650px" alt="Home" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container home-content">
                <h1>Welcome to E-Prop</h1>
                <h3>Sistem Pengajuan Proposal Unit Kegiatan Mahasiswa Berbasis Digital</h3>
                <h5>
                    Kini mengajukan proposal untuk kegiatan UKM sangat mudah dan cepat dengan bantuan sistem
                    pengelolaan pengajuan ini atau E-Prop. <br> Dengan interface yang mudah dan simple serta kemudahan
                    dalam pengoprasian berbasis Website.
                </h5>
                <a href="#" class="btn btn-theme">Pelajari Lebih Lanjut</a> <br />
                <br />
               
            </div>
            <!-- end container -->
        </div>
        <!-- end #home -->

        
        <!-- begin #footer -->
        {{-- <div id="footer" class="footer">
            <div class="container">
                <div class="footer-brand">
                    <div class="footer-brand-logo"></div>
                    E-Prop Darmajaya
                </div>
                <p>
                    &copy; Copyright  E-Prop Darmajaya 2018 <br />
                    
                </p>
                <p class="social-list">
                    <a href="#"><i class="fa fa-facebook fa-fw"></i></a>
                    <a href="#"><i class="fa fa-instagram fa-fw"></i></a>
                    <a href="#"><i class="fa fa-twitter fa-fw"></i></a>
                    <a href="#"><i class="fa fa-google-plus fa-fw"></i></a>
                    <a href="#"><i class="fa fa-dribbble fa-fw"></i></a>
                </p>
            </div>
        </div> --}}
        <!-- end #footer -->
    </div>
    <!-- end #page-container -->
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="landing/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="landing/plugins/bootstrap3/js/bootstrap.min.js"></script>
	<script src="landing/plugins/js-cookie/js.cookie.js"></script>
	<script src="landing/plugins/scrollMonitor/scrollMonitor.js"></script>
	<script src="landing/js/one-page-parallax/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	<script>    
	    $(document).ready(function() {
	        App.init();
	    });
	</script>
</body>
</html>
