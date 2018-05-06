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

Route::get('utilisateur/demande_de_place', 'attributionController@create');

Route::post('utilisateur/demande_de_place', 'attributionController@success');

Route::post('utilisateur/demande_de_place_ok', 'attributionController@retour');

Route::get('utilisateur/place', 'placeController@voir');

Route::get('utilisateur/liste_attente', 'listeController@voir');

Route::get('utilisateur/historique_place_attribue', 'historiqueController@voir');

Route::get('administrateur/liste_dattentes', 'liste_dattentesController@voir');

Route::get('administrateur/liste_place', 'liste_placeController@voir');

Route::get('administrateur/liste_place_modifier', 'liste_placeController@modifier');

Route::get('administrateur/liste_place_modifier_ok', 'liste_placeController@ok');

Route::get('administrateur/liste_place_supprimer', 'liste_placeController@supprimer');

Route::get('administrateur/liste_utilisateurs', 'liste_utilisateursController@voir');

Auth::routes();

Route::get('utilisateur/home', 'HomeController@indexUtilisateur')->name('home');

Route::get('administrateur/home', 'HomeController@indexAdministrateur')->name('home');

