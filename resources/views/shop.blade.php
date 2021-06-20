<!DOCTYPE html>
<html>
<head>
	<title>blackmarket.jkt</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="">
<link href= {{ asset('css/bootstrap.min.css') }} rel="stylesheet">
<link href= "https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href= {{ asset('css/style.css') }} rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">
</head>
<body>

<!-- HEADER =============================-->
<header class="item header margin-top-0">
<div class="wrapper">
	@extends('navbar')
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-pageheader">
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.1s">
						 Shop
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header>

<!-- CONTENT =============================-->
<section class="item content">
<div class="container toparea">
	<div class="underlined-title">
		<div class="editContent">
			<h1 class="text-center latestitems">Happy Shoping</h1>
		</div>
		<div class="wow-hr type_short">
			<span class="wow-hr-h">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			</span>
		</div>
	</div>
	<div class="row">
	
		<!-- /.productbox -->
	@foreach ($barangs  as $barang)
	<div class="col-md-4">
		<div class="productbox">
			<div class="fadeshop">
				<div class="captionshop text-center" style="display: none;">
					<h3><a href="{{url('detailorder')}}/{{$barang->id}}" style="color:white;">{{$barang->nama}} </a></h3>
					<p>
						{{$barang->detail}}
					</p>
					<p>
						<a href="{{url('chekout')}}/{{$barang->id}}" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
						<a href="{{url('detailorder')}}/{{$barang->id}}" class="learn-more detailslearn"><span class="material-icons" style=": 0">shopping_cart</span></a>
					</p>
				</div>
				<span class="maxproduct"><img src="{{$barang->photo}}" alt="images/jaket/jaketIjo1.jpg"></span>
			</div>
			<div class="product-details">
				<a href="#">
				<h1>{{$barang->merk}}</h1>
				</a>IDR
				<span class="price">
				<span class="edd_price">{{$barang->harga}}</span>
				</span>
			</div>
		</div>
	</div>
	@endforeach
			
		</div>
	</div>
	</div>
	</section>
	

<!-- FOOTER =============================-->
<div class="footer text-center">
	<div class="container">
		<div class="row">
			<p class="footernote">
				 Connect with blackmarket
			</p>
			<ul class="social-iconsfooter">
				<li><a href="#"><i class="fa fa-phone"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
			</ul>
			<p>
				Copyright &copy; 2021 blackmarket<br/>
				
			</p>
		</div>
	</div>
</div>

<!-- Load JS here for greater good =============================-->
<script src={{asset('js/jquery-.js') }}></script>
<script src={{asset('js/bootstrap.min.js') }}></script>
<script src={{asset('js/anim.js') }}></script>
<script>
//----HOVER CAPTION---//	  
jQuery(document).ready(function ($) {
	$('.fadeshop').hover(
		function(){
			$(this).find('.captionshop').fadeIn(150);
		},
		function(){
			$(this).find('.captionshop').fadeOut(150);
		}
	);
});
</script>
</body>
</html>