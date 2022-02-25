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
        DB::table('views')->insert([
            'data_views' => '2022-02-03',
            'apartment_id' => 1,
        ]);

        DB::table('views')->insert([
            'data_views' => '2021-02-03',
            'apartment_id' => 1,
        ]);
        
        DB::table('views')->insert([
            'data_views' => '2022-02-03',
            'apartment_id' => 1,
        ]);

        DB::table('views')->insert([
            'data_views' => '2022-02-03',
            'apartment_id' => 2,
        ]);

        DB::table('views')->insert([
            'data_views' => '2022-02-03',
            'apartment_id' => 2,
        ]);
    }
}


