@extends('layouts.plantilla')

@section('title', 'inventario')

@section('body')

    <h1>Página inventario</h1>
    <a href="{{ route('inventarios.create') }}">crear inventario</a>
    <ul>
        @foreach ($inventarios as $inventario)
            <ol>
                <a href="{{ route('inventarios.show', $inventario->id) }}">
                    {{ $inventario->id }}
                    {{ $inventario->nombre }}
                    {{ $inventario->frutas }}
                </a>
            </ol>
        @endforeach
    </ul>
@endsection
