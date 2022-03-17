
<div>
    <div class="page-head">
        <div class="container">
         
            <div class="row height d-flex justify-content-center align-items-center" style="color: #fff">
                   <h3 class="titulo-s" style="color:#fff; font-weight: 800;text-transform: none; font-size:35px;">Busca tu inmueble</h3>
                <div class="col-md-10 d-flex justify-content-center">
                    <ul id="myTab" class="nav nav-tabs" role="tablist">
                <li role="presentation" class="btn btn-primary"style="max-height:50px; min">
                          
                         <div class="dropdown" >
  <button class="btn dropdown-toggle" type="button" style="background-color: #0d6efd; color:#fff; border:none;" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    ¿Qué buscar? 
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a   id="dropdown1-tab"   onclick="casa()">Casa</a></li>
    <li><a  role="tab" id="dropdown2-tab" data-toggle="tab"  onclick="apartamento()">Apartamento</a></li>
    <li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown3-tab" data-toggle="tab" aria-controls="dropdown2" onclick="casacampestre()">Casa campestre</a></li>
    <li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown4-tab" data-toggle="tab" aria-controls="dropdown2" onclick="terreno()">Terreno</a></li>
    <li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown5-tab" data-toggle="tab" aria-controls="dropdown2" onclick="bodega()">Bodega</a></li>
    <li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown6-tab" data-toggle="tab" aria-controls="dropdown2" onclick="apartaestudio()">Apartaestudio</a></li>
    <li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown7-tab" data-toggle="tab" aria-controls="dropdown2" onclick="casalote()">casa lote</a></li>

  </ul>
</div>
                         
                        </li>
                      </ul> 
                      <input type="number" value="0" id="casa" name="casa" class="hidden">
                      <input type="number" value="0" id="apartamento" name="apartamento" class="hidden">
                      <input type="number" value="0" id="casacampestre" name="casacampestre" class="hidden">
                      <input type="number" value="0" id="terreno" name="terreno" class="hidden">
                      <input type="number" value="0" id="bodega" name="bodega" class="hidden">
                      <input type="number" value="0" id="apartaestudio" name="apartaestudio" class="hidden">
                      <input type="number" value="0" id="casalote" name="casalote" class="hidden" ">
                    <div class="search"> <i class="fa fa-search text-dark"></i> <input wire:model="buscar" 
                        wire:keydown.enter="asignarPrimero()" type="text" class="form-control" id="buscar"style="height:50px; background: rgba(255, 255, 255, 0.6);" >  @error("buscar")                    
                                                           
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
                Selecciona el tipo de inmueble e ingresa la ciudad
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
                    <ul class="resp-tabs-list">
                        <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>En venta</span></li> 
                        <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>En renta</span></li> 
                        
                    </ul>	
                                   
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
