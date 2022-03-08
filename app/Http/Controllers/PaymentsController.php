<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Apartment;
use App\Sponsorship;


class PaymentsController extends Controller
{
    public function sponsorship($id){
        $apartment = Apartment::findOrFail($id);
        $sponsorships = Sponsorship::all();

        /* $gateway = new Braintree\Gateway([
            'environment' => getenv('BT_ENVIRONMENT'),
            'merchantId' => getenv('BT_MERCHANT_ID'),
            'publicKey' => getenv('BT_PUBLIC_KEY'),
            'privateKey' => getenv('BT_PRIVATE_KEY')
        ]);
        dd($gateway); */
        return view('pages.sponsorship', compact('apartment', 'sponsorships'));
    }
    public function payment(Request $request){
       
    }
}
