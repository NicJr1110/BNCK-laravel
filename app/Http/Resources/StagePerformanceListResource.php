<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StagePerformanceListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id"        => $this->id,
            "timedate"  => $this->timedate,
            "duration"  => $this->duration,
            "artist_name" => $this->artist->name,

        ];
    }
}
