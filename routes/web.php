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

Route::get('/demande_de_place', function() {
	return view('demande_de_place');
});

Route::get('/place', function() {
	return view('place');
});

Route::get('/liste_attente', function() {
	return view('liste_attente');
});

Route::get('/historique_place_attribue', function() {
	return view('historique_place_attribue');
});
Route::get('/sql', function() {
	return view('sql');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
