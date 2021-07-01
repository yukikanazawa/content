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
Auth::routes();

//ユーザー用
Route::get('/', 'ContentController@index');     
Route::get('/initials/{initial}/{overview_id}/short', 'ContentController@short');
Route::get('/initials/{initial}/{overview_id}/long', 'ContentController@long');
Route::get('/initials/{initial}', 'ContentController@initial');
Route::get('/initials/{initial}/{overview_id}', 'TitleCommentController@show');
Route::post('/initials/{initial}', 'TitleCommentController@store');

//管理者用
Route::get('/manager/', 'ManagerController@index');     
Route::get('/manager/initials/{initial}/{overview_id}/short', 'ManagerController@short');
Route::get('/manager/initials/{initial}/{overview_id}/long', 'ManagerController@long');
Route::get('/manager/initials/{initial}/{overview_id}/edit', 'ManagerController@edit');
Route::get('/manager/initials/{initial}', 'ManagerController@initial');
Route::delete('/manager/initials/{initial}', 'ManagerController@destroy');
Route::post('/manager/initials/{initial}/store', 'ManagerController@store');
Route::put('/manager/initials/{initial}', 'ManagerController@update');

Route::get('/manager/initials/{initial}/create', 'ManagerController@create');

