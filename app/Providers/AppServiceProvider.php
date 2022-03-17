<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Braintree;
use App\Providers\Braintree_Configuration;
class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }
    public function boot(){
    $braintree = new \Braintree\Gateway([
        'environment' => 'sandbox',
        'merchantId' => 'y7wk79q94jzg3hzd',
        'publicKey' => 'f8fg287qdt7qrzzv',
        'privateKey' => '382f628ad5ca782584424465c0bd879d'
    ]);
    config(['braintree' => $braintree]); 
    }
}
