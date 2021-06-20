

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Product Detail</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	<link href="{{asset('css/detailorder.css')}}" rel="stylesheet">
  </head>

  <body>
	@extends('navbar')
	<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="{{$barang->photo}}" alt="images/jaket/jaketIjo1.jpg"/></div>
						
						</div>
					
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">{{$barang->nama}}</h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div>
						<p class="product-description">{{$barang->detail}}</p>
						<h4 class="price">current price: <span>{{$barang->harga}}</span></h4>
						<p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
						
						</h5>
						<h5 class="colors">colors:
							<span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
							<span class="color green"></span>
							<span class="color blue"></span>
						</h5>
						<div class="action">
							<a href="{{url('checkout')}}/{{$barang->id}}" class="add-to-cart btn btn-default" type="button">Purchase</a>
							<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
							<a href="{{url('shop')}}" class="add-to-cart btn btn-default" type="button">Back</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  </body>
</html>