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

Route::get('/sendEvent', function () {
    $mensaje = 'Por fin hice una transmision';
    event(new \App\Events\ShippingStatusUpdated($mensaje));
});

Route::get('/listenEvent', function () {
    return view('listenEvent');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
