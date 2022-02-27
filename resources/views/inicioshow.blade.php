@include('layouts.header.header')
@extends('layouts.header.navbar')
@section('content')
<div class="container">
    <div class="main-content">

      <div class="row">
        
        <div class="col-md-6">
            <div class="card">
              <div class="card-header card-header-primary">
                <div class="card-title"><p class="card-category">Vista detallada del inmueble - publico</p></div>
              </div>
             </div>
            
        </div>
        <div class="col-md-6">
          
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