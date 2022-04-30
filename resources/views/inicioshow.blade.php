@include('layouts.header.header')
@extends('layouts.header.navbar')
@section('content')
<style>
  .btn-ver
{
background: none;
color: rgb(63, 170, 21);
border: 1px solid rgb(63, 170, 21);
}
.btn-editar
{
background: none;
color: rgb(22, 115, 151);
border: 1px solid rgb(7, 185, 255);
}
</style>
<div class="container-fluid m-0 p-0" style="">
<div class="main-content">
  <div class="row p-3 d-flex justify-content-center">
    <div class="col-md-10 col-sm-12 p-3">
      <div class="row p-2">
        <div class="col-md-12">
          <div class="row d-flex justify-content-end">
            
            
          </div>
        </div>
      </div>
        <div class="card" style="background: rgba(255, 255, 255, 0.822); border: none;!important">
          
          <div class="card-header" style="background: transparent; border:none!important;">
            <div class="row d-felx justify-content-center">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="card-title"><h1 style="font-size:20px; color: #FDA30E; text-transform: uppercase;">{{ $inmuebles->gestion }} </h1>
                      <h5 style="font-size:20px; color: #FDA30E; text-transform: uppercase;">{{ $inmuebles->municipio }} - {{ $inmuebles->departamento }}</h5>
                        <p class="card-category">Vista detallada del inmueble</p>
                    </div>
                  </div>
                  <div class="col-md-6 text-end"> 
                          <b><h1 style="color: #FDA30E; font-size:25px;">${{ $inmuebles->valor }}</h1></b>
                          <b><h1 style="color: #18435c; font-size:15px;">pesos colombianos</h1></b>
                  </div>
                </div>
                
                
              </div>
            </div>
          </div>
          
          <div class="card-body">
            <div class="row">
              <div class="col-md-8 p-0 m-0">
                <div class="row">
                  <div class="col-md-12">
                    <link rel="stylesheet" type="text/css" href="../assets/slider/css/style.css"/>
                <script type="text/javascript" src="../assets/slider/js/jquery.js"></script>
          
                <input type="text" class="hidden" name="folder" id="folder" value="{{ $inmuebles->folder }}">
                <div id="wowslider-container1" style="width: 100%;">
                    
                </div>
                  </div>
                  <div class="card-footer col-md-12 col-sm-12" style="background: transparent; border: none;">
                    <b><h4 style="color: rgb(45, 74, 94);">Descripcion</h4></b>                
            <p style="text-align: justify">{{ $inmuebles->descripcion }}</p>
                  </div>
                </div>
                
              </div>
              <div class="col-md-4 p-0 m-0">
                <div class="row">
                  <div class="col-12 pb-2">
                    <div class="card">
                      <div class="card-header p-3" style="background: #FDA30E;">
                        <b><h4 style="color: rgb(255, 255, 255);">Ubicación</h4></b>
                      </div>
                      <div class="body">
                        <div class="row t-3 p-3" style="color: #18435c;">
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
                          <div class="col-6 text-end"></div><hr style="width: 90%;"> --}}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 pb-2">
                    <div class="card ">
                      <div class="card-header p-3" style="background: #FDA30E;">
                        <b><h4 style="color: rgb(255, 255, 255);">Detalle del inmueble</h4></b>
                      </div>
                      <div class="card-body">
                        <div class="row t-3" style="color: #18435c">
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
                  {{-- <div class="col-12">
                    <div class="card ">
                      <div class="card-header p-3">
                        <b><h4 style="color: rgb(52, 172, 219);">Propietario</h4></b>
                      </div>
                      <div class="card-body">
                        <div class="row t-3">
                          <div class="col-6"><p>Nombre</p></div>
                          <div class="col-6 text-end"><p>{{ $inmuebles->nombrepro }}</p></div>
                          <div class="col-6"><p>Apellido</p></div>
                          <div class="col-6 text-end"><p>{{ $inmuebles->apellidopro }}</p></div>
                          <div class="col-6"><p>Cedula</p></div>
                          <div class="col-6 text-end"><p>{{ $inmuebles->cedulapro }}</p></div>
                          <div class="col-6"><p>Direccion</p></div>
                          <div class="col-6 text-end"><p>{{ $inmuebles->direccionpro }}</p></div>
                          <div class="col-6"><p>Departamento</p></div>
                          <div class="col-6 text-end"><p>{{ $inmuebles->departamentopro }}</p></div>
                          <div class="col-6"><p>Municipio - lugar de residencia</p></div>
                          <div class="col-6 text-end"><p>{{ $inmuebles->municipiopro }}</p></div>
                          <div class="col-6"><p>Celular/telefono</p></div>
                          <div class="col-6 text-end"><p>{{ $inmuebles->celularpro }}</p></div>
                          <div class="col-6"><p>E-mail</p></div>
                          <div class="col-6 text-end"><p>{{ $inmuebles->correopro }}</p></div>
                        </div>
                      </div>
                    </div>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
         </div>
    </div>
  </div>


  <div class="container-fluid" style="background-image: url('assets/images/fondo-seguros.png'); background-repeat: no-repeat;
                background-size: 100% 100%; background-attachment: fixed;">
                
                    <div class="container">
                    <div class="row d-flex justify-content-center" style="margin-top: 10px; margin-bottom:20px;">
                        <div class="col-md-12 text-center" style="margin-top: 20px ;margin-bottom: 20px; color: rgb(45, 74, 94);">
                            <h3 style="color: rgb(20, 64, 94); font-weight: 600;">Siempre pensamos en la seguridad de nuestros clientes.</h3>
                            <br>
                            <h4 style="color: #FDA30E">Elige nuestro convenido a travez de un intermediario.</h4>
                        </div>
                        <div class="col-md-12 d-flex justify-content-center">
                          <div class="row" style="display: flex;justify-content: center;">
                            <div class="col-md-2">
                              <img src="assets/images/loby-seguros.png" alt="" srcset="" style="width: 150px; height: 80px;">
                            </div>
                            <div class="col-md-2">
                              <img src="assets/images/mapfre-seguros.png" alt="" srcset=""  style="width: 150px; height: 80px;">
                            </div>
                            <div class="col-md-2">
                              <img src="assets/images/seguros-mundial.png" alt="" srcset=""  style="width: 150px; height: 80px;">
                            </div>
                            <div class="col-md-2">
                              <img src="assets/images/seguros-estado.png" alt="" srcset=""  style="width: 150px; height: 60px;">
                            </div>
                            <div class="col-md-2">
                              <img src="assets/images/seguros-previsora.png" alt="" srcset=""  style="width: 150px; height: 60px;">
                            </div>
                            </div>
                        </div>
                        

          
                        <div class="col-md-12 mt-4 d-flex justify-content-center">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-6">
                                            <a href="http://" calss="btn" style="color:rgb(255, 255, 255)!important; background: #FDA30E; padding:10px 25px;border-radius: 8px;">COTIZAR</a>
                                        
                                </div>
                                <div class="col-md-6 d-flex justify-content-center align-items-center">
                                    <p>Carol Marina Vargas</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                </div>
</div>




@include('layouts.footer.footercontacto')





         {{-- <div class="card-boy">
           <div class="author">
             <a href="#">
               <img src="{{ asset('/img/default-avatar.png') }}" alt="image" class="avatar">
               <h5 class="title mt-3">hiiii</h5>
             </a>
    
             <p class="description">
                 {{ $inmueble->departamento }}<br>
                 {{ $inmueble->barrio }}<br>
                 {{ $inmueble->zona }}<br>
                 {{ $inmueble->tipoinmueble }}<br>
                 {{ $inmueble->gestion }}<br>
                 {{ $inmueble->valor }}
             </p>
             
           </div>
         
         </div> --}}
         {{-- <div class="card-description">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam officia corporis molestiae aliquid provident placeat.
        </div> --}}
        
         <!--body-->
         
       {{-- </div>
     </div> --}}
    {{-- <div class="col-md-6">

        
       <div class="card">
        <div class="card-header card-header-primary">
          <div class="card-title">Usuarios  <p class="card-category">Vista detallada del inmueble {{ $inmuebles->tipoinmueble }}</p></div>
         
        </div>
        <div class="card-boy">
          <div class="author">
            <a href="#">
              <img src="{{ asset('/img/default-avatar.png') }}" alt="image" class="avatar">
              <h5 class="title mt-3">hiiii</h5>
            </a>
            <p class="description">
                {{ $inmueble->departamento }}<br>
                {{ $inmueble->barrio }}<br>
                {{ $inmueble->zona }}<br>
                {{ $inmueble->tipoinmueble }}<br>
                {{ $inmueble->gestion }}<br>
                {{ $inmueble->valor }}
            </p>
          </div>
        
        </div>
        <div class="card-description">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam officia corporis molestiae aliquid provident placeat.
       </div>
       
        <!--body-->
        
      </div>
    </div> --}}

    {{-- <div class="col-md-6">
      <div class="card card-user">
        <div class="card-body">
          <table class="table table-bordered table-striped">
            <tbody>
              <tr>
                <th>Clase inmueble</th>
                <td>{{ $inmueble->tipoinmueble }}
                </td>
              </tr>
              <tr>
                <th>Habitaciones</th>
                <td>{{ $inmueble->alcoba }}</td>
              </tr>
              <tr>
                <th>Baños</th>
                <td>{{ $inmueble->banos }}</td>
              </tr>
              <tr>
            
                <th>Area</th>
                <td><span class="badge badge-primary">{{ $inmueble->area }}</span></td>
              </tr>
              <tr>
                <th>Created at</th>
                <td><a href="#" target="_blank">{{  $inmueble->valor  }}</a></td>
              </tr>
              {{-- <tr>
                  <th>Roles</th>
                  <td>
                      @forelse ($user->roles as $role)
                          <span class="badge rounded-pill bg-dark text-white">{{ $role->name }}</span>
                      @empty
                          <span class="badge badge-danger bg-danger">No roles</span>
                      @endforelse
                  </td>
              </tr> --}}
            {{-- </tbody>
          </table>
        </div>
      </div>
    </div> --}}
    {{-- <div class="w-50">
      <div class="button-container">
        <div class="row">
          <div class="col-md-6 p-2">
              <a href="{{ route('inmuebles.edit', $inmueble->id) }}" class="btn col-md-12 btn-warning"><i class="material-icons">Editar</i></a>
          </div>
          <div class="col-md-6 p-2">
              <a href="{{ route('inmuebles.index') }}" class="btn col-md-12 btn-primary"><i class="material-icons">Volver</i></a>
          </div>
        </div>
      </div>
    </div> --}}
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



<script type="text/javascript" src="../assets/slider/js/wowslider.js"></script>
    
<script type="text/javascript" src="../assets/slider/js/script.js"></script>  

@endsection