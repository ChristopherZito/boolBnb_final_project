<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApartmentSponsorship extends Model
{
    protected $fillable = [

        'payment_dateTime',
        'start_sponsorship',
        'end_sponsorship',
    ];

    //! public function apartments(){
    //!     return $this->hasManyThrough(Apartment::class, Sponsorship::class);
    //! }
}
