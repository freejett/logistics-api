<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logistic extends Model
{
    use HasFactory;

    protected $fillable = ['furniture_id', 'warehouse_id', 'arrival_date', 'departure_date'];

	public function warehouse()
	{
		return $this->hasOne('App\Models\Warehouse');
	}

	public function furniture()
	{
		return $this->hasOne('App\Models\Furniture');
	}
}
