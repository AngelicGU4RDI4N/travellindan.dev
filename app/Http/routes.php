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
    return view('home');
});
Route::get('/prices', function () {
    return view('prices');
});
Route::get('/schedule', function () {
    return view('schedule');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/warning', function () {
    return view('warning');
});
