<?php
namespace App\Http\Controllers\ApiClientes;

use App\Models\Cliente;
use App\Http\Resources\Cliente as ClienteResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiClientesController extends Controller
{
    public function clientes()
    {
       // $clientes = Cliente::where('w_genero', 'F')->get();
       $clientes = Cliente::get();
       
        //dd($clientes);
       //return response()->json(['clientes' => $clientes]); // completar

       //return ClienteResource::collection($clientes);
      // return ClienteResource::collection(Cliente::get()); //Funcional solo muestra campos seleccionados
       

      // return ClienteResource::collection($clientes);
        return response()->json(['clientes' => $clientes]);

    }
}
