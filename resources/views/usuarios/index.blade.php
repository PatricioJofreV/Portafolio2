@extends('layouts.plantilla')

@section('title', 'Usuario')

@section('body')
    <h1>Página Usuario</h1>
    <div class="mb-3">
        <a type="button" href="{{ route('usuarios.create') }}">Crear usuarios</a>
    </div>
    <div class="list-group">
        @foreach ($usuarios as $usuario)
            <a type="button" class="list-group-item list-group-item-action"
                href="{{ route('usuarios.show', $usuario->id) }}">
                {{ $usuario->id }} {{ $usuario->nombre }} {{ $usuario->apellido }} {{ $usuario->correo }}
                {{ $usuario->nombre_rol }} {{ $usuario->rut }}
            </a>
        @endforeach
    </div>
@endsection
