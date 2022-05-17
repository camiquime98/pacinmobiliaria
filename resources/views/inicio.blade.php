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



<style>



</style>


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
            
            <div class="ban-top" id="bant-top">
                
                <div class="container">
                    <div class="container-fluid text-end" id="navbar-redes-sociales" style="width:100%;">
                        <img src="images/whatsappnavar.png" alt="" class="p-2" style="width: 20px; height:20px;">
                        <img src="images/facebook.png" alt="" class="p-2" style="width: 20px; height:20px;">
                    </div>
                    <div class="col-md-2 header-left">
                        <h3 class="lc"><a href="index.html">L-C</a></h3>
                        <h3 class="lc2"><a href="index.html">LINDA CASA</a></h3>
                        {{-- <h1><a href="index.html"><img src="assets/images/logo.png"></a></h1> --}}
                    </div>
                    
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
                                        <a class="menu__link" href="{{ route('contactanos.contactanos')}}">Contactanos</a>
                                    </li>

                                <li class=" menu__item"><a class="menu__link" href="#" class="use1" data-toggle="modal" data-target="#myModal4">ingreso</a></li>
                               
                              </ul>
                            </div>
                          </div>
                        </nav>	
                    </div>
                    <div class="col-md-2 top_nav_right">
                        <div class="cart box_1">
                                    <a href="checkout.html">
                                        
                                    </a>
                                    <p><a href="{{ route('contactanos.contactanos')}}"  data-toggle="" data-target="#myModal4" class="simpleCart_empty">¡GENERA TU CONTRATO YA!</a></p>
                                    
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
                                <li>
                                <div style="max-width: 100%; max-height: 70vh; width: 100%; height: 100%;position: absolute; background:rgba(0, 0, 0, 0.356);">
                                </div>
                                
                                <img class="img-responsive" src="assets/images/ba1.jpg" alt="Dummy Image" />
                            
                                </li>

                                <li>
                                    <div style="max-width: 100%; max-height: 70vh; width: 100%; height: 100%;position: absolute; background:rgba(0, 0, 0, 0.356);">
                                    </div>
                                    <div class="container" style="position: absolute; top:100px;">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h1>LINDA CASA</h1>
                                            </div><br><br>
                                            <div class="col-md-12">
                                                <h3>Empresa de inversion y </h3>
                                                <h4>proyectos inmobiliarios</h4>
                                            </div>
                                            <div class="col-md-12">
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <img class="img-responsive" src="assets/images/ba2.jpg" alt="Dummy Image" />
                                </li>
                                
                                <li>
                                    <div style="max-width: 100%; max-height: 70vh; width: 100%; height: 100%;position: absolute; background:rgba(0, 0, 0, 0.356);">
                                    </div>
                                    
                                    <img class="img-responsive" src="assets/images/ba3.jpg" alt="Dummy Image" />
                                </li>
                            </ul>
            
                            <!-- Slide Description Image Area (316 x 328) -->
                            <div class="script-wrap">
                                <ul class="script-group" style="">
                                    <li><div class="inner-script"><img class="img-responsive" src="assets/images/baa1.jpg" alt="Dummy Image" /></div></li>
                                    <li><div class="inner-script"><img class="img-responsive" src="assets/images/baa2.jpg" alt="Dummy Image" /></div></li>
                                    <li><div class="inner-script"><img class="img-responsive" src="assets/images/baa3.png" alt="Dummy Image" /></div></li>
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
                <div class="row" style="margin-bottom: 3%; margin-top:3%;">
                    <div class="col-md-12 text-center">
                      <h3 style="color: rgb(45, 74, 94);font-weight:800;">El inmueble que quieres esta aqui</h3>
                    </div>
                </div>
                <div class="row ">

					@foreach($inmuebles as $inmueble) 
                  <div class="col-md-3 col-sm-12" style="margin-bottom: 3%;">
                    <div class="product-men">
                      <div class="men-pro-item simpleCart_shelfItem" style="border-radius: 10px;">
                         
                        <div class="men-thumb-item">
                            <a href="{{ route ('inicioshow',$inmueble->id) }}"><img src="imagenes-inmueble/{{ $inmueble->folder }}/{{ $inmueble->imagenuna }}" alt="" class="pro-image-front" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"></a>
                            <a href="{{ route ('inicioshow',$inmueble->id) }}"><img src="imagenes-inmueble/{{ $inmueble->folder }}/{{ $inmueble->imagendos }}" alt="" class="pro-image-back" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"></a>
                                  <div class="men-cart-pro">
                                      <div class="inner-men-cart-pro">
                                          <a href="{{ route('inicioshow', $inmueble->id) }}" class="link-product-add-cart">{{ $inmueble->municipio }}
										</a>
                                      </div>
                                  </div>
                                  <a href="{{ route('inicioshow', $inmueble->id) }}" class=""><span class="product-new-top">{{ $inmueble->gestion }}</span></a>
                                  
                          </div>
                          <div class="item-info-product" style="margin-top: 10px;">
							<a href="{{ route('inicioshow', $inmueble->id) }}">   
							<div class="row" style=""> 
								  <div class="col-md-4 m-0 p-0">
									  <h5 style="font-weight: 300; font-size: 0.7em;">Habitaciones</h5>
									  <p style="font-weight: 300; font-size: 0.7em;">{{ $inmueble->alcobas }}</p></div>
								  <div class="col-md-4 m-0 p-0">
									  <h5 style="font-weight: 300; font-size: 0.7em;">Baños</h5>
									  <p style="font-weight: 300; font-size: 0.7em;">{{ $inmueble->banos }}</p></div>
								  <div class="col-md-4 m-0 p-0">
									  <h5 style="font-weight: 300; font-size: 0.7em;">Area</h5>
									<p style="font-weight: 300; font-size: 0.7em;">{{ $inmueble->area }}</p></div>
							  </div>
							</a><hr>
								<center><h5>ZONA - {{ $inmueble->zona }}</h5></center>
                              <h4><p class="p-1" style="text-align: justify"></p></h4>
                              <div class="info-product-price text-center">
                                
                                  <span class="item_price">${{ $inmueble->valor }}</span>
                                
                                  
                              </div>
                              <center><a href="{{ route('inicioshow', $inmueble->id) }}" class="item_add single-item hvr-outline-out button2">{{ $inmueble->tipoinmueble }}</a></center>								
                          </div>
                      </div>
					 
                  </div>
                  </div>
				  @endforeach
                </div>
                
            </div>
            
            <!-- //content -->
            
            <!-- content-bottom -->
            
            {{-- <div class="content-bottom">
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
            </div> --}}
            <!-- //content-bottom -->
            <!-- product-nav -->
   
            <div class="">
                <div class="container-fluid" style="background-image: url('assets/images/fondo-seguros.png'); background-repeat: no-repeat;
                background-size: 100% 100%; background-attachment: fixed;">
                    <div class="container">
                    <div class="row d-flex justify-content-center" style="margin-top: 10px; margin-bottom:20px;">
                        <div class="col-md-12 text-center" style="margin-top: 20px ;margin-bottom: 20px; color: rgb(45, 74, 94);">
                            <h3 style="color: rgb(20, 64, 94); font-weight: 600;">La seguridad es nuestra prioridad.</h3>
                            <br>
                            <h4 style="color: #FDA30E">Elige la aseguradora de tu preferencia.</h4>
                        </div>
                        
                        <br>
                        <div class="col-md-12" style="margin-top: 2%;">
                            <div class="row seguros-body">
                                {{-- <div class="col-md-6">
                                    <a href="http://" calss="btn" style="color:rgb(255, 255, 255)!important; background: #FDA30E; padding:10px 25px;border-radius: 8px;">COTIZAR</a>
                                </div> --}}
                                <div class="col-md-6 col-sm-12">
                                    <h5 class="card-title">Manejamos diferentes ramos</h5><br>
                                    <div class="card-title" style="padding: 10px">
                                        <h5 style="text-align: justify">Elige el ramo que deseas para tu seguro, brindamos toda la información que requieras con nuestra asesora profesional. Somos una empresa que piensa en la seguridad de nuestro clientes.</h5>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-md-6" style="margin-top: 5px">
                                            <div class="card card-seguros" style="border-radius:10px; border:1px solid #3DAFB5; padding: 10px;">
                                                <div class="card-body">
                                                  <p class="card-text text-seguros-p">* Seguros vehiculos.</p>
                                                  <p class="card-text text-seguros-p">* Seguros vida.</p>
                                                  <p class="card-text text-seguros-p">* Seguros hogar.</p>
                                                  <p class="card-text text-seguros-p">* Todo riesgo.</p>
                                                  {{-- <p class="card-text"><li>Seguros vehiculos</li></p>
                                                  <p class="card-text"><li>Seguros vehiculos</li></p> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6" style="margin-top: 5px">
                                            <div class="card card-seguros" style="border-radius:10px; border:1px solid #3DAFB5; padding: 10px;">
                                                <div class="card-body">
                                                  <p class="card-text text-seguros-p">* Responsabiliada civil.</p>
                                                  <p class="card-text text-seguros-p">* Estatales.</p>
                                                  <p class="card-text text-seguros-p">* Seguros hogar.</p>
                                                  <p class="card-text text-seguros-p">* Seguros todo riesgo.</p>
                                                  {{-- <p class="card-text"><li>Seguros vehiculos</li></p>
                                                  <p class="card-text"><li>Seguros vehiculos</li></p> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6 col-xs-12 d-flex justify-content-center align-items-center">
                                    <div class="row seguros-body" style="margin-bottom: 3%;">
                                        <div class="col-md-6 col-sm-12 m-0 p-0">
                                            <div class="product-men" style="padding: 0px;">
                                                <div class=" simpleCart_shelfItem" style="border-radius: 50px;">
                                                  <div class="men-thumb-item" style="padding: 27px;">
                                                      <img src="images/fotoseguros.png" alt="" class="pro-image-front" style="border-top-left-radius: 10%; border-bottom-left-radius: 10%; border-top-right-radius: 10%; border-bottom-right-radius: 10%;">
                                                      <img src="images/logoseguros.png" alt="" class="pro-image-back" style="border-top-left-radius: 10px;
                                                      border-bottom-left-radius: 10px; border-top-right-radius: 10px;
                                                      border-bottom-right-radius: 10px;">                               
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12 m-0 p-0">
                                            <div class="product-men product-men2" style="padding: 20px; border-radius:10px;">
                                                <div class=" simpleCart_shelfItem" style="border-radius: 10px;">
                                                    <div class="item-info-product" style="">
                                                      <div class="row" style=""> 
                                                            <div class="col-md-12 m-0 p-0 text-center">
                                                                <h5 style="font-weight: 300; font-size: 1em;">CAROL VARGAS</h5>
                                                                <p style="font-weight: 300; font-size: 0.7em;"></p></div>
                                                                <hr>
                                                            <div class="col-md-12 m-0 p-0">
                                                                <h5 style="font-weight: 300; font-size: 0.9em;">Gerencia de Seguros</h5>
                                                                <p style="font-weight: 300; font-size: 0.7em;"></p></div><br>
                                                            <div class="col-md-12 m-0 p-0">
                                                                <h5 style="font-weight: 300; font-size: 0.9em;">Contacto:</h5>
                                                              <p style="font-weight: 300; font-size: 0.8em;">3134138048</p>
                                                              <p style="font-weight: 300; font-size: 0.8em;"><a href="mailto:carolvargas429@hotmail.com?subject="enlace HTML" class="email-seguros">carolvargas429@hotmail.com</a></p>
                                                          </div>
                                                          <br>
                                                          <div class="col-md-12 text-center p-1">
                                                              
                                                                  <a href="https://api.whatsapp.com/send?phone=+573134138048&text=Hola,%20quisiera%20saber%20mas%20informacion%20de%20seguros" style="padding: 2px;"><img src="images/whatsapp.png" alt="" class="p-2" style="width: 20px; height:20px;"></a>
                                                                 <a href="http://" style="padding: 2px;"><img src="images/gmail.png" alt="" class="" style="width: 20px; height:20px;"></a>
                                                          </div>
                                                        </div>
                                                        <hr>
                                                        <center><a href="http://" calss="btn" style="color:rgb(255, 255, 255)!important; background: #FDA30E; padding:10px 25px;border-radius: 8px;">COTIZAR</a></center>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                      </div>          
                                </div>
                                
                                <div class="col-md-12 d-flex justify-content-center" style="margin-top: 10px;">
                                    <div class="row">
                                    <div class="col-md-12 text-center" style="">
                                        <img src="assets/images/loby-seguros.png" alt="" srcset="" style="width: 150px; height: 80px;">
                                        <img src="assets/images/mapfre-seguros.png" alt="" srcset=""  style="width: 150px; height: 80px;">
                                        <img src="assets/images/seguros-mundial.png" alt="" srcset=""  style="width: 150px; height: 80px;">
                                        <img src="assets/images/seguros-estado.png" alt="" srcset=""  style="width: 150px; height: 60px;">
                                        <img src="assets/images/seguros-previsora.png" alt="" srcset=""  style="width: 150px; height: 60px;">
                                    </div>
                                </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                </div>
            </div>
            <br>




            {{-- <div class="product-easy">
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
                                <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Equipo</span></li> 
                                <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Nuestra empresa</span></li> 
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
            </div> --}}
            <!-- //product-nav -->
            

            <div class="coupons" style="margin-bottom: 5px;">
                <div class="cinta-servicios"></div>
                <div class="container">
                    <div class="coupons-grids text-center">
                        <div class="row">
                            <div class="col-md-2 coupons-gd-title">
                                <h3>Servicios principales</h3>
                            </div>
                            <div class="col-md-3 coupons-gd coupons-gd-2">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                <h4>Avaluos</h4>
                                <p style="text-align: justify" class="p-3">Con el personal profesional para realizar la actividad valuatoria de tu inmueble.</p>
                            </div>
                            <div class="col-md-3 coupons-gd coupons-gd-2">
                                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                <h4>Alquiler</h4>
                                <p style="text-align: justify">Uno de los servicio mas importante para aquirir tu inmueble a travez de nuestros canales locales.</p>
                            </div>
                            <div class="col-md-3 coupons-gd coupons-gd-2">
                                <span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
                                <h4>Venta</h4>
                                <p style="text-align: justify">Las ventas de los inmuebles son legales, brindado seguridad y garantia al comprador.</p>
                            </div>
                        </div>
                        

                        <div class="row">
                            <div class="col-md-2 coupons-gd-title">
                                <h3>Servicios adicionales</h3>
                            </div>
                            <div class="col-md-3 coupons-gd coupons-gd-2">
                                <span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
                                <h4>Asesorias juridicas profesionales</h4>
                                <p style="text-align: justify">Tenemos el perfil profesional en asesorias juridicas en todos los procesos; Penal, familia, civil y muchos más.</p>
                            </div>
                            <div class="col-md-3 coupons-gd coupons-gd-2">
                                <span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
                                <h4>Desarrollo de software para pymes</h4>
                                <p style="text-align: justify">Espectacular servicio para empresas pymes que buscan multiplicar su produccion en marketing a travez de la web.</p>
                            </div>
                            <div class="col-md-3 coupons-gd coupons-gd-2">
                                <span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
                                <h4>Asesoria de gestion empresarial</h4>
                                <p style="text-align: justify">Asesores profesionales para ayudar a las empresas en temas de productividad, gestion de operaciones, ecoeficiencia etc.</p>
                            </div>
                        </div>
                       
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>


            {{-- <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="assets/images/proyecto.png" alt="" srcset="" style="width: 100%;">
                    </div>
                    <div class="col-md-6">
                       Nuestros proyectos a futuros. 
                    </div>
                </div>
            </div> --}}



            @include('layouts.footer.footer')
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


                    <script type="text/javascript">
                           
                            let navbar = document.getElementById("bant-top");

                            let navPos = navbar.getBoundingClientRect().top;

                            window.addEventListener("scroll", e => {
                            let scrollPos = window.scrollY;
                            if (scrollPos > navPos) {
                                navbar.classList.add('sticky');
                                header.classList.add('navbarOffsetMargin');
                            } else {
                                navbar.classList.remove('sticky');
                                header.classList.remove('navbarOffsetMargin');
                            }
                            });
                      </script>      
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