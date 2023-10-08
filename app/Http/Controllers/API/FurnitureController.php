<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use App\Models\Furniture;
use App\Http\Requests\FurnitureRequest;
use App\Http\Resources\FurnitureResource;

class FurnitureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $furniture = Furniture::paginate(15);
        return FurnitureResource::collection($furniture);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  FurnitureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FurnitureRequest $request)
    {
        $furniture = new Furniture;
		$furniture->furniture_type_id = $request->input('furniture_type_id');
		$furniture->colour_id = $request->input('colour_id');
        $furniture->save();

        return response()->json($furniture, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $furniture = Furniture::findOrFail($id);
        return new FurnitureResource($furniture);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  FurnitureRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FurnitureRequest $request, $id)
    {
        $furniture = Furniture::findOrFail($id);
		$furniture->furniture_type_id = $request->input('furniture_type_id');
		$furniture->colour_id = $request->input('colour_id');
        $furniture->save();

        return response()->json($furniture);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $furniture = Furniture::findOrFail($id);
        $furniture->delete();

        return response()->json(null, 204);
    }
}
