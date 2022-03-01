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
    public function create(){
        return view('pages.create');
    }
    public function store(Request $request) {
        $data = $request->validate([
            'description' => 'required|string|max:1000',
            'rooms' => 'required|integer|min:1',
            'beds' => 'required|integer|min:1',
            'bathrooms' => 'required|integer|min:1',
            'square_meters' => 'required|integer|min:10',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:60',
            'image' => 'required'
        ]);
        // $data['image'] = 'https://a0.muscache.com/im/pictures/1e87d9ab-159b-41a1-8553-89f14876f92a.jpg?im_w=1200';
        $data['latitude'] = 45.4855254;
        $data['longitude'] = 9.4855254;
        $data['visibility'] = 1; 

        $imageFile = $data['image'];

        $imageName = rand(100000, 999999) . '_' . time() 
                    . '.' . $imageFile -> getClientOriginalExtension();

        $imageFile -> storeAs('/apartments_images/', $imageName , 'public');
        $data['image'] = '/storage/apartments_images/'.$imageName;

        // $data['user_id'] = Auth::user() -> id;
        $apartment = Apartment::make($data);
        $user = Auth::user($data);
        $apartment -> user() -> associate($user);
        $apartment -> save();

        return redirect() -> route('dashboard');

    }

}
