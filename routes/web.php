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
//管理者用
Route::get('/', 'ManagerController@index');     
Route::get('/initials/{initial}/{overview_id}/short', 'ManagerController@short');
Route::get('/initials/{initial}/{overview_id}/long', 'ManagerController@long');
Route::get('/initials/{initial}/{overview_id}/edit', 'ManagerController@edit');
Route::get('/initials/{initial}', 'ManagerController@show');
Route::delete('/initials/{initial}', 'ManagerController@destroy');
Route::put('/initials/{initial}', 'ManagerController@update');
Route::post('/initials/{initial}', 'ManagerController@store');
Route::get('/initials/{initial}/create', 'ManagerController@create');


//ユーザー用
