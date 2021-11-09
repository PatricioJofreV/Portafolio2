@extends('layouts.plantilla')
@section('title','Perfil')
@section('body')
    <h1>Página Usuario <?php echo $usuario->nombre; ?></h1>
    <p><strong>Correo:</strong> {{$usuario->correo}}</p>
    <a href="{{ route('usuarios.index') }}">Volver a usuarios</a>
    <a href="{{ route('usuarios.edit', $usuario) }}">Editar usuario</a>
@endsection