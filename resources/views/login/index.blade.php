@extends('layouts.plantilla')

@section('title', 'Registro')

@section('body')
    <h1>Registro</h1>
    <form class="row g-3" action="{{ route('usuarios.store') }}" method="POST">
        @csrf
        <div class="col-md-4 form-floating">
            <input type="email" class="form-control" name="Correo" value="{{ old('Correo') }}">
            <label for="Correo">Correo</label>
            @error('Correo')<small>{{ $message }}</small>@enderror
        </div>
        <div class="col-md-4 form-floating">
            <input type="password" class="form-control" name="Contraseña" value="{{ old('Apellido') }}">
            <label for="Contraseña">Contraseña</label>
            @error('Contraseña')<small>{{ $message }}</small>@enderror
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>

@endsection
