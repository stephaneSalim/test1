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

Route::get('/', 'PagesController@index');
Route::get('/patients/waiting', 'PatientsController@waiting');
Route::get('/search', 'PatientsController@search');

Route::resource('patients', 'PatientsController');
Route::resource('consultations','ConsultationsController');
Route::resource('fichesDeSuivi','FichesDeSuiviController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
