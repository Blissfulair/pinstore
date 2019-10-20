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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/order', [
    'uses'=>'ApiController@order'
]);
Route::post('/jamb_registration', [
    'uses'=>'ApiController@jamb_registration'
]);
Route::post('/transaction', [
    'uses'=>'ApiController@transaction'
]);
Route::get('/services/{id}', [
    'uses'=>'ApiController@services'
]);
Route::get('/services/selected/{meta}', [
    'uses'=>'ApiController@selected_services'
]);
Route::get('/service/{id}', [
    'uses'=>'ApiController@service'
]);
Route::get('/service/features/{id}', [
    'uses'=>'ApiController@service_features'
]);
Route::post('/paystack/transaction', [
    'uses'=>'ApiController@save_paystack_transaction'
]);