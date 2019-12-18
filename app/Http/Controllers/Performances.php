<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stage;
use App\Performance;
use App\Artist;
use App\Http\Resources\PerformanceResource;
use App\Http\Resources\StagePerformanceListResource;
use App\Http\Resources\StagePerformanceResource;
use App\Http\Resources\ArtistPerformanceListResource;
use App\Http\Resources\ArtistPerformanceResource;


class Performances extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Stage $stage)
    {
        return PerformanceResource::collection($stage->performances);
    }
    
    public function indexByStage(Stage $stage)
    {
        return PerformanceResource::collection($stage->performances);
    }
    
    public function indexByArtist(Artist $artist)
    {
        return PerformanceResource::collection($artist->performances);
    }

    public function showForStage(Stage $stage)
    {
        return new StagePerformanceResource($stage);
    }

    public function showForArtist(Artist $artist)
    {
        return new ArtistPerformanceResource($artist);
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
