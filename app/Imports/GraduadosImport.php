<?php

namespace App\Imports;

use App\Models\Graduado;
use Maatwebsite\Excel\Concerns\{ToModel,WithHeadingRow};

class GraduadosImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Graduado([
            'matri_fec'=> $row['matri_fec'],
            'fac_nom'=> $row['fac_nom'],
            'carr_prog'=> $row['carr_prog'],
            'egres_fec'=> $row['egres_fec'],
            'apepat'=> $row['apepat'],
            'apemat'=> $row['apemat'],
            'nombre'=> $row['nombre'],
            'sexo'=> $row['sexo'],
            'docu_num'=> $row['docu_num'],
            'den_grad'=> $row['den_grad'],
            'prog_estu'=> $row['prog_estu'],
            'mod_est'=> $row['mod_est'],

        ]);
    }

    public function rules(): array
    {
        return[
           'matri_fec'=> 'nullable',
            'fac_nom'=> 'nullable',
            'carr_prog'=> 'nullable',
            'egres_fec'=> 'nullable',
            'apepat'=> 'nullable',
            'apemat'=> 'nullable',
            'nombre'=> 'nullable',
            'sexo'=> 'nullable',
            'docu_num'=> 'nullable',
            'den_grad'=> 'nullable',
            'prog_estu'=> 'nullable',
            'mod_est'=> 'nullable',  
        ];
    }
}
