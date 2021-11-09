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
    public function create(Request $request)
    {
        $request->validate([
            'nombre' => 'Required',
            'correo' => 'Required',
            'contrasena' => 'Required',
            'confirmarContrasena' => 'Required'
        ]);

        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->correo = $request->correo;
        $usuario->contraseña = $request->contrasena;

        $usuario->save();

        return redirect()->route('usuarios.perfil', $usuario);
    }
    public function perfil(Usuario $usuario)
    {
        return view('usuarios.perfil', compact('usuario'));
    }
    public function registro()
    {
        return view('usuarios.registro');
    }
    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'nombre' => 'Required',
            'correo' => 'Required',
            'contrasena' => 'Required',
            'confirmarContrasena' => 'Required'
        ]);

        $usuario->nombre = $request->nombre;
        $usuario->correo = $request->correo;
        if ($request->nuevaContrasena) {
            $usuario->contraseña = $request->nuevaContrasena;
        }
        $usuario->id_roll = $request->rol;

        $usuario->save();
        return redirect()->route('usuarios.perfil', $usuario);
    }
    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }
}
