<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\LogisticResource;
use App\Models\Logistic;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AvailabilityController extends Controller
{
    /**
     * Возвращаем список товаров и историю их перемещений с учетом фильтрации
     */
    public function index(Request $request): JsonResponse
    {
        $arrivalDate = $request->get('from') ? Carbon::createFromFormat('Y-m-d', $request->get('from')) : null;
        $departureDate = $request->get('to') ? Carbon::createFromFormat('Y-m-d', $request->get('to')): null;
        $warehouseId = $request->get('warehouse') ?: null;

        $availableFurniture = Logistic::getAvailableFurniture(
            from: $arrivalDate,
            to: $departureDate,
            warehouseId: $warehouseId
        );

        return response()->json(
            LogisticResource::collection($availableFurniture)
                ->groupBy('furniture_id')->toArray()
        );
    }


}
