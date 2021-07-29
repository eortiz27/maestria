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

            'fact_nom' => $this->w_nombre,
            'w_tiposangre' => $this->w_tiposangre,
            'w_correo' => $this->w_correo,
            'w_ocupacion' => $this->w_ocupacion,
       ];
    }
}
