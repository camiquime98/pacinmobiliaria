@extends('layouts.header.navbarinicio')
@section('content')
@livewire("buscador-usuarios")

<div class="container" id="inmuebles">
	<div class="row">
		@foreach($inmuebles as $inmueble) 
	  <div class="col-md-3 col-sm-12">
		<div class="product-men">
				
		  <div class="men-pro-item simpleCart_shelfItem">

			<div class="men-thumb-item">
				  <img src="assets/images/a8.png" alt="" class="pro-image-front">
				  <img src="assets/images/a8.png" alt="" class="pro-image-back">
					  <div class="men-cart-pro">
						  <div class="inner-men-cart-pro">
							  <a href="{{ route('inmuebles.show', $inmueble->id) }}" class="link-product-add-cart">{{ $inmueble->zona }}</a>
						  </div>
					  </div>
					  <span class="product-new-top">1+1 Offer</span>

			  </div>
			  <div class="item-info-product ">
				  <h4><a href="single.html">Next Blue Blazer</a></h4>
				  <div class="info-product-price">

					  <span class="item_price">${{ $inmueble->valor }}</span>
					  <del>$520.000</del>

				  </div>
				  <a href="{{ route('inmuebles.show', $inmueble->id) }}" class="item_add single-item hvr-outline-out button2"> Ver mas </a>									
			  </div>
		  </div>
		  
	  </div>
	  </div>
	  @endforeach
	</div>

  </div>


<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-left">
			<h2><a href="index.html"><img src="images/logo3.jpg" alt=" " /></a></h2>
			<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur, adipisci velit, sed quia non 
			numquam eius modi tempora incidunt ut labore 
			et dolore magnam aliquam quaerat voluptatem.</p>
		</div>
		<div class="col-md-9 footer-right">
			<div class="col-sm-6 newsleft">
				<h3>SIGN UP FOR NEWSLETTER !</h3>
			</div>
			<div class="col-sm-6 newsright">
				<form>
					<input type="text"  >
					<input type="submit" value="Submit">
				</form>
			</div>
			<div class="clearfix"></div>
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Information</h4>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="mens.html">Men's Wear</a></li>
						<li><a href="womens.html">Women's Wear</a></li>
						<li><a href="electronics.html">Electronics</a></li>
						<li><a href="codes.html">Short Codes</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				
				<div class="col-md-4 sign-gd-two">
					<h4>Store Information</h4>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : 1234k Avenue, 4th block, <span>Newyork City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:info@example.com">info@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : +1234 567 567</li>
					</ul>
				</div>
				<div class="col-md-4 sign-gd flickr-post">
					<h4>Flickr Posts</h4>
					<ul>
						<li><a href="single.html"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b16.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b17.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b18.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b16.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b17.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b18.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">&copy 2016 Smart Shop. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
	</div>
</div> 
<script src="js/busquedacontroller.js"></script>

@endsection
