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
        $gateway = new Braintree\Gateway([
            'environment' => getenv('BT_ENVIRONMENT'),
            'merchantId' => getenv('BT_MERCHANT_ID'),
            'publicKey' => getenv('BT_PUBLIC_KEY'),
            'privateKey' => getenv('BT_PRIVATE_KEY')
        ]);
        //! composer require braintree/braintree_php
        //! composer require laravel/cashier-braintree
        //! npm i braintree-web-drop-in
        //! npm i braintree
        //? BT_ENVIRONMENT=sandbox
        //? BT_MERCHANT_ID=y7wk79q94jzg3hzd
        //? BT_PUBLIC_KEY=f8fg287qdt7qrzzv
        //? BT_PRIVATE_KEY=382f628ad5ca782584424465c0bd879d
        return view('pages.sponsorship', compact('apartment', 'sponsorships', 'gateway'));
    }
    public function payment(Request $request, $id){
    ////
        $gateway = new Braintree\Gateway([
            'environment' => getenv('BT_ENVIRONMENT'),
            'merchantId' => getenv('BT_MERCHANT_ID'),
            'publicKey' => getenv('BT_PUBLIC_KEY'),
            'privateKey' => getenv('BT_PRIVATE_KEY')
        ]);
        $sponsorship = Sponsorship::findOrFail($request -> get('amount'));
        $sponsorships = Sponsorship::all();
        foreach($sponsorships as $getsponsorship ){
            if($getsponsorship -> id == $sponsorship -> id){
                $amount = $getsponsorship -> price;
            }            
        } 

        // $payload = $request->input('payment_method_nonce', false);
        // $nonce = $payload['nonce'];
        //! ERROR codice non funzionante
            // $nonce = $_POST["payment_method_nonce"]; 
            // dd($nonce);
        //! 'fake-valid-nonce' "FAKER"

        $result = $gateway->transaction()->sale([
            'amount' => $amount,
            'paymentMethodNonce' => 'fake-valid-nonce',
            'options' => [
                'submitForSettlement' => true
            ]
        ]);
    ////    
        //!-------------------------------------------- 
        if ($result->success || !is_null($result->transaction)) {
            $transaction = $result->transaction;
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
        }else {
            $errorString = "";
            foreach($result->errors->deepAll() as $error) {
                $errorString .= 'Error: ' . $error->code . ": " . $error->message . "\n";
            }
            $_SESSION["errors"] = $errorString;
            return redirect() -> route('home');
        }
    }

    public function paymentSuccess($id){
        $apartment = Apartment::findOrFail($id);
        return view('pages.paymentSuccess', compact('apartment'));
    }
}
