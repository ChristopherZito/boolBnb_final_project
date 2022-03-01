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
    
    //1 to many 
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function views()
    {
        return $this->hasMany(View::class);
    }
    // many to many
    public function optionals()
    {
        return $this-> belongsToMany(Optional::class);
    }

    public function sponsorships()
    {
        return $this-> belongsToMany(Sponsorship::class);
    }
}
