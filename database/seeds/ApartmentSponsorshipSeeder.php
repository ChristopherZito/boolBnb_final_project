<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Sponsorship;
class ApartmentSponsorshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sponsorships = Sponsorship::All();
        foreach ($sponsorships as $sponsorship) {
            for ($t=0; $t < 10; $t++) { 
                //Prendo il momento attuale
                $dateTimePayment = date('y-m-d h:i:s');
                $dateTimeStart = date('y-m-d h:i:s');
                $dateTimeEnd = new DateTime($dateTimeStart);//lo chiamo nel Datetime
                if($sponsorship -> id == 1){
                    $dateTimeEnd->modify("+1 day");//lo "sposto" di 24 ore in avanti
                }else if($sponsorship -> id == 2){
                    $dateTimeEnd->modify("+3 day");//lo "sposto" 72 ore in avanti
                }else{
                    $dateTimeEnd->modify("+6 day");//lo "sposto" 144 ore in avanti
                } 

                $apartment = rand(1,20);
                DB::table('apartment_sponsorship')->insert([
                    'payment_dateTime' => $dateTimePayment,
                    'start_sponsorship' => $dateTimeStart,
                    'end_sponsorship' => $dateTimeEnd,
                    'apartment_id' => $apartment,
                    'sponsorship_id' => $sponsorship -> id,
                ]);
            }
        }
        
    }
}
