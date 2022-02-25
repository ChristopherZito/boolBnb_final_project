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
        DB::table('apartment_optional')->insert([
            'apartment_id' => 1,
            'optional_id' => 1,
        ]);
        DB::table('apartment_optional')->insert([
            'apartment_id' => 1,
            'optional_id' => 2,
        ]);
        DB::table('apartment_optional')->insert([
            'apartment_id' => 1,
            'optional_id' => 3,
        ]);
        DB::table('apartment_optional')->insert([
            'apartment_id' => 1,
            'optional_id' => 4,
        ]);
        DB::table('apartment_optional')->insert([
            'apartment_id' => 1,
            'optional_id' => 5,
        ]);
        DB::table('apartment_optional')->insert([
            'apartment_id' => 1,
            'optional_id' => 6,
        ]);
    }
}
