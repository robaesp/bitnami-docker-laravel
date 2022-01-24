<?php

namespace App\Http\Controllers;

use App\Models\Examen;
use App\Models\Nota;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function ejercicio702()
    {
        return view('ejercicio702');
    }

    public function inicio2()
    {
        return view('inicio2');
    }

    public function nosotros2()
    {
        $equipo = [
            'Pepe',
            'Juan',
            'Lorena'
        ];
        return view ('nosotros2', @compact('equipo', 'nombre'));
    }

    public function fotos($id = 1)
    {
        return view('fotos', ['id' => $id]);
    }
    public function notas() {
        $notas = Nota::all();

        return view('notas', compact('notas'));//Compact notas es el nombre de la variable
    }

    public function detalle($id) {
        $nota = Nota::findOrFail($id);

        return view('notas.detalle', compact('nota'));
    }

    public function usuarios()
    {
        return view('usuarios', compact('usuarios'));
    }
    public function detallado($id)
    {
        return view('usuarios.detallado', compact('usuario'));
    }

    public function crear(Request $request) {
        $notaNueva = new Nota;
    
        $notaNueva -> nombre = $request -> nombre;
        $notaNueva -> descripcion = $request -> descripcion;
    
        $notaNueva -> save();
    
        return back() -> with('mensaje', 'Nota agregada exitósamente');
    }
}


