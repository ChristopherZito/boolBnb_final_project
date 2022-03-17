<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Apartment;

class ApartmentOptionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $apartment = Apartment::all();
        for ($i=0; $i < count($apartment); $i++) { 
            $arrayNumeri = array();
            $nrand = rand(5,15);
            for($x = 0; $x < $nrand; $x++){
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
                DB::table('apartment_optional')->insert([
                    'apartment_id' => $apartment[$i] -> id,
                    'optional_id' =>  $arrayNumeri[$n],
                ]);
            }
        }
    }
}
