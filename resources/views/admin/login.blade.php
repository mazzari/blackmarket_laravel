<!DOCTYPE html>
<html lang="en">
<head>
	<!-- login_blackmarket -->
	<title>Login Admin blackmarket</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href={{asset('images/icons/favicon.ico') }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset('vendor/bootstrap/css/bootstrap.min.css') }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset('vendor/animate/animate.css') }}>
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href={{asset('vendor/css-hamburgers/hamburgers.min.css') }}> 
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset('vendor/select2/select2.min.css') }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset('css/util.css') }}>
	<link rel="stylesheet" type="text/css" href={{asset('css/main.css') }}>
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-color: grey;">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form" method="POST" action="{{url('login/admin')}}">
					<div class="login100-form-avatar">
						<img src="images/avatar-01.jpg" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						Login Admin
					</span>'
					@csrf'

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="email" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>
					@if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::has('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>
                    @endif
					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->	
	<script src={{asset('jquery/jquery-3.2.1.min.js') }}></script>
<!--===============================================================================================-->
	<script src={{asset('bootstrap/js/popper.js') }}></script>
	<script src={{asset('bootstrap/js/bootstrap.min.js') }}></script>
<!--===============================================================================================-->
	<script src={{asset('select2/select2.min.js') }}></script>
<!--===============================================================================================-->
	<script src={{asset('js/main.js') }}></script>
	
<script>
	const HandleLogin = () =>{
		sessionStorage.setItem("isLogin",true)
	}
</script>
</body>
</html>