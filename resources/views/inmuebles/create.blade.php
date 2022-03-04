@extends('layouts.app') 
@section('content')

 
  <div class="container-fluid m-0 p-0">
    <div class="main-content" style="margin-top: 70px">
      <div class="container-fluid p-3" style="background: azure;">
        <b><h1 style="color: forestgreen;">CREACIÓN - INMUEBLE</h1></b>
      </div><hr>
      <form action="{{ route('inmuebles.store') }}" method="post" class="form-horizontal p-2" enctype="multipart/form-data">
        @csrf
      <div class="row d-flex justify-content-center p-3">
        <div class="col-md-5">
          <h4 style="color:rgb(247, 131, 29)">Datos residencia</h4>
          <hr>
          <div class="row">
            <div class="col-md-6 p-3">
              <strong>Departamento</strong>
              <input type="text" class="form-control" name="departamento" placeholder="Ingrese el departamento" value="{{ old('departamento') }}" autofocus>
            </div>
            <div class="col-md-6 p-3">
              <strong>Municipio</strong>
              <input type="text" class="form-control" name="municipio" placeholder="Ingrese el municipio" value="{{ old('municipio') }}" autofocus>
            </div>
            <div class="col-md-6 p-3">
              <strong>Barrio</strong>
              <input type="text" class="form-control" name="barrio" placeholder="Ingrese el barrio" value="{{ old('barrio') }}" autofocus>
            </div>
            <div class="col-md-6 p-3">
              <strong>Zona</strong>
              <input type="text" class="form-control" name="zona" placeholder="Ingrese la zona" value="{{ old('zona') }}" autofocus>
            </div>
            <div class="col-md-6 p-3">
              <strong>Dirección</strong>
              <input type="text" class="form-control" name="direccion" placeholder="Ingrese la direccion" value="{{ old('direccion') }}" autofocus>
            </div>
            <div class="col-md-6 p-3">
              <strong>Estrato</strong>
              <input type="text" class="form-control" name="direccion" placeholder="Nivel de estrato" value="{{ old('direccion') }}" autofocus>
            </div>
            <div class="col-md-12">
              <form action="{{ route('inmuebles.store')}}" method="post" class="dropzone" id="my-awesone-dropzone">
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <h4 style="color:rgb(247, 131, 29)">Datos del inmueble</h4>
          <hr>
          <div class="row">
            <div class="col-md-6 p-3">
              <strong>Tipo de inmueble</strong>
                    <select name="tipoinmueble" id="inputCategoria_id" class="form-control custom-select">
                      <option value="">Seleccióne el tipo</option>
                      <option value="Casa">Casa</option>
                      <option value="Apartamento">Apartamento</option>
                      <option value="Hanitacion">Habitacion</option>
                      <option value="Lote">Lote</option>
                      <option value="Finca">Finca</option>
                      <option value="Local">Local</option>
                      <option value="Finca">Finca</option>
                      {{-- @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombrecate }}</option>
                      @endforeach --}}
                    </select>
            </div>
            <div class="col-md-6 p-3">
              <strong>Gestión</strong>
              <select name="gestion" id="inputCategoria_id" class="form-control custom-select">
                <option value="">Seleccióne la gestión</option>
                <option value="Arriendo">Arriendo</option>
                <option value="Venta">Venta</option>
                {{-- @foreach($categorias as $categoria)
                  <option value="{{ $categoria->id }}">{{ $categoria->nombrecate }}</option>
                @endforeach --}}
              </select>
            </div>
            <div class="col-md-6 p-3">
              <strong>Alcobas</strong>
              <input type="text" class="form-control" name="alcobas" placeholder="alcobas" value="{{ old('alcobas') }}" autofocus>
            </div>
            <div class="col-md-6 p-3">
              <strong>Baños</strong>
              <input type="text" class="form-control" name="banos" placeholder="baños" value="{{ old('banos') }}" autofocus>
            </div>
            <div class="col-md-6 p-3">
              <strong>Area</strong>
              <input type="text" class="form-control" name="area" placeholder="area" value="{{ old('area') }}" autofocus>
            </div>
            <div class="col-md-6 p-3">
              <strong>Valor</strong>
              <input type="text" class="form-control" name="valor" placeholder="Valor del inmueble" value="{{ old('valor') }}" autofocus>
            </div>
            <div class="col-md-12 p-3">
              <strong>Descripcion</strong>
              <input class="form-control" name="descripcion" placeholder="Descripcion" value="{{ old('descripcion') }}" autofocus>
            </div>
          </div>
        </div>

        <div class="col-md-10 col-sm-12">
          <div class="row d-flex justify-content-center p-3">
            <div class="col-md-12">
              <h3 style="color:rgb(247, 131, 29)">Datos del propietario</h3>
            </div>
            <hr>
            <div class="col-md-4 p-3">
              <strong>Nombres</strong>
              <input type="text" class="form-control" name="nombrepro" placeholder="Nombres completos" value="{{ old('nombres') }}" autofocus>
            </div>
            <div class="col-md-4 p-3">
              <strong>Apellidos</strong>
              <input type="text" class="form-control" name="apellidopro" placeholder="Apellidos completos" value="{{ old('apellidos') }}" autofocus>
            </div>
            <div class="col-md-4 p-3">
              <strong>Cedula</strong>
              <input type="text" class="form-control" name="cedulapro" placeholder="Apellidos completos" value="{{ old('apellidos') }}" autofocus>
            </div>
            <div class="col-md-4 p-3">
              <strong>Direccion de residencia</strong>
              <input type="text" class="form-control" name="direccionpro" placeholder="Apellidos completos" value="{{ old('apellidos') }}" autofocus>
            </div>
            <div class="col-md-4 p-3">
              <strong>Departamento</strong>
              <input type="text" class="form-control" name="departamentopro" placeholder="Apellidos completos" value="{{ old('apellidos') }}" autofocus>
            </div>
            <div class="col-md-4 p-3">
              <strong>Municipio</strong>
              <input type="text" class="form-control" name="municipiopro" placeholder="Apellidos completos" value="{{ old('apellidos') }}" autofocus>
            </div>
            <div class="col-md-4 p-3">
              <strong>Celular</strong>
              <input type="text" class="form-control" name="celularpro" placeholder="Apellidos completos" value="{{ old('apellidos') }}" autofocus>
            </div>
            <div class="col-md-4 p-3">
              <strong>Correo electronico</strong>
              <input type="text" class="form-control" name="correopro" placeholder="Apellidos completos" value="{{ old('apellidos') }}" autofocus>
            </div>
          </div>
        </div>
        
      </div>
      <div class="row d-flex justify-content-center p-3">
        <div class="col-md-10 col-sm-12">
          <div class="row d-flex justify-content-end">
            <div class="col-md-2 col-sm-12 p-2">
              <button type="submit" class="btn col-sm-12 btn-primary">Guardar</button>
            </div>
            <div class="col-md-2 col-sm-12 p-2">
              <a href="{{ route('inmuebles.index') }}" class="btn col-sm-12 btn-warning text-white"><i class="material-icons">Volver</i></a>
            </div>
          </div>
        </div>
      </div>   
    </form>       
   </div>
 </div>
 @include('layouts.footer.footercontacto')
@endsection