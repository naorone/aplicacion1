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



/*
Route::get('/adios', function () {
    return view('adios');
});

Route::post('/adiospost', function () {
    return view('adiospost');
});
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/adios', 'PersonasController@adios');


Route::post('/adiospost', 'PersonasController@adiospost');