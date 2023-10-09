<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Furniture extends Model
{
    use HasFactory;

    protected $fillable = ['furniture_type_id', 'colour_id'];

    /**
     * @return BelongsTo
     */
	public function furnitureType(): BelongsTo
	{
		return $this->belongsTo('App\Models\FurnitureType');
	}

    /**
     * @return BelongsTo
     */
	public function colour(): BelongsTo
	{
		return $this->belongsTo('App\Models\Colour');
	}

    /**
     * @return HasMany
     */
    public function logistic(): HasMany
    {
        return $this->hasMany(Logistic::class);
    }
}
