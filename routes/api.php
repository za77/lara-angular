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

/*Api*/
Route::POST('/register','ApiController@register');
Route::POST('/login','ApiController@login');
Route::POST('/profileUpdate','ApiController@profileUpdate');
Route::get('/logout', 'ApiController@logout');

/*Api ENd*/

