<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Optional extends Model
{
    protected $fillable = [

        'name',
    ];

    public function apartments()
    {
        return $this-> belongsToMany(Apartment::class);
    }
}
