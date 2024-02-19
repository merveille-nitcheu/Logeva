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


Route::get('/', function () { return view('home');})->name('home')->middleware('Connexion');
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
Route::get('supprimerphoto/{SlugImage}', 'BienController@deletePhotoimage')->name('deletePhotoimage');
Route::post('ajouterphoto/{slug}', 'BienController@ajoutPhotoimage')->name('ajouterphoto');
Route::post('connexion','ConnexionController@connexion')->name('connexion');
Route::get('connexion','ConnexionController@connexionform')->name('connexionform');
Route::get('deconnexion','ConnexionController@deconnexion')->name('deconnexion');
Route::get('inscription','InscriptionController@inscriptionform')->name('inscriptionform');
Route::post('inscription','InscriptionController@inscription')->name('inscription');
Route::get('locdashboard','LocataireController@dashboard')->name('locdashboard');
Route::get('propdashboard','ProprietaireController@dashboard')->name('propdashboard');
Route::get('connexion2','ConnexionController@connexion2form')->name('connexion2form');
Route::post('connexion2','ConnexionController@connexion2')->name('connexion2');
Route::post('connexionadmin','UtilisateurController@connexionadmin')->name('connexionadmin');
Route::get('connexionformadmin','UtilisateurController@connexionformadmin')->name('connexionformadmin');
Route::get('deconnexion2','UtilisateurController@deconnexion')->name('deconnexion2');
Route::post('inscriptionadmin','UtilisateurController@inscription')->name('inscriptionadmin');
Route::get('inscriptionformadmin','UtilisateurController@inscriptionform')->name('inscriptionformadmin');
Route::group(['prefix'=>'MN','middleware'=>'Connexion2'],function(){
Route::get('admin','UtilisateurController@dashboard')->name('admindashboard');

});
Route::get('afficherbienprop','ProprietaireController@afficherbienprop')->name('afficherbienprop');
Route::post('stockerbienprop','ProprietaireController@stockerbienprop')->name('stockerbienprop');
Route::get('afficherlocprop','ProprietaireController@afficherlocprop')->name('afficherlocprop');
Route::get('assignerbienloc','ProprietaireController@assignerbienloc')->name('assignerbienloc');
Route::post('assignerbienloc2','ProprietaireController@assignerbienloc2')->name('assignerbienloc2');
Route::get('show1','ProprietaireController@show1')->name('show1');
Route::get('voircontrat/{SlugBien}','LocationController@index')->name('voircontrat');
Route::put('modifierloc/{SlugBien}','LocationController@updateLoc')->name('modifierloc');
Route::post('ajoutloc/{SlugBien}','LocationController@ajoutloc')->name('ajoutloc');
Route::post('assignerloc/{SlugBien}','LocationController@assignerloc')->name('assignerloc');
Route::get('supplocB/{idloc}','LocationController@supplocB')->name('supplocB');
Route::get('afficherbienlocat','LocataireController@afficherbienlocat')->name('afficherbienlocat');
Route::get('resetpasswordloc/{slugLoc}', 'LocataireController@resetpasswordloc')->name('resetpasswordloc');
Route::get('deactivateloc/{slugLoc}', 'LocataireController@deactivateloc')->name('deactivateloc');
Route::get('supprimerloc/{slugLoc}', 'LocataireController@supprimerloc')->name('supprimerloc');
Route::get('profiladmin', 'UtilisateurController@profiladmin')->name('profiladmin');
Route::put('modifprofiladmin/{SlugAdmin}','UtilisateurController@modifprofiladmin')->name('modifprofiladmin');
Route::get('profil', 'ConnexionController@profil')->name('profil');
Route::post('matrice', 'ConnexionController@matrice')->name('matrice');
Route::put('modifprofilloc/{slugLoc}','ConnexionController@modifprofilloc')->name('modifprofilloc');
Route::put('modifprofilprop/{slugProp}','ConnexionController@modifprofilprop')->name('modifprofilprop');
Route::post('valuescheck/{mot}','Proprietaire@valuescheck')->name('valuescheck');
Auth::routes();
