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

/*Route::get('/', function () {
    return view('welcome');
});*/

// employee route
Route::get('/', 'employeeController@index');
Route::get('/add', 'employeeController@create');
Route::post('/save', 'employeeController@store');
Route::get('/edit/{id}', 'employeeController@edit');
Route::post('/update/{id}', 'employeeController@update');
Route::get('/delete', 'employeeController@delete');
Route::get('/delete/{id}', 'employeeController@destroy');