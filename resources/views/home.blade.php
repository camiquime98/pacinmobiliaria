@extends('layouts.app')
@section('content')
<div class="page-head">
    <div class="container">
     
        <div class="row height d-flex justify-content-center align-items-center" style="color: #fff">
               <h3 class="titulo-s" style="color:#fff; font-weight: 800;text-transform: none; font-size:35px;">Busca tu inmueble</h3>
            <div class="col-md-10 d-flex justify-content-center">
				<ul id="myTab" class="nav nav-tabs" role="tablist">
			<li role="presentation" class="btn btn-primary" >
					  <a href="#" id="myTabDrop1" class="btn btn-primary" style="background-color: #0d6efd; color:#fff" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">¿Qué buscar? <span class="caret"></span></a>
					  <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
						<li><a   id="dropdown1-tab"   onclick="casa()">Casa</a></li>
						<li><a  role="tab" id="dropdown2-tab" data-toggle="tab"  onclick="apartamento()">Apartamento</a></li>
						<li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown3-tab" data-toggle="tab" aria-controls="dropdown2" onclick="casacampestre()">Casa campestre</a></li>
						<li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown4-tab" data-toggle="tab" aria-controls="dropdown2" onclick="terreno()">Terreno</a></li>
						<li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown5-tab" data-toggle="tab" aria-controls="dropdown2" onclick="bodega()">Bodega</a></li>
						<li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown6-tab" data-toggle="tab" aria-controls="dropdown2" onclick="apartaestudio()">Apartaestudio</a></li>
						<li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown7-tab" data-toggle="tab" aria-controls="dropdown2" onclick="casalote()">casa lote</a></li>

					  </ul>
					</li>
				  </ul> 
				  <input type="number" value="0" id="casa" name="casa" class="hidden">
				  <input type="number" value="0" id="apartamento" name="apartamento" class="hidden">
				  <input type="number" value="0" id="casacampestre" name="casacampestre" class="hidden">
				  <input type="number" value="0" id="terreno" name="terreno" class="hidden">
				  <input type="number" value="0" id="bodega" name="bodega" class="hidden">
				  <input type="number" value="0" id="apartaestudio" name="apartaestudio" class="hidden">
				  <input type="number" value="0" id="casalote" name="casalote" class="hidden">
                <div class="search"> <i class="fa fa-search"></i> <input type="text" class="form-control" placeholder="Ciudad"> <button class="btn btn-primary">Buscar</button> </div>
			
            </div>
			Selecciona el tipo de inmueble e ingresa la ciudad
        </div>
    </div>
    
</div>
<div class="product-easy">
	<div class="container-fluid">
		
		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true   // 100% fit in a container
								});
							});
							
		</script>
		<div class="sap_tabs">
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>En venta</span></li> 
					<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>En renta</span></li> 
					
				</ul>	

                
            <div class="container">
                <div class="row">
                  
                  <div class="col-md-3 col-sm-12">
                    <div class="product-men">
						@foreach($inmuebles as $inmueble) 	
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
                              <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
                          </div>
                      </div>
					  @endforeach
                  </div>
                  </div>
                </div>
                
              </div>
						  	 
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
						<div id="resultados" class="bg-light border"></div>
							<div class="col-8" id="contenedor">
								
							</div>
							<div id="cargando"><h1></h1>
						<div class="row">	
							
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/test.jpg" alt="" class="pro-image-front">
									<img src="images/test2.jpg" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">{{ __('Condo') }}</a></h4>
									<div class="info-product-price">
										<span class="item_price">$45.99</span>
										
									</div>
																		
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/test2.jpg" alt="" class="pro-image-front">
									<img src="images/test3.jpg" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">1+1 Offer</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">{{ __('Familiar home') }}</a></h4>
									<div class="info-product-price">
										<span class="item_price">$99.99</span>
										
									</div>
																		
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/test4.jpg" alt="" class="pro-image-front">
									<img src="images/test3.jpg" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><i class="bi bi-house"></i><a href="single.html">{{ __('Familiar home') }}</a></h4>
									<div class="info-product-price">
										<span class="item_price">$119.99</span>
									
									</div>
																		
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/test3.jpg" alt="" class="pro-image-front">
									<img src="images/test4.jpg" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">{{ __('Ready to sell') }}</a></h4>
									<div class="info-product-price">
										<span class="item_price">$79.99</span>
										
									</div>
																		
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/test4.jpg" alt="" class="pro-image-front">
									<img src="images/test2.jpg" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">Combo Pack</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">{{ __('Ready to sell') }}</a></h4>
									<div class="info-product-price">
										<span class="item_price">$129.99</span>
										
									</div>
																		
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/test2.jpg" alt="" class="pro-image-front">
									<img src="images/test3.jpg" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">{{ __('Ready to sell') }}</a></h4>
									<div class="info-product-price">
										<span class="item_price">$129.99</span>
										
									</div>
																		
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/test.jpg" alt="" class="pro-image-front">
									<img src="images/test2.jpg" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">{{ __('Ready to sell') }}</a></h4>
									<div class="info-product-price">
										<span class="item_price">$129.99</span>
										
									</div>
																	
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/test4.jpg" alt="" class="pro-image-front">
									<img src="images/test3.jpg" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">{{ __('Ready to sell') }}</a></h4>
									<div class="info-product-price">
										<span class="item_price">$129.99</span>
									
									</div>
																		
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/test3.jpg" alt="" class="pro-image-front">
									<img src="images/test4.jpg" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">{{ __('Ready to sell') }}</a></h4>
									<div class="info-product-price">
										<span class="item_price">$45.99</span>
										
									</div>
																		
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/test3.jpg" alt="" class="pro-image-front">
									<img src="images/test2.jpg" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">{{ __('Ready to sell') }}</a></h4>
									<div class="info-product-price">
										<span class="item_price">$45.99</span>
										
									</div>
																		
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/test4.jpg" alt="" class="pro-image-front">
									<img src="images/test.jpg" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">{{ __('Ready to sell') }}</a></h4>
									<div class="info-product-price">
										<span class="item_price">$45.99</span>
									
									</div>
																	
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/test2.jpg" alt="" class="pro-image-front">
									<img src="images/test3.jpg" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">{{ __('Ready to sell') }}</a></h4>
									<div class="info-product-price">
										<span class="item_price">$45.99</span>
										
									</div>
																	
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/w1.png" alt="" class="pro-image-front">
									<img src="images/w1.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">{{ __('Ready to sell') }}</a></h4>
									<div class="info-product-price">
										<span class="item_price">$45.99</span>
										
									</div>
																		
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/w2.png" alt="" class="pro-image-front">
									<img src="images/w2.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">{{ __('Ready to sell') }}</a></h4>
									<div class="info-product-price">
										<span class="item_price">$45.99</span>
									
									</div>
																		
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/mw1.png" alt="" class="pro-image-front">
									<img src="images/mw1.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">{{ __('Ready to sell') }}</a></h4>
									<div class="info-product-price">
										<span class="item_price">$45.99</span>
									
									</div>
																		
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/mw3.png" alt="" class="pro-image-front">
									<img src="images/mw3.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4>{{ __('Ready to sell') }}</h4>
									<div class="info-product-price">
										<span class="item_price">$45.99</span>
										
									</div>
																		
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/ep2.png" alt="" class="pro-image-front">
									<img src="images/ep2.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$45.99</span>
										
									</div>
																		
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/ep3.png" alt="" class="pro-image-front">
									<img src="images/ep3.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Watches</a></h4>
									<div class="info-product-price">
										<span class="item_price">$45.99</span>
									
									</div>
																	
								</div>
							</div>
						</div>
						
						<div class="clearfix"></div>						
					</div>
						
				</div>	
			</div>
		</div>
	</div>
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
					<input type="text"  id="search"   required="">
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

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="col-md-6 p-2">
                    <a href="{{ route('inmuebles.index') }}" class="btn col-md-12 btn-warning"><i class="material-icons">Inmuebles</i></a>
                  </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection --}}
