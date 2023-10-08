<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colour extends Model
{
    use HasFactory;

	public function furniture()
	{
		return $this->hasMany('App\Models\Furniture');
	}
}
