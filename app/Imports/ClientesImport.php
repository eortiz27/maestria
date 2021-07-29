<?php

namespace App\Imports;

use App\Models\Cliente;
use Maatwebsite\Excel\Concerns\{ToModel,WithHeadingRow};

class ClientesImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Cliente([
            'w_apellido'=> $row['w_apellido'],
            'w_nombre'=> $row['w_nombre'],
            'w_edad'=> $row['w_edad'],
            'w_genero'=> $row['w_genero'],
            'w_tiposangre'=> $row['w_tiposangre'],
            'w_telefono'=> $row['w_telefono'],
            'w_correo'=> $row['w_correo'],
            'w_zodiaco'=> $row['w_zodiaco'],
            'w_ocupacion'=> $row['w_ocupacion'],
            'w_pais'=> $row['w_pais'],
            'w_tarjeta'=> $row['w_tarjeta'],
            'w_saldo'=> $row['w_saldo'],

        ]);
    }

    public function rules(): array
    {
        return[
           'w_apellido'=> 'nullable',
            'w_nombre'=> 'nullable',
            'w_edad'=> 'nullable',
            'w_genero'=> 'nullable',
            'w_tiposangre'=> 'nullable',
            'w_telefono'=> 'nullable',
            'w_correo'=> 'nullable',
            'w_zodiaco'=> 'nullable',
            'w_ocupacion'=> 'nullable',
            'w_pais'=> 'nullable',
            'w_tarjeta'=> 'nullable',
            'w_saldo'=> 'nullable',  
        ];
    }
}
