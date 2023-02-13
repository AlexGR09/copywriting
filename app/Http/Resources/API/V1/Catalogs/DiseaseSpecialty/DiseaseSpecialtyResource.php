<?php

namespace App\Http\Resources\API\V1\Catalogs\DiseaseSpecialty;

use App\Http\Resources\API\V1\Catalogs\Disease\DiseaseResource;
use App\Http\Resources\API\V1\Catalogs\Specialty\SpecialtyResource;
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
            'disease_name' => DiseaseResource::collection($this->diseases),
            'specialty_id' => $this->specialty_id,
            'specialty_name' => SpecialtyResource::collection($this->specialties)
        ];
    }
}
