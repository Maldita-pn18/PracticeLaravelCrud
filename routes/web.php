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

// Route::get('/login/{username}/{password}', "accountsController@login");
Route::post('/login', 'accountsController@login');
Route::post('/retrieve', 'informationsController@retrieve');
Route::post('/create', 'informationsController@create');
Route::post('/update', 'informationsController@update');
Route::post('/delete/{id}','informationsController@delete');
Route::post('/image', 'ImageController@store');
