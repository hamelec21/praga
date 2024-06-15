<?php

namespace App\Http\Controllers;

use App\Models\Resultado;
use Illuminate\Http\Request;

class ResultadoSeniorAdultoController extends Controller
{
    public function index()
    {
        // Filtra los resultados para solo obtener los de la serie "Señior"
        $resultados = Resultado::whereHas('serie', function ($query) {
            $query->where('serie_id', 4);//senior
        })->with(['serie', 'club', 'eq', 'temporada', 'estado', 'tipos', 'logo', 'log'])->get();

        // Verifica si hay resultados
    if ($resultados->isEmpty()) {
        return response()->json(['mensaje' => 'No se encuentran resultados'], 404);
    }

        // Transformar los resultados para devolver solo los nombres de las relaciones
        $resultados = $resultados->map(function($resultado) {
            return [
                'id' => $resultado->id,
                'resultado_local' => $resultado->resultado_local,
                'resultado_visita' => $resultado->resultado_visita,
                'serie' => $resultado->serie->nombre ?? null,
                'club' => $resultado->club->nombre ?? null,
                'eq' => $resultado->eq->nombre ?? null,
                'temporada' => $resultado->temporada->nombre ?? null,
                'estado' => $resultado->estado->nombre ?? null,
                'tipos' => $resultado->tipos->nombre ?? null,
                'logo' => $resultado->logo ? asset('storage/' . str_replace('public/', '', $resultado->logo->logo)) : null,
                'log' => $resultado->log ? asset('storage/' . str_replace('public/', '', $resultado->log->logo)) : null,
            ];
        });

        return response()->json($resultados);
    }

}
