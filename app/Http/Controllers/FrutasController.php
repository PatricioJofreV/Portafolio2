<?php

namespace App\Http\Controllers;

use App\Models\Frutas;
use Illuminate\Http\Request;

class FrutasController extends Controller
{
    public function index()
    {
        $frutas = Frutas::all();
        
        return view('frutas.index', compact('frutas'));
    }
    
    public function create()
    {
        return view('frutas.create');
    }

    public function store(Request $request)
    {
        $fruta = Frutas::create([
            'frutas' => $request->frutas,
        ]);

        return redirect()->route('frutas.index');
    }

    public function show(Frutas $fruta)
    {
        return view('frutas.show', compact('fruta'));
    }

    public function update(Request $request, Frutas $fruta)
    {
        $fruta->frutas = $request->frutas;
        $fruta->save();
        return redirect()->route('frutas.show', $fruta);
    }

    public function edit(Frutas $fruta)
    {
        return view('frutas.edit', compact('fruta'));
    }

}
