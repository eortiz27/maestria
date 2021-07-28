<?php

namespace App\Http\Controllers\Estadisticas;
use App\Models\Graduado;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EstadisticasController extends Controller
{
    public function grafico01()
    {
        $masculino = Graduado::where('sexo','M')->count();
        $femenino = Graduado::where('sexo','F')->count();
        return view('estadisticas.grafico1', compact('masculino','femenino'));
    }

    public function grafico02()
    {
        $derecho = Graduado::where('fac_nom','FACULTAD DE DERECHO Y CIENCIAS POLITICAS')->count();
        $salud = Graduado::where('fac_nom','FACULTAD DE CIENCIAS DE LA SALUD')->count();
        $ingenieria = Graduado::where('fac_nom','FACULTAD DE INGENIERIA')->count();
        $educacion = Graduado::where('fac_nom','FACULTAD DE CIENCIAS DE LA EDUCACION Y HUMANIDADES')->count();
        $empresariales = Graduado::where('fac_nom','FACULTAD DE CIENCIAS EMPRESARIALES')->count();
        return view('estadisticas.grafico02', compact('derecho', 'salud', 'ingenieria','educacion', 'empresariales'));
    }
}
