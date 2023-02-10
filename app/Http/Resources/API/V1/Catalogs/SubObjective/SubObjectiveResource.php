<?php

namespace App\Http\Resources\API\V1\Catalogs\SubObjective;

use Illuminate\Http\Resources\Json\JsonResource;

class SubObjectiveResource extends JsonResource
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
            'name' => $this->name,
            'objective_id' => $this->objective_id,
        ];
    }
}
