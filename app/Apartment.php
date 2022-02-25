<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $fillable = [

        'description',
        'rooms',
        'beds',
        'bathrooms',
        'square_meters',
        'address',
        'city',
        'latitude',
        'longitude',
        'image',
        'visibility',

    ];
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
