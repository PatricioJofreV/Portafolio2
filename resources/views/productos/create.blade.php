@extends('layouts.plantilla')

@section('title', 'Registro')

@section('body')
    <h1>Registrar producto</h1>

    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Fruta:</label>
            <input type="text" class="form-control" name="frutas" value="{{ old('frutas') }}">
        </div>
        @error('frutas')<small>{{ $message }}</small><br>@enderror
        <div class="mb-3">
            <label class="form-label">Cantidad:</label>
            <input type="text" class="form-control" name="cantidad" value="{{ old('cantidad') }}">
        </div>
        @error('cantidad')<small>{{ $message }}</small><br>@enderror
        <div class="mb-3">
            <label class="form-label">Precio:</label>
            <input type="text" class="form-control" name="precio" value="{{ old('precio') }}">
        </div>
        @error('precio')<small>{{ $message }}</small><br>@enderror
        <div class="mb-3">
            <button type="submit">Enviar</button>
        </div>
    </form>
    <div class="mb-3">
        <a href="{{ route('productos.index') }}">Volver a productos</a>
    </div>
    </form>
@endsection
