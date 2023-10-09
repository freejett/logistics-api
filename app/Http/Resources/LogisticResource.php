<?php

namespace App\Http\Resources;

use App\Models\Logistic;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LogisticResource extends JsonResource
{
    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public string $collects = Logistic::class;

//    public $preserveKeys = true;

    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
			'furniture_id' => $this->furniture_id,
			'furniture_title' => $this->furniture()->first()->furnitureType?->title,
			'colour_id' => $this->furniture->colour_id,
			'colour_title' => $this->furniture()->first()->colour?->title,
			'warehouse_id' => $this->warehouse_id,
			'warehouse_title' => $this->warehouse->title,
			'arrival_date' => $this->arrival_date,
			'departure_date' => $this->departure_date,
        ];
    }
}
