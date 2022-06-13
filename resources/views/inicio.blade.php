<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>LINDA CASA</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
                function hideURLbar(){ window.scrollTo(0,1); } </script>

<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
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
  
        .btn-search {
            background: #1b1b1b;
            border: 0px solid #000000;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: bold;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            outline: none;
            transition: all .25s ease;
            width: 100%;
            position: relative;
            height: 40px;
            overflow: hidden;
        }
        .btn-search:not(.loading):hover {
            box-shadow: 0px 10px 25px 0px rgba(221, 221, 221, 0.4);
            background: #636363;
        }
        .btn:not(.loading):hover i {
            transform: translate(7px);
        }
        .btn-search i {
            font-size: 1.45rem;
            position: absolute;
            left: 8px;
            pointer-events: none;
            z-index: 10;
            background: inherit;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: all .25s ease;
        }
        .btn .text {
            width: 130px;
            display: block;
            position: relative;
            pointer-events: none;
            transition: all .25s ease;
            position: absolute;
            left: 60px;
        }
        .loading-animate {
            position: absolute;
            width: 50px;
            height: 50px;
            z-index: 100;
            border-radius: 50%;
            top: 0px;
            left: 0px;
            display: flex;
            align-items: center;
            justify-content: center;
            pointer-events: none;
            opacity: 0;
            transition: all .25s ease;
        }
        .loading-animate:after {
            content: '';
            width: 30px;
            height: 30px;
            border-radius: 50%;
            border: 3px solid transparent;
            top: 5px;
            border-left: 3px solid #fff;
            animation: loading infinite .8s ease .05s;
            position: absolute;
        }
        .loading-animate:before {
            content: '';
            width: 30px;
            height: 30px;
            border-radius: 50%;
            top: 5px;
            border: 3px solid transparent;
            border-left: 3px solid #fff;
            animation: loading infinite .8s linear;
            position: absolute;
            opacity: .6;
        }
        .btn-search.loading {
            width: 50px;
        }
        .btn-search.loading i {
            transform: rotate(-90deg);
            padding-bottom: 4px;
            padding-left: 3px;
        }
        .btn-search.loading .text {
            transform: translate(-140px);
        }
        .btn-search.loading .loading-animate {
            opacity: 1;
        }
        @keyframes loading {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
        </style>


    <body class="antialiased">

        <div id="button-up">
            <i class="fas fa-chevron-up"></i>
        </div>

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
                    <div class="container-fluid" id="navbar-redes-sociales" style="width:100%;">
                        <div class="row" style="width: 100%">
                            <div class="col-md-4">
                                {{-- <div class="search">
                                    <input type="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Lugar';}" required="">
                                </div> --}}
                                {{-- <a href="index.html">inmobiliaria.lindacasa@gmail.com</a> --}}
                            </div>
                            <div class="col-md-4" style="display: flex;
                            justify-content: center;">
                                <div class="search" style="display: flex; justify-content: center;">
                                    <a href="http://"><img src="images/gmail.png" alt="" class="p-2" style="width: 20px; height:20px; margin:3px;"></a>
                                    <a href="http://" style="margin: 5px;"><h5>inmobiliaria.lindacasa@gmail.com</h5></a>
                                </div>
                                {{-- <a href="index.html">inmobiliaria.lindacasa@gmail.com</a> --}}
                            </div>
                            <div class="col-md-4" style="display: flex;
                            justify-content: flex-end;">
                                
                                <a href=""><img src="images/whatsapp.png" alt="" class="p-2" style="width: 20px; height:20px; margin:3px;"></a>
                                <a href="http://"><img src="images/facebook.png" alt="" class="p-2" style="width: 20px; height:20px; margin:3px;"></a>
                                <a href="http://"><img src="images/gmail.png" alt="" class="p-2" style="width: 20px; height:20px; margin:3px;"></a>
                            </div>
                        </div>
                        {{-- <div class="top_nav_left">
                            <h3 class=""><a href="index.html">inmobiliaria.lindacasa@gmail.com</a></h3>
                        </div>
                        <div class="top_nav_right2">
                            <div class="search">
                                <input type="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Lugar';}" required="">
                            </div>
                            <a href=""><img src="images/whatsapp.png" alt="" class="p-2" style="width: 20px; height:20px; margin:3px;"></a>
                        <h5 style="margin-top:7px; font-size:12px;"></h5>
                        <a href="http://"><img src="images/facebook.png" alt="" class="p-2" style="width: 20px; height:20px; margin:3px;"></a>
                        <a href="http://"><img src="images/gmail.png" alt="" class="p-2" style="width: 20px; height:20px; margin:3px;"></a>
                        <h5 style="margin-top: 7px; font-size:12px;"></h5>
                        </div>
                         --}}
                        
                        
                    </div>
                    {{-- <hr class="navbar-line" style="margin-top: 0px; margin-bottom:5px;"> --}}
                    <div class="col-md-2 header-left">
                        <h3 class="lc"><a href="index.html"><img class="img-responsive img-2" src="images/logo-navar.png"/></a></h3>
                        <h3 class="lc2"><a href="index.html"><img class="img-responsive" src="images/logo-navar.png"/></a></h3>
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
                                    <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">proyectos y servicios <span class="caret"></span></a>
                                        <ul class="dropdown-menu multi-column columns-3">
                                            <div class="row">
                                                <div class="col-sm-12 multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <li><a href="womens.html">Proyecto de vivienda</a></li>
                                                        <li><a href="womens.html">Arrendamiento</a></li>
                                                        <li><a href="womens.html">Ventas</a></li>
                                                        <li><a href="womens.html">Avaluos</a></li>
                                                        <li><a href="{{ url('seguros')}}">Seguros</a></li>
                                                        <li><a href="{{ url('asesoresj')}}">Asesorias juridicas</a></li>
                                                        <li><a href="womens.html">Asesorias empresariales</a></li>
                                                        <li><a href="womens.html">Desarrollo de software PYME</a></li>
                                                    </ul>
                                                </div>
                                                {{-- <div class="col-sm-3 multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <li><a href="womens.html">Jewellery</a></li>
                                                        <li><a href="womens.html">Sunglasses</a></li>
                                                        <li><a href="womens.html">Perfumes</a></li>
                                                        <li><a href="womens.html">Beauty</a></li>
                                                        <li><a href="womens.html">Shirts</a></li>
                                                        <li><a href="womens.html">Sunglasses</a></li>
                                                        <li><a href="womens.html">Swimwear</a></li>
                                                    </ul>
                                                </div> --}}
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
                            <ul class="slide-group">
                                <li>
                                <div style="max-width: 100%; max-height: 90vh; width: 100%; height: 100%;position: absolute; background:rgba(0, 0, 0, 0.178);">
                                </div>
                                <div class="container" style="position: absolute; top:200px;">
                                    <div class="row">
                                        <div class="col-md-12" style="color: #ff4444;">
                                            <h1>LINDA CASA</h1>
                                        </div><br><br><br>
                                        <div class="col-md-12" style="color: #f0f3ff;">
                                            <h3>las asesosiras juridicas</h3>
                                            <h4>solo lo encontraras con nosotros</h4>
                                        </div>
                                        <br><br><br>
                                        <div class="col-md-12">
                                            <a href="http://" calss="btn" style="color:rgb(255, 255, 255)!important; background: #4adfc6; padding:10px 25px;border-radius: 8px;">LLAMAYA YA¡</a>
                                        </div>
                                    </div>
                                    
                                </div>
                                <img class="img-responsive" src="assets/images/ba1.jpg" alt="Dummy Image" />
                            
                                </li>

                                <li>
                                    <div style="max-width: 100%; max-height: 90vh; width: 100%; height: 100%;position: absolute; background:rgba(0, 0, 0, 0.171);">
                                    </div>
                                    <div class="container" style="position: absolute; top:200px;">
                                        <div class="row">
                                            <div class="col-md-12" style="color: #ff4444;">
                                                <h1>LINDA CASA</h1>
                                            </div><br><br><br>
                                            <div class="col-md-12" style="color: #f5f6ff;">
                                                <h3>Empresa de inversion</h3>
                                                <h4>y proyectos inmobiliarios</h4>
                                            </div>
                                            <br><br><br>
                                            <div class="col-md-12">
                                                <a href="http://" calss="btn" style="color:rgb(255, 255, 255)!important; background: #4adfc6; padding:10px 25px;border-radius: 8px;">EMPEZAR</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <img class="img-responsive" src="assets/images/ba2.jpg" alt="Dummy Image" />
                                </li>
                                
                                <li>
                                    <div style="max-width: 100%; max-height: 90vh; width: 100%; height: 100%;position: absolute; background:rgba(0, 0, 0, 0.171);">
                                    </div>

                                    <div class="container" style="position: absolute; top:200px;">
                                        <div class="row">
                                            <div class="col-md-12" style="color: #ff4444;">
                                                <h1>LINDA CASA</h1>
                                            </div><br><br><br>
                                            <div class="col-md-12" style="color: #f0f3ff;">
                                                <h3>Pensamos en la seguridad</h3>
                                                <h4>de nuestros clientes</h4>
                                            </div>
                                            <br><br><br>
                                            <div class="col-md-12">
                                                <a href="http://" calss="btn" style="color:rgb(255, 255, 255)!important; background: #4adfc6; padding:10px 25px;border-radius: 8px;">COTIZA TU SEGURO YA¡</a>
                                            </div>
                                        </div>
                                        
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
                      <h3 style="color: rgb(45, 74, 94);font-weight:800;">EL INMUEBLE QUE QUIERES ESTA AQUI</h3>
                    </div>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                </div>
            <div class="row" style="display: flex; justify-content: center;">
                     <div class="col-md-2 d-flex justify-content-center m-0 pb-3">
                         <ul id="myTab" class="nav nav-tabs" role="tablist" style="border-bottom: none; width: 100%;">
                             <li role="presentation" class="btn btn-primary"style="max-height:40px; border-radius:8px; width: 100%;">

                                <select class="form-select" aria-label="Default select example" style="height:40px; border-radius:8px; width: 100%; padding:5px; background: rgb(10, 10, 10); color:#f0f3ff;">
                                    <option selected>tipo de inmueble</option>
                                    <option><a class="dropdown-item" id="dropdown1-tab"onclick="casa();">Casa</a></option>
                                    <option><a class="dropdown-item" id="dropdown2-tab"onclick="apartamento();">Apartamento</a></option>
                                    <option><a class="dropdown-item" id="dropdown3-tab"onclick="casacampestre();">Casa campestre</a></option>

                                    <option><a class="dropdown-item" id="dropdown4-tab"onclick="terreno();">Terreno</a></option>

                                    <option><a class="dropdown-item" id="dropdown5-tab"onclick="bodega();">Bodega</a></option>

                                    <option><a class="dropdown-item" id="dropdown6-tab"onclick="apartaestudio();">Apartaestudio</a></option>

                                    <option><a class="dropdown-item" id="dropdown7-tab"onclick="casalote();">casa lote</a></option>
                                  </select>

                                 {{-- <div class="dropdown">
                                     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-top:-5px; background-color: transparent; border: none; ">
                                       tipo de inmueble
                                     </button>
                                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                       <a class="dropdown-item" id="dropdown1-tab"onclick="casa();">Casa</a>
                                       <a class="dropdown-item" id="dropdown2-tab"onclick="apartamento();">Apartamento</a>
                                       <a class="dropdown-item" id="dropdown3-tab"onclick="casacampestre();">Casa campestre</a>
                                       <a class="dropdown-item" id="dropdown4-tab"onclick="terreno();">Terreno</a>
                                       <a class="dropdown-item" id="dropdown5-tab"onclick="bodega();">Bodega</a>
                                       <a class="dropdown-item" id="dropdown6-tab"onclick="apartaestudio();">Apartaestudio</a>
                                       <a class="dropdown-item" id="dropdown7-tab"onclick="casalote();">casa lote</a>
                                     </div>
                                   </div>    --}}
                                     </li>
                                   </ul> 
                     </div>
                     <div class="col-md-5 col-sm-12 m-0 p-0 ">
                         <div class="search">
                             <div class="input-group" style="width: 100%">
                             <i class="fa fa-search text-dark"></i> 
                             <input type="text" class="form-control" id="buscar" style="height:40px; background: rgba(255, 255, 255, 0.6);border-radius:8px;" placeholder="Busca la palabra clave ¡aqui!..." ><p>Busca por: Departamento, Cuidad, Arriendo o Venta.</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-2 m-0 p-0 d-flex justify-content-center">
                         <button class="btn-search" id="boton" type="button" onclick="buscar();">
                             <i class="fa fa-search" style="padding-left:"></i>
                             <span class="text">
                               Buscar
                             </span>
                             <span class="loading-animate"></span>
                           </button>
                     </div>
                 
                                 <input type="number" value="0" id="casa" name="casa" class="hidden">
                                 <input type="number" value="0" id="apartamento" name="apartamento" class="hidden">
                                 <input type="number" value="0" id="casacampestre" name="casacampestre" class="hidden">
                                 <input type="number" value="0" id="terreno" name="terreno" class="hidden">
                                 <input type="number" value="0" id="bodega" name="bodega" class="hidden">
                                 <input type="number" value="0" id="apartaestudio" name="apartaestudio" class="hidden">
                                 <input type="number" value="0" id="casalote" name="casalote" class="hidden">       
               
             </div>
             <hr>

             <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                            <script>
                                
                                $("#inicioinmuebles").show();
                                $("#busquedainmuebles").hide();
                                
                            </script>
                    </div>
                </div>                
            </div> 
                <div class="row" id="Busqueda">
					@foreach($inmuebles as $inmueble) 
                  <div class="col-md-3 col-sm-12" style="margin-bottom: 3%;">
                    <div class="product-men">
                      <div class="men-pro-item simpleCart_shelfItem" style="border-radius: 10px;">
                         
                        <div class="men-thumb-item">
                            <a href="{{ route ('inicioshow',$inmueble->id) }}"><img src="imagenes-inmueble/{{ $inmueble->folder }}/{{ $inmueble->imagenuna }}" alt="" class="pro-image-front" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"></a>
                            <a href="{{ route ('inicioshow',$inmueble->id) }}"><img src="imagenes-inmueble/{{ $inmueble->folder }}/{{ $inmueble->imagendos }}" alt="" class="pro-image-back" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"></a>
                                  <div class="men-cart-pro">
                                      <div class="inner-men-cart-pro">
                                          <a href="{{ route('inicioshow', $inmueble->id) }}" class="link-product-add-cart">{{ $inmueble->municipio }} - {{$inmueble->departamento}}
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
                <hr>
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
                        <h3>Ofertas especiales hasta el 50%<span>Viviendas</span> llamanos</h3>
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
            
            <div class="">
                <div class="container-fluid" style="background-image: url('assets/images/fondo-seguros.png'); background-repeat: no-repeat;
                background-size: 100% 100%; background-attachment: fixed;">
                    <div class="container">
                    <div class="row d-flex justify-content-center" style="margin-top: 10px; margin-bottom:20px;">
                        <div class="col-md-12 text-center" style="margin-top: 20px ;margin-bottom: 20px; color: rgb(45, 74, 94);">
                            <h3 style="color: rgb(20, 64, 94); font-weight: 600;">LA SEGURIDAD ES NUESTRA PRIORIDAD.</h3>
                            <br>
                            <h4 style="color: rgb(20, 64, 94);">Elige la aseguradora de tu preferencia.</h4>
                        </div>
                        
                        <br>
                        <div class="col-md-12" style="margin-top: 2%;">
                            <div class="row seguros-body">
                                {{-- <div class="col-md-6">
                                    <a href="http://" calss="btn" style="color:rgb(255, 255, 255)!important; background: #FDA30E; padding:10px 25px;border-radius: 8px;">COTIZAR</a>
                                </div> --}}
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
                                                        <center><a href="http://" calss="btn" style="color:rgb(255, 255, 255)!important; background: #4adfc6; padding:10px 25px;border-radius: 8px;">COTIZAR</a></center>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                      </div>          
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    
                                    <div class="" style="padding: 15px; ">
                                        
                                        <h5 style="text-align: justify">Elige el ramo que deseas para tu seguro, brindamos toda la información que requieras con nuestra asesora profesional. Somos una empresa que piensa en la seguridad de nuestro clientes.</h5>
                                    </div>

                                    <div class="row d-flex justify-content-center">
                                        <div class="col-md-6">
                                            <div class="" style=" padding: 10px;">
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
                                        <div class="col-md-6" >
                                            <div class="" style=" padding: 10px;">
                                                <div class="card-body">
                                                  <p class="card-text text-seguros-p">* Responsabiliada civil.</p>
                                                  <p class="card-text text-seguros-p">* Estatales.</p>
                                                  <p class="card-text text-seguros-p">* Seguros Arrendamiento.</p>
                                                  <p class="card-text text-seguros-p">* Pyme.</p>
                                                  {{-- <p class="card-text"><li>Seguros vehiculos</li></p>
                                                  <p class="card-text"><li>Seguros vehiculos</li></p> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center" style="">
                                            <img src="assets/images/loby-seguros.png" alt="" srcset="" style="width: 90px; height: 60px;">
                                            <img src="assets/images/mapfre-seguros.png" alt="" srcset=""  style="width: 90px; height: 60px;">
                                            <img src="assets/images/seguros-mundial.png" alt="" srcset=""  style="width: 90px; height: 60px;">
                                            <img src="assets/images/seguros-estado.png" alt="" srcset=""  style="width: 90px; height: 50px;">
                                            <img src="assets/images/seguros-previsora.png" alt="" srcset=""  style="width: 90px; height: 60px;">
                                        </div>
                                    </div>
                                    
                                </div>
                               
                                
                                {{-- <div class="col-md-12 d-flex justify-content-center" style="margin-top: 10px;">
                                    <div class="row">
                                    <div class="col-md-12 text-center" style="">
                                        <img src="assets/images/loby-seguros.png" alt="" srcset="" style="width: 90px; height: 60px;">
                                        <img src="assets/images/mapfre-seguros.png" alt="" srcset=""  style="width: 150px; height: 80px;">
                                        <img src="assets/images/seguros-mundial.png" alt="" srcset=""  style="width: 150px; height: 80px;">
                                        <img src="assets/images/seguros-estado.png" alt="" srcset=""  style="width: 150px; height: 60px;">
                                        <img src="assets/images/seguros-previsora.png" alt="" srcset=""  style="width: 150px; height: 60px;">
                                    </div>
                                </div> --}}
                                    
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                </div>
            </div>
            <br>




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
                                <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Equipo</span></li> 
                                <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Nuestra empresa</span></li> 
                                {{-- <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Collections</span></li>  --}}
                            </ul>				  	 
                            <div class="resp-tabs-container">
                                <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                    <div class="col-md-4" style="display: flex; justify-content:center;">
                                        <div class="card">
                                        <img src="assets/images/w2.png" alt="" class="pro-image-front" style="width: 180px; height: 200px; border-radius:50%;"><br>
                                        <h1>Pedro</h1>
                                        </div>
                                        
                                    </div>
                                    

                                    <div class="col-md-4 product-men" style="display: flex; justify-content:center;">
                                        <div class="card">
                                            <img src="assets/images/w2.png" alt="" class="pro-image-front" style="width: 180px; height: 200px; border-radius:50%;"><br>
                                            <h1>Angel</h1>
                                            </div>
                                    </div>

                                    <div class="col-md-4 product-men" style="display: flex; justify-content:center;">
                                        <div class="card">
                                            <img src="assets/images/w2.png" alt="" class="pro-image-front" style="width: 180px; height: 200px; border-radius:50%;"><br>
                                            <h1>Cristian</h1>
                                            </div>
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                                    <div class="col-md-6 product-men d-flex align-items-center">
                                        <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates eligendi doloribus, voluptatum enim temporibus fugit aut nostrum ad dolorum id praesentium quas veniam esse quo dolore optio magni aperiam nam.
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates eligendi doloribus, voluptatum enim temporibus fugit aut nostrum ad dolorum id praesentium quas veniam esse quo dolore optio magni aperiam nam.</p>
                                    </div>
                                    <div class="col-md-6 product-men">
                                        <img src="images/mision.png" alt="" class="pro-image-front" style="height: 300px; width: 370px;">
                                    </div>
                                    <div class="col-md-6 product-men">
                                        <img src="images/vision.png" alt="" class="pro-image-front" style="height: 300px; width: 370px;">
                                    </div>
                                    <div class="col-md-6 product-men">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates eligendi doloribus, voluptatum enim temporibus fugit aut nostrum ad dolorum id praesentium quas veniam esse quo dolore optio magni aperiam nam.
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates eligendi doloribus, voluptatum enim temporibus fugit aut nostrum ad dolorum id praesentium quas veniam esse quo dolore optio magni aperiam nam.
                                        
                                    </div>
                                    
                                    
                                    <div class="clearfix"></div>						
                                </div>
                                {{-- <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
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
                                </div>	 --}}
                            </div>	
                        </div>
                    </div>
                </div>
            </div>
            <!-- //product-nav -->
            <hr>

            <div class="coupons" style="margin-bottom: 5px;">
                <div class="cinta-servicios"></div>
                <div class="cinta-servicios-derecha"></div>
                <div class="container" style="">
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

                             // Scroll up

                            document.getElementById("button-up").addEventListener("click", scrollUp);

                            function scrollUp(){

                                var currentScroll = document.documentElement.scrollTop;

                                if (currentScroll > 0){
                                    window.requestAnimationFrame(scrollUp);
                                    window.scrollTo (0, currentScroll - (currentScroll / 10));
                                }
                            }


                            ///

                            buttonUp = document.getElementById("button-up");

                            window.onscroll = function(){

                                var scroll = document.documentElement.scrollTop;

                                if (scroll > 200){
                                    buttonUp.style.transform = "scale(1)";
                                }else if(scroll < 300){
                                    buttonUp.style.transform = "scale(0)";
                                }

                            }

function casa() {
    variable = document.getElementById("casa").value;
    if (variable==0){
        var intro = document.getElementById('dropdown1-tab');
        intro.style.background = '#0d6efd';
        intro.style.color = '#fff';
        document.getElementById("casa").value=1;
                }
    else
    {
        var intro = document.getElementById('dropdown1-tab');
        intro.style.background = '#fff';
        intro.style.color = '#000';
        document.getElementById("casa").value=0;
    }
  }

  function apartamento() {
    variable = document.getElementById("apartamento").value;
    if (variable==0){
        var intro = document.getElementById('dropdown2-tab');
        intro.style.background = '#0d6efd';
        intro.style.color = '#fff';
    document.getElementById("apartamento").value=1;
                }
    else
    {
        var intro = document.getElementById('dropdown2-tab');
        intro.style.background = '#fff';
        intro.style.color = '#000';
    document.getElementById("apartamento").value=0;
    }
  }
  function casacampestre() {
    variable = document.getElementById("casacampestre").value;
    if (variable==0){
        var intro = document.getElementById('dropdown3-tab');
        intro.style.background = '#0d6efd';
        intro.style.color = '#fff';
    document.getElementById("casacampestre").value=1;
                }
    else
    {
        var intro = document.getElementById('dropdown3-tab');
        intro.style.background = '#fff';
        intro.style.color = '#000';
    document.getElementById("casacampestre").value=0;
    }
  }
  function terreno() {
    variable = document.getElementById("terreno").value;
    if (variable==0){
        var intro = document.getElementById('dropdown4-tab');
        intro.style.background = '#0d6efd';
        intro.style.color = '#fff';
    document.getElementById("terreno").value=1;
                }
    else
    {
        var intro = document.getElementById('dropdown4-tab');
        intro.style.background = '#fff';
        intro.style.color = '#000';
    document.getElementById("terreno").value=0;
    }
  }
  function bodega() {
    variable = document.getElementById("bodega").value;
    if (variable==0){
        var intro = document.getElementById('dropdown5-tab');
        intro.style.background = '#0d6efd';
        intro.style.color = '#fff';
    document.getElementById("bodega").value=1;
                }
    else
    {
        var intro = document.getElementById('dropdown5-tab');
        intro.style.background = '#fff';
        intro.style.color = '#000';
    document.getElementById("bodega").value=0;
    }
  }
  function apartaestudio() {
    variable = document.getElementById("apartaestudio").value;
    if (variable==0){
        var intro = document.getElementById('dropdown6-tab');
        intro.style.background = '#0d6efd';
        intro.style.color = '#fff';
    document.getElementById("apartaestudio").value=1;
                }
    else
    {
        var intro = document.getElementById('dropdown6-tab');
        intro.style.background = '#fff';
        intro.style.color = '#000';
    document.getElementById("apartaestudio").value=0;
    }
  }
  function casalote() {
    variable = document.getElementById("casalote").value;
    if (variable==0){
        var intro = document.getElementById('dropdown7-tab');
        intro.style.background = '#0d6efd';
        intro.style.color = '#fff';
    document.getElementById("casalote").value=1;
                }
    else
    {
        var intro = document.getElementById('dropdown7-tab');
        intro.style.background = '#fff';
        intro.style.color = '#000';
    document.getElementById("casalote").value=0;
    }
  }

    

    // cuando se pulsa en el enlace
     function buscar() {
        let div = document.querySelector('#boton');
div.classList.add('loading');
    var busqueda = document.getElementById('buscar').value;
    var casa = document.getElementById('casa').value;
    var apartamento = document.getElementById('apartamento').value;
    var casacampestre = document.getElementById('casacampestre').value;
    var terreno = document.getElementById('terreno').value;
    var bodega = document.getElementById('bodega').value;
    var apartaestudio = document.getElementById('apartaestudio').value;
    var casalote = document.getElementById('casalote').value;   
        
      $.ajax({
              url:"{{ route('buscarinmueble') }}",
              data:{busqueda : busqueda, casa : casa, apartamento : apartamento, casacampestre : casacampestre, terreno : terreno, bodega : bodega, apartaestudio : apartaestudio, casalote : casalote},
              success:function(data){
               
    $('#Busqueda').html(data);
    $('#inicioinmuebles').hide;
    setTimeout(() => {
    
        div.classList.remove('loading');
  }, 1000);

 


// ## eliminar clase

              }
            })
    }

    function miFunc(id) 
    {
    var ruta = "/inicioshow" + id;
    window.location.href=ruta;
    }


    
    $(document).ready(function() 
            {    
           
              $('#buscar').keypress(function(e){   
               if(e.which == 13){      
               buscar(); 
               }   
              });    
              
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