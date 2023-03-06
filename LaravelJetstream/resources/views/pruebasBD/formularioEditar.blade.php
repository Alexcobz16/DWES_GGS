<x-app-layout>
<x-authentication-card>
    <x-slot name="logo"><h1>Editar registro</h1></x-slot>

<form method="POST" action="{{route('editar', ['id' => $registro->id])}}">
    @csrf

    @method('put')
    <div>
        <x-label for="nombre" value="{{ __('Nombre') }}" />
        <x-input id="nombre" class="block mt-1 w-full" value="{{$registro->nombre}}" type="text" name="nombre" required autofocus/>
    </div>

    <div>
        <x-label for="apellidos" value="{{ __('Apellidos') }}" />
        <x-input id="apellidos" value="{{$registro->apellidos}}" class="block mt-1 w-full" type="text" name="apellidos" required autofocus/>
    </div>

    <div>
        <x-label for="descripcion" value="{{ __('Descripción') }}" />
        <x-input id="descripcion" value="{{$registro->descripcion}}" class="block mt-1 w-full" type="text" name="descripcion" required autofocus/>
    </div>

    <div class="flex items-center justify-end mt-4">
        <x-button class="ml-4">
            {{ __('Editar') }}
        </x-button>
    </div>
</form>
</x-authentication-card>
</x-app-layout>