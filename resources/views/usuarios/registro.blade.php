@extends('layouts.plantilla')
@section('title','Registro')
@section('body')
    <h1>Registro</h1>

    <form action="{{route('usuarios.create')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{old("nombre")}}">
        </label>
        <br>
        @error('nombre')
            <small>{{$message}}</small>
            <br>
        @enderror

        <label>
            Correo:
            <br>
            <input type="email" name="correo" value="{{old("correo")}}">
        </label>
        <br>
        @error('correo')
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
        @error('confirmarContrasena')
            <br>
            <small>{{$message}}</small>
        @enderror
        <br>
         
        <button type="submit">Enviar</button>
    </form>

@endsection