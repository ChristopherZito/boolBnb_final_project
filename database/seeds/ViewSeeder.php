<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Apartment;
class ViewSeeder extends Seeder
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
                DB::table('views')->insert([
                    'data_views' =>  $date,
                    'time_views' => '00:00:00',
                    'ip' => '127.1.159.2',
                    'apartment_id' => $i,
                ]);
            }
        }
    }
}


