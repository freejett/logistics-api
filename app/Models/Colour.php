<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Colour extends Model
{
    use HasFactory;

    /**
     * @return HasMany
     */
	public function furniture(): HasMany
	{
		return $this->hasMany('App\Models\Furniture');
	}
}
