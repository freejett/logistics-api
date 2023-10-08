<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use App\Models\Logistic;
use App\Http\Requests\LogisticRequest;
use App\Http\Resources\LogisticResource;

class LogisticsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logistics = Logistic::paginate(15);
        return LogisticResource::collection($logistics);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  LogisticRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LogisticRequest $request)
    {
        $logistic = new Logistic;
		$logistic->furniture_id = $request->input('furniture_id');
		$logistic->colour_id = $request->input('colour_id');
		$logistic->warehouse_id = $request->input('warehouse_id');
		$logistic->arrival_date = $request->input('arrival_date');
		$logistic->departure_date = $request->input('departure_date');
        $logistic->save();

        return response()->json($logistic, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $logistic = Logistic::findOrFail($id);
        return new LogisticResource($logistic);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  LogisticRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LogisticRequest $request, $id)
    {
        $logistic = Logistic::findOrFail($id);
		$logistic->furniture_id = $request->input('furniture_id');
		$logistic->colour_id = $request->input('colour_id');
		$logistic->warehouse_id = $request->input('warehouse_id');
		$logistic->arrival_date = $request->input('arrival_date');
		$logistic->departure_date = $request->input('departure_date');
        $logistic->save();

        return response()->json($logistic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $logistic = Logistic::findOrFail($id);
        $logistic->delete();

        return response()->json(null, 204);
    }
}
