@extends('layouts.plantilla')

@section('title','Usuario')

@section('body')

    <h1>Página Usuario</h1>
    <a href="{{route('home')}}">Pagina principal</a>
    <a href="{{route('usuarios.registro')}}">crear usuario</a>

    <ul>
        @foreach ($usuarios as $usuario)
        <ol>
            <a href="{{ route('usuarios.perfil', $usuario->id) }}">
                {{$usuario->id}}
                {{$usuario->nombre}}
                {{$usuario->correo}}
                {{$usuario->id_roll}}
            </a>
        </ol>
        @endforeach
    </ul>
@endsection