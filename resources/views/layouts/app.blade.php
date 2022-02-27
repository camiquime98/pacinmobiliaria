<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.header.header')  
{{-- @include('layouts.footer.footer') --}}

<body>
  
  <a href="https://api.whatsapp.com/send?phone=+573143013069&text=Buen%20d%C3%ADa,%20deseo%20obtener%20m%C3%A1s%20informaci%C3%B3n%20" class="float" target="_blank">
  <i class="fa fa-whatsapp my-float"></i>
  </a>
    
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background:#0a3daf; ">
            <div class="container">
                <a class="menu__link menu__item--current text-white" href="{{ url('home') }}">
                    ADMIN
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav menu__list">
                        {{-- <li class="active menu_ io</a></li>
                        <li class="dropdown menu__item">
                            <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">men's wear <span class="caret"></span></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="col-sm-6 multi-gd-img1 multi-gd-text ">
                                            <a href="mens.html"><img src="images/woo1.jpg" alt=" "/></a>
                                        </div>
                                        <div class="col-sm-3 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="mens.html">Clothing</a></li>
                                                <li><a href="mens.html">Wallets</a></li>
                                                <li><a href="mens.html">Footwear</a></li>
                                                <li><a href="mens.html">Watches</a></li>
                                                <li><a href="mens.html">Accessories</a></li>
                                                <li><a href="mens.html">Bags</a></li>
                                                <li><a href="mens.html">Caps & Hats</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="mens.html">Jewellery</a></li>
                                                <li><a href="mens.html">Sunglasses</a></li>
                                                <li><a href="mens.html">Perfumes</a></li>
                                                <li><a href="mens.html">Beauty</a></li>
                                                <li><a href="mens.html">Shirts</a></li>
                                                <li><a href="mens.html">Sunglasses</a></li>
                                                <li><a href="mens.html">Swimwear</a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                        </li> --}}
                        <li class="dropdown menu__item">
                            <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">usuarios<span class="caret"></span></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="col-sm-3 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="womens.html">Administradores</a></li>
                                                <li><a href="womens.html">Trabajadores</a></li>
                                                <li><a href="womens.html">Clientes</a></li>
                                                {{-- <li><a href="womens.html">Watches</a></li>
                                                <li><a href="womens.html">Accessories</a></li>
                                                <li><a href="womens.html">Bags</a></li>
                                                <li><a href="womens.html">Caps & Hats</a></li> --}}
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
                                        {{-- <div clgitass="col-sm-6 multi-gd-img multi-gd-text ">
                                            <a href="womens.html"><img src="images/woo.jpg" alt=" "/></a>
                                        </div> --}}
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                        </li>
                        <li class="menu__item">    
                        <a class="menu__link" href="{{ route('inmuebles.index') }}">Inmuebles</a>
                        </li>
                        <li class="menu__item">    
                        <a class="menu__link" href="">Categorias</a>
                        </li>

                      </ul>
                    </div>
                  </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="menu__item">
                                    <a class="menu__link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="menu__item">
                                    <a class="menu__link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" style="color: rgb(182, 217, 248); font-size:13px" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
    
    
    @include('layouts.footer.footer')    
</body>

</html>
