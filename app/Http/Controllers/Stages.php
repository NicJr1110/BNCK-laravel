<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stage;
use App\Http\Resources\StageResource;
use App\Http\Resources\StageListResource;


class Stages extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return StageListResource::collection(Stage::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $stage = Stage::create($data);

        return new StageResource($stage);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Stage $stage)
    {
        return new StageResource($stage);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stage $stage)
    {
        $data = $request->only(["name"]);

        $stage->fill($data)->save();

        return new StageResource($stage);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stage $stage)
    {
        $stage->delete();

        return response(null, 204);
    }
}
