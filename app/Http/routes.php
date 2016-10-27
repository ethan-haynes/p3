<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome')->with('title', "Developer's Best Friend");
})->name('welcome');

Route::get('/user/generator', 'RandomUserController@generateForm')->name('userGenerator');
Route::post('/user', 'RandomUserController@generate')->name('users.generate');

Route::get('/lorem/generator', 'LoremIpsumController@generateForm')->name('loremGenerator');
Route::post('/lorem', 'LoremIpsumController@generate')->name('loreipsumsms.generate');
