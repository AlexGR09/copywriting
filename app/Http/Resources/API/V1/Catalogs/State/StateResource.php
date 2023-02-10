<?php

namespace App\Http\Resources\API\V1\Catalogs\State;

use App\Http\Resources\API\V1\Catalogs\Country\CountryResource;
use Illuminate\Http\Resources\Json\JsonResource;

class StateResource extends JsonResource
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
            'state_name' => $this->name,
            'short_name' => $this->short_name,
            'country_id' => $this->country_id,
            'country_name' => new CountryResource($this->country),

        ];
    }
}
