<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class OptionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('optionals')->insert([
            'name' => 'Wi-fi',
        ]);

        DB::table('optionals')->insert([
            'name' => 'Cucina',
        ]);

        DB::table('optionals')->insert([
            'name' => 'Self check-in',
        ]);

        DB::table('optionals')->insert([
            'name' => 'Piscina',
        ]);

        DB::table('optionals')->insert([
            'name' => 'Idromassaggio',
        ]);

        DB::table('optionals')->insert([
            'name' => 'Lavatrice',
        ]);

        DB::table('optionals')->insert([
            'name' => 'Asciugatrice',
        ]);

        DB::table('optionals')->insert([
            'name' => 'Aria condizionata',
        ]);

        DB::table('optionals')->insert([
            'name' => 'Riscaldamento',
        ]);

        DB::table('optionals')->insert([
            'name' => 'Spazio di lavoro dedicato',
        ]);

        DB::table('optionals')->insert([
            'name' => 'Camino',
        ]);

        DB::table('optionals')->insert([
            'name' => 'Palestra',
        ]);

        DB::table('optionals')->insert([
            'name' => 'Colazione',
        ]);

        DB::table('optionals')->insert([
            'name' => 'Parcheggio gratuito',
        ]);

        DB::table('optionals')->insert([
            'name' => 'Postazione di ricarica per i veicoli elettrici',
        ]);

        DB::table('optionals')->insert([
            'name' => 'Asciugacapelli',
        ]);

        DB::table('optionals')->insert([
            'name' => 'Ferro da stiro',
        ]);

        DB::table('optionals')->insert([
            'name' => 'Seggiolone',
        ]);

        DB::table('optionals')->insert([
            'name' => 'Allarme antiincendio',
        ]);

        DB::table('optionals')->insert([
            'name' => 'Rilevatore di monossido di carbonio',
        ]);
        
        
        
    }
}
