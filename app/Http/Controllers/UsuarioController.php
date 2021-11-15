<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }
    
    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'Required',
            'rut' => 'Required',
            'correo' => 'Required',
            'contrasena' => 'Required',
            'confirmarContrasena' => 'Required'
        ]);

        $usuario = Usuario::create([
            'nombre' => $request->nombre,
            'rut' => $request->rut,
            'correo' => $request->correo,
            'contraseña' => $request->contrasena,
            'id_rol' => $request->rol,
            'verificado' => 0
        ]);

        return redirect()->route('usuarios.index');
    }

    public function show(Usuario $usuario)
    {
        return view('usuarios.show', compact('usuario'));
    }

    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'nombre' => 'Required',
            'rut' => 'Required',
            'rol' => 'Required',
            'correo' => 'Required',
            'verificado' => 'Required',
            'contrasena' => 'Required',
            'confirmarContrasena' => 'Required'
        ]);

        $usuario->nombre = $request->nombre;
        $usuario->correo = $request->correo;
        if ($request->nuevaContrasena) {
            $usuario->contraseña = $request->nuevaContrasena;
        }
        $usuario->id_rol = $request->rol;

        $usuario->save();
        return redirect()->route('usuarios.show', $usuario);
    }

    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }
}
