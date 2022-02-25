@extends('layouts.app')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Departamento</th>
        <th scope="col">Barrio</th>
        <th scope="col">Zona</th>
        <th scope="col">Tipo inmueble</th>
        <th scope="col">Gestion</th>
        <th scope="col">Valor</th>
      </tr>
    </thead>
    <tbody>


        @foreach($inmuebles as $inmueble)
      <tr>
        <th scope="row">{{ $inmueble->id }}</th>
        <td>{{ $inmueble->departamento }}</td>
        <td>{{ $inmueble->barrio }}</td>
        <td>{{ $inmueble->zona }}</td>
        <td>{{ $inmueble->tipoinmueble }}</td>
        <td>{{ $inmueble->gestion }}</td>
        <td>{{ $inmueble->valor }}</td>
        <td class="td-actions text-right">
      </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-title p-2">
            <h3>{{ $inmueble->gestion }}</h3>
          </div>
          <div class="card-body">
            <h5>Datos del inmueble</h5>
            <p>- {{ $inmueble->departamento }}</p>
            <p>- {{ $inmueble->barrio }}</p>
            <p>- {{ $inmueble->zona }}</p>
            <p>- {{ $inmueble->tipoinmueble }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  

@endsection