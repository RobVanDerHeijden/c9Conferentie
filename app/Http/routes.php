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
});



Route::get('/contact', function () {
    return view('contact.contact');
})->name('contact');


Route::group(['prefix' => 'agenda'], function() {
    
    Route::get('/', function () {
    return view('agenda.agenda');
    })->name('agenda');
    
});

Route::group(['prefix' => 'reserveren'], function() {
    
    Route::get('/', function () {
    return view('reserveren.reserveren');
    })->name('reserveren');
    Route::get('/vervolg', function () {
    return view('reserveren.vervolg');
    })->name('vervolg');
});