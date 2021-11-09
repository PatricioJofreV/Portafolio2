@extends('layouts.plantilla')
@section('title','Editar usuario')
@section('body')
    <h1>Editar usuario</h1>

    <form action="{{route('usuarios.update', $usuario)}}" method="POST">
        @csrf
        @method('PUT')

        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{old('nombre', $usuario->nombre)}}">
        </label>
        <br>
        @error('nombre')
            <small>{{$message}}</small>
            <br>
        @enderror

        <label>
            Correo:
            <br>
            <input type="email" name="correo" value="{{old('correo', $usuario->correo)}}">
        </label>
        <br>
        @error('correo')
            <small>{{$message}}</small>
            <br>
        @enderror

        <label>
            Rol:
            <br>
            <input type="text" name="rol" value="{{old('rol', $usuario->id_roll)}}">
        </label>
        <br>
        @error('rol')
            <small>{{$message}}</small>
            <br>
        @enderror

        <label>
            Nueva contraseña:
            <br>
            <input type="password" name="nuevaContrasena">
        </label>
        <br>
        @error('nuevaContrasena')
            <small>{{$message}}</small>
            <br>
        @enderror

        <label>
            Contraseña:
            <br>
            <input type="password" name="contrasena">
        </label>
        <br>
        @error('contrasena')
            <small>{{$message}}</small>
            <br>
        @enderror

        <label>
            Confirmar contraseña:
            <br>
            <input type="password" name="confirmarContrasena">
        </label>
        <br>
        @error('confirmarContrasena')
            <small>{{$message}}</small>
            <br>
        @enderror

        <button type="submit">Actualizar</button>
    </form>

@endsection