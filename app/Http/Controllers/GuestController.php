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
        $apartments = Apartment::inRandomOrder()->limit(6)->get();
        return view('pages.home', compact('apartments'));
    }
    public function getApiSponsoredApartment(){
        $sponsoredApartments = Apartment::all();

        $sponsoredApartmentsArr = [];
        foreach ($sponsoredApartments as $sponsoredApartment){
            $sponsorships_id = DB::table('apartment_sponsorship')->where('apartment_id', $sponsoredApartment -> id)->get();
            if(count($sponsorships_id) != 0){
                $sponsoredApartmentsArr[] = 
                [
                    'sponsoredApartment' => $sponsoredApartment,
                    'sponsorships_id' => $sponsorships_id,
                ];
            }
        }
       return json_encode($sponsoredApartmentsArr);
    }

    public function show($id){

        $selectApartment = Apartment::findOrFail($id);
        $messages = DB::table('messages')->where('apartment_id', $selectApartment -> id)->get();
        $sponsorshipsApartment = DB::table('apartment_sponsorship')->where('apartment_id', $selectApartment -> id)->get();
        return view('pages.show', compact('selectApartment', 'messages','sponsorshipsApartment'));
    }

    public function search(Request $request){
        //verifica città cercata
        $data = $request->validate([
            'city' => 'required|string'
        ]);
        $city = $data['city'];


        // parte da scommentare solo in fase di test per poter usare il dd e vedere i risultati intermedi

        // define('API_KEY', 'QP8w5tRMWAql5zBK3TpGZWGKdO1Ls5AI');
        // define('API_URL', 'https://api.tomtom.com/search/2/structuredGeocode.json?countryCode=IT');

        // $url = API_URL . '&municipality=' .  urlencode($city) . '&language=it-IT&view=Unified&key=' . API_KEY;
        
        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        // $response = curl_exec($ch);
        // if(curl_error($ch)) {
        //     return null;
        // }
        // $dataCord = json_decode($response, true);

        // $results = $dataCord['results'];
        
        // if(!$results){
        //     return 'Non abbiamo trovato la città';
        // }

        // foreach ($results as $result) {

        //     if($result['entityType'] === "Municipality") {

        //         $foundcity = $result['address']['municipality'];
                
        //         if (strtolower($foundcity) === strtolower($city) ) {
        //             // dd($result['position']);
        //             $cordinate = $result['position'];
    
        //             $lat = $cordinate['lat'];
        //             $lon = $cordinate['lon'];
        //             break;
                    
        //         }
        //     }
        // }
        // if(!$lat) {
        //     return 'Non abbiamo trovato la tua città';
        // }

        // // $apartments = DB::table('apartments')->whereBetween('latitude', [$lat-1, $lat+1])->get();

        // $allApartments = DB::table('apartments')->get();
        // $apartments = [];

        // foreach ($allApartments as $apartment) {
        //     $lat2 = $apartment -> latitude;
        //     $lon2 = $apartment -> longitude;

        //     $distance = $this->distance($lat, $lon, $lat2, $lon2);
            
        //     if($distance <= 20) {

        //         $sponsorships_apartment = DB::table('apartment_sponsorship')->where('apartment_id', $apartment -> id)->get();

        //         $active_sponsorship = false;

        //         foreach ($sponsorships_apartment as $sponsorship_apartment) 
        //         {
        //             $today = date("Y-m-d");
        //             $end_sponsorship_date = $sponsorship_apartment -> end_sponsorship;

        //             if($end_sponsorship_date >= $today) 
        //             {
        //                 $active_sponsorship = true;
        //             }
        //         }
        //         // se l'appartamento è sponsorizzato
        //         if($active_sponsorship) {
        //             array_unshift($apartments, $apartment);
        //         } else {
        //             $apartments []= $apartment;
        //         }
        //     }
        // }

        // dd($apartments);


        return view('pages.search', compact('city'));
    }

    public function distance($lat1, $lon1, $lat2, $lon2) {

        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
      
        return round($miles * 1.609344);
    }

    public function getApiApartmentOptionals($city, $userDistance){

        // richiesta delle coordinate della città inserita nella barra di ricerca

        define('API_KEY', 'QP8w5tRMWAql5zBK3TpGZWGKdO1Ls5AI');
        define('API_URL', 'https://api.tomtom.com/search/2/structuredGeocode.json?countryCode=IT');

        $url = API_URL . '&municipality=' .  urlencode($city) . '&language=it-IT&view=Unified&key=' . API_KEY;
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $response = curl_exec($ch);
        if(curl_error($ch)) {
            return null;
        }
        $dataCord = json_decode($response, true);

        $results = $dataCord['results'];
        
        if(!$results){
            return 'Non abbiamo trovato la città';
        }

        foreach ($results as $result) {

            if($result['entityType'] === "Municipality") {

                $foundcity = $result['address']['municipality'];
                
                if (strtolower($foundcity) === strtolower($city) ) {
                    // dd($result['position']);
                    $cordinate = $result['position'];
    
                    $lat = $cordinate['lat'];
                    $lon = $cordinate['lon'];
                    break;
                    
                }
            }
        }
        if(!$lat) {
            return 'Non abbiamo trovato la tua città';
        }

        // $apartments = DB::table('apartments')->whereBetween('latitude', [$lat-1, $lat+1])->get();

        $allApartments = DB::table('apartments')->get();
        $apartments = [];

        foreach ($allApartments as $apartment) {
            $lat2 = $apartment -> latitude;
            $lon2 = $apartment -> longitude;

            $distance = $this->distance($lat, $lon, $lat2, $lon2);
            
            if($distance <= $userDistance) {

                $sponsorships_apartment = DB::table('apartment_sponsorship')->where('apartment_id', $apartment -> id)->get();

                $active_sponsorship = false;

                foreach ($sponsorships_apartment as $sponsorship_apartment) 
                {
                    $today = date("Y-m-d");
                    $end_sponsorship_date = $sponsorship_apartment -> end_sponsorship;

                    if($end_sponsorship_date >= $today) 
                    {
                        $active_sponsorship = true;
                    }
                }
                // se l'appartamento è sponsorizzato
                if($active_sponsorship) {
                    array_unshift($apartments, $apartment);
                } else {
                    $apartments []= $apartment;
                }
            }
        }



        // qui inizia la parte già funzionante

        //array di appartamenti trovati nella città cercata

        // $apartments = DB::table('apartments')->where('city', $city)->get();

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
        
        return redirect() -> route('messageStoreSuccess', $apartment -> id);
    }

    public function messageStoreSuccess($id){
        $apartment = Apartment::findOrFail($id);
        return view('pages.messageSaved', compact('apartment'));
    }
}
