@extends('layouts.app')
@section('content')
  
  <div class="container-fluid">
    <div class="main-content">
      <div class="row d-flex justify-content-center">
        <div class="col-md-8">
          <form action="{{ route('inmuebles.store') }}" method="post" class="form-horizontal p-2" enctype="multipart/form-data">
            @csrf
            <div class="card">
              <div class="card-header card-header-primary">

                <h4 class="card-title">Lista de los inmuebles activos</h4>
                
              </div>
              <div class="card-body">
                 {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                @endif --}}
                <div class="row">
                  <label for="" class="col-sm-2 col-form-label">departamento</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="departamento" placeholder="Ingrese el departamento" value="{{ old('departamento') }}" autofocus>
                  </div>
                </div>

                <div class="row">
                    <label for="" class="col-sm-2 col-form-label">municipio</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="municipio" placeholder="Ingrese el municipio" value="{{ old('municipio') }}" autofocus>
                    </div>
                  </div>
                  <div class="row">
                    <label for="" class="col-sm-2 col-form-label">barrio</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="barrio" placeholder="Ingrese el barrio" value="{{ old('barrio') }}" autofocus>
                    </div>
                  </div>
                  <div class="row">
                    <label for="" class="col-sm-2 col-form-label">zona</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="zona" placeholder="Ingrese la zona" value="{{ old('zona') }}" autofocus>
                    </div>
                  </div>
                  <div class="row">
                    <label for="" class="col-sm-2 col-form-label">Direccion</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="direccion" placeholder="Ingrese la direccion" value="{{ old('direccion') }}" autofocus>
                    </div>
                  </div>

                  <div class="form-group">
                    <strong>Tipo de inmueble</strong>
                    <select name="tipoinmueble" id="inputCategoria_id" class="form-control custom-select">
                      <option value="">Selecccione el inmueble</option>
                      <option value="1">Casa</option>
                      <option value="1">Apartamento</option>
                      <option value="1">Local</option>
                      <option value="1">Lote</option>
                      <option value="1">Lote</option>
                      {{-- @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombrecate }}</option>
                      @endforeach --}}
                    </select>
                 </div>

                 <div class="form-group">
                    <strong>Gestion </strong>
                    <select name="gestion" id="inputCategoria_id" class="form-control custom-select">
                      <option value="">Selecccione la gestion</option>
                      <option value="1">Arriendo</option>
                      <option value="2">Venta</option>
                      {{-- @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombrecate }}</option>
                      @endforeach --}}
                    </select>
                </div>

                  <div class="row">
                    <label for="" class="col-sm-2 col-form-label">alcobas</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="alcobas" placeholder="alcobas" value="{{ old('alcobas') }}" autofocus>
                    </div>
                  </div>
                  
                  <div class="row">
                    <label for="" class="col-sm-2 col-form-label">baños</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="banos" placeholder="baños" value="{{ old('banos') }}" autofocus>
                    </div>
                  </div>
                  <div class="row">
                    <label for="" class="col-sm-2 col-form-label">area</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="area" placeholder="area" value="{{ old('area') }}" autofocus>
                    </div>
                  </div>

                  <div class="row">
                    <label for="" class="col-sm-2 col-form-label">Valor</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="valor" placeholder="Valor del inmueble" value="{{ old('valor') }}" autofocus>
                    </div>
                  </div>

                  <div class="row">
                    <label for="" class="col-sm-2 col-form-label">Descripcion</label>
                    <div class="col-sm-7">
                      <textarea class="form-control" name="descripcion" placeholder="Valor del inmueble" value="{{ old('valor') }}" autofocus></textarea>
                    </div>
                  </div>
                
                {{-- <div class="row">
                  <div class="col-md-2 col-sm-12">
                    <label for="username" class="col-form-label">Nit</label>
                  </div>
                  <div class="col-sm-12 col-md-4">
                    <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre" value="{{ old('name') }}" autofocus>
                    @if ($errors->has('name'))
                      <span class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                    @endif
                  </div>
                  <div class="col-md-2 col-sm-12">
                    <label for="username" class="col-form-label">Nombres y apellidos</label>
                  </div>
                  <div class="col-sm-12 col-md-4">
                    <input type="text" class="form-control" name="username" placeholder="Ingrese su nombre de usuario" value="{{ old('username') }}">
                    @if ($errors->has('username'))
                      <span class="error text-danger" for="input-username">{{ $errors->first('username') }}</span>
                    @endif
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-2">
                    <label for="username" class="col-form-label">Razon social</label>
                  </div>
                  <div class="col-sm-12 col-md-10">
                    <input type="text" class="form-control" name="username" placeholder="Ingrese su nombre de usuario" value="{{ old('username') }}">
                    @if ($errors->has('username'))
                      <span class="error text-danger" for="input-username">{{ $errors->first('username') }}</span>
                    @endif
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2 col-sm-12">
                    <label for="username" class="col-form-label">Numero de documento</label>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <input type="text" class="form-control" name="username" placeholder="Ingrese su nombre de usuario" value="{{ old('username') }}">
                    @if ($errors->has('username'))
                      <span class="error text-danger" for="input-username">{{ $errors->first('username') }}</span>
                    @endif
                  </div>
                    <div class="col-md-2 col-sm-12">
                      <label for="username" class=" col-form-label">Tipo de documento</label>
                    </div>
                    <div class="col-sm-12 col-md-4">
                      <input type="text" class="form-control" name="username" placeholder="Ingrese numero de documento" value="{{ old('username') }}">
                      @if ($errors->has('username'))
                        <span class="error text-danger" for="input-username">{{ $errors->first('username') }}</span>
                      @endif
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    <label for="email" class="col-form-label">Correo</label>
                  </div>
                  <div class="col-sm-4">
                    <input type="email" class="form-control" name="email" placeholder="Ingrese su correo" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                      <span class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                    @endif
                  </div>
                  <div class="col-md-2 col-sm-12">
                    <label for="username" class=" col-form-label">Numero de Tele/celu</label>
                  </div>
                  <div class="col-sm-12 col-md-4">
                    <input type="text" class="form-control" name="username" placeholder="000-000-0000" value="{{ old('username') }}">
                    @if ($errors->has('username'))
                      <span class="error text-danger" for="input-username">{{ $errors->first('username') }}</span>
                    @endif
                  </div>
                </div> --}}
                {{-- <div class="row">
                  <label for="roles" class="col-sm-2 col-form-label">Roles</label>
                  <div class="col-sm-7">
                      <div class="form-group">
                          <div class="tab-content">
                              <div class="tab-pane active">
                                  <table class="table">
                                      <tbody>
                                        
                                          <tr>
                                              <td>
                                                  <div class="form-check">
                                                      <label class="form-check-label">
                                                          <input class="form-check-input" type="checkbox" name="roles[]"
                                                              value=""
                                                          >
                                                          <span class="form-check-sign">
                                                              <span class="check"></span>
                                                          </span>
                                                      </label>
                                                  </div>
                                              </td>
                                              <td>
                                                 
                                              </td>
                                          </tr>
                                        
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
              </div> --}}
              </div>
              <!--Footer-->
              <div class="card-footer ml-auto mr-auto">
                <div class="row">
                  <div class="col-md-6 p-2">
                    <button type="submit" class="btn col-md-12 btn-primary">Guardar</button>
                  </div>
                  <div class="col-md-6 p-2">
                    <a href="{{ route('inmuebles.index') }}" class="btn col-md-12 btn-warning"><i class="material-icons">Volver</i></a>
                  </div>
                </div>
              </div>
              <!--End footer-->
            </div>
          </form>
        </div>
      </div>
    </div>
    
  </div>
@endsection