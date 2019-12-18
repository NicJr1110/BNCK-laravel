<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PerformanceResource extends JsonResource
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
            "id" => $this->id,
            "timedate" => $this->timedate,
            "duration" => $this->duration,

            "stage_id" => $this->stage_id,
            "artist_id" => $this->artist_id,
        ];
    }
}
