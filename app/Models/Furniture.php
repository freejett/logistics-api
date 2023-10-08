<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Furniture extends Model
{
    use HasFactory;

	public function furnitureType()
	{
		return $this->hasOne('App\Models\FurnitureType');
	}

	public function colour()
	{
		return $this->hasOne('App\Models\Colour');
	}
}
