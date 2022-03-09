<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Apartment;
use App\Sponsorship;
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
        return view('pages.sponsorship', compact('apartment', 'sponsorships', 'gateway'));
    }
    public function payment(Request $request, $id){
        //?--------------------------------------------
        $dateTime = date('y-m-d h:i:s');
        $dateTimeEnd = new DateTime($dateTime);
        //--------------------------------------
        $data['payment_dateTime'] = $dateTime;
        $data['start_sponsorship'] = $dateTime;

        // creazione data in base al costo
        if($amount = '2.99'){
            $dateTimeEnd->modify("+1 day");//lo "sposto" di 24 ore in avanti
            $data['end_sponsorship'] = $dateTimeEnd;
        }else if($amount = '5.99'){
            $dateTimeEnd->modify("+3 day");//lo "sposto" 72 ore in avanti
            $data['end_sponsorship'] = $dateTimeEnd;
        }else if($amount = '9.99'){
            $dateTimeEnd->modify("+6 day");//lo "sposto" 144 ore in avanti
            $data['end_sponsorship'] = $dateTimeEnd;
        } 
        $apartment = Apartment::findOrFail($id);
        $sponsorship = Sponsorship::findOrFail($request -> get('amount'));
        $apartment -> sponsorships() -> attach($sponsorship);
        $apartment -> update($data);
        $apartment->save();
    ////
        /* Use payment method nonce here */
        $gateway = new Braintree\Gateway([
            'environment' => getenv('BT_ENVIRONMENT'),
            'merchantId' => getenv('BT_MERCHANT_ID'),
            'publicKey' => getenv('BT_PUBLIC_KEY'),
            'privateKey' => getenv('BT_PRIVATE_KEY')
        ]);

        $amount = $_POST["amount"];
        //! ERROR codice non funzionante
        //TODO $nonce = $_POST["payment_method_nonce"]; 
        //* 'fake-valid-nonce' "FAKER"
        $result = $gateway->transaction()->sale([
            'amount' => $amount,
            'paymentMethodNonce' => 'fake-valid-nonce',
            'options' => [
                'submitForSettlement' => true
            ]
        ]);
        //!-------------------------------------------- 
        if ($result->success || !is_null($result->transaction)) {
            $transaction = $result->transaction;
            return redirect() -> route('show', $apartment -> id);
        }else {
            $errorString = "";
            foreach($result->errors->deepAll() as $error) {
                $errorString .= 'Error: ' . $error->code . ": " . $error->message . "\n";
            }
            $_SESSION["errors"] = $errorString;
            return redirect() -> route('home');
        }
    ////
        
    }
}
