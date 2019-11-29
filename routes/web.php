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

Auth::routes(['verify' => true]);
Route::middleware(['verified'])->group( function(){
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::get('/giftcards/new', 'GiftCardController@create')->name('giftcards.create');
Route::get('giftcards/{qr}', 'GiftCardController@show')->name('giftcards.show');
Route::post('/giftcards', 'GiftCardController@store')->name('giftcards.store');

Route::middleware(['admin'])->group( function() {
    Route::post('giftcards/blank', 'GiftCardController@blank')->name('giftcards.blank');
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::get('/giftcards', 'GiftCardController@index')->name('giftcards.index');
});

