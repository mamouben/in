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
    return view('accueil');
});
Route::get('/categorie', 'CategorieController@index');
Route::get('/fournisseur', 'FournisseurController@index');
Route::get('/produits', 'ProduitsController@index');
Route::get('/employer', 'EmplyerController@index');
Route::get('/clients', 'ClientController@index');
Route::get('/clientpro', 'ClientController@indexpro');
Route::get('/pointdevente', 'PointdeventeController@index');
Route::get('/conteneurs', 'ConteneursController@index');
