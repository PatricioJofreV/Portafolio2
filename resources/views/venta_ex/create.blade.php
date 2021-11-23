@extends('layouts.plantilla')

@section('title', 'Registro')

@section('body')
    <h1>Registro</h1>
    <form action="{{ route('ventas_ex.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">
        </div>
        @error('nombre')<small>{{ $message }}</small><br>@enderror
        <div class="mb-3">
            <label class="form-label">Rut:</label>
            <input type="text" class="form-control" name="rut" value="{{ old('rut') }}">
        </div>
        @error('rut')<small>{{ $message }}</small><br>@enderror
        <div class="mb-3">
            <label class="form-label">Correo:</label>
            <input type="email" class="form-control" name="correo" value="{{ old('correo') }}">
        </div>
        @error('correo')<small>{{ $message }}</small><br>@enderror
        <div class="mb-3">
            <label class="form-label">Contraseña:</label>
            <input type="password" class="form-control" name="contrasena">
        </div>
        @error('contrasena')<small>{{ $message }}</small><br>@enderror
        <div class="mb-3">
            <button type="submit">Enviar</button>
        </div>
    </form>
    <div class="mb-3">
        <button type="button" href="{{ route('ventas_ex.index') }}">Volver a ventas_ex</button>
    </div>

@endsection
