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
        $apartments = Apartment::inRandomOrder()->limit(8)->get();
        return view('pages.home', compact('apartments'));
    }

    public function show($id){

        $selectApartment = Apartment::findOrFail($id);
        $messages = DB::table('messages')->where('apartment_id', $selectApartment ->id)->get();
        return view('pages.show', compact('selectApartment', 'messages'));
    }

    public function search(Request $request){
        //verifica città cercata
        $data = $request->validate([
            'city' => 'required|string'
        ]);
        $city = $data['city'];
        
        
        // //array di appartamenti trovati nella città cercata
        // $apartments = DB::table('apartments')->where('city', $city)->get();

        // $apartmentArr = [];
        // foreach ($apartments as $apartment){
        //     //ricerca optionals di ogni appartamento attraveso l' apartment_id
        //     $optionals_id = DB::table('apartment_optional')->where('apartment_id', $apartment -> id)->get();
        //     $optionalArr = [];
        //     // creazione array degli id degli optionals dell'appartamento
        //     foreach ($optionals_id as $optional_id){
        //         $optionalArr[] =  $optional_id -> optional_id;
        //     }
        //     //popolamento array con associazione dell' appartamento con i suoi optionals
        //     $apartmentArr[] = 
        //     [
        //         'apartment' => $apartment,
        //         'optionals_id' => $optionalArr,
        //     ];

        // }
        return view('pages.search', compact('city'));
    }
    public function getApiApartmentOptionals($city){
        //array di appartamenti trovati nella città cercata
        $apartments = DB::table('apartments')->where('city', $city)->get();

        $apartmentArr = [];
        foreach ($apartments as $apartment){
            //ricerca optionals di ogni appartamento attraveso l' apartment_id
            $optionals_id = DB::table('apartment_optional')->where('apartment_id', $apartment -> id)->get();
            $optionalArr = [];
            // creazione array degli id degli optionals dell'appartamento
            foreach ($optionals_id as $optional_id){
                $optionalArr[] =  $optional_id -> optional_id;
            }
            //popolamento array con associazione dell' appartamento con i suoi optionals
            $apartmentArr[] = 
            [
                'apartment' => $apartment,
                'optionals_id' => $optionalArr,
            ];

        }
        return json_encode($apartmentArr);

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
