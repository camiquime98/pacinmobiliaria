@extends('layouts.header.navbarinicio')
@section('content')
<style>
  
    .btn-search {
        background: #7f49d7;
        border: 0px solid #7b49d7;
        border-radius: 20px;
        font-size: 1rem;
        font-weight: bold;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        outline: none;
        transition: all .25s ease;
        width: 200px;
        position: relative;
        height: 40px;
        overflow: hidden;
    }
    .btn-search:not(.loading):hover {
        box-shadow: 0px 10px 25px 0px rgba(73, 215, 92,.4);
    }
    .btn:not(.loading):hover i {
        transform: translate(7px);
    }
    .btn-search i {
        font-size: 1.45rem;
        position: absolute;
        left: 0px;
        pointer-events: none;
        z-index: 10;
        background: inherit;
        width: 50px;
        height: 50px;
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
        width: 44px;
        height: 44px;
        border-radius: 50%;
        border: 3px solid transparent;
        border-left: 3px solid #fff;
        animation: loading infinite .8s ease .05s;
        position: absolute;
    }
    .loading-animate:before {
        content: '';
        width: 44px;
        height: 44px;
        border-radius: 50%;
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div>
    <div class="page-head">
        <div class="container">
            <div class="row height d-flex justify-content-center align-items-center" style="color: #fff">
                   <h3 class="titulo-s" style="color:#fff; font-weight: 800;text-transform: none; font-size:25px;">Busca tu inmueble</h3>
            
            <div class="col-md-9 d-flex justify-content-center" style="width: 100%;">
                <div class="row d-flex justify-content-center" style="width: 100%;">
                    <div class="col-md-3 d-flex justify-content-center m-0 pb-3" style="width:100%; padding:0px;">
                        <ul id="myTab" class="nav nav-tabs" role="tablist" style="border-bottom: none; width: 93%;">
                            <li role="presentation" class="btn btn-primary"style="max-height:40px; border-radius:40px; width: 100%;">
            
                                <div class="dropdown">
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
                                  </div>
                                                                    
                                    </li>
                                  </ul> 
                    </div>
                    <div class="col-md-6 col-sm-12 m-0 p-0 ">
                        <div class="search">
                            <div class="input-group">
                            <i class="fa fa-search text-dark"></i> 
                            <input type="text" class="form-control" id="buscar" style="width:100%; height:40px; background: rgba(255, 255, 255, 0.6);border-radius:8px;" placeholder="Busca la ciudad ¡aqui!..." ><p>Busca la cuidad que deseas</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3 m-0 p-0 d-flex justify-content-center">
                        <button class="btn-search" id="boton" type="button" onclick="buscar();">
                            <i class="fa fa-search" style="padding-left:"></i>
                            <span class="text">
                              Buscar
                            </span>
                            <span class="loading-animate"></span>
                          </button>
                       
                       
                    </div>
                </div>
                                <input type="number" value="0" id="casa" name="casa" class="hidden">
                                <input type="number" value="0" id="apartamento" name="apartamento" class="hidden">
                                <input type="number" value="0" id="casacampestre" name="casacampestre" class="hidden">
                                <input type="number" value="0" id="terreno" name="terreno" class="hidden">
                                <input type="number" value="0" id="bodega" name="bodega" class="hidden">
                                <input type="number" value="0" id="apartaestudio" name="apartaestudio" class="hidden">
                                <input type="number" value="0" id="casalote" name="casalote" class="hidden">

                              
                                        
                            
                                  
                </div>
            </div>
            
        </div>
        
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
             
              
                  
                    <script>
                        
                        $("#inmuebles").show();
                        $("#busquedainmuebles").hide();
                        
                    </script>
                        
                  
            </div>
        </div>
        
    </div>  

    <div class="product-easy">
        <div class="container-fluid">
            <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
            
            <div class="sap_tabs">
                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                    {{-- <ul class="resp-tabs-list">
                        <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>En venta</span></li> 
                        <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>En renta</span></li> 
                        
                    </ul>	 --}}
                    <div class="container" id="Busqueda">
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
                                                  <a href="{{ route('inmueble.show', $inmueble->id) }}" class="link-product-add-cart">{{ $inmueble->municipio }} - {{ $inmueble->departamento }}
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
                                      <center><a href="{{ route('inmueble.show', $inmueble->id) }}" class="item_add single-item hvr-outline-out button2">{{ $inmueble->tipoinmueble }}</a></center>								
                                  </div>
                              </div>
                             
                          </div>
                          </div>
                          @endforeach
                        </div>
                    
                      </div>
                                   
                    {{-- <div class="resp-tabs-container">
                        <div class="tab-1 " aria-labelledby="tab_item-0">
                        
                            <div class="row">	
                               
                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                        
                            
                            <div class="clearfix"></div>						
                        </div>
                            
                    </div>	
                </div> --}}
            </div>
        </div>
    </div>
    </div>
    </div>  


<script>
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
              url:"{{ route('buscar_inmueble') }}",
              data:{busqueda : busqueda, casa : casa, apartamento : apartamento, casacampestre : casacampestre, terreno : terreno, bodega : bodega, apartaestudio : apartaestudio, casalote : casalote},
              success:function(data){
               
    $('#Busqueda').html(data);
    $('#inmuebles').hide;
    setTimeout(() => {
    
        div.classList.remove('loading');
  }, 1000);

 


// ## eliminar clase

              }
            })
    }
    function miFunc(id) 
    {
    var ruta = "/inmueble/" + id;
    window.location.href=ruta;
    }

    </script>
    <script language="javascript" type="text/javascript">  
        $(document).ready(function() 
            {    
           
              $('#buscar').keypress(function(e){   
               if(e.which == 13){      
               buscar(); 
               }   
              });    
              
           });  
         

    </script>
@include('layouts.script.script')
@endsection