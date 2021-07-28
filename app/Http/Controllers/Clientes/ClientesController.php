<?php

namespace App\Http\Controllers\Clientes;
use Excel;
use App\Imports\ClientesImport;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientesController extends Controller
{
    public function datos()
    {
    	$clientes = Cliente::get();

    	return view('clientes.datos', compact('clientes'));
    }

    public function importar()
    {
        return view('clientes.importar');
    }

    public function importarGuardar(Request $request)
    {
        if( $request->hasFile('archivo'));
        {
            Excel::import(new ClientesImport, $request->file('archivo'));
            return 'ok';
         }
    }
}
