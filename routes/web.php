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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'BukuController@index');
Route::get('/create', 'BukuController@create');
Route::post('/save', 'BukuController@store');
Route::get('/edit/{id}', 'BukuController@edit');
Route::put('/update/{id}', 'BukuController@update');
Route::get('/delete/{id}', 'BukuController@destroy');

Route::get('/login', 'UserLoginController@login_view');
Route::get('/register', 'UserLoginController@register_view');
Route::post('/loginpost', 'UserLoginController@login_post');
Route::post('/registerpost', 'UserLoginController@register_post');
Route::get('/logout', 'UserLoginController@logout');

Route::get('/userdetail', 'UserDetailController@view');
Route::get('/view', 'BukuController@view_');