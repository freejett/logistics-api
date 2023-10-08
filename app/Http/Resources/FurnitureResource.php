<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FurnitureResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return
        [
			'furniture_type_id' => $this->furniture_type_id,
			'colour_id' => $this->colour_id,
        ];
    }
}
