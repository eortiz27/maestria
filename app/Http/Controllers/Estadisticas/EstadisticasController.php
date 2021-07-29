<?php

namespace App\Http\Controllers\Estadisticas;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EstadisticasController extends Controller
{
    public function grafico01()
    {
        $masculino = Cliente::where('w_genero','M')->count();
        $femenino = Cliente::where('w_genero','F')->count();
        return view('estadisticas.grafico1', compact('masculino','femenino'));
    }

    public function grafico02()
    {
        $apositivo = Cliente::where('w_tiposangre','A+')->count();
        $anegativo = Cliente::where('w_tiposangre','A-')->count();
        $bpositivo = Cliente::where('w_tiposangre','B+')->count();
        $bnegativo = Cliente::where('w_tiposangre','B-')->count();
        $opositivo = Cliente::where('w_tiposangre','O+')->count();
        $onegativo = Cliente::where('w_tiposangre','O-')->count();
        $abpositivo = Cliente::where('w_tiposangre','AB+')->count();
        $abnegativo = Cliente::where('w_tiposangre','AB-')->count();
        return view('estadisticas.grafico02', compact('apositivo', 'anegativo', 'bpositivo','bnegativo', 'opositivo','onegativo', 'abpositivo', 'abnegativo'));
    }
    public function grafico03()
    {
        $per = Cliente::where('w_pais','PER')->count();
        $bra = Cliente::where('w_pais','BRA')->count();
        $us = Cliente::where('w_pais','US')->count();
        $uk = Cliente::where('w_pais','UK')->count();
        $es = Cliente::where('w_pais','ES')->count();
        $arg = Cliente::where('w_pais','ARG')->count();
        $col = Cliente::where('w_pais','COL')->count();
        $ven = Cliente::where('w_pais','VEN')->count();
        return view('estadisticas.grafico03', compact('per', 'bra', 'us','uk', 'es','arg', 'col', 'ven'));
    }
    public function grafico04()
    {
        $max = Cliente::max('w_edad');
        $min = Cliente::min('w_edad');
        $prom = Cliente::avg('w_edad');
  
        return view('estadisticas.grafico04', compact('max', 'min', 'prom'));
    }
    public function grafico05()
    {
     
        $aries = Cliente::where('w_zodiaco','Aries')->count();
        $tauro = Cliente::where('w_zodiaco','Taurus')->count();
        $geminis = Cliente::where('w_zodiaco','Gemini')->count();
        $leo = Cliente::where('w_zodiaco','Leo')->count();
        $virgo = Cliente::where('w_zodiaco','Virgo')->count();
        $scorpio = Cliente::where('w_zodiaco','Scorpio')->count();

        return view('estadisticas.grafico05', compact('aries', 'tauro', 'geminis', 'leo', 'virgo', 'scorpio'));
    }
} 
