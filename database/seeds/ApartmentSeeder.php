<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apartments')->insert([
            'description' => 'monolocale, molto molto  molto molto molto molto molto molto piccolo',
            'rooms' => 1,
            'beds' => 2,
            'bathrooms' => 1,
            'square_meters' => 50,
            'address' => 'Via Giovanni Keplero, 34',
            'city' => 'Milano',
            'latitude' => 45.493852,
            'longitude' => 9.1927965,
            'image' => 'https://unsplash.it/300/300?image=1',
            'visibility' => 1,
            'user_id' => 1,

        ]);


        DB::table('apartments')->insert([
            'description' => 'bilocale, in centro, secondo piano con terrazzo',
            'rooms' => 6,
            'beds' => 15,
            'bathrooms' => 3,
            'square_meters' => 250,
            'address' => 'Via Ponte Seveso, 40',
            'city' => 'Milano',
            'latitude' => 45.4411158,
            'longitude' => 9.1377813,
            'image' => 'https://unsplash.it/300/300?image=2',
            'visibility' => 1,
            'user_id' => 2,

        ]);
        DB::table('apartments')->insert([
            'description' => 'monolocale, molto molto  molto molto molto molto molto molto piccolo',
            'rooms' => 1,
            'beds' => 2,
            'bathrooms' => 1,
            'square_meters' => 50,
            'address' => 'Via Guglielmo Silva, 12',
            'city' => 'Milano',
            'latitude' => 45.4408963,
            'longitude' => 9.1377814,
            'image' => 'https://unsplash.it/300/300?image=3',
            'visibility' => 1,
            'user_id' => 3,

        ]);
        DB::table('apartments')->insert([
            'description' => 'monolocale, molto molto  molto molto molto molto molto molto piccolo',
            'rooms' => 1,
            'beds' => 2,
            'bathrooms' => 1,
            'square_meters' => 50,
            'address' => 'Piazza Duca d Aosta, 16',
            'city' => 'Milano',
            'latitude' => 45.4408963,
            'longitude' => 9.1377814,
            'image' => 'https://unsplash.it/300/300?image=4',
            'visibility' => 1,
            'user_id' => 4,

        ]);
        DB::table('apartments')->insert([
            'description' => 'monolocale, molto molto  molto molto molto molto molto molto piccolo',
            'rooms' => 1,
            'beds' => 2,
            'bathrooms' => 1,
            'square_meters' => 50,
            'address' => 'Via Pietro Calvi, 18',
            'city' => 'Milano',
            'latitude' => 45.4408963,
            'longitude' => 9.1377814,
            'image' => 'https://unsplash.it/300/300?image=5',
            'visibility' => 1,
            'user_id' => 5,

        ]);


        DB::table('apartments')->insert([
            'description' => 'monolocale, molto molto  molto molto molto molto molto molto piccolo',
            'rooms' => 1,
            'beds' => 2,
            'bathrooms' => 1,
            'square_meters' => 50,
            'address' => 'Via Giovanni Keplero, 34',
            'city' => 'Roma',
            'latitude' => 41.8838611,
            'longitude' => 12.4765523,
            'image' => 'https://unsplash.it/300/300?image=1',
            'visibility' => 1,
            'user_id' => 1,

        ]);
        DB::table('apartments')->insert([
            'description' => 'monolocale, molto molto  molto molto molto molto molto molto piccolo',
            'rooms' => 1,
            'beds' => 2,
            'bathrooms' => 1,
            'square_meters' => 50,
            'address' => 'Via Giovanni Keplero, 34',
            'city' => 'Roma',
            'latitude' => 41.8858311,
            'longitude' => 12.4865223,
            'image' => 'https://unsplash.it/300/300?image=1',
            'visibility' => 1,
            'user_id' => 2,

        ]);
        DB::table('apartments')->insert([
            'description' => 'monolocale, molto molto  molto molto molto molto molto molto piccolo',
            'rooms' => 1,
            'beds' => 2,
            'bathrooms' => 1,
            'square_meters' => 50,
            'address' => 'Via Giovanni Keplero, 34',
            'city' => 'Roma',
            'latitude' => 41.8383811,
            'longitude' => 12.476923,
            'image' => 'https://unsplash.it/300/300?image=1',
            'visibility' => 1,
            'user_id' => 3,

        ]);
        DB::table('apartments')->insert([
            'description' => 'monolocale, molto molto  molto molto molto molto molto molto piccolo',
            'rooms' => 1,
            'beds' => 2,
            'bathrooms' => 1,
            'square_meters' => 50,
            'address' => 'Via Giovanni Keplero, 34',
            'city' => 'Roma',
            'latitude' => 41.8828651,
            'longitude' => 12.4765823,
            'image' => 'https://unsplash.it/300/300?image=1',
            'visibility' => 1,
            'user_id' => 4,

        ]);
        DB::table('apartments')->insert([
            'description' => 'monolocale, molto molto  molto molto molto molto molto molto piccolo',
            'rooms' => 1,
            'beds' => 2,
            'bathrooms' => 1,
            'square_meters' => 50,
            'address' => 'Via Giovanni Keplero, 34',
            'city' => 'Roma',
            'latitude' => 41.8138315,
            'longitude' => 12.4765523,
            'image' => 'https://unsplash.it/300/300?image=1',
            'visibility' => 1,
            'user_id' => 5,

        ]);
    }
}
