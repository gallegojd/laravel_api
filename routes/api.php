<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//api route

Route::get('country', 'CountryController@country');
//api to get id by country
Route::get('country/{id}', 'CountryController@countryByID');
//adding a record
Route::post('country', 'CountryController@countrySave');
//edit a record
Route::put('country/{id}', 'CountryController@countryUpdate');
//delete a record
Route::delete('country/{id}', 'CountryController@countryDelete');