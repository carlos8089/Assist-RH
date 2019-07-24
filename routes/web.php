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

Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//mes routes
Route::get('/', 'WelcomeController@index');

Route::get('/', 'vueController@show' );