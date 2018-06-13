<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Welcome
Route::get('/','WelcomeController@index');

//Home
Route::get('/home','HomeController@index',  ['name' => 'home']);


Route::get('/toto', function() {
    return view('vue');
});


/* FORM test*/
Route::get('users', 'UsersController@create');
Route::post('users', 'UsersController@store');


/*** contact form + validation email */
Route::get('contact', 'ContactController@create');
Route::post('contact', 'ContactController@store');



Route::get('photo', 'PhotoController@create');
Route::post('photo', 'PhotoController@store');


/**email validation form*/

Route::get('email', 'EmailController@create');
Route::post('email', 'EmailController@store')->name('store.email');