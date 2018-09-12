<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign in UKM PSDJ</title>
	
	<link rel="icon" sizes="192x192" href="{{asset('asset/img/touch-icon.png')}}" /> 
	<link rel="apple-touch-icon" href="img/touch-icon-iphone.png" /> 
	<link rel="apple-touch-icon" sizes="76x76" href="img/touch-icon-ipad.png" /> 
	<link rel="apple-touch-icon" sizes="120x120" href="img/touch-icon-iphone-retina.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="img/touch-icon-ipad-retina.png" />
	
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />

	<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/main.min.css')}}">
	
	<!-- Pixeden Icon Fonts -->
	<link rel="stylesheet" type="text/css" href="{{asset('asset/css/pe-icon-7-filled.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('asset/css/pe-icon-7-stroke.css')}}">
</head>
<body>

					
    <div class="col-md-4  col-md-offset-4">
        <article class="widget widget__login">
            <header class="widget__header one-btn">
                <div class="widget__title">
                    <div class="main-logo"><img src="{{asset('asset/img/logo.png')}}"></div> Sign in PSDJ
                </div>
                <div class="widget__config">
                    <a href="#" onclick="window.location.href = '{{url('')}}'"><i class="pe-7s-help1"></i></a>
                </div>
            </header>
            <form class="form-horizontal" method="POST" action="{{ route('psdj.submit.login') }}">
                {{ csrf_field() }}
            <div class="widget__content">
                <input type="text" name="email" placeholder="E-mail" value="{{ old('email') }}" required autofocus>
                <input type="password" name="password" placeholder="Password" value="{{ old('password') }}" required autofocus>
                <button type="submit">Sign in</button>
            </div>
            </form>
            <div class="login__remember text-center">
                <input type="checkbox" class="custom-checkbox" id="cc1" checked>
                <label for="cc1"></label>
                Remember me
            </div>
        </article><!-- /widget -->
    </div>
				

</body>
</html>