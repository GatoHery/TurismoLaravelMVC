<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class TurismoModelo extends Model
{
    private static function ruta()
    {
        return base_path('app/data/lugares.json');
    }

    public static function obtenerLugares(): array
    {
        $ruta = self::ruta();

        if (!File::exists($ruta)) {
            return [];
        }

        $lugares = json_decode(File::get($ruta), true);

        return is_array($lugares) ? $lugares : [];
    }

    public static function guardarLugares(array $lugares): void
    {
        File::put(
            self::ruta(),
            json_encode($lugares, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
        );
    }

    public static function buscarLugar($id): ?array
    {
        foreach (self::obtenerLugares() as $lugar) {
            if (($lugar['id'] ?? null) == $id) {
                return $lugar;
            }
        }

        return null;
    }

    public static function eliminarLugar($id): void
    {
        $lugares = self::obtenerLugares();

        $lugares = array_values(array_filter($lugares, function ($lugar) use ($id) {
            return ($lugar['id'] ?? null) != $id;
        }));

        self::guardarLugares($lugares);
    }

    public static function siguienteId(): int
    {
        $lugares = self::obtenerLugares();

        if (empty($lugares)) {
            return 1;
        }

        return max(array_column($lugares, 'id')) + 1;
    }
}