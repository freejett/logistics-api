<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use App\Models\FurnitureType;
use App\Http\Requests\FurnitureTypeRequest;
use App\Http\Resources\FurnitureTypeResource;

class FurnitureTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $furnituretypes = FurnitureType::paginate(15);
        return FurnitureTypeResource::collection($furnituretypes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  FurnitureTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FurnitureTypeRequest $request)
    {
        $furnituretype = new FurnitureType;
		$furnituretype->title = $request->input('title');
        $furnituretype->save();

        return response()->json($furnituretype, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $furnituretype = FurnitureType::findOrFail($id);
        return new FurnitureTypeResource($furnituretype);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  FurnitureTypeRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FurnitureTypeRequest $request, $id)
    {
        $furnituretype = FurnitureType::findOrFail($id);
		$furnituretype->title = $request->input('title');
        $furnituretype->save();

        return response()->json($furnituretype);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $furnituretype = FurnitureType::findOrFail($id);
        $furnituretype->delete();

        return response()->json(null, 204);
    }
}
