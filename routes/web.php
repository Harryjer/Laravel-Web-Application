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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('site', 'SiteController');
//Route::resource('task', 'TaskController');

Route::get('site','SiteController@index');
Route::get('/site/create', 'SiteController@create')->name('site_create')->middleware('auth');
Route::post('/site','SiteController@store')->middleware('auth');
Route::get('/site/{id}','SiteController@show');
Route::get('/site/{id}/edit','SiteController@edit')->middleware('auth');
Route::put('/site/{id}','SiteController@update')->middleware('auth');
Route::delete('/site/{id}','SiteController@destroy')->middleware('auth');

Route::get('task','TaskController@index');
Route::get('/task/create', 'TaskController@create')->name('task_create')->middleware('auth');
Route::post('/task','TaskController@store')->middleware('auth');
Route::get('/task/{id}','TaskController@show');
Route::get('/task/{id}/edit','TaskController@edit')->middleware('auth');
Route::put('/task/{id}','TaskController@update')->middleware('auth');
Route::delete('/task/{id}','TaskController@destroy')->middleware('auth');