<?php

namespace App\Http\Controllers;

use App\Apartment;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function dashboard()
    {
        $apartments = Apartment::all();

        return view('pages.dashboard', compact('apartments'));
    }
}
