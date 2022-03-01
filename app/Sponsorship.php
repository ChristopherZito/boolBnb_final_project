<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsorship extends Model
{
    protected $fillable = [

        'price',
        'type',
        'description',

    ];

    public function apartments()
    {
        return $this-> belongsToMany(Apartment::class);
    }
}
