<?php

use Illuminate\Support\Facades\Route;

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
    return view('layout');
});

Route::view('/about', 'about');
Route::get('/', 'CoffeeController@index');
Route::view('/coffee/create', 'coffee.create');
Route::post('/coffee/store', 'CoffeeController@store')->name('coffee.store');
