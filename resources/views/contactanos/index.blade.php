@extends('layouts.plantilla')

@section('title', 'Contactanos')

@section('body')
    <h1>Dejanos tus datos</h1>
    <form action="{{route('contactanos.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{old("nombre")}}">
        </label>
        <br>
        <label>
            Correo:
            <br>
            <input type="text" name="correo" value="{{old("correo")}}">
        </label>
        <br>
        <label>
            Mensaje:
            <br>
            <textarea name="mensaje" rows="4" value="{{old("mensaje")}}"></textarea>
        </label>
        <br>
        <button type="submit">Enviar</button>
    </form>
@endsection
