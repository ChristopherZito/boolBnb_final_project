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
Route::get('/login', 'GuestController@login') -> name('loginForm');
Route::post('/login', 'Auth\LoginController@login') -> name('login');
Route::get('/register', 'GuestController@register') -> name('registerForm');
Route::post('/register', 'Auth\RegisterController@register') -> name('register');
Route::get('/logout', 'Auth\LoginController@logout') -> name('logout');


///////////////////////////////////////////////////////////////////////////////
Route::get('/dashboard', 'HomeController@dashboard') -> name('dashboard');

Route::get('/show/{id}', 'GuestController@show') -> name('show');

//remove apartments 
Route::get('/delete/{id}', 'HomeController@delete') -> name('delete');

//add apartments
Route::get('/create', 'HomeController@create' ) -> name('create');
Route::post('/store', 'HomeController@store') -> name('store');

//edit apartments
Route::get('/edit/{id}', 'HomeController@edit' ) -> name('edit');
Route::post('/update/{id}', 'HomeController@update') -> name('update');

//search
Route::post('/search', 'GuestController@search') -> name('search');

//call axios
Route::get('/optionals/get', 'GuestController@getApiOptionals') -> name('get.api.optionals');
// Route::get('/{city}/apartment/optionals', 'GuestController@getApiApartmentOptionals') -> name('get.api.apartment.optionals');
Route::get('/{city}/{userDistance}/apartment/optionals', 'GuestController@getApiApartmentOptionals') -> name('get.api.apartment.optionals');

//send message 
Route::post('/message/store/{id}', 'GuestController@messageStore') ->name('messageStore');
Route::get('/message/store/success/{id}', 'GuestController@messageStoreSuccess') -> name('messageStoreSuccess'); 

//sponsorship
Route::get('/sponsorship/{id}', 'PaymentsController@sponsorship') -> name('sponsorship');
Route::post('/payment', 'PaymentsController@payment') -> name('payment');