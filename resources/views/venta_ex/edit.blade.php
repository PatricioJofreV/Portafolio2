@extends('layouts.plantilla')
@section('title','Editar venta_ex')
@section('body')
    <h1>Editar venta_ex</h1>

    <form action="{{route('ventas_ex.update', $venta_ex)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="{{old('nombre', $venta_ex->nombre)}}"">
        </div>
        @error('nombre')<small>{{ $message }}</small><br>@enderror
        <div class="mb-3">
            <label class="form-label">Rut:</label>
            <input type="text" class="form-control" name="rut" value="{{ old('rut', $venta_ex->rut) }}">
        </div>
        @error('rut')<small>{{ $message }}</small><br>@enderror
        <div class="mb-3">
            <label class="form-label">Rol:</label>
            <input type="text" class="form-control" name="rol" value="{{ old('rol', $venta_ex->id_rol) }}">
        </div>
        @error('rol')<small>{{ $message }}</small><br>@enderror
        <div class="mb-3">
            <label class="form-label">Verificado:</label>
            <input type="text" class="form-control" name="verificado" value="{{ old('verificado', $venta_ex->verificado) }}">
        </div>
        @error('rol')<small>{{ $message }}</small><br>@enderror
        <div class="mb-3">
            <label class="form-label">Correo:</label>
            <input type="email" class="form-control" name="correo" value="{{ old('correo', $venta_ex->correo) }}">
        </div>
        @error('correo')<small>{{ $message }}</small><br>@enderror
        <div class="mb-3">
            <label class="form-label">Nueva contraseña:</label>
            <input type="password" class="form-control" name="nuevaContrasena">
        </div>
        @error('nuevaContrasena')<small>{{ $message }}</small><br>@enderror
        <div class="mb-3">
            <label class="form-label">Contraseña:</label>
            <input type="password" class="form-control" name="contrasena">
        </div>
        @error('contrasena')<small>{{ $message }}</small><br>@enderror
        <div class="mb-3">
            <button type="submit">Actualizar</button>
        </div>
    </form>
    <a href="{{ route('ventas_ex.index') }}">Volver a venta_ex</a>
    <a href="{{ route('ventas_ex.show', $venta_ex->id) }}">Volver a venta_ex</a>

@endsection