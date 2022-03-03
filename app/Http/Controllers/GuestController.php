<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Apartment;
use App\Optional;
use App\Message;

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

    public function messageStore(Request $request, $apartmentId){
        $data = $request->validate([
            'email_sender' => 'required|email|max:100',
            'text' => 'required|string|max:5000',
            
        ]);
        // dd($apartmentId,$data);
        $message = Message::make($data);
        $apartment = Apartment::findOrFail($apartmentId);
        $message->apartment()->associate($apartment);
        $message->save();
        
        return redirect() -> route('home');
    }

    
    

    
}
