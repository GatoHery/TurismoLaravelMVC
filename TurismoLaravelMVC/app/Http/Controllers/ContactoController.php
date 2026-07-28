<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ContactoController extends Controller
{

    public function index()
    {
        return view('contacto.index');
    }


    public function store(Request $request)
    {

        $datos = $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email',
            'mensaje' => 'required|string',
        ]);


        $ruta = base_path('app/data/contactos.json');


        if (File::exists($ruta)) {
            $contactos = json_decode(File::get($ruta), true);
        } else {
            $contactos = [];
        }


        $datos['id'] = count($contactos) + 1;


        $contactos[] = $datos;


        File::put(
            $ruta,
            json_encode($contactos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
        );


        return redirect()
            ->back()
            ->with('success','Mensaje enviado correctamente');

    }

}