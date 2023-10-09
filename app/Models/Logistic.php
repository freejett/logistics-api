<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Logistic extends Model
{
    use HasFactory;

    protected $fillable = ['furniture_id', 'warehouse_id', 'arrival_date', 'departure_date'];

    /**
     * @return BelongsTo
     */
	public function warehouse(): BelongsTo
	{
		return $this->belongsTo('App\Models\Warehouse');
	}

    /**
     * @return BelongsTo
     */
	public function furniture(): BelongsTo
	{
		return $this->belongsTo(Furniture::class);
	}

    /**
     * @param Carbon|null $from
     * @param Carbon|null $to
     * @param int|null $warehouseId
     * @return Collection
     */
    public static function getAvailableFurniture(Carbon|null $from, Carbon|null $to, int|null $warehouseId): Collection
    {
        $query = self::with(['furniture', 'furniture' => ['furnitureType', 'colour'], 'warehouse']);

        if ($from) {
            $query->where('arrival_date', '>=', $from);
        }
        if ($to) {
            $query->where('departure_date', '<=', $to);
        }

        if ($warehouseId) {
            $query->where('warehouse_id', $warehouseId);
        }

        return $query->orderBy('arrival_date', 'desc')->get();
    }
}
