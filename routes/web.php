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

Route::get('/', 'HomeController@index' );
Route::get('/fiche', 'ficheController@show')->name('fiche');
Route::get('/personnel', 'personnelController@show')->name('personnel');
Route::get('/parametres', 'parametresController@show')->name('parametres');
Route::get('/profil', 'profilController@show')->name('profil');
Route::get('/profils', 'profilsController@show')->name('profils');
Route::get('/personnel/listeEmploye', 'listeEmployeController@index')->name('listeEmploye');
Route::get('/creerBulletin', 'creerBulletinController@index')->name('creerBulletin');
Route::get('/personnel/createEmploye', 'createEmployeController@index')->name('creerEmploye');
