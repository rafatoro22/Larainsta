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


Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@home');


Route::get('/posts','PostsController@index')->name('listar');

Route::get('/posts/create','PostsController@create');

Route::post('/posts','PostsController@store');

Route::get('/like/{id}','PostsController@like');

Route::get('/deslike/{id}','PostsController@deslike');

Route::get('/comment/{id}', 'CommentsController@comment');

Route::resource('notifications', 'NotificationController');

Route::get('/myAccount', 'UserController@index')->name('myAccount');
