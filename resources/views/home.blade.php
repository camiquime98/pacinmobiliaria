@extends('layouts.header.navbarinicio')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div>
    <div class="page-head">
        <div class="container">
            <div class="row height d-flex justify-content-center align-items-center" style="color: #fff">
                   <h3 class="titulo-s" style="color:#fff; font-weight: 800;text-transform: none; font-size:25px;">Busca tu inmueble</h3>
            <div class="col-md-9 d-flex justify-content-center" style="width: 100%;">
                <div class="row d-flex justify-content-center" style="width: 100%;">
                    <div class="col-md-3 d-flex justify-content-center m-0 p-0" style="width:100%;">
                        <ul id="myTab" class="nav nav-tabs" role="tablist" style="border-bottom: none;">
                            <li role="presentation" class="btn btn-primary"style="max-height:50px; min">
            
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent; border: none;">
                                      ¿Qué buscar?
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" id="dropdown1-tab"onclick="casa()">Casa</a>
                                      <a class="dropdown-item" id="dropdown2-tab"onclick="apartamento()">Apartamento</a>
                                      <a class="dropdown-item" id="dropdown3-tab"onclick="casacampestre()">Casa campestre</a>
                                      <a class="dropdown-item" id="dropdown4-tab"onclick="terreno()">Terreno</a>
                                      <a class="dropdown-item" id="dropdown5-tab"onclick="bodega()">Bodega</a>
                                      <a class="dropdown-item" id="dropdown6-tab"onclick="apartaestudio()">Apartaestudio</a>
                                      <a class="dropdown-item" id="dropdown7-tab"onclick="casalote()">casa lote</a>
                                    </div>
                                  </div>
                                                                    
                                    </li>
                                  </ul> 
                    </div>
                    <div class="col-md-7 col-sm-12 m-0 p-0">
                        <div class="search">
                            <div class="input-group">
                            <i class="fa fa-search text-dark"></i> 
                            <input type="text" class="form-control" id="buscar" style="width:100%; height:50px; background: rgba(255, 255, 255, 0.6);" placeholder="buscar">
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-2 m-0 p-0 text-center">
                            <button class="btn btn-default" id="boton" type="button">Buscar</button>
                    </div>
                </div>
                                <input type="text" value="0" id="casa" name="casa" class="text-dark">
                                <input type="text" value="0" id="apartamento" name="apartamento" class="hidden">
                                <input type="text" value="0" id="casacampestre" name="casacampestre" class="hidden">
                                <input type="text" value="0" id="terreno" name="terreno" class="hidden">
                                <input type="text" value="0" id="bodega" name="bodega" class="hidden">
                                <input type="text" value="0" id="apartaestudio" name="apartaestudio" class="hidden">
                                <input type="text" value="0" id="casalote" name="casalote" class="hidden">

                              
<<<<<<< HEAD
                                        
                            
                                  
=======
>>>>>>> b5d9049c3726f0f23493fe661d5a309affbbe0c1
                </div>
            </div>
        </div>
        
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
             
              
<<<<<<< HEAD
                  
                    <script>
                        
                        $("#inmuebles").show();
                        $("#busquedainmuebles").hide();
                        
                        </script>
                        
                  
=======
                 
>>>>>>> b5d9049c3726f0f23493fe661d5a309affbbe0c1
            </div>
        </div>
       
            
            </p>
        
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
                        <div class="row">
                            <div class="col-md-12 pb-3 p-3">
                                
                            </div>
                            @foreach($inmuebles as $inmueble) 
                          <div class="col-md-3 col-sm-12">
                            <div class="product-men">
                                    
                              <div class="men-pro-item simpleCart_shelfItem">
                    
                                <div class="men-thumb-item">
                                      <img src="assets/images/a8.png" alt="" class="pro-image-front">
                                      <img src="assets/images/a8.png" alt="" class="pro-image-back">
                                          <div class="men-cart-pro">
                                              <div class="inner-men-cart-pro">
                                                  <a href="{{ route('inmueble.show', $inmueble->id) }}" class="link-product-add-cart">{{ $inmueble->zona }}</a>
                                              </div>
                                          </div>
                                          <span class="product-new-top">1+1 Offer</span>
                    
                                  </div>
                                  <div class="item-info-product ">
                                      <h4><a href="single.html">Next Blue Blazer</a></h4>
                                      <div class="info-product-price">
                    
                                          <span class="item_price">${{ $inmueble->valor }}</span>
                                          <del>$520.000</del>
                    
                                      </div>
                                      <a href="{{ route('inmueble.show', $inmueble->id) }}" class="item_add single-item hvr-outline-out button2"> Ver mas </a>									
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
<<<<<<< HEAD
                               
=======
                                
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
                                            <h4><a href="single.html"></a></h4>
                                            <div class="info-product-price">
                                                <span class="item_price">$45.99</span>
                                            
                                            </div>
                                                                                
                                        </div>
                                    </div>
                                </div>
                                
                

>>>>>>> b5d9049c3726f0f23493fe661d5a309affbbe0c1
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
casa.value = "1";
                }
    else
    {
        var intro = document.getElementById('dropdown1-tab');
        intro.style.background = '#fff';
        intro.style.color = '#3FBD2D';
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

    var boton = document.getElementById("boton");
    var buscar = document.getElementById("buscar");
    var casa = document.getElementById('casa').value;
    var apartamento = document.getElementById('apartamento').value;
    var casacampestre = document.getElementById('casacampestre').value;
    var terreno = document.getElementById('terreno').value;
    var bodega = document.getElementById('bodega').value;
    var apartaestudio = document.getElementById('apartaestudio').value;
    var casalote = document.getElementById('casalote').value;
    // cuando se pulsa en el enlace
    boton.onclick = function(e) {
        
      $.ajax({
              url:"{{ route('buscar_inmueble') }}",
<<<<<<< HEAD
              data:{casa : casa, apartamento : apartamento, casacampestre : casacampestre, terreno : terreno, bodega : bodega, apartaestudio : apartaestudio, casalote : casalote, buscar : buscar,},
              success:function(data){
=======
              data:{casa : casa, apartamento : apartamento, casacampestre : casacampestre, terreno : terreno, bodega : bodega, apartaestudio : apartaestudio, casalote : casalote},
              success:function(data)
              {
                alert('Esto es lo que encontramos');
>>>>>>> b5d9049c3726f0f23493fe661d5a309affbbe0c1
    $('#Busqueda').html(data);
    $('#inmuebles').hide;
              }
            })
    }
    </script>

@endsection