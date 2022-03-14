<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SponsorshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sponsorships')->insert([

            'price' => 2.99 ,
            'type' => 1 ,
            'description' => "Sponsorizza per 1 giorno (2,99 €)" ,
        ]);

        DB::table('sponsorships')->insert([

            'price' => 5.99 ,
            'type' => 2 ,
            'description' => "Sponsorizza per 3 giorni (5,99 €)" ,
        ]);

        DB::table('sponsorships')->insert([

            'price' => 9.99 ,
            'type' => 3 ,
            'description' => "Sponsorizza per 6 giorni (9,99 €)" ,
        ]);

    
        
    }
}
