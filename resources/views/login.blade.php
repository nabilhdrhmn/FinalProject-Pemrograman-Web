<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Login | Siap Sekolah</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
    <link href="{{url('home/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<!--===============================================================================================-->
    <link href="{{url('home/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/home/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('/home/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                        @csrf
					<span class="login100-form-title p-b-55">
						<img src="{{url('/home/img/logo-black.png')}}" style="width: 250px;height: 250px;">
						<br>
						<br>
						Admin Login
					</span>

					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="text" name="email" placeholder="Username">
					</div>

					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="password" name="password" placeholder="Password">
					</div>

					<div class="container-login100-form-btn p-t-25">
						<button class="login100-form-btn">
                            {{ __('Login') }}
						</button>
					</div>
					<div class="container-login100-form-btn p-t-25" >
						<a style="color: white;" class="login100-form-btn" href="{{url('/')}}">Home Page</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>