<?php

namespace App;
use App\Performace;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{

    protected $fillable = [
        'name'
    ];

    public function performances() 
    {
        return $this->hasMany(Performance::class);
    }

}
