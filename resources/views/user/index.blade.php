@extends('layouts.header.navbarinicio')
@section('content')
<style>
  .btn-delete
  {
    background: none;
    color: rgb(255, 0, 0);
    border: 1px solid rgb(255, 0, 0);
  }
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
  .btn-imagenes
  {
    background: none;
    color: rgb(8, 110, 150);
    border: 1px solid rgb(7, 185, 255);
  }
</style>
<div class="container-fluid">

<div class="container" style="margin-top:80px;">
  <div class="row">
    <div class="col-md-12 pb-3">
      <b><h1 style="color: forestgreen;">Administradores - Activos</h1></b>
    </div>
    <div class="col-md-12">
      <table class="table table-responsive">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre administrador</th>
            <th scope="col">Correo electronico</th>
            <th class="text-right">Acciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach($User as $user)
          <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td class="td-actions text-right">
            <a href="{{ route('user.edit', $user->id) }}"><button type="button" class="btn btn-editar">Editar</button></a>
            <a href="{{ route('user.index', $user->id) }}"><button type="button" class="btn btn-ver">Ver mas</button></a>
            {{-- <form action="{{ route('useradmin.destroy', $user->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro?')">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit" rel="tooltip" onsubmit="return confirm('Segur?')">
              <i class="material-icons">Eliminar</i>
              </button>
          </form> --}}
          </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  
</div>

</div>
  @endsection