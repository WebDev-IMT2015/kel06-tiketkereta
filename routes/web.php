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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/', function () {
    	return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('buys', 'BuysController');

Route::get('/buys', 'BuysController@index')->name('buy');

Route::resource('trains', 'TrainsController');

Route::get('/trains', 'TrainsController@index')->name('train');

// Route::post('/trains', 'TrainsController@edit')->name('train');

Route::get('/history', 'BuysController@history')->name('history');

Route::get('/print', function(){
	return view('print');
});

// Route::get('/pdfview',array('as'=>'pdfview','uses'=>'BuysController@pdfview'));

Route::get('/print', 'BuysController@print')->name('print');


Route::resource('users', 'UsersController');

Route::get('/users', 'UsersController@index')->name('user');
