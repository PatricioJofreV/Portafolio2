<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;
use App\Models\Rol;
use Illuminate\Http\Client\Request as ClientRequest;

class UsuarioController extends Controller
{

    public function index()
    {
        //Este es un Join
        $usuarios = DB::table('usuarios')
            ->select('usuarios.Id', 'Nombre', 'Apellido', 'Correo', 'Nombre_rol', 'Rut')
            ->join('roles', 'usuarios.Id_rol', '=', 'roles.Id')
            ->orderBy('usuarios.Id')
            ->get();
        
        return view('usuarios.index', compact('usuarios'));
    }
    public function create()
    {
        $roles = Rol::all();
        return view('usuarios.create', compact('roles'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'Required',
            'Apellido' => 'Required',
            'Rut' => 'Required',
            'Rol' => 'Required',
            'Correo' => 'Required',
            'Contraseña' => 'Required'
        ]);

        $usuario = new Usuario();
        $usuario->Nombre = $request->Nombre;
        $usuario->Apellido = $request->Apellido;
        $usuario->Rut = $request->Rut;
        $usuario->id_Rol = $request->Rol;
        $usuario->Correo = $request->Correo;
        $usuario->Contraseña = $request->Contraseña;
        $usuario->save();

        return redirect()->route('usuarios.index');
    }

    public function show($id)
    {
        $usuarios = DB::table('usuarios')
            ->select('usuarios.Id', 'Nombre', 'Apellido', 'Correo', 'Nombre_rol', 'Rut')
            ->join('roles', 'usuarios.Id_rol', '=', 'roles.Id')
            ->where('usuarios.Id', '=', $id)
            ->get();

        return view('usuarios.show', compact('usuarios'));
    }
    public function edit($usuarios)
    {
        $usuario = DB::table('usuarios')
            ->select('id_usuario', 'Correo', 'nombre_rol', 'Nombre', 'Apellido', 'Rut')
            ->join('roles', 'usuarios.id_rol', '=', 'roles.id_rol')
            ->where('id_usuario', '=', $usuarios)
            ->get();

        return view('usuarios.edit', compact('usuario'));
    }
    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'Nombre' => 'Required',
            'Apellido' => 'Required',
            'Rut' => 'Required',
            'Rol' => 'Required',
            'Correo' => 'Required',
            'Contraseña' => 'Required'
        ]);
        $usuario = new Usuario();
        $usuario->Nombre = $request->Nombre;
        $usuario->Apellido = $request->Apellido;
        $usuario->Rut = $request->Rut;
        $usuario->id_Rol = $request->Rol;
        $usuario->Correo = $request->Correo;
        if ($request->nuevaContraseña) {
            $usuario->Contraseña = $request->nuevaContraseña;
        }
        $usuario->save();
        return redirect()->route('usuarios.show', $usuario);
    }
}
