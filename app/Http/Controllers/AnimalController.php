<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    // Muestra la lista de animales
    public function index()
    {
        $animales = session('animales', []);
        return view('animales.index', compact('animales'));
    }

    // Muestra el formulario para crear un animal nuevo
    public function create()//
    {
        return view('animales.create');
    }

    // Guarda un animal nuevo (POST)
    public function store(Request $request)
    {
        $animales = session('animales', []);

        $animales[] = [
            'id' => count($animales) > 0 ? end($animales)['id'] + 1 : 1,
            'nombre' => $request->input('nombre'),
            'especie' => $request->input('especie'),
        ];

        session(['animales' => $animales]);

        return redirect('/animales');
    }

    // Muestra el formulario para editar un animal existente
    public function edit($id)
    {
        $animales = session('animales', []);
        $animal = collect($animales)->firstWhere('id', (int) $id);

        return view('animales.edit', compact('animal'));
    }

    // Actualiza un animal existente (PUT)
    public function update(Request $request, $id)
    {
        $animales = session('animales', []);

        foreach ($animales as &$animal) {
            if ($animal['id'] == $id) {
                $animal['nombre'] = $request->input('nombre');
                $animal['especie'] = $request->input('especie');
            }
        }

        session(['animales' => $animales]);

        return redirect('/animales');
    }

    // Elimina un animal (DELETE)
    public function destroy($id)
    {
        $animales = session('animales', []);

        $animales = array_values(array_filter($animales, function ($animal) use ($id) {
            return $animal['id'] != $id;
        }));

        session(['animales' => $animales]);

        return redirect('/animales');
    }
}