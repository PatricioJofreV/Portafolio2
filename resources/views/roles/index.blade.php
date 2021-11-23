@extends('layouts.plantilla')

@section('title', 'Roles')

@section('body')

    <h1>Página Roles</h1>
    <div class="row">
        <div class="list-group">
            <ul class="list-group">
                @foreach ($roles as $rol)
                    <li class="list-group-item">
                        {{ $rol->id }} {{ $rol->nombre_rol }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
