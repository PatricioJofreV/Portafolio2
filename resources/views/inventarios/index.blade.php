@extends('layouts.plantilla')

@section('title', 'inventario')

@section('body')
    <h1>Página Inventario</h1>
    <div class="mb-3">
        <a type="button" href="{{ route('inventarios.create') }}">Crear inventario</a>
    </div>
    <div class="list-group">
        <ul class="list-group">
            @foreach ($inventarios as $inventario)
                <li class="list-group-item" href="{{ route('inventarios.show', $inventario->id) }}">
                    {{ $inventario->id }} {{ $inventario->fruta }} {{ $inventario->cantidad }}
                    {{ $inventario->precio }}
                </li>
            @endforeach
        </ul>
    </div>
@endsection
