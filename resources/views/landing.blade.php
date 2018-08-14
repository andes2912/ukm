<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Color Admin | One Page Parallax Front End Theme</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="landing/plugins/bootstrap3/css/bootstrap.min.css" rel="stylesheet" />
	<link href="landing/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="landing/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="landing/css/one-page-parallax/style.min.css" rel="stylesheet" />
	<link href="landing/css/one-page-parallax/style-responsive.min.css" rel="stylesheet" />
	<link href="landing/css/one-page-parallax/theme/default.css" id="theme" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../landing/plugins/pace/pace.min.js"></script>
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
                    <a href="index.html" class="navbar-brand">
                        <span class="brand-logo"></span>
                        <span class="brand-text">
                            <span class="text-theme">Color</span> Admin
                        </span>
                    </a>
                </div>
                <!-- end navbar-header -->
                <!-- begin navbar-collapse -->
                <div class="collapse navbar-collapse" id="header-navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#contact" data-click="scroll-to-target">Dasboard</a></li>
                        <li><a href="#contact" data-click="scroll-to-target">Blog</a></li>
                        <li class="active dropdown">
                            <a href="#home" data-click="scroll-to-target" data-target="#" data-toggle="dropdown">Login
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-left animated fadeInDown">
                                <li>
                                    <a href=" {{route('bahasa.login')}} ">UKM Bahasa</a>
                                </li>
                                <li>
                                    <a href="{{route('dcfc.login')}}">UKM DCFC</a>
                                </li>
                                <li>
                                    <a href="">UKM Assalam</a>
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
                <img src="landing/img/bg/bg-home.jpg" alt="Home" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container home-content">
                <h1>Welcome to Color Admin</h1>
                <h3>Multipurpose One Page Theme</h3>
                <p>
                    We have created a multi-purpose theme that take the form of One-Page or Multi-Page Version.<br />
                    Use our <a href="#">theme panel</a> to select your favorite theme color.
                </p>
                <a href="#" class="btn btn-theme">Explore More</a> <a href="#" class="btn btn-outline">Purchase Now</a><br />
                <br />
                or <a href="#">subscribe</a> newsletter
            </div>
            <!-- end container -->
        </div>
        <!-- end #home -->

        
        <!-- begin #footer -->
        <div id="footer" class="footer">
            <div class="container">
                <div class="footer-brand">
                    <div class="footer-brand-logo"></div>
                    Color Admin
                </div>
                <p>
                    &copy; Copyright Color Admin 2014 <br />
                    An admin & front end theme with serious impact. Created by <a href="#">SeanTheme</a>
                </p>
                <p class="social-list">
                    <a href="#"><i class="fa fa-facebook fa-fw"></i></a>
                    <a href="#"><i class="fa fa-instagram fa-fw"></i></a>
                    <a href="#"><i class="fa fa-twitter fa-fw"></i></a>
                    <a href="#"><i class="fa fa-google-plus fa-fw"></i></a>
                    <a href="#"><i class="fa fa-dribbble fa-fw"></i></a>
                </p>
            </div>
        </div>
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
