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
              










              <link rel="stylesheet" type="text/css" href="assets/slider/css/style.css" />
              <script type="text/javascript" src="assets/slider/js/jquery.js"></script>


              <div id="wowslider-container1">
                <div class="ws_images"><ul>
                  <div class="" id="uploaded_image">
                    
                    
  <input type="text" class="hidden" name="folder" id="folder" value="{{ $inmuebles->folder }}">
                  </div>
                  
                  {{-- <li><img src="assets/slider/images/images/01.jpg" alt="01" title="01" id="wows1_1"/></li>
                  <li><img src="assets/slider/images/images/1631350981_314253_1631351040_noticia_normal_recorte1.jpg" alt="1631350981_314253_1631351040_noticia_normal_recorte1" title="1631350981_314253_1631351040_noticia_normal_recorte1" id="wows1_2"/></li>
                  <li><img src="assets/slider/images/images/casas.jpg" alt="casas" title="casas" id="wows1_3"/></li>
                  <li><img src="assets/slider/images/images/casasdesde500.mensualprestamosnorgeshus.jpg" alt="Casas-desde-500.-€-mensual-prestamos-norges-hus" title="Casas-desde-500.-€-mensual-prestamos-norges-hus" id="wows1_4"/></li>
                  <li><a href="http://wowslider.net"><img src="assets/slider/images/images/casasecologicas_aperturahogarsostenibilidadcertificado1024x629.jpg" alt="html5 slideshow" title="casas-ecológicas_apertura-hogar-sostenibilidad-certificado--1024x629" id="wows1_5"/></a></li>
                  <li><img src="assets/slider/images/images/omicrono_420219253_131917136_1706x960.jpg" alt="omicrono_420219253_131917136_1706x960" title="omicrono_420219253_131917136_1706x960" id="wows1_6"/></li> --}}
                </ul></div>
                <div class="ws_bullets"><div>
                  <a href="#" title="01 (1)"><span><img src="assets/slider/images/tooltips/01_1.jpg" alt="01 (1)"/>1</span></a>
                  <a href="#" title="01"><span><img src="assets/slider/images/tooltips/01.jpg" alt="01"/>2</span></a>
                  <a href="#" title="1631350981_314253_1631351040_noticia_normal_recorte1"><span><img src="assets/slider/images/tooltips/1631350981_314253_1631351040_noticia_normal_recorte1.jpg" alt="1631350981_314253_1631351040_noticia_normal_recorte1"/>3</span></a>
                  <a href="#" title="casas"><span><img src="assets/slider/images/tooltips/casas.jpg" alt="casas"/>4</span></a>
                  <a href="#" title="Casas-desde-500.-€-mensual-prestamos-norges-hus"><span><img src="assets/slider/images/tooltips/casasdesde500.mensualprestamosnorgeshus.jpg" alt="Casas-desde-500.-€-mensual-prestamos-norges-hus"/>5</span></a>
                  <a href="#" title="casas-ecológicas_apertura-hogar-sostenibilidad-certificado--1024x629"><span><img src="assets/slider/images/tooltips/casasecologicas_aperturahogarsostenibilidadcertificado1024x629.jpg" alt="casas-ecológicas_apertura-hogar-sostenibilidad-certificado--1024x629"/>6</span></a>
                  <a href="#" title="omicrono_420219253_131917136_1706x960"><span><img src="assets/slider/images/tooltips/omicrono_420219253_131917136_1706x960.jpg" alt="omicrono_420219253_131917136_1706x960"/>7</span></a>
                </div></div>
                <div class="ws_shadow"></div>
                </div>


            </div>
            <div class="card-footer">
              <b><h4 style="color: rgb(52, 172, 219);">Descripcion</h4></b>                
              <p style="text-align: justify">{{ $inmuebles->descripcion }}</p>
            </div>
           </div>
      </div>

      <div class="col-md-4 p-3">
        <div class="card">
          <div class="card-header p-3">
            <b><h4 style="color: rgb(52, 172, 219);">Ubicación</h4></b>
          </div>
          <div class="body">
            <div class="row t-3 p-3">
              <div class="col-6">Departamento</div>
              <div class="col-6 text-end"><p>{{ $inmuebles->departamento }}</p></div><hr style="width: 90%;">
              <div class="col-6">Ciudad</div>
              <div class="col-6 text-end"><p>{{ $inmuebles->municipio }}</p></div><hr style="width: 90%;">
              <div class="col-6">Barrio</div>
              <div class="col-6 text-end"><p>{{ $inmuebles->barrio }}</p></div><hr style="width: 90%;">
              <div class="col-6">Zona</div>
              <div class="col-6 text-end"><p>{{ $inmuebles->zona }}</p></div><hr style="width: 90%;">
              <div class="col-6">Direccion</div>
              <div class="col-6 text-end"><p>{{ $inmuebles->direccion }}</p></div><hr style="width: 90%;">
              {{-- <div class="col-6">Estrato</div>
              <div class="col-6 text-end"></div><hr style="width: 90%;"> --}}
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 p-3">
        <div class="card ">
          <div class="card-header p-3">
            <b><h4 style="color: rgb(52, 172, 219);">Detalle del inmueble</h4></b>
          </div>
          <div class="card-body">
            <div class="row t-3">
              <div class="col-6"><p>Tipo de inmueble</p></div>
              <div class="col-6 text-end"><p>{{ $inmuebles->tipoinmueble }}</p></div><hr style="width: 90%;">
              <div class="col-6"><p>Categoria</p></div>
              <div class="col-6 text-end"><p>{{ $inmuebles->gestion }}</p></div><hr style="width: 90%;">
              <div class="col-6"><p>Habitaciones</p></div>
              <div class="col-6 text-end"><p>{{ $inmuebles->alcobas }}</p></div><hr style="width: 90%;">
              <div class="col-6"><p>Baños</p></div>
              <div class="col-6 text-end"><p>{{ $inmuebles->banos }}</p></div><hr style="width: 90%;">
              <div class="col-6"><p>Area</p></div>
              <div class="col-6 text-end"><p>{{ $inmuebles->area }}</p></div><hr style="width: 90%;">

            </div>
          </div>
        </div>
      </div>



    </div>
  </div>
</div>

<script type="text/javascript" src="assets/slider/js/wowslider.js"></script>
        
 <script type="text/javascript" src="assets/slider/js/script.js"></script>       


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
            alert('MUCHO PERRO');
            $('#uploaded_image').html(data);
          }
          
        })

      

      }
      
        </script>


@include('layouts.footer.footer') 
 

@endsection