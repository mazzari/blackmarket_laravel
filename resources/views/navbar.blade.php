<!DOCTYPE html>
<html>
<head>
	<title>blackmarket.jkt</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">
	<link href={{asset('css/bootstrap.min.css') }} rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link href={{asset('./css/style.css') }} rel="stylesheet" type="text/css">
</head>
<body>

<!-- HEADER =============================-->
<header class="item header margin-top-0">
<div class="wrapper">
	<nav role="navigation" class="navbar navbar-white navbar-embossed navbar-lg navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
			<i class="fa fa-bars"></i>
			<span class="sr-only">Toggle navigation</span>
			</button>
			<a href="{{url('home') }}" class="navbar-brand brand"> blackmarket.jkt </a>
		</div>
		<div id="navbar-collapse-02" class="collapse navbar-collapse">
		<ul class="nav navbar-nav navbar-right">
				<li class="propClone"><a href="{{url('home') }}">Home</a></li>
				<li class="propClone"><a href="{{url('shop')}}">Shop</a></li>
				<li class="propClone"><a href="{{url('contact')}}">Contact</a></li>
				<li class="propClone"><a href=""><span class="material-icons">shopping_cart
				</span></a></li>
				@if(session()->get('email'))
				<li style="padding: 25px"><span style="font-size: 12pt; margin-top:20px; color:orange" href="{{url('login')}}">  {{ Session::get('email')[0]}}</span></li>					

				<li class="propClone"><a href="{{url('logout')}}">logout</a></li>
				@else
				<li class="propClone"><a href="{{url('login')}}">Login</a></li>
				<li class="propClone"><a href="{{url('register')}}">Register</a></li>
				@endif
			
			</ul>
		</div>
	</div>
	</nav>
