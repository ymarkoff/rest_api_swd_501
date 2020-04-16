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

/**
 * Auth routes
 */
Route::post('auth', 'PoiUserController@attemptLogin');
Route::delete('auth', 'PoiUserController@logout');
Route::get('auth', 'PoiUserController@getAuthData');

/**
 * Points Of Interest routes
 */
Route::post('points', 'PointOfInterestController@createPoint');