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
Route::get('/lorem', function () {
    $generator = new Badcow\LoremIpsum\Generator();
    $paragraphs = $generator->getParagraphs(5);

    return view('lorem')->with('title', implode('<p>', $paragraphs));
})->name('lorem');
// Route::post('/user', function () {
//     $faker = Faker\Factory::create();
//
//     return view('user')->with('title', $faker->state);
// })->name('user');
Route::get('/user/generator', function () {
    // $faker = Faker\Factory::create();
    $faker = Faker\Factory::create('fr_FR');

    return view('userGenerator')->with('title', $faker->address);
})->name('userGenerator');

Route::post('/user', 'RandomUserController@generate')->name('users.generate');
Route::post('/ipsums', 'LoremIpsumController@generate')->name('loreipsumsms.generate');


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
