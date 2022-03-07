<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ApartmentOptionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 100; $i++) { 

            $a = rand(1,20);
            $apartment = rand(1,23);
            DB::table('apartment_optional')->insert([
                'apartment_id' => $apartment,
                'optional_id' =>  $a,
            ]);
        }
    }
}
