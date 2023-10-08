<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use App\Models\Warehouse;
use App\Http\Requests\WarehouseRequest;
use App\Http\Resources\WarehouseResource;

class WarehousesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warehouses = Warehouse::paginate(15);
        return WarehouseResource::collection($warehouses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  WarehouseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WarehouseRequest $request)
    {
        $warehouse = new Warehouse;
		$warehouse->title = $request->input('title');
        $warehouse->save();

        return response()->json($warehouse, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $warehouse = Warehouse::findOrFail($id);
        return new WarehouseResource($warehouse);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  WarehouseRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WarehouseRequest $request, $id)
    {
        $warehouse = Warehouse::findOrFail($id);
		$warehouse->title = $request->input('title');
        $warehouse->save();

        return response()->json($warehouse);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $warehouse = Warehouse::findOrFail($id);
        $warehouse->delete();

        return response()->json(null, 204);
    }
}
