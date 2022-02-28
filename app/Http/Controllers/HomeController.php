<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

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
        $apartments = [];
        $allApartments = Apartment::all();
        foreach ($allApartments as $apartment){
            if ($apartment -> user_id == Auth::user() -> id){
                array_push($apartments,$apartment);
            }
        }
        return view('pages.dashboard', compact('apartments'));
    }

    public function show($id){

        $selectApartment = Apartment::findOrFail($id);
        return view('pages.show', compact('selectApartment'));
    }

    public function delete($id){
        $apartment = Apartment::findOrFail($id);

        $apartment -> visibility = 0;
        $apartment -> save();

        return redirect() -> route('dashboard');
    }

}
