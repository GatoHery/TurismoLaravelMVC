<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TurismoModelo;

class TurismoController extends Controller
{
    public function index()
    {
        $lugares = TurismoModelo::obtenerLugares();

        return view('turismo.index', compact('lugares'));
    }

    public function create()
    {
        return view('turismo.create');
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'titulo' => ['required', 'string', 'max:255'],
            'descripcion' => ['required', 'string'],
            'categoria' => ['required', 'string', 'max:100'],
            'precio' => ['required', 'numeric', 'min:0'],
            'ubicacion' => ['required', 'string', 'max:255'],
        ]);

        $lugares = TurismoModelo::obtenerLugares();
        $datos['id'] = TurismoModelo::siguienteId();
        $lugares[] = $datos;

        TurismoModelo::guardarLugares($lugares);

        return redirect()->route('turismo.index');
    }

    public function show(string $id)
    {
        $lugar = TurismoModelo::buscarLugar($id);

        abort_if(!$lugar, 404);

        return view('turismo.show', compact('lugar'));
    }

    public function edit(string $id)
    {
        $lugar = TurismoModelo::buscarLugar($id);

        abort_if(!$lugar, 404);

        return view('turismo.edit', compact('lugar'));
    }

    public function update(Request $request, string $id)
    {
        $datos = $request->validate([
            'titulo' => ['required', 'string', 'max:255'],
            'descripcion' => ['required', 'string'],
            'categoria' => ['required', 'string', 'max:100'],
            'precio' => ['required', 'numeric', 'min:0'],
            'ubicacion' => ['required', 'string', 'max:255'],
        ]);

        $lugares = TurismoModelo::obtenerLugares();

        foreach ($lugares as $indice => $lugar) {
            if ((string)($lugar['id'] ?? '') === $id) {
                $lugares[$indice] = array_merge($lugar, $datos, ['id' => (int) $id]);
                TurismoModelo::guardarLugares($lugares);

                return redirect()->route('turismo.index');
            }
        }

        abort(404);
    }

    public function destroy(string $id)
    {
        TurismoModelo::eliminarLugar($id);

        return redirect()->route('turismo.index');
    }
}
