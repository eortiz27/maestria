<?php

namespace App\Http\Controllers\Graduados;
use Excel;
use App\Imports\GraduadosImport;
use App\Models\Graduado;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GraduadosController extends Controller
{
    public function datos()
    {
    	$graduados = Graduado::get();

    	return view('graduados.datos', compact('graduados'));
    }

    public function importar()
    {
        return view('graduados.importar');
    }

    public function importarGuardar(Request $request)
    {
        if( $request->hasFile('archivo'));
        {
            Excel::import(new GraduadosImport, $request->file('archivo'));
            return 'ok';
         }
    }
}
