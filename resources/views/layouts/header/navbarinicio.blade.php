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
                    <li class="active menu__item menu__item--current"><a class="menu__link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a></li>
                    <li class="dropdown menu__item">
                        <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">men's wear <span class="caret"></span></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <div class="row">
                                    <div class="col-sm-6 multi-gd-img1 multi-gd-text ">
                                        <a href="mens.html"><img src="assets/assets/images/woo1.jpg" alt=" "/></a>
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
                    </li>
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
                    <li class=" menu__item"><a class="menu__link" href="codes.html">Short Codes</a></li>
                    
                        <li class="menu__item">
                            <a class="menu__link" href="">Contactanos</a>
                        </li>

                    <li class=" menu__item"><a class="menu__link" href="#" class="use1" data-toggle="modal" data-target="#myModal4">Log-in</a></li>
                   
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



</li>
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