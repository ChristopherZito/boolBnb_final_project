<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ViewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($x = 0; $x < 50; $x++){

            $i = rand(1,68);

            DB::table('views')->insert([
                'data_views' => '2022-02-03',
                'time_views' => '11:00:30',
                'ip' => '127.1.159.2',
                'apartment_id' => $i,
            ]);
        }
    }
}


