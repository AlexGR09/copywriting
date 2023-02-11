<?php

namespace App\Http\Resources\API\V1\Catalogs\DiseaseSpecialty;

use Illuminate\Http\Resources\Json\JsonResource;

class DiseaseSpecialtyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'disease_id' => $this->disease_id,
            'specialty_id' => $this->specialty_id,
        ];
    }
}
