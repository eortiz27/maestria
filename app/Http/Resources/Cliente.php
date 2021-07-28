<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Cliente extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       // return parent::toArray($request);
       return [

            'fact_nom' => $this->fac_nom,
            'apepat' => $this->apepat,
            'nombre' => $this->nombre,
            'docu_num' => $this->docu_num,
       ];
    }
}
