
<div>
    <div class="page-head">
        <div class="container">
         
            <div class="row height d-flex justify-content-center align-items-center" style="color: #fff">
                   <h3 class="titulo-s" style="color:#fff; font-weight: 800;text-transform: none; font-size:35px;">Busca tu inmueble</h3>
                <div class="col-md-10 d-flex justify-content-center">
                    <ul id="myTab" class="nav nav-tabs" role="tablist">
                <li role="presentation" class="btn btn-primary" >
                          <a href="#" id="myTabDrop1" class="btn btn-primary" style="background-color: #0d6efd; color:#fff" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">¿Qué buscar? <span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                            <li><a   id="dropdown1-tab"   onclick="casa()">Casa</a></li>
                            <li><a  role="tab" id="dropdown2-tab" data-toggle="tab"  onclick="apartamento()">Apartamento</a></li>
                            <li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown3-tab" data-toggle="tab" aria-controls="dropdown2" onclick="casacampestre()">Casa campestre</a></li>
                            <li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown4-tab" data-toggle="tab" aria-controls="dropdown2" onclick="terreno()">Terreno</a></li>
                            <li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown5-tab" data-toggle="tab" aria-controls="dropdown2" onclick="bodega()">Bodega</a></li>
                            <li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown6-tab" data-toggle="tab" aria-controls="dropdown2" onclick="apartaestudio()">Apartaestudio</a></li>
                            <li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown7-tab" data-toggle="tab" aria-controls="dropdown2" onclick="casalote()">casa lote</a></li>
    
                          </ul>
                        </li>
                      </ul> 
                      <input type="number" value="0" id="casa" name="casa" class="hidden">
                      <input type="number" value="0" id="apartamento" name="apartamento" class="hidden">
                      <input type="number" value="0" id="casacampestre" name="casacampestre" class="hidden">
                      <input type="number" value="0" id="terreno" name="terreno" class="hidden">
                      <input type="number" value="0" id="bodega" name="bodega" class="hidden">
                      <input type="number" value="0" id="apartaestudio" name="apartaestudio" class="hidden">
                      <input type="number" value="0" id="casalote" name="casalote" class="hidden">
                    <div class="search"> <i class="fa fa-search"></i> <input wire:model="buscar" 
                        wire:keydown.enter="asignarPrimero()" type="text" class="form-control" id="buscar">  @error("buscar")                    
                                                           
                    @else
                        @if(count($usuarios)>0)
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
                            @endif<button class="btn btn-primary" placeholder="Ciudad">Buscar</button> </div>
                
                </div>
                Selecciona el tipo de inmueble e ingresa la ciudad
            </div>
        </div>
        
    </div>
  
             
              
                    @else
                  
                    @endif
                @enderror
            </div>
        </div>
        <div class="col-md-4">
            <p><strong>Resultados</strong></p>
            <p>
            @foreach($usuarios as $usuario)
                <span class="badge badge-secondary">{{ $usuario->name }}</span>
            @endforeach
            </p>
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
</div>
