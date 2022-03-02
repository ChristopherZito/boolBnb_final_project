<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Apartment;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function search(Request $request){

        $data = $request->validate([

            'city' => 'required|string'

        ]);

        $city = $data['city'];

        $apartments = DB::table('apartments')->where('city', $city)->get(); //array di appartamenti trovati nella città cercata

        
        return view('pages.search', compact('apartments'));
    }
    

    
}
