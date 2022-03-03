<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Apartment;
use App\Optional;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function show($id){

        $selectApartment = Apartment::findOrFail($id);
        return view('pages.show', compact('selectApartment'));
    }

    public function search(Request $request){

        $data = $request->validate([
            'city' => 'required|string'
        ]);

        $city = $data['city'];

        //array di appartamenti trovati nella città cercata
        $apartments = DB::table('apartments')->where('city', $city)->get();


        $apartmentsOptionals = DB::table('apartment_optional')->get();

        // dd($apartmentsOptionals);
        // dd($apartments);
        return view('pages.search', compact('apartments','apartmentsOptionals'));
    }

    public function getApiOptionals(){
        $optionals = Optional::all();
        return json_encode($optionals);
    }

    public function login(){
        return view('pages.login');
    }

    public function register(){
        return view('pages.register');
    }

    // public function getApiApartmentOptionals(){
        
    // }
    

    
}
