@extends('layouts.header.navbarinicio')
@section('content')
@livewire("buscador-usuarios")

<div class="container" id="inmuebles">
	
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
                            <input wire:model="buscar" wire:keydown.enter="asignarPrimero()" type="text" class="form-control" id="buscar" style="width:100%; height:50px; background: rgba(255, 255, 255, 0.6);" placeholder="buscar">
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-2 m-0 p-0 text-center">
                            <button class="btn btn-default" id="boton" type="button">Buscar</button>
                    </div>
                </div>
                                <input type="number" value="0" id="casa" name="casa" class="hidden">
                                <input type="number" value="0" id="apartamento" name="apartamento" class="hidden">
                                <input type="number" value="0" id="casacampestre" name="casacampestre" class="hidden">
                                <input type="number" value="0" id="terreno" name="terreno" class="hidden">
                                <input type="number" value="0" id="bodega" name="bodega" class="hidden">
                                <input type="number" value="0" id="apartaestudio" name="apartaestudio" class="hidden">
                                <input type="number" value="0" id="casalote" name="casalote" class="hidden">

                                @error("buscar")
                                        
                                                                   
                                @else
                                    @if(count($usuarios)>0)
                                    <script>
                                    
                                    $("#inmuebles").hide();
                                    $("#busquedainmuebles").show();
            
                                        
                                        </script>
                                        @if(!$picked)
                                        
                                        <div class="shadow rounded px-3 pt-3 pb-0">
                                            @foreach($usuarios as $usuario)
                                                <div style="cursor: pointer;">
                                                    <a wire:click="asignarUsuario('{{ $usuario->name }}')">
                                                        {{ $usuario->name }}
                                                    </a>
                                                </div>
                                                <hr>
                                            @endforeach
                                        </div>
                                        @endif
                </div>
            </div>
        </div>
        
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
             
              
                    @else
                    <script>
                        
                        $("#inmuebles").show();
                        $("#busquedainmuebles").hide();
                        
                        </script>
                        
                    @endif
                @enderror
            </div>
        </div>
       
            
            </p>
        
    </div>  

    <div class="product-easy" id="busquedainmuebles">
        <div class="container-fluid">
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
                    {{-- <ul class="resp-tabs-list">
                        <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>En venta</span></li> 
                        <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>En renta</span></li> 
                        
                    </ul>	 --}}
                                   
                    <div class="resp-tabs-container">
                        <div class="tab-1 " aria-labelledby="tab_item-0">
                        
                            <div class="row">	
                                @foreach($usuarios as $usuario)
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
                                            <h4><a href="single.html">{{ $usuario->name }}</a></h4>
                                            <div class="info-product-price">
                                                <span class="item_price">$45.99</span>
                                            
                                            </div>
                                                                                
                                        </div>
                                    </div>
                                </div>
                                
                
            @endforeach
                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                        
                            
                            <div class="clearfix"></div>						
                        </div>
                            
                    </div>	
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>  
</div>  

</div>

<script>
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
        alert('mmmmmmmmmmmmmmmm');
      $.ajax({
              url:"{{ route('livewire.buscar_inmueble') }}",
              data:{casa : casa, apartamento : apartamento, casacampestre : casacampestre, terreno : terreno, bodega : bodega, apartaestudio : apartaestudio, casalote : casalote, buscar : buscar,},
              success:function(data){
    $('#Busqueda').html(data);
    $('#inmuebles').hide;
              }
            })
    }
    </script>
	<div class="row">
		<div class="col-md-12 pb-3 p-3">
			hola
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


<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-left">
			<h2><a href="index.html"><img src="images/logo3.jpg" alt=" " /></a></h2>
			<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur, adipisci velit, sed quia non 
			numquam eius modi tempora incidunt ut labore 
			et dolore magnam aliquam quaerat voluptatem.</p>
		</div>
		<div class="col-md-9 footer-right">
			<div class="col-sm-6 newsleft">
				<h3>SIGN UP FOR NEWSLETTER !</h3>
			</div>
			<div class="col-sm-6 newsright">
				<form>
					<input type="text"  >
					<input type="submit" value="Submit">
				</form>
			</div>
			<div class="clearfix"></div>
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Information</h4>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="mens.html">Men's Wear</a></li>
						<li><a href="womens.html">Women's Wear</a></li>
						<li><a href="electronics.html">Electronics</a></li>
						<li><a href="codes.html">Short Codes</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				
				<div class="col-md-4 sign-gd-two">
					<h4>Store Information</h4>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : 1234k Avenue, 4th block, <span>Newyork City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:info@example.com">info@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : +1234 567 567</li>
					</ul>
				</div>
				<div class="col-md-4 sign-gd flickr-post">
					<h4>Flickr Posts</h4>
					<ul>
						<li><a href="single.html"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b16.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b17.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b18.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b16.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b17.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b18.jpg" alt=" " class="img-responsive" /></a></li>
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
<script src="js/busquedacontroller.js"></script>

@endsection
