<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{

    protected $fillable= [
        'name',
        'bio',
        'image'
    ];

    public $timestamps = false;

    public function performances() 
    {
        return $this->hasMany(Performance::class);
    }

}
