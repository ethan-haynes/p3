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
    return view('welcome');
})->name('welcome');
Route::get('/lorem', function () {
    return view('lorem');
})->name('lorem');
Route::get('/user', function () {
    return view('user');
})->name('user');
