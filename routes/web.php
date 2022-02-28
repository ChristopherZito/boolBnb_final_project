<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', 'GuestController@home') -> name('home');

//autenticazione
Route::post('/login', 'Auth\LoginController@login') -> name('login');
Route::post('/register', 'Auth\RegisterController@register') -> name('register');
Route::get('/logout', 'Auth\LoginController@logout') -> name('logout');


///////////////////////////////////////////////////////////////////////////////
Route::get('/dashboard', 'HomeController@dashboard') -> name('dashboard');

Route::get('/show/{id}', 'HomeController@show') -> name('show');

//remove elements 
Route::get('/delete/{id}', 'HomeController@delete') -> name('delete');

//add elements
Route::get('/create', 'HomeController@create' ) -> name('create');
Route::post('/store', 'HomeController@store') -> name('store');