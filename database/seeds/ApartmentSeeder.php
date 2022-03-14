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
            'description' => 'Bilocale, collocato vicino a tutti i servizi',
            'rooms' => 1,
            'beds' => 2,
            'bathrooms' => 1,
            'square_meters' => 50,
            'address' => 'Via Guglielmo Silva, 12',
            'city' => 'Milano',
            'latitude' => 45.4408963,
            'longitude' => 9.1377814,
            'image' => 'https://st3.idealista.it/news/archivie/styles/news_detail/public/2019-01/ap_prefabbricata_in_legno.jpg?sv=e9w754uH&itok=qNpDKfg8',
            'visibility' => 1,
            'user_id' => 3,

        ]);
        DB::table('apartments')->insert([
            'description' => 'Relax and Deluxe,Goditi il tuo luminoso ed elegante appartamento appena ristrutturato situato in Maggiolina, rinomata zona residenziale, molto tranquilla e allo stesso tempo centrale.',
            'rooms' => 1,
            'beds' => 2,
            'bathrooms' => 1,
            'square_meters' => 50,
            'address' => 'Via del progresso , 20',
            'city' => 'Milano',
            'latitude' => 45.4966506,
            'longitude' => 9.2053588,
            'image' => 'https://a0.muscache.com/im/pictures/56f4588f-bf3c-4593-9a61-abf5e31606cb.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 4,

        ]);
        DB::table('apartments')->insert([
            'description' => 'Luxury Villa ',
            'rooms' => 1,
            'beds' => 2,
            'bathrooms' => 1,
            'square_meters' => 50,
            'address' => 'Via Pietro Calvi, 18',
            'city' => 'Milano',
            'latitude' => 45.4408963,
            'longitude' => 9.1377814,
            'image' => 'https://www.easyservicesolutions.com/wp-content/uploads/2018/07/Case-moderne.jpg',
            'visibility' => 1,
            'user_id' => 5,

        ]);
        DB::table('apartments')->insert([
            'description' => 'IH Hotels Argonne Park - Studio Apartment & Wifi',
            'rooms' => 1,
            'beds' => 2,
            'bathrooms' => 1,
            'square_meters' => 50,
            'address' => 'Via illirico, 16',
            'city' => 'Milano',
            'latitude' => 45.469973,
            'longitude' => 9.232439,
            'image' => 'https://a0.muscache.com/im/pictures/d2ae5d1e-7a2e-4996-b528-f34cabb2d2f4.jpg?im_w=720',
            'visibility' => 1,
            'user_id' => 5,

        ]);
        DB::table('apartments')->insert([
            'description' => 'BNB Capital Milano Central Station - Blue',
            'rooms' => 2,
            'beds' => 2,
            'bathrooms' => 1,
            'square_meters' => 50,
            'address' => 'Via Giovanni Battista Sammartini, 15',
            'city' => 'Milano',
            'latitude' => 45.4878016,
            'longitude' => 9.2041351,
            'image' => 'https://a0.muscache.com/im/pictures/27fc3914-e5a8-49e8-87a0-2af2cb1a2bc8.jpg?im_w=960',
            'visibility' => 1,
            'user_id' => 2,

        ]);
        DB::table('apartments')->insert([
            'description' => 'PrimoPiano - Schiapparelli A Flat, Appartamento su due livelli dotato gli ogni comfort (aria condizionata, riscaldamento, collegamento WiFi in fibra ottica, TV) a pochi passi dalla Stazione Centrale i',
            'rooms' => 2,
            'beds' => 3,
            'bathrooms' => 2,
            'square_meters' => 80,
            'address' => 'Via Giovanni Schiapparelli, 1',
            'city' => 'Milano',
            'latitude' => 45.4893832,
            'longitude' => 9.2055239,
            'image' => 'https://a0.muscache.com/im/pictures/miso/Hosting-53640912/original/55673345-d29d-4640-9983-a27ec4521eb9.jpeg?im_w=1200',
            'visibility' => 1,
            'user_id' => 4,

        ]);
        DB::table('apartments')->insert([
            'description' => 'Luxury studio - unique view!',
            'rooms' => 2,
            'beds' => 3,
            'bathrooms' => 1,
            'square_meters' => 70,
            'address' => 'Via Ponte Seveso, 19',
            'city' => 'Milano',
            'latitude' => 45.4889661,
            'longitude' => 9.2042584,
            'image' => 'https://a0.muscache.com/im/pictures/ed2c9156-cc02-415e-a32b-b9a74a7ead35.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 3,

        ]);
        DB::table('apartments')->insert([
            'description' => 'La Romantica, villa Moderna Domotica',
            'rooms' => 4,
            'beds' => 5,
            'bathrooms' => 2,
            'square_meters' => 120,
            'address' => 'Viale dei cavalieri Vittorio Veneto, 34',
            'city' => 'Roma',
            'latitude' => 41.920140,
            'longitude' => 12.451967,
            'image' => 'https://www.wolfhaus.it/cache/media/2021/01/2019-07-25_conti_isera_tn_150179-2017_274_ws_190725_1026_dp_jaist_1777.jpg/0cb18ea34b0bf653d0de8e7c642035f4.jpg',
            'visibility' => 1,
            'user_id' => 2,

        ]);
        DB::table('apartments')->insert([
            'description' => 'Villa La Lupa, Ampia e spaziosa con ampio giardino',
            'rooms' => 6,
            'beds' => 4,
            'bathrooms' => 3,
            'square_meters' => 150,
            'address' => 'Piazza di Castel di Guido, 27',
            'city' => 'Roma',
            'latitude' => 41.9020721,
            'longitude' => 12.2863121,
            'image' => 'https://blog.etinet.it/wp-content/uploads/2016/07/case-dani.jpg',
            'visibility' => 1,
            'user_id' => 3,

        ]);
        DB::table('apartments')->insert([
            'description' => 'Graziosa mansarda con vista sul Pantheon, Pittoresca mansarda con travi a vista e magnifico affaccio sulla piazza del Pantheon, nel cuore di Roma',
            'rooms' => 2,
            'beds' => 1,
            'bathrooms' => 1,
            'square_meters' => 50,
            'address' => 'Piazza Capranica, 98',
            'city' => 'Roma',
            'latitude' => 41.9000593,
            'longitude' => 12.4776955,
            'image' => 'https://a0.muscache.com/im/pictures/miso/Hosting-16271771/original/0233c4a4-79d7-41f4-b4b4-05164027b257.jpeg?im_w=1200',
            'visibility' => 1,
            'user_id' => 4,

        ]);
        DB::table('apartments')->insert([
            'description' => "Tra Piazza Navona ed il Pantheon, 25 metri quadri, con angolo cottura, letto e bagno privato. All'ultimo piano si trova la terrazza panoramica, perfetta per ammirare le cupole circostanti",
            'rooms' => 1,
            'beds' => 1,
            'bathrooms' => 1,
            'square_meters' => 25,
            'address' => 'Via di Torre Argentina, 20',
            'city' => 'Roma',
            'latitude' => 41.896435,
            'longitude' => 12.4763622,
            'image' => 'https://a0.muscache.com/im/pictures/miso/Hosting-52484341/original/fdcb3ef6-0f07-469f-ad5b-9f39c4c93066.png?im_w=1200',
            'visibility' => 1,
            'user_id' => 4,

        ]);
        DB::table('apartments')->insert([
            'description' => 'Romantic Trastevere casa Vacanze',
            'rooms' => 1,
            'beds' => 3,
            'bathrooms' => 2,
            'square_meters' => 70,
            'address' => 'Via vitellia, 25',
            'city' => 'Roma',
            'latitude' => 41.8829839,
            'longitude' => 12.4537968,
            'image' => 'https://a0.muscache.com/im/pictures/39680571/a05eea52_original.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 4,

        ]);
        DB::table('apartments')->insert([
            'description' => 'Intero alloggio Residenziale,Vista da Rocca di Papa',
            'rooms' => 14,
            'beds' => 9,
            'bathrooms' => 9,
            'square_meters' => 50,
            'address' => 'Via del Prato Fabio, 17',
            'city' => 'Roma',
            'latitude' => 41.8138315,
            'longitude' => 12.4765523,
            'image' => 'https://a0.muscache.com/im/pictures/prohost-api/Hosting-28134383/original/6959aab5-8790-4e97-8fe7-6740f72f33fd.jpeg?im_w=1200',
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
            'description' => 'Delizioso bilocale indipendente all’interno di villa signorile a pochi km dalla città di Firenze, immerso nel verde. L’appartamento, appena ristrutturato, è situato al piano terreno, con giardino su 3 lati. ',
            'rooms' => 2,
            'beds' => 1,
            'bathrooms' => 1,
            'square_meters' => 65,
            'address' => 'Via Roma, 206',
            'city' => 'Bagno a Ripoli',
            'latitude' => 43.7493843,
            'longitude' => 11.3252177,
            'image' => 'https://a0.muscache.com/im/pictures/c2d74c6e-8cfa-48a5-a7da-35a92bccd0ed.jpg?im_w=1200',
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
        /////////////////////////////////////////////
        DB::table('apartments')->insert([
            'description' => 'La Residenza Contrada Tedesca 2 al Castello è un nuovo ampio monolocale mansardato con travi a vista',
            'rooms' => 2,
            'beds' => 4,
            'bathrooms' => 1,
            'square_meters' => 75,
            'address' => 'Via Torre Verde, 22',
            'city' => 'Trento',
            'latitude' => 46.04195,
            'longitude' => 11.07291,
            'image' => 'https://a0.muscache.com/im/pictures/0e70797b-c0d7-4dfa-8981-70898895adb2.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 5,

        ]);
        DB::table('apartments')->insert([
            'description' => 'La Casina nel Bosco,è un’oasi di pace e tranquillità in sulle colline dell’entroterra gardesano distante 3 km dal centro del paese più vicino (Gavardo) e soltanto una decina di chilometri dal Lago di Garda.',
            'rooms' => 1,
            'beds' => 2,
            'bathrooms' => 1,
            'square_meters' => 40,
            'address' => 'Via degli Alpini, 6',
            'city' => 'Gavardo',
            'latitude' => 45.585220,
            'longitude' => 10.426674,
            'image' => 'https://a0.muscache.com/im/pictures/273286ba-4fd7-4711-9ddd-4e6eeabceda1.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 5,

        ]);
        DB::table('apartments')->insert([
            'description' => 'AL CAPANNO - take me somewhere nice, Accogliente casetta in legno, appena ristrutturata, con una stupenda vista sulla parte più spettacolare del Lago di Como. I',
            'rooms' => 3,
            'beds' => 4,
            'bathrooms' => 2,
            'square_meters' => 75,
            'address' => 'Via Roma, 9',
            'city' => 'Occagno',
            'latitude' => 45.937006,
            'longitude' => 9.094306,
            'image' => 'https://a0.muscache.com/im/pictures/958ae318-5b17-47e8-9063-d4ce169ab466.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 5,

        ]);
        DB::table('apartments')->insert([
            'description' => 'Apartment Dolomites Nest, Appartamento al primo piano di una casa privata. Piccolo giardino, dove si può rilassare e trovare tranquillitá',
            'rooms' => 2,
            'beds' => 2,
            'bathrooms' => 1,
            'square_meters' => 55,
            'address' => 'Str. Tor, 58',
            'city' => 'San Martino in Badia',
            'latitude' => 46.6819655,
            'longitude' => 11.8910782,
            'image' => 'https://a0.muscache.com/im/pictures/7189d733-c2a1-4024-90aa-ea4703dff462.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 5,

        ]);
        DB::table('apartments')->insert([
            'description' => 'Chalet Levissima 3000',
            'rooms' => 2,
            'beds' => 1,
            'bathrooms' => 1,
            'square_meters' => 45,
            'address' => 'Cima Bianca',
            'city' => 'Bormio',
            'latitude' => 46.4203613,
            'longitude' => 10.4089263,
            'image' => 'https://a0.muscache.com/im/pictures/57f34b36-5157-4f4c-bf23-bb523238a68c.jpg?im_w=720',
            'visibility' => 1,
            'user_id' => 5,

        ]);
        DB::table('apartments')->insert([
            'description' => 'La Tana delle Volpi, A pochi minuti da Asiago, immerso nella natura, tra i pascoli e i boschi, un dolce risveglio guardando la pianura.',
            'rooms' => 1,
            'beds' => 4,
            'bathrooms' => 1,
            'square_meters' => 35,
            'address' => 'Strada Provinciale 72',
            'city' => 'Conco',
            'latitude' => 45.812123,
            'longitude' => 11.619380,
            'image' => 'https://a0.muscache.com/im/pictures/miso/Hosting-48104468/original/4eb1c0a3-661b-45d7-9a81-4f33e6c86e55.jpeg?im_w=1200',
            'visibility' => 1,
            'user_id' => 5,

        ]);
        DB::table('apartments')->insert([
            'description' => 'Chalet in legno 60 mq in residence con piscina, parcheggio privato, stupenda vista lago. Cucina, bagno, veranda con vista e giardino.',
            'rooms' => 3,
            'beds' => 5,
            'bathrooms' => 1,
            'square_meters' => 65,
            'address' => 'Via Sasso, 39 ',
            'city' => 'Gargnano',
            'latitude' => 45.694984,
            'longitude' => 10.653053,
            'image' => 'https://a0.muscache.com/im/pictures/3fcf4953-3a5d-44ae-bae9-0e9ac585d06c.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 5,

        ]);
        DB::table('apartments')->insert([
            'description' => 'Verona Luxury - Open Space New',
            'rooms' => 1,
            'beds' => 1,
            'bathrooms' => 1,
            'square_meters' => 30,
            'address' => 'Via Arsenale, 12',
            'city' => 'Verona',
            'latitude' => 45.4435017,
            'longitude' => 10.9822843,
            'image' => 'https://a0.muscache.com/im/pictures/217c5840-9509-42ba-9b5d-0fee4182a227.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 4,

        ]);
        DB::table('apartments')->insert([
            'description' => "Residenza Girardi 1, è situato all'interno di uno splendido edifico storico appena ristrutturato.",
            'rooms' => 2,
            'beds' => 1,
            'bathrooms' => 1,
            'square_meters' => 40,
            'address' => 'Via Francesco Emilei, 21',
            'city' => 'Verona',
            'latitude' => 45.4434845,
            'longitude' => 10.9947045,
            'image' => 'https://a0.muscache.com/im/pictures/e7f6d83c-835e-4d45-b541-2210cca9e8af.jpg?im_w=720',
            'visibility' => 1,
            'user_id' => 4,

        ]);
        DB::table('apartments')->insert([
            'description' => "DiMoras house situato in pieno centro storico a pochi passi dall'Arena e piazza Brà.Ampia e luminosa camera matrimoniale e bagno privato. Arredamento moderno e minimal",
            'rooms' => 2,
            'beds' => 1,
            'bathrooms' => 1,
            'square_meters' => 30,
            'address' => 'Via Roma, 5',
            'city' => 'Verona',
            'latitude' => 45.438696,
            'longitude' => 10.990384,
            'image' => 'https://a0.muscache.com/im/pictures/6f46d018-51df-4cb4-9a48-05a86420d526.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 4,

        ]);
        DB::table('apartments')->insert([
            'description' => 'Appartamento IL GARBO, Situato nel cuore della romantica Verona, il Garbo è la soluzione perfetta per godere di tutto il meglio che la città ha da offrire.',
            'rooms' => 2,
            'beds' => 2,
            'bathrooms' => 1,
            'square_meters' => 55,
            'address' => 'Corte S.Giovanni in Foro, 4',
            'city' => 'Verona',
            'latitude' => 45.4434524,
            'longitude' => 10.9926916,
            'image' => 'https://a0.muscache.com/im/pictures/miso/Hosting-546929685206744902/original/019cca0e-0612-45f1-bad0-f30b7424de42.jpeg?im_w=1200',
            'visibility' => 1,
            'user_id' => 4,

        ]);
        DB::table('apartments')->insert([
            'description' => "Relais all'Aquila, Soggiorna nel cuore di Verona.",
            'rooms' => 2,
            'beds' => 2,
            'bathrooms' => 1,
            'square_meters' => 45,
            'address' => 'Via Cadrega, 3',
            'city' => 'Verona',
            'latitude' => 45.443713,
            'longitude' => 10.994537,
            'image' => 'https://a0.muscache.com/im/pictures/bf01d936-84fd-4fb2-b83f-56a7d7da1121.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 4,

        ]);
        DB::table('apartments')->insert([
            'description' => 'Elegante open space di 35 mq. situato nel cuore della parte storica di Verona, in prossimità del fiume Adige. Dista 5 minuti a piedi da piazza Erbe e dalla casa di Giulietta',
            'rooms' => 1,
            'beds' => 1,
            'bathrooms' => 1,
            'square_meters' => 35,
            'address' => 'Vicolo Seghe S.Tommaso, 16',
            'city' => 'Verona',
            'latitude' => 45.4437894,
            'longitude' => 11.0018154,
            'image' => 'https://a0.muscache.com/im/pictures/miso/Hosting-18047256/original/8ceedb2f-b663-44c0-a0de-4c0d180fb8f6.jpeg?im_w=1200',
            'visibility' => 1,
            'user_id' => 4,

        ]);
        DB::table('apartments')->insert([
            'description' => 'Suite Casa Nova, Completamente restaurato nel 2018, arredamento lussuoso e elegante',
            'rooms' => 3,
            'beds' => 3,
            'bathrooms' => 2,
            'square_meters' => 85,
            'address' => 'Calle Frezzaria, 1284',
            'city' => 'Venezia',
            'latitude' => 45.4323198,
            'longitude' => 12.3329952,
            'image' => 'https://a0.muscache.com/im/pictures/prohost-api/Hosting-24446953/original/825d1262-0f3b-4638-b5cb-a942b578460c.jpeg?im_w=1200',
            'visibility' => 1,
            'user_id' => 4,

        ]);
        DB::table('apartments')->insert([
            'description' => 'San Polo Prestige, Appartamento con wi-Fi gratuito, cucina attrezzata di ogni confort (frigo,lavastoviglie, fuochi e micronde, utensili e stoviglie varie), Tv, aria condizionata e riscaldamento autonomo, letto matrimoniale e letto singolo, divano e un bagno con doccia.',
            'rooms' => 2,
            'beds' => 2,
            'bathrooms' => 1,
            'square_meters' => 55,
            'address' => 'Rio Terà de le Carampane, 343',
            'city' => 'Venezia',
            'latitude' => 45.438789,
            'longitude' => 12.331386,
            'image' => 'https://a0.muscache.com/im/pictures/prohost-api/Hosting-543911379339749810/original/b83a2aa8-20fd-47e4-969e-b3d4a1f2871c.jpeg?im_w=1200',
            'visibility' => 1,
            'user_id' => 3,

        ]);
        DB::table('apartments')->insert([
            'description' => "Frari Luxury Apartment, Lussuoso e luminoso appartamento con tutte le finestre sui tipici canali veneziani, arredato con ricercati mobili di design e dettagli d'arte",
            'rooms' => 2,
            'beds' => 3,
            'bathrooms' => 1,
            'square_meters' => 65,
            'address' => 'Via Corte Amaltea, 2646',
            'city' => 'Venezia',
            'latitude' => 45.4375655,
            'longitude' => 12.3284815,
            'image' => 'https://a0.muscache.com/im/pictures/2a2a9762-b5b1-4813-a7a3-123cba3a07dd.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 3,

        ]);
        DB::table('apartments')->insert([
            'description' => 'Venice in GREEN, Amazing  location, full rennovated.',
            'rooms' => 1,
            'beds' => 1,
            'bathrooms' => 1,
            'square_meters' => 35,
            'address' => 'Via Giuseppe Garibaldi, 1337',
            'city' => 'Venezia',
            'latitude' => 45.4324022,
            'longitude' => 12.3540214,
            'image' => 'https://a0.muscache.com/im/pictures/1e781471-e349-4cb6-b290-9839c2de8f79.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 3,

        ]);
        DB::table('apartments')->insert([
            'description' => 'Emerald Monolocale Queen Deluxe',
            'rooms' => 3,
            'beds' => 4,
            'bathrooms' => 2,
            'square_meters' => 75,
            'address' => 'Calle Zen, 1270',
            'city' => 'Venezia',
            'latitude' => 45.4415304,
            'longitude' => 12.326298,
            'image' => 'https://a0.muscache.com/im/pictures/574cadc3-47b5-4abf-b9e3-1ddf6ee1d91e.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 3,

        ]);
        DB::table('apartments')->insert([
            'description' => 'Bovolo Dwelling,is an elegant Venetian residence in the heart of the Sestriere of San Marco.',
            'rooms' => 3,
            'beds' => 4,
            'bathrooms' => 2,
            'square_meters' => 75,
            'address' => 'Ramo Narisi',
            'city' => 'Venezia',
            'latitude' => 45.4349629,
            'longitude' => 12.3309066,
            'image' => 'https://a0.muscache.com/im/pictures/251a68e1-c69e-4f88-b5fe-14679deebed0.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 3,

        ]);
        DB::table('apartments')->insert([
            'description' => 'La Suite di Pako,Monolocale nel centro storico di Napoli a pochi passi dalla stazione Garibaldi attaccata a uno dei più antichi castelli napoletani Castel Capuano il monolocale si trova al piano terra',
            'rooms' => 3,
            'beds' => 2,
            'bathrooms' => 1,
            'square_meters' => 55,
            'address' => 'Via Annunziata, 30',
            'city' => 'Napoli',
            'latitude' => 40.851592,
            'longitude' => 14.2654182,
            'image' => 'https://a0.muscache.com/im/pictures/7751c60e-20dc-41bd-8730-9530f92bef9b.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 3,

        ]);
        DB::table('apartments')->insert([
            'description' => 'Suite Ischia,Benvenuti nella nostra comoda e luminosa suite Ischia al terzo piano del monastero dei Padri Missionari Vincenziani , nel centro storico di Napoli. ',
            'rooms' => 4,
            'beds' => 4,
            'bathrooms' => 2,
            'square_meters' => 85,
            'address' => 'Vico Stretto Miracoli, 2',
            'city' => 'Napoli',
            'latitude' => 40.8579269,
            'longitude' => 14.2548214,
            'image' => 'https://a0.muscache.com/im/pictures/79d9dc93-9455-4264-9372-fdb3cd6b9d36.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 3,

        ]);
        DB::table('apartments')->insert([
            'description' => 'Arteteca 1 - wood essences,è un appartamento nuovo e accogliente, perfetto per trascorrere una piacevole vacanza e visitare i principali punti di interesse storico e culturale di Napoli e dintorni.',
            'rooms' => 2,
            'beds' => 1,
            'bathrooms' => 1,
            'square_meters' => 45,
            'address' => 'Via Nicola Amenta, 10',
            'city' => 'Napoli',
            'latitude' => 40.8611389,
            'longitude' => 40.8611389,
            'image' => 'https://a0.muscache.com/im/pictures/miso/Hosting-43858805/original/b25c20b9-a01d-44ad-9888-353c73fb159c.jpeg?im_w=1200',
            'visibility' => 1,
            'user_id' => 3,

        ]);
        DB::table('apartments')->insert([
            'description' => 'Arteteca 2 - romantic lights, è un appartamento nuovo e accogliente, perfetto per trascorrere una piacevole vacanza e visitare i principali punti di interesse storico e culturale di Napoli e dintorni.',
            'rooms' => 1,
            'beds' => 1,
            'bathrooms' => 1,
            'square_meters' => 35,
            'address' => 'Via Camillo Porzio, 65',
            'city' => 'Napoli',
            'latitude' => 40.8592788,
            'longitude' => 14.2672227,
            'image' => 'https://a0.muscache.com/im/pictures/miso/Hosting-43925685/original/17dca4ef-e497-4694-9990-4dab54f254fd.jpeg?im_w=1200',
            'visibility' => 1,
            'user_id' => 2,

        ]);
        DB::table('apartments')->insert([
            'description' => "La Napoli sotterranea,Eccentrico appartamento, in stabile d'epoca. Ubicata nel core del CENTRO STORICO adiacente alla NAPOLI SOTTERRANEA potrai spostarti comodamente a piedi o in metro.",
            'rooms' => 2,
            'beds' => 2,
            'bathrooms' => 1,
            'square_meters' => 65,
            'address' => "Str. dell'Anticaglia, 2",
            'city' => 'Napoli',
            'latitude' => 40.8528797,
            'longitude' => 14.257191,
            'image' => 'https://a0.muscache.com/im/pictures/miso/Hosting-49579180/original/6647dff1-a44b-4b5e-92a2-f51518ee0b19.jpeg?im_w=1200',
            'visibility' => 1,
            'user_id' => 2,

        ]);
        DB::table('apartments')->insert([
            'description' => 'Old Town, via Dei Tribunali, Il quartiere di San Lorenzo è considerato il cuore storico della città,',
            'rooms' => 1,
            'beds' => 1,
            'bathrooms' => 1,
            'square_meters' => 30,
            'address' => 'Via dei Tribunali, 34',
            'city' => 'Napoli',
            'latitude' => 40.8515215,
            'longitude' => 14.25664394,
            'image' => 'https://a0.muscache.com/im/pictures/d0a53c96-e06b-4af5-aab5-446db5639dec.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 2,

        ]);
       
        DB::table('apartments')->insert([
            'description' => "AirBnb Forini, Suite nata dalla ristrutturazione in stile moderno di un'antica abitazione del quartiere popolare di Porta Sant'Angelo",
            'rooms' => 2,
            'beds' => 1,
            'bathrooms' => 1,
            'square_meters' => 40,
            'address' => 'Via del Tempio, 1',
            'city' => 'Perugia',
            'latitude' => 43.1194752,
            'longitude' => 12.3833655,
            'image' => 'https://a0.muscache.com/im/pictures/87da1515-6571-46c4-8a87-00fc4eb88da7.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 2,

        ]);
        DB::table('apartments')->insert([
            'description' => 'Il Vicolo di Porta Pesa,Situata nel cuore del centro storico, a pochi passi da Piazza IV e dalla via principale "Corso Vannucci", la casa offre un ambiente romantico e accogliente per vacanze di coppia o con amici.',
            'rooms' => 3,
            'beds' => 4,
            'bathrooms' => 1,
            'square_meters' => 65,
            'address' => 'Via dei Ciechi, 2',
            'city' => 'Perugia',
            'latitude' => 43.1136236,
            'longitude' => 12.3910494,
            'image' => 'https://a0.muscache.com/im/pictures/0e4cc9e9-5ec7-4c4e-9ba1-04d1ff2151f1.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 2,

        ]);
        DB::table('apartments')->insert([
            'description' => 'Factory House la Viola,Dormirai in pieno centro storico, in una casa appena ristrutturata e pensata per le tue esigenze, nella via più bella di Perugia! Troverai 1 camera matrimoniale, 1 cameretta con letto a castello, soggiorno con angolo cottura ed un bagno con un’ampia doccia.',
            'rooms' => 1,
            'beds' => 1,
            'bathrooms' => 1,
            'square_meters' => 25,
            'address' => 'Via della Viola, 7',
            'city' => 'Perugia',
            'latitude' => 43.1119096,
            'longitude' => 12.3922181,
            'image' => 'https://a0.muscache.com/im/pictures/f8303315-e5b4-4016-96b3-328592a5bf17.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 2,

        ]);
        DB::table('apartments')->insert([
            'description' => 'OLD STYLE STUDIO, è uno spazio unico con bagno e ingresso indipendente, nel centro storico di Perugia',
            'rooms' => 1,
            'beds' => 1,
            'bathrooms' => 1,
            'square_meters' => 35,
            'address' => "Via dell'Asilo, 3",
            'city' => 'Perugia',
            'latitude' => 43.11294193,
            'longitude' => 12.3938244,
            'image' => 'https://a0.muscache.com/im/pictures/c1578efc-a7b9-407f-bb25-ee6f39c6ea11.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 1,

        ]);
        DB::table('apartments')->insert([
            'description' => "TU CASA, L'alloggio è situato nel centro di Perugia, un appartamento mansarda al terzo piano, ingresso autonomo. ",
            'rooms' => 3,
            'beds' => 2,
            'bathrooms' => 1,
            'square_meters' => 65,
            'address' => 'Via Tancredi Ripa di Meana, 9',
            'city' => 'Perugia',
            'latitude' => 43.1087529,
            'longitude' => 12.3914892,
            'image' => 'https://a0.muscache.com/im/pictures/0a5f4576-1c15-4f16-aacf-071829bb58b2.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 1,

        ]);
        DB::table('apartments')->insert([
            'description' => "Lollotà Castello, Appartamento con soppalco restaurato nel 2017, al secondo piano di un palazzo storico di proprietà della famiglia, di fronte alla Cattedrale di S.Maria e all'antico Palazzo di Città.",
            'rooms' => 5,
            'beds' => 4,
            'bathrooms' => 2,
            'square_meters' => 85,
            'address' => 'Via Alberto, 87',
            'city' => 'Cagliari',
            'latitude' => 39.2190131,
            'longitude' => 9.1161117,
            'image' => 'https://a0.muscache.com/im/pictures/eec218d5-5b02-433f-a5c3-80185f29705c.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 1,

        ]);
        DB::table('apartments')->insert([
            'description' => 'BBA Biddanoa boutique apartment,Biddanoa boutique, ubicato nel cuore di Cagliari nelle immediate vicinanze dei principali luoghi di interesse',
            'rooms' => 2,
            'beds' => 2,
            'bathrooms' => 1,
            'square_meters' => 55,
            'address' => 'Via San giovanni, 98',
            'city' => 'Cagliari',
            'latitude' => 39.218556,
            'longitude' => 9.1184533,
            'image' => 'https://a0.muscache.com/im/pictures/miso/Hosting-53967477/original/fc7c1003-c9b2-485e-bf2c-29512b6dcac3.jpeg?im_w=1200',
            'visibility' => 1,
            'user_id' => 1,

        ]);
        DB::table('apartments')->insert([
            'description' => "RightHouse Castello, Appartamento Open Space, nel cuore del quartiere Castello, L'appartamento gode di una posizione Centralissima a pochi metri dai luoghi di maggiore attrattiva della zona.",
            'rooms' => 4,
            'beds' => 3,
            'bathrooms' => 2,
            'square_meters' => 75,
            'address' => 'Via Ubaldo Badas, 38',
            'city' => 'Cagliari',
            'latitude' => 39.2217326,
            'longitude' => 9.1171042,
            'image' => 'https://a0.muscache.com/im/pictures/miso/Hosting-52981765/original/0db6d183-8d0c-4093-a710-8a681e9a7709.jpeg?im_w=1200',
            'visibility' => 1,
            'user_id' => 1,

        ]);
        DB::table('apartments')->insert([
            'description' => 'Appartamenti Luxury ',
            'rooms' => 2,
            'beds' => 2,
            'bathrooms' => 1,
            'square_meters' => 55,
            'address' => 'Via corso Vittorio Emanuele, 98',
            'city' => 'Cagliari',
            'latitude' => 39.2182494,
            'longitude' => 9.1109383,
            'image' => 'https://a0.muscache.com/im/pictures/dd3701f5-1efa-4504-b672-4087b1612d7f.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 1,

        ]);

        DB::table('apartments')->insert([
            'description' => 'IzzHome Full Center Grand,Un appartamento di design nel pieno centro di Cagliari. Spazi ampi e aperti dove il legno domina, dai pavimenti alle travi, passando per gli armadi.',
            'rooms' => 4,
            'beds' => 4,
            'bathrooms' => 3,
            'square_meters' => 115,
            'address' => 'Via Francesco Crispi, 15',
            'city' => 'Cagliari',
            'latitude' => 39.2155048,
            'longitude' => 9.1107748,
            'image' => 'https://a0.muscache.com/im/pictures/prohost-api/Hosting-52543557/original/9bb74928-0ce4-4ba3-8ec2-2741d83b2391.jpeg?im_w=1200',
            'visibility' => 1,
            'user_id' => 1,

        ]);
        DB::table('apartments')->insert([
            'description' => 'Elegante bilocale completamente accessoriato, in zona tranquilla ben servito dai mezzi pubblici',
            'rooms' => 2,
            'beds' => 1,
            'bathrooms' => 1,
            'square_meters' => 45,
            'address' => 'Via Volturno, 101',
            'city' => 'Brugherio',
            'latitude' => 45.5426,
            'longitude' => 9.2956078,
            'image' => 'https://a0.muscache.com/im/pictures/prohost-api/Hosting-22431159/original/1438bedc-b0b4-4645-86ff-2fd1d3d12d7e.jpeg?im_w=1200',
            'visibility' => 1,
            'user_id' => 5,

        ]);
        DB::table('apartments')->insert([
            'description' => 'B&B Nick Beauty',
            'rooms' => 3,
            'beds' => 2,
            'bathrooms' => 2,
            'square_meters' => 75,
            'address' => 'Via Ottorino Respighi, 18',
            'city' => 'Settimo Milanese, 18',
            'latitude' => 45.4907241,
            'longitude' => 9.0520554,
            'image' => 'https://a0.muscache.com/im/pictures/80087174/d417d38c_original.jpg?im_w=1200',
            'visibility' => 1,
            'user_id' => 3,

        ]);

        DB::table('apartments')->insert([
            'description' => 'Tere Roma House appartamento Lido di Ostia Centro',
            'rooms' => 3,
            'beds' => 3,
            'bathrooms' => 2,
            'square_meters' => 95,
            'address' => 'Via Granito di Belmonte, 58',
            'city' => 'Lido di Ostia',
            'latitude' => 41.731259,
            'longitude' => 12.2756302,
            'image' => 'https://a0.muscache.com/im/pictures/miso/Hosting-48466811/original/be9d0d36-7099-44bb-802a-45037225eb62.jpeg?im_w=1200',
            'visibility' => 1,
            'user_id' => 2,

        ]);

    }
}
