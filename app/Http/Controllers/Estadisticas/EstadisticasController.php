<?php

namespace App\Http\Controllers\Estadisticas;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EstadisticasController extends Controller
{
    public function grafico01()
    {
        $masculino = Cliente::where('sexo','M')->count();
        $femenino = Cliente::where('sexo','F')->count();
        return view('estadisticas.grafico1', compact('masculino','femenino'));
    }

    public function grafico02()
    {
        $derecho = Cliente::where('fac_nom','FACULTAD DE DERECHO Y CIENCIAS POLITICAS')->count();
        $salud = Cliente::where('fac_nom','FACULTAD DE CIENCIAS DE LA SALUD')->count();
        $ingenieria = Cliente::where('fac_nom','FACULTAD DE INGENIERIA')->count();
        $educacion = Cliente::where('fac_nom','FACULTAD DE CIENCIAS DE LA EDUCACION Y HUMANIDADES')->count();
        $empresariales = Cliente::where('fac_nom','FACULTAD DE CIENCIAS EMPRESARIALES')->count();
        return view('estadisticas.grafico02', compact('derecho', 'salud', 'ingenieria','educacion', 'empresariales'));
    }
}
