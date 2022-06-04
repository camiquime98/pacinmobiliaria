<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.header.headerinicio')
@include('layouts.header.header')  
{{-- @include('layouts.footer.footer') --}}

<style>
    .btn-admin
    {
       color: rgb(17, 133, 235);
       border: 1px solid #06bdca;;
    }
   
   .btn-admin:hover
    {
       background: white;
       color: #06bdca;;
       border: 1px solid #ff904f;
    }
    .btn-admin:active
    {
       background: white!important;
       color: rgb(255, 123, 0);
       border: none;
    }
    .social-media p a {
  border: 1px solid #e6e6e6;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  margin-right: 4px;
  text-decoration: none!important; }
  
  .nav-item2:hover a
  {
    background: transparent;
    color: #06bdca!important;
  }<

  .social-media p a span {
    color: #4d4d4d; }
  .social-media p a:hover {
    background: #22cce2;
    border-color: #ff904f; }
    .social-media p a:hover span {
      color: #fff;
      list-style: none;
      border:    
    }
    .navbar-brand-responsive1
      {
        display: block;
      }
  @media (min-width: 991.98px)
    {
      .navbar-brand-responsive1
      {
        display: block;
      }
      .navbar-brand-responsive2
      {
        display: none;
      }
    }
  @media (max-width: 991.98px) {
    .social-media p a {
      border-color: #fff;
      width: 30px;
      height: 30px; }
      .social-media p a span {
        color: rgb(94, 94, 94); } 
      
      .navbar-brand-responsive1
      {
        display: none;
      }

      .navbar-brand-responsive2
      {
        display: block;
      }
      
      }

        .sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0; }

.sr-only-focusable:active, .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  overflow: visible;
  clip: auto;
  white-space: normal; }
   </style>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
  
  <a href="https://api.whatsapp.com/send?phone=+573143013069&text=Buen%20d%C3%ADa,%20deseo%20obtener%20m%C3%A1s%20informaci%C3%B3n%20" class="float" target="_blank">
  <i class="fa fa-whatsapp my-float"></i>
  </a>
    <div id="app">
        <div class="conteiner">
            <nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar" style="">
                <div class="container">
                  <div class="col-md-4 col-sm-4 d-flex justify-content-center">
                    <a class="navbar-brand navbar-brand-responsive1" href="{{ route('home')}}">Real-State</a>
                  </div>
                  <div class="col-md-4 col-sm-4 d-flex justify-content-center">
                    <div class="social-media order-lg-last">
                      <p class="mb-0 d-flex">
                          <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                          <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                          <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                          <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                      </p>
              </div>
                  </div>
                  <div class="col-md-4 col-sm-4 " style="align-items: center">
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="ftco-nav">
                      <a class="navbar-brand navbar-brand-responsive2" href="{{ route('home')}}">Real-State</a>
                      <ul class="navbar-nav mr-md-3" style="width: 100%">
                          <li class="nav-item nav-item2 active"><a href="{{ route('home')}}" class="nav-link nav-link2">Inicio</a></li>
                          {{-- <li class="nav-item nav-item2"><a href="#" class="nav-link nav-link2">About</a></li>
                          <li class="nav-item nav-item2"><a href="#" class="nav-link nav-link2">Work</a></li>
                          <li class="nav-item nav-item2"><a href="#" class="nav-link nav-link2">Blog</a></li> --}}
                          {{-- <li class="nav-item nav-item2"><a href="{{ route('inmueble.index')}}" class="nav-link nav-link2">inmuebles</a></li> --}}

                          <li class="nav-item nav-item2"><a href="{{ route('inmueble.index')}}" class="nav-link nav-link2">inmuebles</a></li>
           
  
                        
                          
                                  
                                  @guest
                                  @if (Route::has('login'))
                                      <li class="nav-item nav-item2">
                                          <a class="nav-link nav-link2" href="{{ route('login') }}">{{ __('Login') }}</a>
                                      </li>
                                  @endif
                                  
                                  
                                  @if (Route::has('register'))
                                      <li class="nav-item nav-item2">
                                          <a class="nav-link nav-link2" href="{{ route('register') }}">{{ __('Register') }}</a>
                                      </li>
                                  @endif
                                  @else
                                      <li class="menu__item dropdown d-flex justify-content-center">
                                  
                                    <div class="dropdown" style="display: inherit;">
                                    <button class="btn btn-admin dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      {{ Auth::user()->name }}
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      
                                      <a class="dropdown-item"href="{{ route('logout') }}"  onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">{{ __('Salir') }}</a><hr style="margin-top: 5px; margin-bottom: 5px;" >
                                              <a href="{{ route('user.index') }}" class="dropdown-item">Perfiles</a>
                                      
                                       
                                      
                                    </div>
                                  </div>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                  </form>@endguest
                                      </li>
                  </div>
                    
                    
                  

                        
                        
                            
                    </ul>
                  </div>
                </div>
              </nav>
        </div>

        {{-- <div class="ban-top-home">
            <div class="container">
                <div class="top_nav_left">
                    <nav class="navbar navbar-default navbar-expand-md navbar-light">
                      <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                                          
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                          <ul class="nav navbar-nav menu__list">
                            <li class="active menu__item menu__item--current"><a class="menu__link" href="{{ url('/home') }}">Home <span class="sr-only">(current)</span></a></li>
                            {{-- <li class="dropdown menu__item">
                                <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">women's wear <span class="caret"></span></a>
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
                                                       
                                <li class="menu__item">
                                    <a class="menu__link" href="{{ route('inmueble.index')}}">inmuebles</a>
                                </li>  
                               
                          </ul>
                        </div>
                      </div>
                    </nav>	
                </div>
                


                
<div class="top_nav_right">
                    <!-- Authentication Links -->

<div class="container-fluid">

    <nav class="navbar navbar-default navbar-expand-md navbar-light">
        <ul class="nav navbar-nav menu__list">

        
        @guest
        @if (Route::has('login'))
            <li class="menu-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @endif
        
        
        @if (Route::has('register'))
            <li class="menu__item">
                <a class="menu__link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
        @else
        <li class=" menu__item"><a class="menu__link" href="electronics.html">notificaciones</a></li>
            <li class="menu__item dropdown d-flex justify-content-center">
        
                <div class="dropdown">
          <button class="btn btn-admin dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }}
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            
            <a class="dropdown-item"href="{{ route('logout') }}"  onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">{{ __('Salir') }}</a><hr>
                    <a href="{{ route('user.index') }}" class="dropdown-item">Perfiles</a>
            
             
            
          </div>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
            </li>
        </ul>
        </nav>


</div>

@endguest
	
                </div>
                
                <div class="clearfix"></div>
            </div>
        </div> --}}

        <main class="" style="background: rgb(253, 253, 253);">
            @yield('content')
        </main>


    </div>
    
    
    @include('layouts.footer.footer')  
    @livewireScripts  

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('js')
</body>

</html>