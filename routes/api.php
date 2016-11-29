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

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:api');

// MESSAGEROOM
Route::get('/messageroom', 'MessageRoomController@get');
Route::get('/messageroom/{id}', 'MessageRoomController@getById');
Route::post('/messageroom', 'MessageRoomController@store');

// MESSAGE
Route::get('/message', 'MessageController@getByRoomId');
Route::post('/message', 'MessageController@store');
