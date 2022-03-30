@include('layouts.header.header')
@extends('layouts.header.navbar')
@section('content')
<div class="container">

  <div class="main-content">
    <div class="row p-3">
      <div class="col-md-12 col-sm-12 p-3">
          <div class="card">
            <div class="card-header card-header-primary">
              <div class="row">
                <div class="col-md-6">
                  <div class="card-title"><h2 style="color: coral; text-transform: uppercase;">{{ $inmuebles->gestion }} </h2>
                    <h5 style="color: coral; text-transform: uppercase;">{{ $inmuebles->municipio }} - {{ $inmuebles->departamento }}</h5>
                      <p class="card-category">Vista detallada del inmueble</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="text-end">
                    <b><h2 style="color: coral;">${{ $inmuebles->valor }}</h2></b>
                  </div>
                </div>
              </div>
              <hr>
            </div>
            <div class="card-body">
              <link rel="stylesheet" type="text/css" href="assets/slider/css/style.css"/>
              <script type="text/javascript" src="assets/slider/js/jquery.js"></script>
              <div class="row">
                <div class="col-md-8">
                  <input type="text" class="hidden" name="folder" id="folder" value="{{ $inmuebles->folder }}">
                  <div id="wowslider-container1" style="">
                      
                  </div>
                </div>
                <div class="col-md-4">

                  <div class="row">
                    <div class="col-md-12 pb-3">
                      <div class="card">
                        <div class="card-header p-3">
                          <b><h4 style="color: rgb(52, 172, 219);">Ubicación</h4></b>
                        </div>
                        <div class="body">
                          <div class="row t-3 p-3">
                            <div class="col-6">Departamento</div>
                            <div class="col-6 text-end"><p>{{ $inmuebles->departamento }}</p></div>
                            <div class="col-6">Ciudad</div>
                            <div class="col-6 text-end"><p>{{ $inmuebles->municipio }}</p></div>
                            <div class="col-6">Barrio</div>
                            <div class="col-6 text-end"><p>{{ $inmuebles->barrio }}</p></div>
                            <div class="col-6">Zona</div>
                            <div class="col-6 text-end"><p>{{ $inmuebles->zona }}</p></div>
                            <div class="col-6">Direccion</div>
                            <div class="col-6 text-end"><p>{{ $inmuebles->direccion }}</p></div>
                            {{-- <div class="col-6">Estrato</div>
                            <div class="col-6 text-end"></div> --}}
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="card ">
                        <div class="card-header p-3">
                          <b><h4 style="color: rgb(52, 172, 219);">Detalle del inmueble</h4></b>
                        </div>
                        <div class="card-body">
                          <div class="row t-3">
                            <div class="col-6"><p>Tipo de inmueble</p></div>
                            <div class="col-6 text-end"><p>{{ $inmuebles->tipoinmueble }}</p></div>
                            <div class="col-6"><p>Categoria</p></div>
                            <div class="col-6 text-end"><p>{{ $inmuebles->gestion }}</p></div>
                            <div class="col-6"><p>Habitaciones</p></div>
                            <div class="col-6 text-end"><p>{{ $inmuebles->alcobas }}</p></div>
                            <div class="col-6"><p>Baños</p></div>
                            <div class="col-6 text-end"><p>{{ $inmuebles->banos }}</p></div>
                            <div class="col-6"><p>Area</p></div>
                            <div class="col-6 text-end"><p>{{ $inmuebles->area }}</p></div>
              
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
              

                
              
              
              
              


            </div>
            <div class="card-footer">
              <b><h4 style="color: rgb(52, 172, 219);">Descripcion</h4></b>                
              <p style="text-align: justify">{{ $inmuebles->descripcion }}</p>
            </div>
           </div>
      </div>





    </div>
  </div>
</div>

    


        <script>
           
           load_images();
function load_images()
{

var folder =document.getElementById('folder').value;


  $.ajax({
 data:{folder : folder},
    url:"{{ route('imageinmueble.fetch_image_show') }}",
    success:function(data)
    {
    
      $('#wowslider-container1').html(data);
    }
    
  })



}
        
      
        </script>


@include('layouts.footer.footer') 
 
<script type="text/javascript" src="assets/slider/js/wowslider.js"></script>
        
 <script type="text/javascript" src="assets/slider/js/script.js"></script>   
@endsection