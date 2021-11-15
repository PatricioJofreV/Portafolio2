@extends('layouts.plantilla')

@section('title', 'Registro')

@section('body')
    <h1>Registrar inventario</h1>

    <form action="{{ route('inventarios.store') }}" method="POST">
        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{ old('nombre') }}">
        </label>
        <br>
        @error('nombre')
            <small>{{ $message }}</small>
            <br>
        @enderror

        <label>
            Fruta:
            <br>
            <input type="text" name="frutas" value="{{ old('frutas') }}">
        </label>
        <br>
        @error('frutas')
            <small>{{ $message }}</small>
            <br>
        @enderror

        <button type="submit">Enviar</button>

    </form>

    <a href="{{ route('inventarios.index') }}">Volver a inventarios</a>
@endsection
