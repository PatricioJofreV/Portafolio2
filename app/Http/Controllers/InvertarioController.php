<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;

class InvertarioController extends Controller
{
    public function index()
    {
        $inventarios = Inventario::all();
        return view('inventarios.index', compact('inventarios'));
    }

    public function create()
    {
        return view('inventarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'Required',
            'frutas' => 'Required'
        ]);
        $inventario = new Inventario();

        /*
        $inventario = Inventario::create([
            'USUARIO'=>$request->nombre,
            'FRUTAS'=>$request->frutas
        ]);        
        */
        $inventario->usuario = $request->nombre;
        $inventario->frutas = $request->frutas;
        $inventario->save();

        return redirect()->route('inventarios.index');
    }


    public function show(inventario $inventario)
    {
        return view('inventarios.show', compact('inventario'));
    }



    public function update(Request $request, inventario $inventario)
    {
        /*$inventario->nombre = $request->nombre;
        $inventario->correo = $request->correo;
        if ($request->nuevaContrasena) {
            $inventario->contraseña = $request->nuevaContrasena;
        }
        $inventario->id_rol = $request->rol;

        $inventario->save();
        return redirect()->route('inventarios.show', $inventario);
        */
    }

    public function edit(inventario $inventario)
    {
        return view('inventarios.edit', compact('inventario'));
    }
}
