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

Route::get('/','pagesController@login');

Route::get('/newuser','pagesController@newuser');

Route::get('/contacts','pagesController@contacts');

Route::get('/contacts/about/{id}','pagesController@about'); 

Route::get('/newcontact','pagesController@newcontact');

Route::get('/export','pagesController@export');

Route::get('/out','pagesController@out');

Route::get('/contacts/about/newaddress/{id}', 'pagesController@address');

Route::get('/contacts/about/newphone/{id}', 'pagesController@phone');

//Route::post('/newuseradd','UsersController@store');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');



