@extends('layouts.plantilla')

@section('title', 'inventario')

@section('body')
    <h1>Página Productos</h1>
    <div class="mb-3">
        <a type="button" href="{{ route('productos.create') }}">Añadir productos</a>
    </div>
    <div class="list-group">
        <ul class="list-group list-group-horizontal col-6">
            <li class="list-group-item col-3">ID</li>
            <li class="list-group-item col-3">Frutas</li>
            <li class="list-group-item col-3">Cantidad</li>
            <li class="list-group-item col-3">Precio</li>
        </ul>
        @foreach ($productos as $producto)
            <ul class="list-group list-group-horizontal col-6">
                <li class="list-group-item col-3">
                    {{ $producto->id }}
                </li>
                <li class="list-group-item col-3">
                    {{ $producto->frutas }}
                </li>
                <li class="list-group-item col-3">
                    {{ $producto->cantidad }}
                </li>
                <li class="list-group-item col-3">
                    {{ $producto->precio }}
                </li>
            </ul>
        @endforeach
    </div>
@endsection
