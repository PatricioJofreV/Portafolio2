<?php

namespace App\Http\Controllers;

use App\Models\VentaEx;
use Illuminate\Http\Request;

class VentaExController extends Controller
{
    public function index()
    {
        $ventas_ex = VentaEx::all();

        return view('ventas_ex.index', compact('ventas_ex'));
    }

    public function create()
    {
        return view('ventas_ex.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'Required',
            'rut' => 'Required',
            'correo' => 'Required',
            'contrasena' => 'Required'
        ]);

        $venta_ex = new VentaEx();
        $venta_ex->nombre = $request->nombre;
        $venta_ex->rut = $request->rut;
        $venta_ex->correo = $request->correo;
        $venta_ex->contraseña = $request->contrasena;
        $venta_ex->verificado = 0;
        $venta_ex->save();

        return redirect()->route('ventas_ex.index');
    }

    public function show(VentaEx $venta_ex)
    {
        return view('ventas_ex.show', compact('venta_ex'));
    }

    public function update(Request $request, VentaEx $venta_ex)
    {
        $request->validate([
            'nombre' => 'Required',
            'rut' => 'Required',
            'rol' => 'Required',
            'correo' => 'Required',
            'verificado' => 'Required',
            'contrasena' => 'Required'
        ]);

        $venta_ex->nombre = $request->nombre;
        $venta_ex->correo = $request->correo;
        if ($request->nuevaContrasena) {
            $venta_ex->contraseña = $request->nuevaContrasena;
        }
        $venta_ex->id_rol = $request->rol;
        $venta_ex->verificado = $request->verificado;

        $venta_ex->save();
        return redirect()->route('ventas_ex.show', $venta_ex);
    }

    public function edit(VentaEx $venta_ex)
    {
        return view('ventas_ex.edit', compact('venta_ex'));
    }
}
