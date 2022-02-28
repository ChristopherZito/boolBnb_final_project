<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> 'Christopher',
            'surname' =>  'Zito',
            'email' => 'christopher.zito@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'date_of_birth' => '2002-12-11',

        ]);
        DB::table('users')->insert([
            'name'=> 'Alberto',
            'surname' =>  'Dragoni',
            'email' => 'alberto.dragoni@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'date_of_birth' => '1992-03-10',

        ]);
        DB::table('users')->insert([
            'name'=> 'Francesco',
            'surname' =>  'Santi',
            'email' => 'francesco.santi@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'date_of_birth' => '1991-02-27',

        ]);
        DB::table('users')->insert([
            'name'=> 'Gabriele',
            'surname' =>  'Manfrè',
            'email' => 'gabriele.manfre@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'date_of_birth' => '2000-06-08',

        ]);
        DB::table('users')->insert([
            'name'=> 'Jacopo',
            'surname' =>  'Chessa',
            'email' => 'jacopo.chessa@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'date_of_birth' => '1989-07-21',

        ]);
        DB::table('users')->insert([
            'name'=> 'Lucia',
            'surname' =>  'Mari',
            'email' => 'lucia.mari@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'date_of_birth' => '1990-04-19',

        ]);
        DB::table('users')->insert([
            'name'=> 'Chiara',
            'surname' =>  'Devitis',
            'email' => 'chiara.devitis@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'date_of_birth' => '1988-12-15',

        ]);
        DB::table('users')->insert([
            'name'=> 'Marco',
            'surname' =>  'Bianchi',
            'email' => 'marco.bianchi@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'date_of_birth' => '1975-01-10',

        ]);
        DB::table('users')->insert([
            'name'=> 'Mario',
            'surname' =>  'Rossi',
            'email' => 'mario.rossi@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'date_of_birth' => '1966-10-03',

        ]);
        DB::table('users')->insert([
            'name'=> 'Stefania',
            'surname' =>  'Verdi',
            'email' => 'stefania.verdi@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'date_of_birth' => '1994-07-23',

        ]);
        DB::table('users')->insert([
            'name'=> 'Elisa',
            'surname' =>  'Campinoti',
            'email' => 'elisa.campinoti@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'date_of_birth' => '1976-05-29',

        ]);
        DB::table('users')->insert([
            'name'=> 'Nicola',
            'surname' =>  'Capobianco',
            'email' => 'nicola.capobianco@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'date_of_birth' => '1961-11-21',

        ]);

    }
}
