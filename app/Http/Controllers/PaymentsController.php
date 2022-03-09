<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Apartment;
use App\Sponsorship;

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
            'environment' => 'sandbox',
            'merchantId' => 'y7wk79q94jzg3hzd',
            'publicKey' => 'f8fg287qdt7qrzzv',
            'privateKey' => '382f628ad5ca782584424465c0bd879d'
        ]);
        //! composer require braintree/braintree_php
        //! composer require laravel/cashier-braintree
        //! npm i braintree-web-drop-in
        //! npm i braintree
        return view('pages.sponsorship', compact('apartment', 'sponsorships', 'gateway'));
    }
    public function payment(Request $request){
        
        $gateway = new Braintree\Gateway([
            'environment' => 'sandbox',
            'merchantId' => 'y7wk79q94jzg3hzd',
            'publicKey' => 'f8fg287qdt7qrzzv',
            'privateKey' => '382f628ad5ca782584424465c0bd879d'
        ]);
        $amount = $_POST["amount"];
        $nonce = $_POST["payment_method_nonce"];
        // dd($nonce);
        $baseUrl = stripslashes(dirname($_SERVER['SCRIPT_NAME']));

        $baseUrl = $baseUrl == '/' ? $baseUrl : $baseUrl . '/';
        
        

        $result = $gateway->transaction()->sale([
            'amount' => $amount,
            'paymentMethodNonce' => $nonce,
            'options' => [
                'submitForSettlement' => true
            ]
        ]);
        // dd($result);
        if ($result->success || !is_null($result->transaction)) {
            $transaction = $result->transaction;
            header("Location: " . $baseUrl . "transaction.php?id=" . $transaction->id);
        } else {
            $errorString = "";
        
            foreach($result->errors->deepAll() as $error) {
                $errorString .= 'Error: ' . $error->code . ": " . $error->message . "\n";
            }
        
            $_SESSION["errors"] = $errorString;
            header("Location: " . $baseUrl . "index.php");
        }

        return redirect() -> route('dashboard');
    }
}
