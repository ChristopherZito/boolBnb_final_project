<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Apartment;
class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $apartment = Apartment::all();
        for ($i=1; $i < count($apartment); $i++) { 
            for($x = 0; $x < 100; $x++){
                $day = rand(1,10);
                $date = '2022-03-'.$day;
                DB::table('messages')->insert([
                    'email_sender' => 'nome.cognome@gmail.com',
                    'text' => 'sono interessato al suo locale, mi ricontatti a questa email',
                    'apartment_id' => $i,
                    'created_at' => $date,
                ]); 
            }
        }
          
    }
}
