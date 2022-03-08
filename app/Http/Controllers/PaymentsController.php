<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Apartment;
use App\Sponsorship;


class PaymentsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function sponsorship($id){
        $apartment = Apartment::findOrFail($id);
        $sponsorships = Sponsorship::all();
        return view('pages.sponsorship', compact('apartment', 'sponsorships'));
    }
    public function payment(Request $request){
        $data = $request->validate([
            'price' => 'required',
            'card_number' => 'required|min:16',
            'expiring_date' => 'required|min:5'
        ]);
        dd($data);
    }
}
