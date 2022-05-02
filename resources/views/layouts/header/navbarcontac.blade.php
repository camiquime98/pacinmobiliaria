<body>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <a href="https://api.whatsapp.com/send?phone=+573143013069&text=Buen%20d%C3%ADa,%20deseo%20obtener%20m%C3%A1s%20informaci%C3%B3n%20" class="float" target="_blank">
  <i class="fa fa-whatsapp my-float"></i>
  </a>
    
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light" style="background:rgb(45, 74, 94); height:40px;">
            <div class="container">
                <a class="menu__link menu__item--current text-white" href="{{ url('/') }}">
                    INMOBILIARIA CAP
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                {{-- <div class="container-fluid"> --}}
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    {{-- <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav menu__list">
                          <li class=" menu__item"><a class="menu__link" href="electronics.html">Contactanos</a></li>
                        
                      </ul>
                    </div> --}}
                  </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto w-100 text-center">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="menu__item">
                                    <a class="menu__link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
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
</body>
