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
Route::get('/', 'UserController@index');     
Route::get('/initials/{initial}/{overview_id}/short', 'UserController@short');
Route::get('/initials/{initial}/{overview_id}/long', 'UserController@long');
Route::get('/initials/{initial}', 'UserController@initial');
Route::get('/initials/{initial}/{overview_id}', 'TitleCommentController@showuser');
Route::post('/initials/{initial}/{overview_id}/store', 'TitleCommentController@store');
Route::delete('/initials/{initial}/delete', 'TitleCommentController@delete');


//管理者用
Route::get('/manager/', 'ManagerController@index');     
Route::get('/manager/initials/{initial}/{overview_id}/short', 'ManagerController@short');
Route::get('/manager/initials/{initial}/{overview_id}/long', 'ManagerController@long');
Route::get('/manager/initials/{initial}/{overview_id}/edit', 'ManagerController@edit');
Route::get('/manager/initials/{initial}/create', 'ManagerController@create');
Route::get('/manager/initials/{initial}', 'ManagerController@initial');
Route::get('/manager/initials/{initial}/{overview_id}', 'TitleCommentController@showmanager');
Route::delete('/manager/initials/{initial}', 'ManagerController@destroy');
Route::post('/manager/initials/{initial}/store', 'ManagerController@store');
Route::put('/manager/initials/{initial}', 'ManagerController@update');


