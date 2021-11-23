@extends('layouts.plantilla')

@section('title', 'venta_ex')

@section('body')

    <h1>Página venta_ex</h1>
    <div class="mb-3">
        <a type="button" href="{{ route('ventas_ex.create') }}">Crear ventas_ex</a>
    </div>
    <div class="list-group">
        @foreach ($ventas_ex as $venta_ex)
            <a type="button" class="list-group-item list-group-item-action"
                href="{{ route('ventas_ex.show', $venta_ex->id) }}">
                {{ $venta_ex->id }} {{ $venta_ex->nombre }} {{ $venta_ex->correo }}
            </a>
            @endforeach
        </div>
@endsection
