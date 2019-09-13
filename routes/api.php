<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
 //   return $request->user();
//});

Route::post('/newcontactadd','ContactsController@store');

Route::post('/newuseradd','UsersController@store');

Route::post('/newaddressadd','AddressController@store'); 

Route::post('/newphoneadd','PhonesController@store');

Route::post('/search', 'LiveSearchContacts@fetch')->name('search');

Route::post('/searching', 'LiveSearchContacts@find');