<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Apartment;
use App\Sponsorship;
use Illuminate\Support\Facades\DB;
use DateTime;

use Braintree;
use Braintree_Transaction;
class PaymentsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function sponsorship(Request $request,$id){
        $apartment = Apartment::findOrFail($id);
        $sponsorships = Sponsorship::all();
        $braintree = config('braintree');
        $clientToken = $braintree->clientToken()->generate();
        return view('layouts.payment', compact('apartment', 'sponsorships','clientToken'));
    }
    public function process(Request $request,$id){

        $sponsorship = Sponsorship::findOrFail($request -> get('amount'));
        $sponsorships = Sponsorship::all();
        foreach($sponsorships as $getsponsorship ){
            if($getsponsorship -> id == $sponsorship -> id){
                $amount = $getsponsorship -> price;
            }            
        }

        $nonce = $_POST["payment_method_nonce"]; 
        $braintree = config('braintree');
        if($nonce){
            
            $result = $braintree->transaction()->sale([
                'amount' => $amount,
                'paymentMethodNonce' => $nonce,
                'options' => [
                    'submitForSettlement' => true
                ]
            ]);
            //?--------------------------------------------
            $dateTime = date('y-m-d h:i:s');
            $dateTimeEnd = new DateTime($dateTime);
            //--------------------------------------
            $data['payment_dateTime'] = $dateTime;
            $data['start_sponsorship'] = $dateTime;
            // creazione data in base al costo
            if($amount == 2.99){
                $dateTimeEnd->modify("+1 day");//lo "sposto" di 24 ore in avanti
                $result = $dateTimeEnd->format('Y-m-d H:i:s');
                $data['end_sponsorship'] = $result;
            }else if($amount == 5.99){
                $dateTimeEnd->modify("+3 day");//lo "sposto" 72 ore in avanti
                $result = $dateTimeEnd->format('Y-m-d H:i:s');
                $data['end_sponsorship'] = $result;
            }else if($amount == 9.99){
                $dateTimeEnd->modify("+6 day");//lo "sposto" 144 ore in avanti
                $result = $dateTimeEnd->format('Y-m-d H:i:s');
                $data['end_sponsorship'] = $result;
            }
            $apartment = Apartment::findOrFail($id);
            DB::table('apartment_sponsorship')->insert([
                'payment_dateTime' =>   $data['payment_dateTime'],
                'start_sponsorship' => $data['start_sponsorship'],
                'end_sponsorship' =>  $data['end_sponsorship'],
                'apartment_id' =>  $apartment -> id,
                'sponsorship_id' => $sponsorship -> id,
            ]);
        //?--------------------------------------------
        return redirect() -> route('paymentSuccess', $apartment -> id);
        }
        else {
            //// dd("vaffanculo");
            //// return "vaffanculo";
            return redirect() -> route('home');
        }
        
    }
    public function paymentSuccess($id){
        $apartment = Apartment::findOrFail($id);
        return view('pages.paymentSuccess', compact('apartment'));
    }
}
