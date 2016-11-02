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

/*Route::get('/registrerenslot', function () {
    return view('registrerenslot');
})->name('registrerenslot');
*/

Route::group(['middleware' => 'auth'], function() {
    Route::get('/organisator/dashboard', [
        'uses' => 'InlogController@getDashboard',
        'as' => 'dashboard'
    ]);
});

Route::get('/organisator/logout', [
    'uses' => 'InlogController@getLogout',
    'as' => 'user.logout'
]);

Route::get('/organisator/login', function () {
    return view('organisator.organisator-login');
})->name('user.login');
    
Route::get('/test', function () {
    return view('test.test');
})->name('test');

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
    
    Route::post('/postreserveringarray', ['uses' => 'ReserveringController@postReserveringArray', 'as' => 'postreserveringarray']);
    
    Route::get('/vervolg', function () {
        return view('reserveren.vervolg');
    })->name('vervolgReserveren');
    
    Route::get('/complete', function() {
        return view('reserveren.complete');
    })->name('reserverenComplete');
    
    Route::get('/afzeggen', function() {
        return view('reserveren.afzeggen');
    })->name('reserverenAfzeggen');
});

Route::group(['prefix' => 'aanmelden'], function() {
    
    Route::get('/', function () {
        return view('aanmelden.aanmelden');
    })->name('aanmelden');
    
    Route::post('/postInlogArray', ['uses' => 'InlogController@postInlogArray', 'as' => 'postInlogArray']);
    
    Route::get('/vervolg', function () {
        return view('aanmelden.vervolg');
    })->name('vervolgaanmelden');
    
    Route::get('/complete', function () {
        return view('aanmelden.complete');
    })->name('completeaanmelden');
    
    Route::get('/bevestiging', function () {
        return view('aanmelden.bevestiging');
    })->name('bevestiging');
    
    
    Route::post('/postaanmelding', ['uses' => 'AanmeldController@postaanmelding', 'as' => 'postaanmelding']);
    
    Route::post('/postacceptaanmelding', ['uses' => 'BeoordeelAanmeldingController@postacceptaanmelding', 'as' => 'postacceptaanmelding']);
    
    Route::post('/postdeclineaanmelding', ['uses' => 'BeoordeelAanmeldingController@postdeclineaanmelding', 'as' => 'postdeclineaanmelding']);
    
    Route::post('/postTegenbod', ['uses' => 'BeoordeelAanmeldingController@postTegenbod', 'as' => 'postTegenbod']);
    
    Route::post('/postAcceptTegenbod', ['uses' => 'BeoordeelAanmeldingController@postAcceptTegenbod', 'as' => 'postAcceptTegenbod']);
    
    Route::post('/postWeigerTegenbod', ['uses' => 'BeoordeelAanmeldingController@postWeigerTegenbod', 'as' => 'postWeigerTegenbod']);
    
    Route::post('/postTag', ['uses' => 'BeoordeelAanmeldingController@postTag', 'as' => 'postTag']);
    
    Route::post('/afzegReservering', ['uses' => 'ReserveringController@afzegReservering', 'as' => 'afzegReservering']);
    
});