<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    protected $fillable= [
        'stage_id',
        'artist_id',
        'timedate',
        'duration'
    ];

    public function stage()
    {
        return $this->belongsTo(Stage::class);
    }

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

}
