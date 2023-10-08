<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Furniture extends Model
{
    use HasFactory;

    protected $fillable = ['furniture_type_id', 'colour_id'];

	public function furnitureType()
	{
		return $this->belongsTo('App\Models\FurnitureType');
	}

	public function colour()
	{
		return $this->belongsTo('App\Models\Colour');
	}

    public function logistic()
    {
        return $this->hasMany(Logistic::class);
    }
}
