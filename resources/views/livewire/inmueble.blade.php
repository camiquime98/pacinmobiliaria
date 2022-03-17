<div>
    <div class="row d-flex justify-content-center p-3" style="margin:0px;">
        <div class="col-md-12" style="margin-top:90px;">
            <div class="row d-flex justify-content-end p-2">
                <div class="col-md-3 d-flex justify-content-end">
                  <a class="btn btn-md btn-primary" href="{{ route('inmueble.create') }}">Agregar inmueble</a>   
                </div>
            </div>
         
          <div class="w-full flex pb-10">
            <div class="w-3/6 mx-1">
                <input wire:model.debounce.300ms="search" type="text" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"placeholder="Busca aqui...">
            </div>
            <div class="w-1/6 relative mx-1">
                <select wire:model="orderBy" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                    <option value="id">ID</option>
                    <option value="name">name</option>
                    <option value="email">Email</option>
                    <option value="created_at">Sign Up Date</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
            <div class="w-1/6 relative mx-1">
                <select wire:model="orderAsc" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                    <option value="1">Ascendente</option>
                    <option value="0">Descendente</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
            <div class="w-1/6 relative mx-1">
                <select wire:model="perPage" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                    <option>10</option>
                    <option>25</option>
                    <option>50</option>
                    <option>100</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
        </div>
    
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Propietario</th>
                  <th scope="col">Cedula</th>
                  <th scope="col">N° Celular</th>
                  <th scope="col">Departamento/inmueble</th>
                  <th scope="col">Barrio</th>
                  <th scope="col">Zona</th>
                  <th scope="col">Tipo inmueble</th>
                  <th scope="col">Gestion</th>
                  <th scope="col">Valor</th>
                  <th class="text-right">Acciones</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($inmuebles as $inmueble)
                <tr>
                  <th scope="row">{{ $inmueble->id }}</th>
                  <td>{{ $inmueble->nombrepro }}</td>
                  <td>{{ $inmueble->cedulapro }}</td>
                  <td>{{ $inmueble->celularpro }}</td>
                  <td>{{ $inmueble->departamento }}</td>
                  <td>{{ $inmueble->barrio }}</td>
                  <td>{{ $inmueble->zona }}</td>
                  <td>{{ $inmueble->tipoinmueble }}</td>
                  <td>{{ $inmueble->gestion }}</td>
                  <td>{{ $inmueble->valor }}</td>
                  <td class="td-actions text-right">
                  <a href="{{ route('inmueble.edit', $inmueble->id) }}"><button type="button" class="btn btn-warning">Editar</button></a>
                  <a href="{{ route('inmueble.show', $inmueble->id) }}"><button type="button" class="btn btn-success">Ver</button></a>
                  <form action="{{ route('inmueble.destroy', $inmueble->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit" rel="tooltip" onsubmit="return confirm('Segur?')">
                    <i class="material-icons">Eliminar</i>
                    </button>
                </form>
                </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          
            <div class="card-footer ml-auto">
                {{ $inmuebles->links() }} 
            </div>
        </div>
      </div>
</div>
