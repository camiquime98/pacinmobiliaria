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
              -------------AQUI VAN LAS IMAGENES -----------------
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
 
@endsection