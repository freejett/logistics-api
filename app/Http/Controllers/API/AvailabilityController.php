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
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $arrivalDate = $request->get('from') ? Carbon::createFromFormat('Y-m-d', $request->get('from')) : null;
        $departureDate = $request->get('to') ? Carbon::createFromFormat('Y-m-d', $request->get('to')): null;
        $warehouseId = $request->get('warehouse');

        $availableFurniture = Logistic::getAvailableFurniture(
            from: $arrivalDate,
            to: $departureDate,
            warehouseId: $warehouseId
        );

        return response()->json(LogisticResource::collection($availableFurniture)->groupBy('furniture_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
