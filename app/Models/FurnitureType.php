<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FurnitureType extends Model
{
    use HasFactory;

	public function furniture()
	{
		return $this->belongsTo('App\Models\Furniture');
	}
}
