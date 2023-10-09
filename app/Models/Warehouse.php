<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Warehouse extends Model
{
    use HasFactory;

    /**
     * @return HasMany
     */
	public function logistic(): HasMany
	{
		return $this->hasMany('App\Models\Logistic');
	}
}
