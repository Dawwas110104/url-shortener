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

Route::get('/', 'LinkController@welcome')->name('welcome');

Auth::routes();

Route::get('/dashboard', 'LinkController@index')->name('home');

Auth::routes();

Route::get('/dashboard', 'LinkController@index')->name('home');

Route::get('/link', 'LinkController@index')->name('link');
Route::post('/link', 'LinkController@create')->name('create');
Route::get('/link/{id}/edit', 'LinkController@edit')->name('edit');
Route::get('/link/{id}/update', 'LinkController@update')->name('update');
Route::get('/link/{id}/delete', 'LinkController@delete')->name('delete');
Route::get('/{slug}', 'LinkController@run')->name('run');
Route::post('/random', 'LinkController@random')->name('random');
Route::get('/{slug}/run', 'LinkController@Run')->name('Run');
Route::get('/sublink', 'LinkController@sublink')->name('sublink');
