@extends('layouts.plantilla')

@section('title', 'Usuario')

@section('body')

    <h1>Página Usuario</h1>
    <a href="{{ route('usuarios.create') }}">crear usuario</a>
    <ul>
        @foreach ($usuarios as $usuario)
            <ol>
                <a href="{{ route('usuarios.show', $usuario->id) }}">
                    {{ $usuario->id }}
                    {{ $usuario->nombre }}
                    {{ $usuario->correo }}
                    {{ $usuario->id_rol }}
                </a>
            </ol>
        @endforeach
    </ul>
@endsection
