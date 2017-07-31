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

//Route::get('/', function () {return view('welcome');});
Route::get('/', function () { return view('index');});
Route::get('/service', function () { return view('service');});
Route::get('/contact', function () { return view('contact');});

Route::get('accounts/create2', 'AccountsController@create2');
Route::resource('accounts', 'AccountsController');


Route::resource('rates', 'RatesController');

Route::resource('purses', 'PursesController');

Route::resource('users', 'UsersController');

Route::resource('rates.penalties', 'PenaltiesController');

Auth::routes();

Route::get('/home', 'HomeController@index');
