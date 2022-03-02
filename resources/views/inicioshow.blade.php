@include('layouts.header.header')
@extends('layouts.header.navbar')
@section('content')
<div class="container">
  <div class="main-content">
    <div class="row p-3">
      <div class="col-md-8 col-sm-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <div class="card-title"><h2 style="color: coral;">{{ $inmuebles->gestion }} - {{ $inmuebles->municipio }}</h2><p class="card-category">Vista detallada del inmueble</p></div>
              <hr>
            </div>
           </div>
      </div>
      <div class="col-md-4 col-sm-12">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-5"><b><h2 style="color: rgb(52, 172, 219);">VALOR</h2></b></div>
              <div class="col-7 text-end">
                <b><h3 style="color: coral;">${{ $inmuebles->valor }}</h3></b>
              </div>
            </div>
          </div>
          <div class="card-body">
            <b><h4 style="color: rgb(52, 172, 219);">Residencia</h4></b><hr>
            <div class="row t-3">
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
              <div class="col-6">Estrato</div>
              <div class="col-6 text-end"></div>
            </div><br>
            <b><h4 style="color: rgb(52, 172, 219);">Detalle - inmueble</h4></b><hr>
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
              <div class="col-6"><p>Descripcion</p></div>
              <div class="col-6 text-end">
                <p style="text-align: justify">{{ $inmuebles->descripcion }}</p>
              </div>
            </div><hr>
            
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