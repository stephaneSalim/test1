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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'PagesController@index');
Route::get('/patients/waiting', 'PatientsController@waiting');
Route::get('/search', 'PatientsController@search');

Route::resource('/patients', 'PatientsController');
Route::resource('/consultations','ConsultationsController');
Route::resource('/fichesDeSuivi','FichesDeSuiviController');
Route::resource('/type_consultations','Type_consultationsController');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

