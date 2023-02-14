<?php

namespace App\Http\Resources\API\V1\Auth;

use Illuminate\Http\Resources\Json\JsonResource;

class NewUserResource extends JsonResource
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
            'last_name' => $this->last_name,
            'last_name_second' => $this->last_name_second,
            'email' => $this->email,
        ];
    }
}
