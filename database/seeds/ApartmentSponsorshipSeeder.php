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
        $arrayNumeri = array();
        while( count($arrayNumeri) < 9){
            
            $con = true;
            while($con){
                $numero = rand(1,20);
                if(!in_array($numero, $arrayNumeri)){
                    $arrayNumeri[] = $numero;
                    $con = false;
                }
            }
            
        }
        for ($n=0; $n < count($arrayNumeri); $n++) { 
            //Prendo il momento attuale
            $dateTimePayment = date('y-m-d h:i:s');
            $dateTimeStart = date('y-m-d h:i:s');
            $sponsorship = rand(1,3);
            $dateTimeEnd = new DateTime($dateTimeStart);//lo chiamo nel Datetime
            if($sponsorship == 1){
                $dateTimeEnd->modify("+1 day");//lo "sposto" di 24 ore in avanti
            }else if($sponsorship == 2){
                $dateTimeEnd->modify("+3 day");//lo "sposto" 72 ore in avanti
            }else{
                $dateTimeEnd->modify("+6 day");//lo "sposto" 144 ore in avanti
            } 
            $result = $dateTimeEnd->format('Y-m-d H:i:s');
            
            DB::table('apartment_sponsorship')->insert([
                'payment_dateTime' => $dateTimePayment,
                'start_sponsorship' => $dateTimeStart,
                'end_sponsorship' => $dateTimeEnd,
                'apartment_id' => $arrayNumeri[$n],
                'sponsorship_id' => $sponsorship,
            ]);
        }   
    }
}
