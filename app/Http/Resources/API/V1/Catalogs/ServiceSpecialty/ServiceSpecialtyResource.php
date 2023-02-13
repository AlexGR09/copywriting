<?php

namespace App\Http\Resources\API\V1\Catalogs\ServiceSpecialty;

use Illuminate\Http\Resources\Json\JsonResource;

class ServiceSpecialtyResource extends JsonResource
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
            'id'=>$this->id,
            'service_id'=>$this->service_id,
            'specialty_id'=>$this->specialty_id,
        ];
    }
}
