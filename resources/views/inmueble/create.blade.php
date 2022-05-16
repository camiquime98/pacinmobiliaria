@extends('layouts.header.navbarinicio') 
@section('content')
<style>
  .btn-ver
  {
    background: none;
    color: rgb(63, 170, 21);
    border: 1px solid rgb(63, 170, 21);
    font-weight: 650;
  }
  .btn-editar
  {
    background: none;
    color: rgb(22, 115, 151);
    border: 1px solid rgb(7, 185, 255);
    font-weight: 650;
  }
  .inputinmueble
  {
    border:none;
    border-top: none;
    border-bottom: 1px solid rgb(18, 99, 165);
    border-radius: 0px; background: transparent;
    padding: 5px;
    width: 100%;
    font-size: 0.9rem;
    font-weight: 400;
    line-height: 1.8;
  }
  .inputinmueble::placeholder
  {
    color: rgb(4, 9, 87);
  }
  .inputinmueble:focus
  {
    border-color: rgba(14, 159, 216, 0.521);

    box-shadow: 0 1px 1px rgba(14, 159, 216, 0.521)inset, 0 0 8px rgba(14, 159, 216, 0.521);

    outline: 0 none;
  }
  .fondo-create-inmueble
  {
    background: linear-gradient(90deg, rgba(255, 255, 255, 0.938)100%, rgba(255, 255, 255, 0.959)10%), url('/assets/images/create-inmueble.jpg');
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
  }
  .card_inmueble
  {
    background: rgba(255, 255, 255, 0.761);
  }
</style>
    
 
  <div class="container-fluid m-0 p-0 fondo-create-inmueble">
    <div class="main-content" style="margin-top: 3px;">

      <form action="{{ route('inmueble.store') }}" method="post" class="form-horizontal p-2" enctype="multipart/form-data">
        @csrf
      <div class="container">

      
      <div class="row d-flex justify-content-center p-3">
        <div class="container p-3">
          <b><h1 style="color: forestgreen;">CREACIÓN - INMUEBLE</h1></b>
        </div>
        <div class="row d-flex justify-content-center p-3">
        <div class="col-md-6 p-2">
        <div class="card p-3 card_inmueble">
          <h4 style="color:rgb(247, 131, 29)">Datos residencia</h4>
          
          <br>
          <div class="row">
            <div class="col-md-6 col-sm-12 p-3">
              <input type="text" class="inputinmueble" name="departamento" placeholder="Departamento" value="{{ old('departamento') }}" autofocus>
            </div>
            <div class="col-md-6 col-sm-12 p-3">
              
              <input type="text" class=" inputinmueble" name="municipio" placeholder="Municipio" value="{{ old('municipio') }}" autofocus>
            </div>
            <div class="col-md-6 col-sm-12 p-3">
              
              <input type="text" class=" inputinmueble" name="barrio" placeholder="Barrio" value="{{ old('barrio') }}" autofocus>
            </div>
            <div class="col-md-6 col-sm-12 p-3">
             
              <input type="text" class=" inputinmueble" name="zona" placeholder="Zona: Centro, Norte, Sur.." value="{{ old('zona') }}" autofocus>
            </div>
            <div class="col-md-6 col-sm-12 p-3">
             
              <input type="text" class=" inputinmueble" name="direccion" placeholder="Direccion" value="{{ old('direccion') }}" autofocus>
            </div>
            <div class="col-md-6 col-sm-12 p-3">
            
              <input type="text" class=" inputinmueble" name="estrato" placeholder="Nivel del estrato" value="{{ old('estrato') }}" autofocus>  
          </div>
          </div>
        
        </div>
        </div>
        <div class="col-md-6 p-2">
          <div class="card card_inmueble p-3">
          <h4 style="color:rgb(247, 131, 29)">Datos del inmueble</h4>
          
          <br>
          <div class="row">
            <div class="col-md-6 col-sm-12 p-3">
             
                    <select name="tipoinmueble" id="inputCategoria_id" class="inputinmueble custom-select">
                      <option value="">Seleccióne el tipo inmueble</option>
                      <option value="Casa">Casa</option>
                      <option value="Casacampestre">Casa campestre</option>
                      <option value="Apartamento">Apartamento</option>
                      {{-- <option value="Habitacion">Habitacion</option> --}}
                      <option value="Terreno">Lote</option>
                      <option value="Bodega">Bodega</option>
                      <option value="Finca">Finca</option>
                      <option value="Local">Local</option>
                      <option value="Casalote">Casa lote</option>
                      {{-- @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombrecate }}</option>
                      @endforeach --}}
                    </select>
            </div>
            <div class="col-md-6 col-sm-12 p-3">
           
              <select name="gestion" id="inputCategoria_id" class=" inputinmueble custom-select">
                <option value="">Seleccióne la gestión</option>
                <option value="Arriendo">Arriendo</option>
                <option value="Venta">Venta</option>
                {{-- @foreach($categorias as $categoria)
                  <option value="{{ $categoria->id }}">{{ $categoria->nombrecate }}</option>
                @endforeach --}}
              </select>
            </div>
            <div class="col-md-6 col-sm-12 p-3">
            
              <input type="text" class=" inputinmueble" name="alcobas" placeholder="Numero de lcobas" value="{{ old('alcobas') }}" autofocus>
            </div>
            <div class="col-md-6 col-sm-12 p-3">
            
              <input type="text" class=" inputinmueble" name="banos" placeholder="Numero de baños" value="{{ old('banos') }}" autofocus>
            </div>
            <div class="col-md-6 col-sm-12 p-3">
              
              <input type="text" class=" inputinmueble" name="area" placeholder="Area o metros cuadrados" value="{{ old('area') }}" autofocus>
            </div>
            <div class="col-md-6 col-sm-12 p-3">
              <input type="text" class=" inputinmueble" name="valor" placeholder="Valor del inmueble" value="{{ old('valor') }}" autofocus>
            </div>
            
          </div>
        </div>
        </div>

      </div>   
      <div class="col-md-6 col-sm-12 p-3">
        <textarea class="form-control" name="descripcion" id="" cols="30" rows="5" value="{{ old('descripcion') }}" placeholder="Descripcion del inmueble"></textarea>
        {{-- <input type="text" class=" inputinmueble" name="descripcion" placeholder="Descripcion" value="{{ old('descripcion') }}" autofocus> --}}
      </div>


{{-- 
      <div class="col-md-12 col-sm-12 p-3" style="height: 200px;">
        <div class="card w-100 h-100 d-flex justify-content-center card_inmueble">
          <label for="">Agregar imagenes del inmueble</label>
            <input type="file" name="image" id="image" class="inputinmueble" multiple accept="image/*">
        </div>
      </div> --}}


        <div class="col-md-12 col-sm-12 p-3">
          <div class="card card_inmueble p-3">

          
          <div class="row d-flex justify-content-center p-3">
            
            <div class="col-md-12">
              <h3 style="color:rgb(247, 131, 29)">Datos del propietario</h3>
            </div>
            
            <div class="col-md-3 p-3">
             
              <input type="text" class=" inputinmueble" name="nombrepro" placeholder="Nombres completos" value="{{ old('nombrepro') }}" autofocus>
            </div>
            <div class="col-md-3 p-3">
          
              <input type="text" class=" inputinmueble" name="apellidopro" placeholder="Apellidos completos" value="{{ old('apellidopro') }}" autofocus>
            </div>
            <div class="col-md-3 p-3">
             
              <input type="text" class=" inputinmueble" name="cedulapro" placeholder="Documento de identidad" value="{{ old('cedulapro') }}" autofocus>
            </div>
            <div class="col-md-3 p-3">
          
              <input type="text" class=" inputinmueble" name="direccionpro" placeholder="Direccion de residencia" value="{{ old('direccionpro') }}" autofocus>
            </div>
            <div class="col-md-3 p-3">
           
              <input type="text" class=" inputinmueble" name="departamentopro" placeholder="Departamento" value="{{ old('departamentopro') }}" autofocus>
            </div>
            <div class="col-md-3 p-3">
      
              <input type="text" class=" inputinmueble" name="municipiopro" placeholder="Municipio" value="{{ old('municipiopro') }}" autofocus>
            </div>
            <div class="col-md-3 p-3">
              
              <input type="text" class=" inputinmueble" name="celularpro" placeholder="Celular" value="{{ old('celularpro') }}" autofocus>
            </div>
            <div class="col-md-3 p-3">
              
              <input type="email" class=" inputinmueble" name="correopro" placeholder="correo electronico" value="{{ old('correopro') }}" autofocus>
            </div>
            
          </div>
        </div>
        </div>
        
      </div>

    </div>






      <div class="row d-flex justify-content-center p-3">
        <div class="col-md-10 col-sm-12">
          <div class="row d-flex justify-content-end">
            <div class="col-md-2 col-sm-12 p-2">
              <button type="submit" class="btn col-sm-12 btn-ver">Guardar</button>
            </div>
            <div class="col-md-2 col-sm-12 p-2">
              <a href="{{ route('inmueble.index') }}" class="btn col-sm-12 btn-editar "><i class="material-icons">Volver</i></a>
            </div>
          </div>
        </div>
      </div>   
    </form>       
   </div>
 </div>
 @include('layouts.footer.footercontacto')
@endsection