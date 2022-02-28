<?php

namespace App\Http\Controllers;


use App\Apartment;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    
}
