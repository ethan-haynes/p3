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
    $title = "test";

    return view('welcome')->with('title', $title);
})->name('welcome');

Route::get('/lorem/generator', function () {
    return view('loremGenerator')->with('title', 'Lorem Ipsum Generator');
})->name('loremGenerator');

Route::get('/user/generator', function () {
    return view('userGenerator')->with('title', 'Random User Generator');
})->name('userGenerator');

Route::post('/user', 'RandomUserController@generate')->name('users.generate');
Route::post('/lorem', 'LoremIpsumController@generate')->name('loreipsumsms.generate');


/*
|--------------------------------------------------------------------------
| Examples
|--------------------------------------------------------------------------
|
*/
// Route::get('/books', 'BookController@index')->name('books.index');
// Route::get('/books/create', 'BookController@create')->name('books.create');
// Route::post('/books', 'BookController@store')->name('books.store');
// Route::get('/books/{book}', 'BookController@show')->name('books.show');
// Route::get('/books/{book}/edit', 'BookController@edit')->name('books.edit');
// Route::put('/books/{book}', 'BookController@update')->name('books.update');
// Route::delete('/books/{book}', 'BookController@destroy')->name('books.destroy');
