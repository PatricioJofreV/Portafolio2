@extends('layouts.plantilla')

@section('title', 'Registro')

@section('body')
    <h1>Registro</h1>
    <form class="row g-3" action="{{ route('usuarios.store') }}" method="POST">
        @csrf
        <div class="col-md-4 form-floating">
            <input type="text" class="form-control" name="Nombre" value="{{ old('Nombre') }}">
            <label for="Nombre">Nombre</label>
            @error('Nombre')<small>{{ $message }}</small>@enderror
        </div>
        <div class="col-md-4 form-floating">
            <input type="text" class="form-control" name="Apellido" value="{{ old('Apellido') }}">
            <label for="Apellido">Apellido</label>
            @error('Apellido')<small>{{ $message }}</small>@enderror
        </div>
        <div class="col-md-4 form-floating">
            <input type="text" class="form-control" name="Rut" value="{{ old('Rut') }}">
            <label for="Rut">Rut</label>
            @error('Rut')<small>{{ $message }}</small>@enderror
        </div>
        <div class="col-md-4 form-floating">
            <select class="form-select" name="Rol">
                @php $valor=1; @endphp
                <option selected>Selecciona un rol...</option>
                @foreach ($roles as $rol)
                    <option value="{{$valor}}">{{ $rol->nombre_rol }}</option>
                    @php $valor++; @endphp
                @endforeach
            </select>
            <label for="Rol">Rol</label>
            @error('Rol')<small>{{ $message }}</small>@enderror
        </div>
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
        <div class="col-12">
            <button type="button" class="btn btn-secondary" href="{{ route('usuarios.index') }}">Volver a
                usuarios</button>
        </div>
    </form>

@endsection
