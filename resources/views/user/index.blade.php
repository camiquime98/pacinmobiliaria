@extends('layouts.header.navbarinicio')
@section('content')


<div class="container pt-5">


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
        <a href="{{ route('user.edit', $user->id) }}"><button type="button" class="btn btn-warning">Editar</button></a>
        <a href="{{ route('user.index', $user->id) }}"><button type="button" class="btn btn-success">Ver</button></a>
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
  @endsection