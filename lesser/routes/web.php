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


// https://fontawesomeicons.com/

// Laravel 8 tutorial - Database configuration and Fetch Data
// https://www.youtube.com/watch?v=Y-hM4nepJ8o


// Home
Route::get('/', 'Controller@index');
Route::get('/home', 'Controller@index');

// Lego set
Route::get('/set/{id}', 'SetController@solo');

// Lego set related
Route::get('/set/{id}/related', 'SetController@multi');

// TODO Lego search
Route::post('/set/search', 'SetController@search');

// Questionnaire
Route::get('/questionnaire', 'QuestionnaireController@index');