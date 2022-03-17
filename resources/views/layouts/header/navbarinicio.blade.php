<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.header.headerinicio')
@include('layouts.header.header')  
{{-- @include('layouts.footer.footer') --}}

<body>
  
  <a href="https://api.whatsapp.com/send?phone=+573143013069&text=Buen%20d%C3%ADa,%20deseo%20obtener%20m%C3%A1s%20informaci%C3%B3n%20" class="float" target="_blank">
  <i class="fa fa-whatsapp my-float"></i>
  </a>
    <div id="app">
        <div class="ban-top-home">
            <div class="container">
                <div class="top_nav_left">
                    <nav class="navbar navbar-default navbar-expand-md navbar-light shadow-sm">
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
                            <li class="dropdown menu__item">
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
                            <li class=" menu__item"><a class="menu__link" href="electronics.html">Electronics</a></li>                            
                                <li class="menu__item">
                                    <a class="menu__link" href="{{ route('inmueble.index')}}">inmuebles</a>
                                </li>  
                                <li class="menu__item">
                                    <a class="menu__link" href="{{ route('imageinmueble.index')}}">Imagenes</a>
                                </li>  
                          </ul>
                        </div>
                      </div>
                    </nav>	
                </div>
                
<div class="top_nav_right">
                    <!-- Authentication Links -->
<nav class="navbar">
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

    <li class="menu__item dropdown d-flex justify-content-center">

        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    {{ Auth::user()->name }}
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item"href="{{ route('logout') }}"  onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">{{ __('Salir') }}</a><hr>
            <a href="{{ route('user.index') }}" class="dropdown-item">Configuraciones</a>
    
  </div>
</div>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
    </li>
    
</nav>@endguest
	
                </div>
                
                <div class="clearfix"></div>
            </div>
        </div>

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