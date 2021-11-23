@extends('layouts.plantilla')
@section('title', 'Perfil')
@section('body')
    <h1>Página venta_ex <?php echo $venta_ex->nombre; ?></h1>
    <p><strong>Correo:</strong> {{ $venta_ex->correo }}</p>
    <p><strong>Rol:</strong> {{ $venta_ex->id_rol }}</p>
    @if ($venta_ex->verificado == 0)
        <p><strong>Verificado:</strong>No</p>
    @else
        <p><strong>Verificado:</strong>Si</p>
    @endif
    <a href="{{ route('ventas_ex.index') }}">Volver a ventas_ex</a>
    <a href="{{ route('ventas_ex.edit', $venta_ex) }}">Editar venta_ex</a>
@endsection
