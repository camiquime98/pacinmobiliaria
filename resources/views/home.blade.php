@extends('layouts.app')
@section('content')
@livewire("buscador-usuarios")

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
						  	 
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
						<div id="resultados" class="bg-light border"></div>
							<div class="col-8" id="contenedor">
								
							</div>
							<div class="" id="result"></div>
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

<script src="js/busquedacontroller.js"></script>
@endsection
