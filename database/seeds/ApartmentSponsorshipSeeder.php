<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ApartmentSponsorshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apartment_sponsorship')->insert([

            'payment_dateTime' => '2022-02-25',
            'start_sponsorship' => '2022-02-25',
            'end_sponsorship' => '2022-02-25',
            'apartment_id' => 1,
            'sponsorship_id' => 2,
        ]);
    }
}
