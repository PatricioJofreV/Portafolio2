@extends('layouts.plantilla')
@section('title', 'Perfil')
@section('body')
    <div class="list-group">
        @foreach ($usuarios as $usuario)
            <h1>Perfil de {{ $usuario->nombre }}</h1>
            <div class="">
                <div class="mb-3">
                    Id: {{ $usuario->id }}
                </div>
                <div class="mb-3">
                    Correo: {{ $usuario->correo }}
                </div>
                <div class="mb-3">
                    Rol: {{ $usuario->nombre_rol }}
                </div>
                <div class="mb-3">
                    Nombre: {{ $usuario->nombre }} {{ $usuario->apellido }}
                </div>
                <div class="mb-3">
                    Rut: {{ $usuario->rut }}
                </div>
            </div>
        @endforeach
        <a href="{{ route('usuarios.index') }}">Volver a usuarios</a>
    </div>

@endsection
