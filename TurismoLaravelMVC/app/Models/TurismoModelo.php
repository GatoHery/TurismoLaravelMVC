<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class TurismoModelo extends Model
{
    public static function obtenerLugares(): array
    {
        $ruta = base_path('app/data/lugares.json');

        if (!File::exists($ruta)) {
            return [];
        }

        $contenido = File::get($ruta);
        $lugares = json_decode($contenido, true);

        if (!is_array($lugares)) {
            return [];
        }

        return $lugares;
    }
}
