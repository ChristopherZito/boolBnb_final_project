<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            'email_sender' => 'fake@gmail.com',
            'text' => 'sono interessato al suo locale, mi ricontatti a questa email',
            'apartment_id' => 1,
        ]);
        DB::table('messages')->insert([
            'email_sender' => 'fake@gmail.com',
            'text' => 'sono interessato al suo locale, mi ricontatti a questa email',
            'apartment_id' => 1,
        ]);
        DB::table('messages')->insert([
            'email_sender' => 'fake@gmail.com',
            'text' => 'sono interessato al suo locale, mi ricontatti a questa email',
            'apartment_id' => 2,
        ]);
        DB::table('messages')->insert([
            'email_sender' => 'fake@gmail.com',
            'text' => 'sono interessato al suo locale, mi ricontatti a questa email',
            'apartment_id' => 1,
        ]);
        DB::table('messages')->insert([
            'email_sender' => 'fake@gmail.com',
            'text' => 'sono interessato al suo locale, mi ricontatti a questa email',
            'apartment_id' => 2,
        ]);

        
    }
}
