<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;

class InventarioController extends Controller
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
            'ID_USUARIO' => 'Required',
            'FRUTA' => 'Required',
            'CANTIDAD' => 'Required',
            'PRECIO' => 'Required',

        ]);
        $inventario = new Inventario();
        $inventario->ID_USUARIO = $request->ID_USUARIO;
        $inventario->FRUTA = $request->FRUTA;
        $inventario->CANTIDAD = $request->CANTIDAD;
        $inventario->PRECIO = $request->PRECIO;
        $inventario->save();

        return redirect()->route('inventarios.index');
    }

    public function show(Inventario $inventario)
    {

        return view('inventarios.show', compact('inventario'));
    }
}
