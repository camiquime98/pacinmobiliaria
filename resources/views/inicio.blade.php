<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Smart Shop a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
                function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
        <!-- pignose css -->
        <link href="{{ asset('assets/css/pignose.layerslider.css') }}" rel="stylesheet" type="text/css" media="all" />

        
        <!-- //pignose css -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" media="all">
        
        <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>

        
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- cart -->
	    <script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
	    <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

        <script src="js/jquery.easing.min.js"></script>
    </head>






    <body class="antialiased">
            <!-- header -->
            
            <!-- //header -->
            <!-- header-bot -->
            {{-- <div class="header-bot">
                <div class="container">
                    <div class="col-md-3 header-left">
                        <h1><a href="index.html"><img src="assets/images/logo.png" style="max-height: 100px; max-width: 100px"></a></h1>
                    </div>
                    <div class="col-md-6 header-middle">
                    
                        <form>
                            <div class="search">
                                <input type="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Lugar';}" required="">
                            </div>
                            <div class="section_room">
                                <select id="country" onchange="change_country(this.value)" class="frm-field required">
                                    <option value="null">Categoria</option>
                                    <option value="null">Electronics</option>     
                                    <option value="AX">kids Wear</option>
                                    <option value="AX">Men's Wear</option>
                                    <option value="AX">Women's Wear</option>
                                    <option value="AX">Watches</option>
                                </select>
                            </div>
                            <div class="sear-sub">
                                <input type="submit" value=" ">
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                    <div class="col-md-3 header-right footer-bottom">
                        <ul>
                            <li><a href="#" class="use1" data-toggle="modal" data-target="#myModal4"><span>Login</span></a>
                                
                            </li>
                            <li><a class="fb" href="#"></a></li>
                            <li><a class="twi" href="#"></a></li>
                            <li><a class="insta" href="#"></a></li>
                            <li><a class="you" href="#"></a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div> --}}
            <!-- //header-bot -->
            <!-- banner -->
            <div class="ban-top">
                <div class="container">
                    <div class="top_nav_left">
                        <nav class="navbar navbar-default">
                          <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                              <ul class="nav navbar-nav menu__list">
                                <li class="active menu__item menu__item--current"><a class="menu__link" href="{{ url('/') }}">INICIO <span class="sr-only">(current)</span></a></li>
                                <li class="dropdown menu__item">
                                    <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">nuestra empresa <span class="caret"></span></a>
                                        <ul class="dropdown-menu multi-column columns-3">
                                            <div class="row">

                                                <div class="col-sm-3 multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <li><a href="mens.html">Equipo</a></li>
                                                        <li><a href="mens.html">Empresa</a></li>
                                                        <li><a href="mens.html">Servicios</a></li>
                                                    </ul>
                                                </div>
                                                {{-- <div class="col-sm-3 multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <li><a href="mens.html">Jewellery</a></li>
                                                        <li><a href="mens.html">Sunglasses</a></li>
                                                        <li><a href="mens.html">Perfumes</a></li>
                                                        <li><a href="mens.html">Beauty</a></li>
                                                        <li><a href="mens.html">Shirts</a></li>
                                                        <li><a href="mens.html">Sunglasses</a></li>
                                                        <li><a href="mens.html">Swimwear</a></li>
                                                    </ul>
                                                </div> --}}
                                                <div class="clearfix"></div>
                                            </div>
                                        </ul>
                                </li>
                                <li class="dropdown menu__item">
                                    <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">proyectos <span class="caret"></span></a>
                                        <ul class="dropdown-menu multi-column columns-3">
                                            <div class="row">
                                                <div class="col-sm-3 multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <li><a href="womens.html">Clothing</a></li>
                                                        <li><a href="womens.html">Wallets</a></li>
                                                        <li><a href="womens.html">Footwear</a></li>
                                                        <li><a href="womens.html">Watches</a></li>
                                                        <li><a href="womens.html">Accessories</a></li>
                                                        <li><a href="womens.html">Bags</a></li>
                                                        <li><a href="womens.html">Caps & Hats</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3 multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <li><a href="womens.html">Jewellery</a></li>
                                                        <li><a href="womens.html">Sunglasses</a></li>
                                                        <li><a href="womens.html">Perfumes</a></li>
                                                        <li><a href="womens.html">Beauty</a></li>
                                                        <li><a href="womens.html">Shirts</a></li>
                                                        <li><a href="womens.html">Sunglasses</a></li>
                                                        <li><a href="womens.html">Swimwear</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6 multi-gd-img multi-gd-text ">
                                                    <a href="womens.html"><img src="assets/images/woo.jpg" alt=" "/></a>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </ul>
                                </li>
                                {{-- <li class=" menu__item"><a class="menu__link" href="electronics.html">Electronics</a></li>
                                <li class=" menu__item"><a class="menu__link" href="codes.html">Short Codes</a></li> --}}
                                
                                    <li class="menu__item">
                                        <a class="menu__link" href="">Contactanos</a>
                                    </li>

                                <li class=" menu__item"><a class="menu__link" href="#" class="use1" data-toggle="modal" data-target="#myModal4">ingreso</a></li>
                               
                              </ul>
                            </div>
                          </div>
                        </nav>	
                    </div>
                    <div class="top_nav_right">
                        <div class="cart box_1">
                                    <a href="checkout.html">
                                        
                                    </a>
                                    <p><a href="#"  data-toggle="modal" data-target="#myModal4" class="simpleCart_empty">¡GENERA TU CONTRATO YA!</a></p>
                                    
                        </div>	
                    </div>
                    
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- //banner-top -->
            <!-- banner -->
            <div class="banner-grid">
                <div id="visual">
                        <div class="slide-visual">
                            <!-- Slide Image Area (1000 x 424) -->
                            <ul class="slide-group">
                                <li><img class="img-responsive" src="assets/images/ba1.jpg" alt="Dummy Image" /></li>
                                <li><img class="img-responsive" src="assets/images/ba2.jpg" alt="Dummy Image" /></li>
                                <li><img class="img-responsive" src="assets/images/ba3.jpg" alt="Dummy Image" /></li>
                            </ul>
            
                            <!-- Slide Description Image Area (316 x 328) -->
                            <div class="script-wrap">
                                <ul class="script-group">
                                    <li><div class="inner-script"><img class="img-responsive" src="assets/images/baa1.jpg" alt="Dummy Image" /></div></li>
                                    <li><div class="inner-script"><img class="img-responsive" src="assets/images/baa2.jpg" alt="Dummy Image" /></div></li>
                                    <li><div class="inner-script"><img class="img-responsive" src="assets/images/baa3.jpg" alt="Dummy Image" /></div></li>
                                </ul>
                                <div class="slide-controller">
                                    <a href="#" class="btn-prev"><img src="assets/images/btn_prev.png" alt="Prev Slide" /></a>
                                    <a href="#" class="btn-play"><img src="assets/images/btn_play.png" alt="Start Slide" /></a>
                                    <a href="#" class="btn-pause"><img src="assets/images/btn_pause.png" alt="Pause Slide" /></a>
                                    <a href="#" class="btn-next"><img src="assets/images/btn_next.png" alt="Next Slide" /></a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                <script type="text/javascript" src="js/pignose.layerslider.js"></script>
                <script type="text/javascript">
                //<![CDATA[
                    $(window).load(function() {
                        $('#visual').pignoseLayerSlider({
                            play    : '.btn-play',
                            pause   : '.btn-pause',
                            next    : '.btn-next',
                            prev    : '.btn-prev'
                        });
                    });
                //]]>
                </script>
            
            </div>
            <!-- //banner -->
            <!-- content -->
            
              
              {{-- {!! $inmuebles->links() !!} --}}
              </div>

            <div class="container" style="margin-top: 40px;">
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
                                          <a href="{{ route('inicioshow', $inmueble->id) }}" class="link-product-add-cart">{{ $inmueble->municipio }}
										  
										</a>
                                      </div>
                                  </div>
                                  <span class="product-new-top">{{ $inmueble->gestion }}</span>
                                  
                          </div>
                          <div class="item-info-product ">
							<a href="{{ route('inicioshow', $inmueble->id) }}">   
							<div class="row" style="margin: 0px; padding: 0px;"> 
								  <div class="col-md-4">
									  <h5 style="font-weight: 300; font-size: 0.7em;">Habitaciones</h5>
									  <p style="font-weight: 300; font-size: 0.7em;">{{ $inmueble->alcobas }}</p></div>
								  <div class="col-md-4">
									  <h5 style="font-weight: 300; font-size: 0.7em;">Baños</h5>
									  <p style="font-weight: 300; font-size: 0.7em;">{{ $inmueble->banos }}</p></div>
								  <div class="col-md-4">
									  <h5 style="font-weight: 300; font-size: 0.7em;">Area</h5>
									<p style="font-weight: 300; font-size: 0.7em;">{{ $inmueble->area }}</p></div>
							  </div>
							</a><hr>
								<center><h5>ZONA - {{ $inmueble->zona }}</h5></center>
                              <h4><p class="p-1" style="text-align: justify"></p></h4>
                              <div class="info-product-price">
                                
                                  <span class="item_price">${{ $inmueble->valor }}</span>
                                  <del>$520.000</del>
                                  
                              </div>
                              <center><a href="{{ route('inicioshow', $inmueble->id) }}" class="item_add single-item hvr-outline-out button2">{{ $inmueble->tipoinmueble }}</a></center>								
                          </div>
                      </div>
					 
                  </div>
                  </div>
				  @endforeach
                </div>
                
            </div>
            <div class="new_arrivals">
                <div class="container">
                    <h3><span>new </span>arrivals</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                    <div class="new_grids">
                        <div class="col-md-4 new-gd-left">
                            <img src="assets/images/wed1.jpg" alt=" " />
                            <div class="wed-brand simpleCart_shelfItem">
                                <h4>Wedding Collections</h4>
                                <h5>Flat 50% Discount</h5>
                                <p><i>$250</i> <span class="item_price">$500</span><a class="item_add hvr-outline-out button2" href="#">add to cart </a></p>
                            </div>
                        </div>
                        <div class="col-md-4 new-gd-middle">
                            <div class="new-levis">
                                <div class="mid-img">
                                    <img src="assets/images/levis1.png" alt=" " />
                                </div>
                                <div class="mid-text">
                                    <h4>up to 40% <span>off</span></h4>
                                    <a class="hvr-outline-out button2" href="product.html">Shop now </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="new-levis">
                                <div class="mid-text">
                                    <h4>up to 50% <span>off</span></h4>
                                    <a class="hvr-outline-out button2" href="product.html">Shop now </a>
                                </div>
                                <div class="mid-img">
                                    <img src="images/dig.jpg" alt=" " />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-4 new-gd-left">
                            <img src="assets/images/wed2.jpg" alt=" " />
                            <div class="wed-brandtwo simpleCart_shelfItem">
                                <h4>Spring / Summer</h4>
                                <p>Shop Men</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- //content -->
            
            <!-- content-bottom -->
            
            <div class="content-bottom">
                <div class="col-md-7 content-lgrid">
                    <div class="col-sm-6 content-img-left text-center">
                        <div class="content-grid-effect slow-zoom vertical">
                            <div class="img-box"><img src="assets/images/p1.jpg" alt="image" class="img-responsive zoom-img"></div>
                                <div class="info-box">
                                    <div class="info-content simpleCart_shelfItem">
                                                <h4>Mobiles</h4>
                                                <span class="separator"></span>
                                                <p><span class="item_price">$500</span></p>
                                                <span class="separator"></span>
                                                <a class="item_add hvr-outline-out button2" href="#">add to cart </a>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-sm-6 content-img-right">
                        <h3>Special Offers and 50%<span>Discount On</span> Mobiles</h3>
                    </div>
                    
                    <div class="col-sm-6 content-img-right">
                        <h3>Buy 1 get 1  free on <span> Branded</span> Watches</h3>
                    </div>
                    <div class="col-sm-6 content-img-left text-center">
                        <div class="content-grid-effect slow-zoom vertical">
                            <div class="img-box"><img src="assets/images/p2.jpg" alt="image" class="img-responsive zoom-img"></div>
                                <div class="info-box">
                                    <div class="info-content simpleCart_shelfItem">
                                        <h4>Watches</h4>
                                        <span class="separator"></span>
                                        <p><span class="item_price">$250</span></p>
                                        <span class="separator"></span>
                                        <a class="item_add hvr-outline-out button2" href="#">add to cart </a>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-5 content-rgrid text-center">
                    <div class="content-grid-effect slow-zoom vertical">
                            <div class="img-box"><img src="assets/images/p4.jpg" alt="image" class="img-responsive zoom-img"></div>
                                <div class="info-box">
                                    <div class="info-content simpleCart_shelfItem">
                                                <h4>Shoes</h4>
                                                <span class="separator"></span>
                                                <p><span class="item_price">$150</span></p>
                                                <span class="separator"></span>
                                                <a class="item_add hvr-outline-out button2" href="#">add to cart </a>
                                    </div>
                                </div>
                        </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- //content-bottom -->
            <!-- product-nav -->
            
            <div class="product-easy">
                <div class="container">
                    
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
                                <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Latest Designs</span></li> 
                                <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Special Offers</span></li> 
                                <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Collections</span></li> 
                            </ul>				  	 
                            <div class="resp-tabs-container">
                                <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                    <div class="col-md-3 product-men">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                <img src="assets/assets/images/a1.png" alt="" class="pro-image-front">
                                                <img src="assets/images/a1.png" alt="" class="pro-image-back">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                    
                                            </div>
                                            <div class="item-info-product ">
                                                <h4><a href="single.html">Air Tshirt Black</a></h4>
                                                <div class="info-product-price">
                                                    <span class="item_price">$45.99</span>
                                                    <del>$69.71</del>
                                                </div>
                                                <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 product-men">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                <img src="assets/images/a8.png" alt="" class="pro-image-front">
                                                <img src="assets/images/a8.png" alt="" class="pro-image-back">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">1+1 Offer</span>
                                                    
                                            </div>
                                            <div class="item-info-product ">
                                                <h4><a href="single.html">Next Blue Blazer</a></h4>
                                                <div class="info-product-price">
                                                    <span class="item_price">$99.99</span>
                                                    <del>$109.71</del>
                                                </div>
                                                <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 product-men">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                <img src="assets/images/a3.png" alt="" class="pro-image-front">
                                                <img src="assets/images/a3.png" alt="" class="pro-image-back">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                    
                                            </div>
                                            <div class="item-info-product ">
                                                <h4><a href="single.html">Air Tshirt Black </a></h4>
                                                <div class="info-product-price">
                                                    <span class="item_price">$119.99</span>
                                                    <del>$120.71</del>
                                                </div>
                                                <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 product-men">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                <img src="assets/images/a4.png" alt="" class="pro-image-front">
                                                <img src="assets/images/a4.png" alt="" class="pro-image-back">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                    
                                            </div>
                                            <div class="item-info-product ">
                                                <h4><a href="single.html">Maroon Puma Tshirt</a></h4>
                                                <div class="info-product-price">
                                                    <span class="item_price">$79.99</span>
                                                    <del>$120.71</del>
                                                </div>
                                                <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 product-men yes-marg">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                <img src="images/a5.png" alt="" class="pro-image-front">
                                                <img src="images/a5.png" alt="" class="pro-image-back">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">Combo Pack</span>
                                                    
                                            </div>
                                            <div class="item-info-product ">
                                                <h4><a href="single.html">Multicoloured TShirts</a></h4>
                                                <div class="info-product-price">
                                                    <span class="item_price">$129.99</span>
                                                    <del>$150.71</del>
                                                </div>
                                                <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 product-men yes-marg">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                <img src="images/a6.png" alt="" class="pro-image-front">
                                                <img src="images/a6.png" alt="" class="pro-image-back">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                    
                                            </div>
                                            <div class="item-info-product ">
                                                <h4><a href="single.html">Air Tshirt Black </a></h4>
                                                <div class="info-product-price">
                                                    <span class="item_price">$129.99</span>
                                                    <del>$150.71</del>
                                                </div>
                                                <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 product-men yes-marg">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                <img src="images/a7.png" alt="" class="pro-image-front">
                                                <img src="images/a7.png" alt="" class="pro-image-back">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                    
                                            </div>
                                            <div class="item-info-product ">
                                                <h4><a href="single.html">Dresses</a></h4>
                                                <div class="info-product-price">
                                                    <span class="item_price">$129.99</span>
                                                    <del>$150.71</del>
                                                </div>
                                                <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 product-men yes-marg">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                <img src="images/a2.png" alt="" class="pro-image-front">
                                                <img src="images/a2.png" alt="" class="pro-image-back">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                    
                                            </div>
                                            <div class="item-info-product ">
                                                <h4><a href="single.html">Wedding Blazers</a></h4>
                                                <div class="info-product-price">
                                                    <span class="item_price">$129.99</span>
                                                    <del>$150.71</del>
                                                </div>
                                                <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 product-men yes-marg">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                <img src="images/g1.png" alt="" class="pro-image-front">
                                                <img src="images/g1.png" alt="" class="pro-image-back">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                    
                                            </div>
                                            <div class="item-info-product ">
                                                <h4><a href="single.html">Dresses</a></h4>
                                                <div class="info-product-price">
                                                    <span class="item_price">$45.99</span>
                                                    <del>$69.71</del>
                                                </div>
                                                <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 product-men yes-marg">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                <img src="images/g2.png" alt="" class="pro-image-front">
                                                <img src="images/g2.png" alt="" class="pro-image-back">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                    
                                            </div>
                                            <div class="item-info-product ">
                                                <h4><a href="single.html"> Shirts</a></h4>
                                                <div class="info-product-price">
                                                    <span class="item_price">$45.99</span>
                                                    <del>$69.71</del>
                                                </div>
                                                <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 product-men yes-marg">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                <img src="images/g3.png" alt="" class="pro-image-front">
                                                <img src="images/g3.png" alt="" class="pro-image-back">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                    
                                            </div>
                                            <div class="item-info-product ">
                                                <h4><a href="single.html">Shirts</a></h4>
                                                <div class="info-product-price">
                                                    <span class="item_price">$45.99</span>
                                                    <del>$69.71</del>
                                                </div>
                                                <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 product-men yes-marg">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                <img src="images/mw2.png" alt="" class="pro-image-front">
                                                <img src="images/mw2.png" alt="" class="pro-image-back">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                    
                                            </div>
                                            <div class="item-info-product ">
                                                <h4><a href="single.html">T shirts</a></h4>
                                                <div class="info-product-price">
                                                    <span class="item_price">$45.99</span>
                                                    <del>$69.71</del>
                                                </div>
                                                <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
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
                                                <h4><a href="single.html">Wedges</a></h4>
                                                <div class="info-product-price">
                                                    <span class="item_price">$45.99</span>
                                                    <del>$69.71</del>
                                                </div>
                                                <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 product-men">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                <img src="assets/images/w2.png" alt="" class="pro-image-front">
                                                <img src="assets/images/w2.png" alt="" class="pro-image-back">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                    
                                            </div>
                                            <div class="item-info-product ">
                                                <h4><a href="single.html">Sandals</a></h4>
                                                <div class="info-product-price">
                                                    <span class="item_price">$45.99</span>
                                                    <del>$69.71</del>
                                                </div>
                                                <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 product-men">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                <img src="assets/images/mw1.png" alt="" class="pro-image-front">
                                                <img src="assets/images/mw1.png" alt="" class="pro-image-back">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                    
                                            </div>
                                            <div class="item-info-product ">
                                                <h4><a href="single.html">Casual Shoes</a></h4>
                                                <div class="info-product-price">
                                                    <span class="item_price">$45.99</span>
                                                    <del>$69.71</del>
                                                </div>
                                                <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 product-men">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                <img src="assets/images/mw3.png" alt="" class="pro-image-front">
                                                <img src="assets/images/mw3.png" alt="" class="pro-image-back">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                    
                                            </div>
                                            <div class="item-info-product ">
                                                <h4><a href="single.html">Sport Shoes</a></h4>
                                                <div class="info-product-price">
                                                    <span class="item_price">$45.99</span>
                                                    <del>$69.71</del>
                                                </div>
                                                <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 product-men yes-marg">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                <img src="assets/images/ep2.png" alt="" class="pro-image-front">
                                                <img src="assets/images/ep2.png" alt="" class="pro-image-back">
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
                                                    <del>$69.71</del>
                                                </div>
                                                <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 product-men yes-marg">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                <img src="assets/images/ep3.png" alt="" class="pro-image-front">
                                                <img src="assets/images/ep3.png" alt="" class="pro-image-back">
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
                                                    <del>$69.71</del>
                                                </div>
                                                <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="clearfix"></div>						
                                </div>
                                <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                                    <div class="col-md-3 product-men">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                <img src="assets/images/g1.png" alt="" class="pro-image-front">
                                                <img src="assets/images/g1.png" alt="" class="pro-image-back">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                    
                                            </div>
                                            <div class="item-info-product ">
                                                <h4><a href="single.html">Dresses</a></h4>
                                                <div class="info-product-price">
                                                    <span class="item_price">$45.99</span>
                                                    <del>$69.71</del>
                                                </div>
                                                <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 product-men">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                <img src="assets/images/g2.png" alt="" class="pro-image-front">
                                                <img src="assets/images/g2.png" alt="" class="pro-image-back">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                    
                                            </div>
                                            <div class="item-info-product ">
                                                <h4><a href="single.html"> Shirts</a></h4>
                                                <div class="info-product-price">
                                                    <span class="item_price">$45.99</span>
                                                    <del>$69.71</del>
                                                </div>
                                                <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 product-men">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                <img src="assets/images/g3.png" alt="" class="pro-image-front">
                                                <img src="assets/images/g3.png" alt="" class="pro-image-back">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                    
                                            </div>
                                            <div class="item-info-product ">
                                                <h4><a href="single.html">Shirts</a></h4>
                                                <div class="info-product-price">
                                                    <span class="item_price">$45.99</span>
                                                    <del>$69.71</del>
                                                </div>
                                                <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 product-men">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                <img src="assets/images/mw2.png" alt="" class="pro-image-front">
                                                <img src="assets/images/mw2.png" alt="" class="pro-image-back">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                    
                                            </div>
                                            <div class="item-info-product ">
                                                <h4><a href="single.html">T shirts</a></h4>
                                                <div class="info-product-price">
                                                    <span class="item_price">$45.99</span>
                                                    <del>$69.71</del>
                                                </div>
                                                <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 product-men yes-marg">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                <img src="assets/images/w4.png" alt="" class="pro-image-front">
                                                <img src="assets/images/w4.png" alt="" class="pro-image-back">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                    
                                            </div>
                                            <div class="item-info-product ">
                                                <h4><a href="single.html">Air Tshirt Black Domyos</a></h4>
                                                <div class="info-product-price">
                                                    <span class="item_price">$45.99</span>
                                                    <del>$69.71</del>
                                                </div>
                                                <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 product-men yes-marg">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                <img src="assets/images/w3.png" alt="" class="pro-image-front">
                                                <img src="assets/images/w3.png" alt="" class="pro-image-back">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                    
                                            </div>
                                            <div class="item-info-product ">
                                                <h4><a href="single.html">Hand Bags</a></h4>
                                                <div class="info-product-price">
                                                    <span class="item_price">$45.99</span>
                                                    <del>$69.71</del>
                                                </div>
                                                <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
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
            <!-- //product-nav -->
            
            <div class="coupons">
                <div class="container">
                    <div class="coupons-grids text-center">
                        <div class="row">
                            <div class="col-md-3 coupons-gd">
                                <h3>Servicios principales</h3>
                            </div>
                            <div class="col-md-3 coupons-gd">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                <h4>Avaluos</h4>
                                <p style="text-align: justify">Tenemos al personal especializado para realizar la actividad valuatoria de tu inmueble.</p>
                            </div>
                            <div class="col-md-3 coupons-gd">
                                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                <h4>Alquiler</h4>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor
                            sit amet, consectetur.</p>
                            </div>
                            <div class="col-md-3 coupons-gd">
                                <span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
                                <h4>Venta</h4>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor
                            sit amet, consectetur.</p>
                            </div>
                        </div><hr>
                        

                        <div class="row">
                            <div class="col-md-3 coupons-gd">
                                <h3>Servicios adicionales</h3>
                            </div>
                            <div class="col-md-3 coupons-gd">
                                <span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
                                <h4>Asesorias juridicas</h4>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor
                            sit amet, consectetur.</p>
                            </div>
                            <div class="col-md-3 coupons-gd">
                                <span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
                                <h4>Desarrollo de software para pymes</h4>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor
                            sit amet, consectetur.</p>
                            </div>
                            <div class="col-md-3 coupons-gd">
                                <span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
                                <h4>Asesoria de gestion empresarial</h4>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor
                            sit amet, consectetur.</p>
                            </div>
                        </div>
                       
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- footer -->
            <div class="footer">
                <div class="container">
                    <div class="col-md-3 footer-left">
                        <h2><a href="index.html"><img src="assets/images/logo3.jpg" alt=" " /></a></h2>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor
                        sit amet, consectetur, adipisci velit, sed quia non 
                        numquam eius modi tempora incidunt ut labore 
                        et dolore magnam aliquam quaerat voluptatem.</p>
                    </div>
                    <div class="col-md-9 footer-right">
                        <div class="col-sm-6 newsleft">
                            <h3>Contactanos rapidamente enviando tu correo:</h3>
                        </div>
                        <div class="col-sm-6 newsright">
                            <form>
                                <input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                                <input type="submit" value="Submit">
                            </form>
                        </div>
                        <div class="clearfix"></div>
                        <div class="sign-grds">
                            <div class="col-md-4 sign-gd">
                                <h4>Información</h4>
                                <ul>
                                    <li><a href="index.html">INICIO</a></li>
                                    <li><a href="mens.html">nuestra empresa</a></li>
                                    <li><a href="womens.html">proyectos</a></li>
                                    {{-- <li><a href="electronics.html">Electronics</a></li>
                                    <li><a href="codes.html">Short Codes</a></li> --}}
                                    <li><a href="contact.html">Contactanos</a></li>
                                </ul>
                            </div>
                            
                            <div class="col-md-4 sign-gd-two">
                                <h4>Ubicanos</h4>
                                <ul>
                                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Nuestra oficina: Neiva/Huila - Calle 23 5B - 19 <span>Barrio Sevilla</span></li>
                                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:info@example.com">inmobiliariacap@gmail.com</a></li>
                                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Asesor 1 : +57 314 3013069</li>
                                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Asesor 2 : +57 321 2151132</li>
                                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Asesor 3 : +57 310 7413540</li>
                                </ul>
                            </div>
                            <div class="col-md-4 sign-gd flickr-post">
                                <h4>Proyectos a futuro</h4>
                                <ul>
                                    <li><a href="single.html"><img src="assets/images/b15.jpg" alt=" " class="img-responsive" /></a></li>
                                    <li><a href="single.html"><img src="assets/images/b16.jpg" alt=" " class="img-responsive" /></a></li>
                                    <li><a href="single.html"><img src="assets/images/b17.jpg" alt=" " class="img-responsive" /></a></li>
                                    <li><a href="single.html"><img src="assets/images/b18.jpg" alt=" " class="img-responsive" /></a></li>
                                    <li><a href="single.html"><img src="assets/images/b15.jpg" alt=" " class="img-responsive" /></a></li>
                                    <li><a href="single.html"><img src="assets/images/b16.jpg" alt=" " class="img-responsive" /></a></li>
                                    <li><a href="single.html"><img src="assets/images/b17.jpg" alt=" " class="img-responsive" /></a></li>
                                    <li><a href="single.html"><img src="assets/images/b18.jpg" alt=" " class="img-responsive" /></a></li>
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
            <!-- //footer -->
            <!-- login -->
                        <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content modal-info">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                                    </div>
                                    <div class="modal-body modal-spa">
                                        <div class="login-grids">
                                            <div class="login">
                                                <div class="login-bottom">
                                                    <h3>{{ __('Sing up for free') }}</h3>
                                                    
{{-- Register form --}}
                                                    <form method="POST" action="{{ route('register') }}">
                                                        @csrf
                                
                                                        <div class="sign-up">
                                                            <h4>{{ __('Name') }}:</h4>
                                                                                        
                                                            
                                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus >
                                
                                                                @error('name')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            
                                                        </div>
                                
                                                        <div class="sign-up">
                                                           
                                
                                                            <h4>{{ __('Email') }}:</h4>
                                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                
                                                                @error('email')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            
                                                        </div>
                                
                                                        <div class="sign-up">
                                                            <h4>{{ __('Password') }}:</h4>
                                                        
                                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                
                                                                @error('password')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            
                                                        </div>
                                
                                                        <div class="sign-up">
                                                            <h4>{{ __('Confirm Password') }}:</h4>
                                                           
                                                            
                                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                            
                                                        </div>
                                                        <div class="form-group hidden">
                                                            <select name="id_tipo_usuario" id="id_tipo_usuario">
                                                                <option value="1">Administrador</option>
                                                                <!--<option value="2">Supervisor</option>-->
                                                                <!--<option value="3">Cliente</option>-->
                                                            </select>
                                                        </div>
                                                        
                                                            <div class="sign-up">
                                                                 <input type="submit" value="{{ __('Register now') }}" >
                                                                   
                                                                </button>
                                                            </div>
                                                        
                                                    </form>
                                                    
{{-- Login form --}}
                                                </div>
                                                <div class="login-right">
                                                    <h3>Sign in with your account</h3>
                                                    
                                                    <form method="POST" action="{{ route('login') }}">
                                                        @csrf
                                
                                                        <div class="sign-in">
                                                            <h4 >{{ __('E-Mail Address') }}:</h4>
                                                            
                                
                                                            
                                                                <input id="email" type="email" class="input-form form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  style="" required autocomplete="email" autofocus>
                                
                                                                @error('email')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            
                                                        </div>
                                
                                                        <div class="sign-in">
                                                            <h4>{{ __('Password') }}:</h4>
                                
                                                            
                                                                <input id="password" type="password" class="input-form form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                
                                                                @error('password')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            
                                                        </div>
                                
                                                        <div class="row mb-3">
                                                            <div class="col-md-6 offset-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                
                                                                    <label class="form-check-label" for="remember" style="font-size: 14px">
                                                                        {{ __('Remember Me') }}
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sign-in">
                                                            
                                                            <input type="submit" value="SIGNIN" >
                                                        </div>
                                                        <div class="row mb-0">
                                                            <div class="col-md-8 offset-md-4">
                                                             
                                
                                                                @if (Route::has('password.request'))
                                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                        {{ __('Forgot Your Password?') }}
                                                                    </a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </form>
                                                    
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            <!-- //login -->

                    <!-- js -->


                    

            
    </body>
</html>

{{-- @extends('layouts.app')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Departamento</th>
        <th scope="col">Barrio</th>
        <th scope="col">Zona</th>
        <th scope="col">Tipo inmueble</th>
        <th scope="col">Gestion</th>
        <th scope="col">Valor</th>
      </tr>
    </thead>
    <tbody>


        @foreach($inmuebles as $inmueble)
      <tr>
        <th scope="row">{{ $inmueble->id }}</th>
        <td>{{ $inmueble->departamento }}</td>
        <td>{{ $inmueble->barrio }}</td>
        <td>{{ $inmueble->zona }}</td>
        <td>{{ $inmueble->tipoinmueble }}</td>
        <td>{{ $inmueble->gestion }}</td>
        <td>{{ $inmueble->valor }}</td>
        <td class="td-actions text-right">
      </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-title p-2">
            <h3>{{ $inmueble->gestion }}</h3>
          </div>
          <div class="card-body">
            <h5>Datos del inmueble</h5>
            <p>- {{ $inmueble->departamento }}</p>
            <p>- {{ $inmueble->barrio }}</p>
            <p>- {{ $inmueble->zona }}</p>
            <p>- {{ $inmueble->tipoinmueble }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  

@endsection --}}