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
//categories crud
Route::get('/categorie', 'CategorieController@index');
Route::post('/categorie', 'CategorieController@store');
Route::get('/editcatp/{categorie}', 'CategorieController@edit')->name('categorie.edit');
Route::post('/editcatp/{categorie}', 'CategorieController@update')->name('categorie.update');
Route::delete('/categorie{categorie}', 'CategorieController@destroy')->name('categorie.destroy');
// fournisseurs crud
Route::get('/fournisseur', 'FournisseurController@index');
Route::get('/addfournisseur', 'FournisseurController@add')->name('fournisseur.add');
Route::post('/addfournisseur', 'FournisseurController@store');
Route::get('/editfournisseur/{fournisseur}', 'FournisseurController@edit')->name('fournisseur.edit');
Route::post('/editfournisseur/{fournisseur}', 'FournisseurController@update')->name('fournisseur.update');
Route::delete('/fournisseur{fournisseur}', 'FournisseurController@destroy')->name('fournisseur.destroy');
// produits crud
Route::get('/produits', 'ProduitsController@index');
Route::get('/addproduit', 'ProduitsController@add')->name('produit.add');
Route::post('/addproduit', 'ProduitsController@store');
Route::get('/editproduit/{produis}', 'ProduitsController@edit')->name('produit.edit');
Route::post('/editproduit/{produis}', 'ProduitsController@update')->name('produit.update');
Route::delete('/produit{produit}', 'ProduitsController@destroy')->name('produit.destroy');
// stock
Route::get('/stock/{produis}', 'ProduitsController@stock')->name('produit.stock');
Route::post('/stock/{produis}', 'ProduitsController@transfere');
// employer crud
Route::get('/employer', 'EmplyerController@index');
Route::get('/addemployer', 'EmplyerController@add')->name('employer.add');
Route::post('/addemployer', 'EmplyerController@store');
Route::get('/editemployer/{employer}', 'EmplyerController@edit')->name('employer.edit');
Route::post('/editemployer/{employer}', 'EmplyerController@update')->name('employer.update');
Route::delete('/employer{employer}', 'EmplyerController@destroy')->name('employer.destroy');

// poin de vente crud
Route::get('/clients', 'ClientController@index');
Route::get('/clientpro', 'ClientController@indexpro');
Route::get('/addclients', 'ClientController@add')->name('clients.add');
Route::post('/addclients', 'ClientController@store');
Route::get('/editclients/{clients}', 'ClientController@edit')->name('clients.edit');
Route::post('/editclients/{clients}', 'ClientController@update')->name('clients.update');
Route::delete('/clients{clients}', 'ClientController@destroy')->name('clients.destroy');


// poin de vente crud
Route::get('/pointdevente', 'PointdeventeController@index');
Route::get('/addpointdevente', 'PointdeventeController@add')->name('pointdevente.add');
Route::post('/addpointdevente', 'PointdeventeController@store');
Route::get('/editpointdevente/{pointdevente}', 'PointdeventeController@edit')->name('pointdevente.edit');
Route::post('/editpointdevente/{pointdevente}', 'PointdeventeController@update')->name('pointdevente.update');
Route::delete('/pointdevente{pointdevente}', 'PointdeventeController@destroy')->name('pointdevente.destroy');
// stock poin de vente pointdevente.stock
Route::get('/stockpointdevente/{pointdevente}', 'PointdeventeController@stock')->name('pointdevente.stock');
Route::delete('/stockpointdevente{pointdevente}', 'PointdeventeController@destroystock')->name('pointdeventestock.destroy');
// Conteneurs crud
Route::get('/conteneurs', 'ConteneursController@index');
Route::get('/addconteneurs', 'ConteneursController@add')->name('conteneurs.add');
Route::post('/addconteneurs', 'ConteneursController@store');
Route::get('/editconteneurs/{conteneur}', 'ConteneursController@edit')->name('conteneurs.edit');
Route::get('/lotconteneurs/{conteneur}', 'ConteneursController@listlot')->name('conteneurs.lot');
Route::post('/editconteneurs/{conteneur}', 'ConteneursController@update')->name('conteneurs.update');
Route::delete('/conteneurs{conteneur}', 'ConteneursController@destroy')->name('conteneurs.destroy');

//Lot produit
Route::get('/addlot/{id}', 'LotproduitController@add')->name('lotproduit.add');
Route::post('/addlot/{id}', 'LotproduitController@store');
Route::get('/editlot/{id}', 'LotproduitController@edit')->name('lot.edit');
Route::post('/editlot/{id}', 'LotproduitController@update')->name('lot.update');
Route::delete('/lotconteneurs{conteneur}', 'LotproduitController@destroy')->name('lot.destroy');