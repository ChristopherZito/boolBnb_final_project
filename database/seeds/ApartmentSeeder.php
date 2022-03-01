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
            'description' => 'Monolocale a Loreto, vicino al politecnico',
            'rooms' => 2,
            'beds' => 1,
            'bathrooms' => 1,
            'square_meters' => 50,
            'address' => 'Piazza Piero Gobetti, 74',
            'city' => 'Milano',
            'latitude' => 45.4855254,
            'longitude' => 9.231835,
            'image' => 'https://a0.muscache.com/im/pictures/8b4c9a2d-536e-4f6b-b0ae-4a3254185335.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 1,

        ]);
        DB::table('apartments')->insert([
            'description' => 'Vintage Apt Cosy M2 Lambrate',
            'rooms' => 2,
            'beds' => 1,
            'bathrooms' => 1,
            'square_meters' => 50,
            'address' => 'Piazza Piero Gobetti, 26',
            'city' => 'Milano',
            'latitude' => 45.4855254,
            'longitude' => 9.231835,
            'image' => 'https://a0.muscache.com/im/pictures/1e87d9ab-159b-41a1-8553-89f14876f92a.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 1,

        ]);
        DB::table('apartments')->insert([
            'description' => 'bilocale, in centro, secondo piano con terrazzo',
            'rooms' => 2,
            'beds' => 2,
            'bathrooms' => 1,
            'square_meters' => 70,
            'address' => 'Via Ponte Seveso, 40',
            'city' => 'Milano',
            'latitude' => 45.4411158,
            'longitude' => 9.1377813,
            'image' => 'https://a0.muscache.com/im/pictures/43087149-045b-46bc-87b3-79a173507d3e.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 2,

        ]);
        DB::table('apartments')->insert([
            'description' => 'DUOMO12- Suite Madonnina, Soggiornare a pochi passi dal Duomo di Milano',
            'rooms' => 2,
            'beds' => 1,
            'bathrooms' => 1,
            'square_meters' => 54,
            'address' => 'Piazza dell unione, 76',
            'city' => 'Milano',
            'latitude' => 45.4620434,
            'longitude' => 9.1852367,
            'image' => 'https://a0.muscache.com/im/pictures/d1b72920-f34c-4dcc-a731-b818eac47567.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 1,

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
            'image' => 'https://www.lago.it/wp-content/uploads/2017/10/Lago-Appartamento-Store-Arnhem-1.jpg',
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
        DB::table('apartments')->insert([
            'description' => 'CMD21, monolocale ',
            'rooms' => 2,
            'beds' => 1,
            'bathrooms' => 1,
            'square_meters' => 60,
            'address' => 'Via Costa San Giorgio, 14',
            'city' => 'Firenze',
            'latitude' => 43.765359,
            'longitude' => 11.252807,
            'image' => 'https://a0.muscache.com/im/pictures/f4dc9d7a-d0af-49ee-995e-8e5ae209082f.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 2,

        ]);
        DB::table('apartments')->insert([
            'description' => 'Bardi Palace, Spectacular aristocratic Palace in the heart of the historic city center, a few steps away from Ponte Vecchio, Piazza Pitti, Duomo, Uffizi, Piazza della Signoria',
            'rooms' => 1,
            'beds' => 3,
            'bathrooms' => 2,
            'square_meters' => 170,
            'address' => 'Via Costa dei Magnoli, 21',
            'city' => 'Firenze',
            'latitude' => 43.7662149,
            'longitude' => 11.252284,
            'image' => 'https://a0.muscache.com/im/pictures/103587692/76ec1888_original.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 2,

        ]);
        DB::table('apartments')->insert([
            'description' => 'monolocale, molto molto  molto molto molto molto molto molto piccolo',
            'rooms' => 2,
            'beds' => 1,
            'bathrooms' => 1,
            'square_meters' => 75,
            'address' => 'Via de Ginori, 10',
            'city' => 'Firenze',
            'latitude' => 43.7761881,
            'longitude' => 11.2533898,
            'image' => 'https://a0.muscache.com/im/pictures/0c943c52-3bc4-4580-9ffe-cc183537348a.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 2,

        ]);
        DB::table('apartments')->insert([
            'description' => 'Villa Ligheia,Villa immersa tra le stupende colline toscane  ',
            'rooms' => 4,
            'beds' => 3,
            'bathrooms' => 3,
            'square_meters' => 120,
            'address' => 'Via Luiano di sopra, 47',
            'city' => 'Gambassi Terme',
            'latitude' => 43.5405467,
            'longitude' => 10.9665988,
            'image' => 'https://a0.muscache.com/im/pictures/prohost-api/Hosting-22552362/original/349a7563-7aff-4902-8e1b-97557cd37701.jpeg?im_w=1200',
            'visibility' => 1,
            'user_id' => 5,

        ]);
        DB::table('apartments')->insert([
            'description' => 'B3,Stupendo Appartamento nelle campagne Senesi ',
            'rooms' => 3,
            'beds' => 2,
            'bathrooms' => 1,
            'square_meters' => 80,
            'address' => 'Via di Città, 9',
            'city' => 'Siena',
            'latitude' => 43.3178495,
            'longitude' => 11.3285609,
            'image' => 'https://a0.muscache.com/im/pictures/prohost-api/Hosting-49308579/original/8f80daa7-7b75-4409-b7ac-ee70d0a1afe3.jpeg?im_w=1200',
            'visibility' => 1,
            'user_id' => 2,

        ]);
        DB::table('apartments')->insert([
            'description' => 'B&B, monolocale attico Galliera',
            'rooms' => 3,
            'beds' => 2,
            'bathrooms' => 1,
            'square_meters' => 80,
            'address' => 'Via dell indipendenza, 64',
            'city' => 'Bologna',
            'latitude' => 44.4991675,
            'longitude' => 11.3416267,
            'image' => 'https://a0.muscache.com/im/pictures/cdfa9dd7-0a87-467d-9606-c8842675faab.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 3,

        ]);
        DB::table('apartments')->insert([
            'description' => 'private room and bike, stanza privata',
            'rooms' => 2,
            'beds' => 1,
            'bathrooms' => 1,
            'square_meters' => 60,
            'address' => 'Via Ermete Zacconi, 31',
            'city' => 'Bologna',
            'latitude' => 44.5044896,
            'longitude' => 11.3636999,
            'image' => 'https://a0.muscache.com/im/pictures/18f66070-f8d9-44be-be67-838d7d422488.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 3,

        ]);
        DB::table('apartments')->insert([
            'description' => 'Ur-Nest Novelli,Ampio e prestigioso attico, circondato da 3 magnifici terrazzi panoramici',
            'rooms' => 4,
            'beds' => 4,
            'bathrooms' => 2,
            'square_meters' => 200,
            'address' => 'Viale della repubblica, 45',
            'city' => 'Bologna',
            'latitude' => 44.5067961,
            'longitude' => 11.3588654,
            'image' => 'https://a0.muscache.com/im/pictures/miso/Hosting-564173124150180442/original/8c9d2f85-e21a-4e27-9374-50c27ecf0150.jpeg?im_w=1200',
            'visibility' => 1,
            'user_id' => 3,

        ]);
        DB::table('apartments')->insert([
            'description' => 'casa Pinù,Grazioso appartamento in posizione strategica per la città di Bologna',
            'rooms' => 2,
            'beds' => 1,
            'bathrooms' => 1,
            'square_meters' => 60,
            'address' => 'Viale caduti della via Fani, 52',
            'city' => 'Bologna',
            'latitude' => 44.5071137,
            'longitude' => 11.3596869,
            'image' => 'https://a0.muscache.com/im/pictures/61a344e5-d129-4276-b991-46e279ce43fa.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 3,

        ]);
        DB::table('apartments')->insert([
            'description' => 'La Tartuga,intera unità in affitto',
            'rooms' => 3,
            'beds' => 2,
            'bathrooms' => 1,
            'square_meters' => 75,
            'address' => 'Via di li graniti, 52',
            'city' => 'Monte Petrosu',
            'latitude' => 40.8347233,
            'longitude' => 9.6800912,
            'image' => 'https://a0.muscache.com/im/pictures/prohost-api/Hosting-52543557/original/9bb74928-0ce4-4ba3-8ec2-2741d83b2391.jpeg?im_w=1200',
            'visibility' => 1,
            'user_id' => 5,

        ]);
        DB::table('apartments')->insert([
            'description' => 'Casadellameridiana, Idealmente situata per visitare il nord della Sardegna, la nostra "casadellameridiana" è una villa, con grande giardino',
            'rooms' => 5,
            'beds' => 3,
            'bathrooms' => 3,
            'square_meters' => 175,
            'address' => 'Strada Vicinale Montalè, 12',
            'city' => 'Sassari',
            'latitude' => 40.8347233,
            'longitude' => 9.6800912,
            'image' => 'https://a0.muscache.com/im/pictures/prohost-api/Hosting-52543557/original/9bb74928-0ce4-4ba3-8ec2-2741d83b2391.jpeg?im_w=1200',
            'visibility' => 1,
            'user_id' => 5,

        ]);
    }
}
