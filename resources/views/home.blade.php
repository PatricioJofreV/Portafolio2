@extends('layouts.plantilla')

@section('title','Home')

@section('body')
<h1>Página principal</h1>
<br>
<a href="{{route('usuarios.index')}}">Usuarios</a>
@endsection