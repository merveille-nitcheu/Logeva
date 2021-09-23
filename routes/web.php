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
    return view('home');
});


Route::resource('utilisateur', 'UtilisateurController');
Route::resource('proprietaire', 'ProprietaireController');
Route::resource('locataire', 'LocataireController');
Route::resource('bien', 'BienController');
Route::resource('typebien', 'TypeBienController');
Route::resource('locatairebien', 'LocataireBienController');
Route::resource('location', 'LocationController');
Route::resource('periodepaiement', 'PeriodePaiementController');
Route::resource('moyenpaiement', 'MoyenPaiementController');
Route::resource('paiement', 'PaiementController');
Route::resource('message', 'MessageController');
Route::resource('transaction', 'TransactionController');
Route::resource('motiftransaction', 'MotifTransactionController');
Route::resource('abonnement', 'AbonnementController');
Route::resource('typeabonnement', 'TypeAbonnementController');
Route::resource('galerie', 'GalerieController');
Route::get('resetpassword/{id}', 'ProprietaireController@reset');
Route::get('deactivateprop/{id}', 'ProprietaireController@deactivate');
