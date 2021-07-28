<?php

namespace App\Http\Controllers\ApiGraduados;

use App\Models\Graduado;
use App\Http\Resources\Graduado as GraduadoResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiGraduadosController extends Controller
{
    public function graduados()
    {
        $graduados = Graduado::where('fac_nom', 'FACULTAD DE DERECHO Y CIENCIAS POLITICAS')->get();
       //dd($graduados);
       //return response()->json(['graduados' => $graduados]); // completar

       //return GraduadoResource::collection($graduados);
       //return GraduadoResource::collection(Graduado::get()); //Funcional
       
       
       return GraduadoResource::collection($graduados);
    }
}
