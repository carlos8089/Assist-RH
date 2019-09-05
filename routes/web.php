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
/*
-------------------------
code initial laravel
-------------------------
*/

Route::get('/welcome', 'WelcomeController@index')->name('welcome');
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//mes routes

Route::get('/', 'vueController@show' );

Route::get('/fiche', 'ficheController@page')->name('fiche');

Route::get('/personnel', 'personnelController@page')->name('personnel');

Route::get('/personnel/find/{nomEmploye}', 'personnelController@find');

Route::resource('employe', 'employeController');

Route::get('/parametres', 'parametresController@page')->name('parametres');

Route::get('/users', 'UtilisateursController@page')->name('utilisateurs');

Route::get('/fiche/supprimer', 'ficheController@supprimerPage')->name('supBulletin');

Route::get('/fiche/crerer', 'ficheController@creationPage')->name('creationBulletin');

Route::resource('bulletin', 'bulletinController');

Route::resource('User', 'UserController');

Route::get('/bulletin/pdf','paiePdfController@printPDF');

