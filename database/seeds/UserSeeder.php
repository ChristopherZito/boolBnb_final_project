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

    }
}
