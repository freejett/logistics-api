<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LogisticResource extends JsonResource
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
			'furniture_id' => $this->furniture_id,
			'colour_id' => $this->colour_id,
			'warehouse_id' => $this->warehouse_id,
			'arrival_date' => $this->arrival_date,
			'departure_date' => $this->departure_date,
        ];
    }
}
