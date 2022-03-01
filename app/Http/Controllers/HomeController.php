<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Apartment;
use App\Optional;

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
        $optionals = Optional::all();
        return view('pages.create', compact('optionals'));
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
            'image' => 'required',
            'optionals' => 'nullable'
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

        if (array_key_exists('optionals', $data)) {
            $optionals = Optional::findOrFail($request -> get('optionals'));
            $apartment -> optionals() -> attach($optionals);
        }
        $apartment -> save();

        return redirect() -> route('dashboard');
    }

    public function edit($id){
        $apartment = Apartment::findOrFail($id);
        $optionals = Optional::all();
        return view('pages.edit', compact('apartment', 'optionals'));
    }

    public function update(Request $request, $id) {
        $data = $request->validate([
            'description' => 'required|string|max:1000',
            'rooms' => 'required|integer|min:1',
            'beds' => 'required|integer|min:1',
            'bathrooms' => 'required|integer|min:1',
            'square_meters' => 'required|integer|min:10',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:60',
            'image' => 'nullable',
            'optionals' => 'nullable'
        ]);

        if($request->file('image')) {
            $imageFile = $data['image'];
    
            $imageName = rand(100000, 999999) . '_' . time() 
                        . '.' . $imageFile -> getClientOriginalExtension();
    
            $imageFile -> storeAs('/apartments_images/', $imageName , 'public');
            $data['image'] = '/storage/apartments_images/'.$imageName;
        }

        // $data['user_id'] = Auth::user() -> id;

        $apartment = Apartment::findOrFail($id);
        $apartment -> update($data);

        if($request->get('user_id')) {

            $user = User::findOrFail($request->get('user_id'));
            $apartment->user()->associate($user);
            $apartment->save();
        }

        if($request->get('optionals')) {

            $optionals = Optional::findOrFail($request->get('optionals'));
        } else {
            $optionals = [];
        }
        $apartment->optionals()->sync($optionals);
        $apartment->save();

        return redirect() -> route('show', $apartment->id);
    }

}
