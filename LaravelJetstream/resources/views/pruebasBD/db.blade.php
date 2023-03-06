<x-app-layout>
    <x-slot name="header">
    <a name="añadir" id="añadir" class="botones bg-gray-600 m-auto inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150" href="{{ route('crear') }}" role="button">Añadir</a>
    </x-slot>
    
<div class="lex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table id="tabla"  class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Nombre
            </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Apellidos
            </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Descripción
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Opciones
            </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <!-- Aquí irá el bucle con los registros de la base de datos -->
            @foreach ($datos as $registro)
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                {{$registro->nombre}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
              {{$registro->apellidos}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
              {{$registro->descripcion}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
              <a name="editar" id="editar" class="botones bg-gray-600 m-auto inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150" href="{{route('editar', ['id' => $registro->id])}}" role="button">Editar</a>
              <br/>
              <a name="eliminar" id="eliminar" class="botones bg-gray-600 m-auto inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150" href="{{route('eliminar', ['id' => $registro->id])}}" role="button">Eliminar</a>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
{{$datos->links()}}
<link href="/dist/output.css" rel="stylesheet">
</x-app-layout>

