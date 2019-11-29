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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/giftcards/new', 'GiftCardController@create')->name('giftcards.create');
Route::post('/giftcards', 'GiftCardController@store')->name('giftcards.store');
Route::get('/giftcards', 'GiftCardController@index');

Route::middleware(['admin'])->group( function() {
    Route::post('giftcards/blank', 'GiftCardController@blank')->name('giftcards.blank');
    Route::get('/admin', 'AdminController@index')->name('admin');
});

