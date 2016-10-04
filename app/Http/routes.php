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
})->name('home');

Route::get('/contact', function () {
    return view('contact.contact');
})->name('contact');

Route::get('/connect', function () {
    return view('connect.connect');
})->name('connect');

Route::group(['prefix' => 'agenda'], function() {
    Route::get('/', function () {
        return view('agenda.agenda');
    })->name('agenda');
    
    Route::get('/aanmeldingen', function () {
        return view('agenda.aanmeldingen');
    })->name('aanmeldingen');
});

Route::group(['prefix' => 'reserveren'], function() {
    
    Route::get('/', ['uses' => 'ReserveringController@getReserveringIndex', 'as' => 'reservering']);
    
    Route::post('/postreservering', ['uses' => 'ReserveringController@postReservering', 'as' => 'postreservering']);
    
    Route::get('/vervolg', function () {
        return view('reserveren.vervolg');
    })->name('vervolgReserveren');
    
    Route::get('/complete', function() {
        return view('reserveren.complete');
    })->name('reserverenComplete');
    
});

Route::group(['prefix' => 'aanmelden'], function() {
    
    Route::get('/', function () {
        return view('aanmelden.aanmelden');
    })->name('aanmelden');
    
    Route::get('/vervolg', function () {
        return view('aanmelden.vervolg');
    })->name('vervolgaanmelden');
    
    Route::get('/complete', function () {
        return view('aanmelden.complete');
    })->name('complete');
    
    Route::get('/bevestiging', function () {
        return view('aanmelden.bevestiging');
    })->name('bevestiging');
});
