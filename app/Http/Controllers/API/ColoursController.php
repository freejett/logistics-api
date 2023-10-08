<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use App\Models\Colour;
use App\Http\Requests\ColourRequest;
use App\Http\Resources\ColourResource;

class ColoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colours = Colour::paginate(15);
        return ColourResource::collection($colours);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ColourRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ColourRequest $request)
    {
        $colour = new Colour;
		$colour->title = $request->input('title');
        $colour->save();

        return response()->json($colour, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $colour = Colour::findOrFail($id);
        return new ColourResource($colour);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ColourRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ColourRequest $request, $id)
    {
        $colour = Colour::findOrFail($id);
		$colour->title = $request->input('title');
        $colour->save();

        return response()->json($colour);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $colour = Colour::findOrFail($id);
        $colour->delete();

        return response()->json(null, 204);
    }
}
