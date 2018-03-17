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


Route::get('/', 'CreateController@index');
Route::get('/', 'CreateController@show');
Route::post('/create', 'CreateController@create');
Route::get('/create', function () {
    return view('pages/create');
});
Route::get('/update', function () {
    return view('pages/update');
});
Route::get('/read', function () {
    return view('pages/read');
});
Route::get("/update/{id}","CreateController@update");
Route::post("/edit/{id}","CreateController@edit");
Route::get("/read/{id}","CreateController@read");
Route::get("/delete/{id}","CreateController@delete");










